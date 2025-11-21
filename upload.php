<?php
$uploadDir = '/home/alphabit/ai_training_images/';
$allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
$maxFileSize = 5 * 1024 * 1024;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (in_array($fileExt, $allowedExtensions)) {
        if ($fileError === 0) {
            if ($fileSize <= $maxFileSize) {
                $newFileName = uniqid('', true) . '.' . $fileExt;
                $uploadPath = $uploadDir . $newFileName;
                
                if (move_uploaded_file($fileTmpName, $uploadPath)) {
                    $message = "File uploaded successfully!";
                } else {
                    $error = "Error uploading file!";
                }
            } else {
                $error = "File size exceeds limit!";
            }
        } else {
            $error = "Error uploading file!";
        }
    } else {
        $error = "Invalid file type!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaBit Training - Upload</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/upload_style.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/alphabit.ico" />
</head>
<body>
    <div class="background-container">
        <?php if(isset($message)): ?>
            <div class="message success"><?= $message ?></div>
        <?php elseif(isset($error)): ?>
            <div class="message error"><?= $error ?></div>
        <?php endif; ?>

        <div class="drag-zone" id="dragZone">
            <div class="upload-instructions">
                <h3>Upload Training Data</h3>
                <p>Drag & drop images here or</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="file-input" class="upload-button">
                        Browse Files
                    </label>
                    <input type="file" name="file" id="file-input" accept="image/*">
                </form>
                <p>Supported formats: JPG, PNG, WEBP (Max 5MB)</p>
            </div>
        </div>
    </div>

    <script>
        const dragZone = document.getElementById('dragZone');
        const fileInput = document.getElementById('file-input');

        dragZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dragZone.classList.add('dragover');
        });

        dragZone.addEventListener('dragleave', () => {
            dragZone.classList.remove('dragover');
        });

        dragZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dragZone.classList.remove('dragover');
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                document.forms[0].submit();
            }
        });

        document.querySelector('.upload-button').addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                document.forms[0].submit();
            }
        });
    </script>
</body>
</html>
