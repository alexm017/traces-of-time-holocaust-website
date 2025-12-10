<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$userMessage = $input['message'] ?? '';

if (empty($userMessage)) {
    echo json_encode(['success' => false, 'error' => 'No message provided']);
    exit;
}

$apiKey = '<REDACTED>'
$apiUrl = 'https://api.openai.com/v1/chat/completions';
$model = 'gpt-4o-mini';

$data = [
    'model' => $model,
    'messages' => [
        [
            'role' => 'system',
            'content' => 'Ești un asistent virtual educat și empatic pentru site-ul "Urmele Timpului", dedicat istoriei Holocaustului. Răspunde la întrebările utilizatorilor despre Holocaust, Al Doilea Război Mondial și istoria evreilor cu acuratețe istorică și respect. Fii concis, informativ și folosește un ton solemn dar accesibil. Dacă întrebarea nu are legătură cu istoria sau subiectul site-ului, ghidează politicos utilizatorul înapoi la subiect.'
        ],
        [
            'role' => 'user',
            'content' => $userMessage
        ]
    ],
    'temperature' => 0.7,
    'max_tokens' => 300
];

$options = [
    'http' => [
        'header' => "Content-type: application/json\r\n" .
            "Authorization: Bearer " . $apiKey . "\r\n",
        'method' => 'POST',
        'content' => json_encode($data),
        'ignore_errors' => true
    ]
];

$context = stream_context_create($options);
$response = @file_get_contents($apiUrl, false, $context);

if ($response === FALSE) {
    $error = error_get_last();
    echo json_encode(['success' => false, 'error' => 'Connection failed: ' . ($error['message'] ?? 'Unknown error')]);
    exit;
}

$responseData = json_decode($response, true);

if (isset($responseData['choices'][0]['message']['content'])) {
    echo json_encode([
        'success' => true,
        'reply' => $responseData['choices'][0]['message']['content']
    ]);
} else {
    $errorMessage = $responseData['error']['message'] ?? 'Unknown API error';
    echo json_encode([
        'success' => false,
        'error' => $errorMessage,
        'reply' => 'Îmi pare rău, a apărut o eroare la procesarea cererii.'
    ]);
}
?>
