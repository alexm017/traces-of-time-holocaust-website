<?php
session_start();
$record_file = fopen("/var/www/html/record_index.txt", "a");
$txt = "andro\n";
$txtt = "andro";
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$ip = $_SERVER["REMOTE_ADDR"];
$date = date('m/d/Y h:i:s a', time());
$txt2 = $txtt . " " . $user_agent . " " . $ip . " " . $date . "\n"; 
fwrite($record_file, $txt);
fwrite($record_file, $txt2);
fclose($record_file);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AlphaBit - OpenML</title>
	<link rel="stylesheet" href="../assets/css/model_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/atom-one-dark.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="/assets/images/alphabit.ico" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
	<script>
	    document.addEventListener("DOMContentLoaded", () => {
	      hljs.highlightAll();
	    });
	</script>
</head>
<body>
	<div class="background-container">
		<div class="alphabit-topleft">
			<a href="#">AlphaBit OpenML</a>
		</div>
		<div class="ai-star-logo">
			<img src="/assets/images/ai_star_alpha.png" width=50>
		</div>
		<div class="docs">Documentation</div>
		<div class="rbox">
			<div class="news">🎉 New features will be added the next few days. Stay tuned for the new updates!</div>
			<div class="temporarynews">For now, only the documentation is accessible.</div>
			<div class="title">Android Studio Implementation</div>
			<div class="text-container">
				<div class="stext"><b>For Low Quality Camera Machine Learning Model (low.tflite) (Will be added support for high.tflite today)</b></div>
				<div class="code-window">
					<pre><code class="language-java" >package org.firstinspires.ftc.teamcode.drive.opmodes;

import android.content.res.AssetFileDescriptor;
import android.content.res.AssetManager;
import com.qualcomm.robotcore.eventloop.opmode.LinearOpMode;
import com.qualcomm.robotcore.eventloop.opmode.TeleOp;
import org.firstinspires.ftc.robotcore.external.hardware.camera.WebcamName;
import org.firstinspires.ftc.robotcore.internal.camera.calibration.CameraCalibration;
import org.firstinspires.ftc.vision.VisionPortal;
import org.firstinspires.ftc.vision.VisionProcessor;
import org.opencv.core.Core;
import org.opencv.core.CvType;
import org.opencv.core.Mat;
import org.opencv.imgproc.Imgproc;
import org.tensorflow.lite.Interpreter;

import android.graphics.Canvas;
import android.util.Size;
import java.io.FileInputStream;
import java.io.IOException;
import java.nio.ByteBuffer;
import java.nio.ByteOrder;
import java.nio.channels.FileChannel;
import java.util.ArrayList;
import java.util.List;

@TeleOp(name = "AI Vision", group = "AITesting")
public class AIVision extends LinearOpMode {

    // Configuration
    private static final String MODEL_FILE = "best_float32.tflite";
    private static final int MODEL_SIZE = 320;
    private static final float CONF_THRESHOLD = 0.6f;
    private static final float IOU_THRESHOLD = 0.5f;

    private VisionPortal visionPortal;

    @Override
    public void runOpMode() {
        YoloProcessor frameProcessor = new YoloProcessor(hardwareMap.appContext.getAssets());

        visionPortal = new VisionPortal.Builder()
                .setCamera(hardwareMap.get(WebcamName.class, "AICam"))
                .setStreamFormat(VisionPortal.StreamFormat.YUY2)
                .setCameraResolution(new Size(320, 240))
                .addProcessor(frameProcessor)
                .build();

        waitForStart();

        try {
            while (opModeIsActive()) {
                List<Detection> detections = frameProcessor.getLatestDetections();
                telemetry.addData("Detections", detections.size());
                int bestConfidence = -1;
                double confCounter=0;
                for(int i=0; i<detections.size(); i++){
                    Detection d = detections.get(i);
                    if(confCounter < (d.confidence * 100)){
                        confCounter = (d.confidence * 100);
                        bestConfidence = i;
                    }
                }
                if(detections.size() > 0){
                    Detection d = detections.get(bestConfidence);
                    double angle = Math.toDegrees(Math.atan(d.height/d.width));
                    double x = 6.4131;
                    double y = 0.7223;
                    double final_angle = (angle - x)/y;
                    telemetry.addData(String.format("Obj %d", bestConfidence),
                            "%s %.1f%% | W: %.1f H: %.1f Angle: %.1f",
                            d.className(),
                            d.confidence * 100,
                            d.width,
                            d.height,
                            final_angle);
                }

                //!!! This one is to show all the detections. The one from above is to get only the detection with the highest confidence out of all.
                /*for (int i = 0; i < detections.size(); i++) {
                    Detection d = detections.get(i);
                    telemetry.addData(String.format("Obj %d", i),
                            "%s %.1f%% | W: %.1f H: %.1f",
                            d.className(),
                            d.confidence * 100,
                            d.width,
                            d.height);
                }*/
                telemetry.update();
            }
        } finally {
            visionPortal.close();
            frameProcessor.close();
        }
    }

    static class YoloProcessor implements VisionProcessor {
        private final Interpreter tflite;
        private final Object syncLock = new Object();
        private List<Detection> detections = new ArrayList<>();

        // Modified output buffer for [1,7,2100] shape
        private final float[][][] outputBuffer = new float[1][7][2100];  // CHANGED HERE
        private final ByteBuffer inputBuffer;
        private final Mat resizedMat = new Mat();
        private final Mat rgbMat = new Mat();

        public YoloProcessor(AssetManager assets) {
            try {
                Interpreter.Options options = new Interpreter.Options();
                options.setNumThreads(4);
                options.setUseXNNPACK(true);
                tflite = new Interpreter(loadModelFile(assets), options);

                inputBuffer = ByteBuffer.allocateDirect(MODEL_SIZE * MODEL_SIZE * 3 * 4);
                inputBuffer.order(ByteOrder.nativeOrder());
            } catch (IOException e) {
                throw new RuntimeException("Model loading failed", e);
            }
        }

        private ByteBuffer loadModelFile(AssetManager assets) throws IOException {
            try (AssetFileDescriptor afd = assets.openFd(MODEL_FILE)) {
                try (FileInputStream fis = new FileInputStream(afd.getFileDescriptor())) {
                    FileChannel channel = fis.getChannel();
                    return channel.map(FileChannel.MapMode.READ_ONLY, afd.getStartOffset(), afd.getDeclaredLength());
                }
            }
        }

        @Override
        public void init(int width, int height, CameraCalibration calibration) {}

        @Override
        public Object processFrame(Mat frame, long captureTimeNanos) {
            
            Mat rotated = new Mat();
            Core.rotate(frame, rotated, Core.ROTATE_90_CLOCKWISE);

            Imgproc.resize(rotated  , resizedMat, new org.opencv.core.Size(MODEL_SIZE, MODEL_SIZE));
            Imgproc.cvtColor(resizedMat, rgbMat, Imgproc.COLOR_BGR2RGB);
            rgbMat.convertTo(rgbMat, CvType.CV_32FC3, 1.0 / 255.0);

            float[] floatBuffer = new float[MODEL_SIZE * MODEL_SIZE * 3];
            rgbMat.get(0, 0, floatBuffer);
            inputBuffer.rewind();
            inputBuffer.asFloatBuffer().put(floatBuffer);

            
            tflite.run(inputBuffer, outputBuffer);

            List<Detection> newDetections = processOutput(frame.width(), frame.height());
            synchronized (syncLock) {
                detections = newDetections;
            }
            return null;
        }

        private List<Detection> processOutput(int frameWidth, int frameHeight) {
            List<Detection> rawDetections = new ArrayList<>();
            final float[] xCenterArray = outputBuffer[0][0];
            final float[] yCenterArray = outputBuffer[0][1];
            final float[] widthArray = outputBuffer[0][2];
            final float[] heightArray = outputBuffer[0][3];
            final float[] class0Array = outputBuffer[0][4];
            final float[] class1Array = outputBuffer[0][5];
            final float[] class2Array = outputBuffer[0][6];

            
            for (int j = 0; j < 2100; j++) {  
                float maxScore = Math.max(class0Array[j], Math.max(class1Array[j], class2Array[j]));
                if (maxScore < CONF_THRESHOLD) continue;

                int classId = 0;
                if (maxScore == class1Array[j]) classId = 1;
                else if (maxScore == class2Array[j]) classId = 2;

                rawDetections.add(new Detection(
                        xCenterArray[j] * frameWidth,
                        yCenterArray[j] * frameHeight,
                        widthArray[j] * frameWidth,
                        heightArray[j] * frameHeight,
                        maxScore,
                        classId
                ));
            }
            return nms(rawDetections);
        }

        
        private List<Detection> nms(List<Detection> detections) {
            List<Detection> results = new ArrayList<>(10);
            detections.sort((d1, d2) -> Float.compare(d2.confidence, d1.confidence));

            while (!detections.isEmpty()) {
                Detection best = detections.remove(0);
                results.add(best);
                detections.removeIf(d -> iou(best, d) > IOU_THRESHOLD);
            }
            return results;
        }

        private float iou(Detection a, Detection b) {
            float intersectionLeft = Math.max(a.x1, b.x1);
            float intersectionTop = Math.max(a.y1, b.y1);
            float intersectionRight = Math.min(a.x2, b.x2);
            float intersectionBottom = Math.min(a.y2, b.y2);

            if (intersectionRight < intersectionLeft || intersectionBottom < intersectionTop)
                return 0.0f;

            float intersectionArea = (intersectionRight - intersectionLeft) * (intersectionBottom - intersectionTop);
            float areaA = a.width * a.height;
            float areaB = b.width * b.height;

            return intersectionArea / (areaA + areaB - intersectionArea);
        }

        @Override
        public void onDrawFrame(Canvas canvas, int width, int height, float scale, float density, Object tag) {}

        public List<Detection> getLatestDetections() {
            synchronized (syncLock) {
                return new ArrayList<>(detections);
            }
        }

        public void close() {
            tflite.close();
            resizedMat.release();
            rgbMat.release();
        }
    }

    static class Detection {
        final float x1, y1, x2, y2;
        final float confidence;
        final int classId;
        public final float width;
        public final float height;

        public Detection(float cx, float cy, float w, float h, float conf, int cls) {
            width = w;
            height = h;
            x1 = cx - width/2;
            y1 = cy - height/2;
            x2 = cx + width/2;
            y2 = cy + height/2;
            confidence = conf;
            classId = cls;
        }

        String className() {
            switch (classId) {
                case 0: return "Yellow";
                case 1: return "Blue";
                case 2: return "Red";
                default: return "Unknown";
            }
        }
    }
}
					</code></pre>
				</div>
				<div class="stext">Acest cod implementează un sistem de viziune bazat pe AI pentru un robot FTC, folosind un model YOLOv8 rulat pe un TensorFlow Lite (TFLite) interpreter. Acesta utilizează o cameră pentru a detecta și clasifica obiecte, oferind informații despre poziția și dimensiunile fiecărui obiect detectat.</div>
				<div class="stext">
				<b>Fluxul de funcționare:</b>
				</div>
				<div class="stext">
				<b>Inițializarea camerei și a modelului AI</b>
				</div>
				<div class="stext">
					<b>1. Inițializarea camerei și a modelului AI</b>
				</div>
				<div class="rtext">
					<li>Se creează un obiect VisionPortal care inițializează camera „AICam”.</li>
				</div>
				<div class="rtext">
					<li>Se configurează rezoluția camerei la 320x240.</li>
				</div>
				<div class="rtext">
					<li>Se atașează un procesor personalizat (YoloProcessor) care se ocupă de inferența AI.</li>
				</div>
				<div class="stext">
					<b>2. Preprocesarea imaginii</b>
				</div>
				<div class="rtext">
					<li>Se rotește imaginea la 90° pentru aliniere.</li>
				</div>
				<div class="rtext">
					<li>Se redimensionează la 320x320, dimensiunea cerută de model.</li>
				</div>
				<div class="rtext">
					<li>Se convertește imaginea la format RGB și se normalizează valorile pixelilor la intervalul [0,1].</li>
				</div>
				<div class="rtext">
					<li>Se copiază datele într-un buffer care va fi folosit pentru inferență.</li>
				</div>
				<div class="stext">
					<b>3. Inferența AI</b>
				</div>
				<div class="rtext">
					<li>Modelul YOLOv8 este rulat pe imaginea preprocesată.</li>
				</div>
				<div class="rtext">
					<li>Se obține un output cu coordonatele și scorurile de încredere pentru mai multe obiecte detectate.</li>
				</div>
				<div class="rtext">
					<li>Se filtrează rezultatele astfel încât să se păstreze doar obiectele cu un scor de încredere peste 60%.</li>
				</div>
				<div class="stext">
					<b>4. Post-procesare și eliminarea suprapunerilor</b>
				</div>
				<div class="rtext">
					<li>Se aplică un algoritm Non-Maximum Suppression (NMS) pentru a elimina detectările duplicate sau redundante.</li>
				</div>
				<div class="rtext">
					<li>Se determină cel mai bun obiect detectat, adică cel cu cea mai mare încredere.</li>
				</div>
				<div class="rtext">
					<li>Se calculează unghiul obiectului pe baza raportului dintre înălțime și lățime cu arctg.</li>
				</div>
				<div class="rtext">
					<li>Se face o ajustare liniară a unghiului folosind niște constante empirice.</li>
				</div>
				<div class="stext">
					<b>5. Afișarea rezultatelor</b>
				</div>
				<div class="rtext">
					<li>Se trimit datele despre obiectele detectate către telemetry pentru a putea fi vizualizate pe Driver Station.</li>
				</div>
				<div class="rtext">
					<li>Se închide VisionPortal și resursele alocate atunci când opmode-ul este oprit.</li>
				</div>
				<br></br>
				<div class="stext">
					<b>Aspecte importante:</b>
				</div>
				<div class="rtext">
					<li>Modelul YOLOv8 folosește o ieșire de dimensiune [1, 7, 2100], ceea ce înseamnă că returnează până la 2100 de detectări per cadru.</li>
				</div>
				<div class="rtext">
					<li>Algoritmul Non-Maximum Suppression elimină detectările redundante pe baza unui prag de IoU de 50%.</li>
				</div>
				<div class="rtext">
					<li>Clasele detectate sunt limitate la trei categorii: „Yellow”, „Blue” și „Red”.</li>
				</div>
				<div class="endLine"></div>
				<div class="endD"><a href="https://discord.gg/ZB6vQ62KZT">Support -> Discord</a></div>
				<div class="end"></div>
			</div>
		</div>
		<div class="docs-container">
			<div class="setup">Setup</div>
			<div class="sub-section"><a href="/model/overview">Overview</a></div>
			<div class="sub-section"><a href="/model/prerequisites">Getting Started</a></div>
			<div class="sub-section"><a href="/model/resources">Resources</a></div>
			<div class="sub-section"><a href="/model/cameracalib">Camera Calibration</a></div>
			<div class="docsLine"></div>
			
			<br></br>
			<div class="setup">Training ML</div>
			<div class="sub-section"><a href="/model/training">Training Dataset</a></div>
			<div class="sub-section"><a href="/model/training_structure">Training Structure</a></div>
			<div class="sub-section"><a href="/model/training_ml">Python Code For Training</a></div>
			
			<div class="docsLine"></div>
			
			<br></br>
			<div class="setup">The Math Behind It</div>
			<div class="sub-section"><a href="/model/sample_math">Sample Math</a></div>
			
			<div class="docsLine"></div>
			
			
			<br></br>
			<div class="setup">Examples</div>
			<div class="sub-section"><a href="/model/pythonml">Python Code For Detection</a></div>
			<div class="sub-section"><p style="color:#c67171;">Android Studio Implementation</p></div>
			<div class="sub-section"><a href="/model/robot_control">Control Intake Using The OpenML</a></div>
		</div>
	</div>
</body>
</html>
