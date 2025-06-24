<?php
session_start(); // Start the session at the top of the file

header('Content-Type: text/html; charset=utf-8');

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1); // Display errors in the browser
ini_set('log_errors', 1);    // Log errors to a file
ini_set('error_log', 'error.log'); // Specify the error log file

require_once "connect.php";

// // Check if `unique_id` is provided in the GET request
if (!isset($_GET['unique_id']) || empty($_GET['unique_id'])) {
    die("Error: Unique ID is missing.");
}

$unique_id = $_GET['unique_id'];

// Prepare the SQL query to fetch the record
$sql = "SELECT first_name, last_name, submission_date, accessed, payment_status FROM graduations_cash WHERE unique_id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Query preparation failed: " . $conn->error);
}

$stmt->bind_param("s", $unique_id);

// Execute the query
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $submission_date, $accessed, $payment_status);

// Fetch the result
if ($stmt->fetch()) {
    //echo "Debug: unique_id = " . htmlspecialchars($unique_id, ENT_QUOTES, 'UTF-8') . "<br>";
    //echo "Accessed Value: " . htmlspecialchars($accessed, ENT_QUOTES, 'UTF-8') . "<br>";

    if ($payment_status != 1) {
		echo "<script>alert('Plata nu a fost inca realizata!')</script>";
		die();
	}
		
    if ($accessed == 1) {
        // If already accessed, deny further access
        //header("Location: https://absolvire.uvt.ro/");
        //exit(); // Ensure no further code is executed after the redirect
    } else {
        // Display welcome message
        //echo "<h1>Welcome, " . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "</h1>";
        //echo "<p>Submission Date: " . htmlspecialchars($submission_date) . "</p>";

        // Update the `accessed` column to 2
        $stmt->close(); // Close the previous statement
        $update_sql = "UPDATE graduations_cash SET accessed = 1 WHERE payment_status=1 and unique_id = ?";
        $update_stmt = $conn->prepare($update_sql);

        if (!$update_stmt) {
            die("Update SQL preparation failed: " . $conn->error);
        }

        $update_stmt->bind_param("s", $unique_id);

        if ($update_stmt->execute()) {
            //echo "<p>Access has been marked as complete.</p>";
        } else {
            die("Update execution failed: " . $update_stmt->error);
        }

        $update_stmt->close();
    }
} else {
    die("Invalid unique ID. No matching record found.");
}

// Close the connection

$conn->close();
?>


<!DOCTYPE html><html lang="en-US">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Absolvire Universitatea de Vest din Timisoara</title>
   <link rel="stylesheet" href="../css/components.css">
   <link rel="stylesheet" href="../css/icons.css">
   <link rel="stylesheet" href="../css/responsee.css">
   <link rel="stylesheet" href="../css/owl.carousel.css">
   <link rel="stylesheet" href="../css/owl.theme.css">
   <link rel="stylesheet" href="../css/lightcase.css">
   <!-- CUSTOM STYLE -->
   <link rel="stylesheet" href="../css/template-style.css">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext" rel="stylesheet" type="text/css">
   <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
   <script type="text/javascript" src="../js/validation.js"></script>
   <link rel="stylesheet" href="../css/font-awesome.min.css">



   <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="../js/820828fb28.js" crossorigin="anonymous"></script>

   <!--Form styles -->
   <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Styles -->
  <title>QR Code Generator</title>
    <style>
       
        #qr-container {
            margin-top: 50px !important;
            margin-bottom: 50px !important;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        #qr-code {
            margin: 20px 0;
            display: flex;
            justify-content: center;
        }

        .success-message {
            color: #0d6efd;
            font-size: 1.5em;
        }

        #download-btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1em;
            background-color: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #download-btn:hover {
            background-color: #d73d32;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-120366797-2"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'UA-120366797-2');
   </script>


</head>
<body class="size-1140">
   <!-- TOP NAV WITH LOGO -->
   <header>
      <div class="fixed">
         <div id="topbar" class="hide-s hide-m">
            <div class="line">
               <div class="m-6 l-6">
                  <p class="hide-s">Contactează-ne: <strong><a href="mailto:festivitateabsolvire@e-uvt.ro">festivitateabsolvire@e-uvt.ro</a></strong></p>
               </div>
               <div class="s-12 m-6 l-6">

               </div>
            </div>
         </div>

         <nav>
            <div class="line">
               <div class="s-12 l-2">
                  <a class="logo" href="https://absolvire.uvt.ro/"><img class="logo-uvt" src="../images/Asset%206%402x.png"></a>
               </div>
               <div class="top-nav s-12 l-10">

                  <ul class="right">
                     <li class="active-item"><a href="#carousel">Acasa</a></li>
                     <li><a href="#descriere">Concept</a></li>
                     <li><a href="#pachet">Pachet de beneficii</a></li>

                     <li><a href="#inscriere">Înscrie-te la<br>ceremonie</a></li>
                     <li><a href="#program">Program</a></li>
                     <!-- <li><a href="#locatii">Locații</a></li>-->
                     <li><a href="#editii">Ediții<br> anterioare</a></li>
                     <li><a href="#parteneri">Parteneri</a></li>
                     <!--<li><a href="#amintire">Amintiri<br> din studenție</a></li>-->
                     <li><a href="#contact">Contact</a></li>
                  </ul>
               </div>
            </div>
         </nav>

      </div>
   </header>

   <section>
      <!-- CAROUSEL -->
      <div id="carousel">
         <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
               <img src="../images/1.webp">
               <div class="line">
                  <div class="text hide-s">
                     <div class="line">

                     </div>
                     <h2>Ceremonia de Absolvire UVT 2025</h2><br><br>
                     <a class="buton-inregistrare" href="index.php" target="_blank"><i style="font-size:24px" class="fa"></i>Formular de înscriere la Ceremonia de Absolvire
                        UVT 2025</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- QR-CODE -->

      <div id="qr-container">
        <h1>Formular finalizat cu succes!</h1>
        <p class="success-message" style="margin-top:30px"><strong>Salut, <?php echo $first_name . ' ' . $last_name; ?>!</strong></p>
        <p class="success-message"><strong>Îți mulțumim pentru înscrierea la Ceremonia de Absolvire UVT 2025!<br></strong> Marele moment al absolvirii se apropie, iar noi suntem încântați să-l sărbătorim alături de tine.<br>
        <p class="success-message">Pentru detalii complete despre Ceremonia de Absolvire 2025, te invităm să vizitezi site-ul oficial:</p>
        <p class="success-message">
        <a href="https://absolvire.uvt.ro" target="_blank">https://absolvire.uvt.ro</a>
        <p class="success-message">
        <p class="success-message">Dacă ai întrebări suplimentare, ne poți contacta:</p>
    <ul>
        <strong>Pentru informații generale:</strong> <a href="mailto:festivitateabsolvire@e-uvt.ro">festivitateabsolvire@e-uvt.ro</a><br>
        <strong>Pentru detalii specifice facultății tale:</strong> contactează persoana desemnată pentru coordonare.
    </ul>
    <p class="success-message">Ne bucurăm să fim alături de tine și abia așteptăm să celebrăm împreună această realizare importantă!</p>
    <p class="success-message">Cu drag,</p>
    <p class="success-message"><strong>Echipa UVT</strong></p>
    
        </p>

        <p class="success-message">ID-ul unic generat: <strong><?php echo $unique_id; ?></strong></p>
        <p class="success-message">Plată realizată cash. </strong></p>
        <p class="success-message">Data generării: <strong><?php echo $submission_date; ?></strong></p>

        <h3>Salvează pentru a putea utiliza codul:</h3>
        <div id="qr-code"></div>

        
        <button id="download-btn">Download PDF</button>

        <h3 style="margin-top:30px">QR code utilizat în cadrul Ceremoniei de Absolvire UVT - 2025.</h3>
    </div>

      <!-- SOCIALS -->
      <div id="socials">
         <div class="s-12 m-6 l-3"><a class="facebook" target="_blank" href="https://www.facebook.com/uvtromania/?ref=br_rs"><span><i style="font-size: 24px;" class="fab fa-facebook-square"></i>Alătură-te nouă pe Facebook</span></a></div>
         <div class="s-12 m-6 l-3"><a class="twitter" target="_blank" href="https://twitter.com/uvtromania"><span><i style="font-size: 24px;" class="fab fa-twitter-square"></i>Urmărește-ne pe Twitter</span></a></div>
         <div class="s-12 m-6 l-3"><a class="google" target="_blank" href="https://www.linkedin.com/school/west-university-of-timisoara/"><span><i style="font-size: 24px;" class="fab fa-linkedin"></i>Urmărește-ne pe Linkedin </span></a></div>
         <div class="s-12 m-6 l-3"><a class="instagram" target="_blank" href="https://www.instagram.com/uvt_romania/"><span><i style="font-size: 24px;" class="fab fa-instagram-square"></i>Urmărește-ne pe Instagram</span></a></div>
      </div>
   </section>
   <!-- FOOTER -->
   <footer>
      <div class="line">
         <div class="s-12 l-6">
            <p>Copyright 2025, <a target="_blank" href="https://www.uvt.ro/ro/">Universitatea de Vest din Timisoara</a>
            </p>

         </div>

      </div>
   </footer>

   <link rel="stylesheet" href="css/leaflet.css" crossorigin="">

   <script type="text/javascript" src="../js/responsee.js"></script>
   <script type="text/javascript" src="../js/owl.carousel.js"></script>
   <script type="text/javascript" src="../js/template-scripts.js"></script>
   <script type="text/javascript" src="../js/lightcase.js"></script>



   <script>
    // Generate QR Code and center it on the page
    const uniqueID = "<?php echo $unique_id; ?>";
    const firstName = "<?php echo $first_name; ?>";
    const lastName = "<?php echo $last_name; ?>";
    const submissionDate = "<?php echo $submission_date; ?>";

    const qrCodeElement = document.getElementById("qr-code");

    new QRCode(qrCodeElement, {
        text: uniqueID,
        width: 256,
        height: 256,
        colorDark: "#000000",
        colorLight: "#ffffff",
        correctLevel: QRCode.CorrectLevel.H
    });

    // PDF Download Functionality
  
    document.getElementById("download-btn").addEventListener("click", async () => {
    const { jsPDF } = window.jspdf;

    // Create PDF
    const doc = new jsPDF();

    // Get page width for centering
    const pageWidth = doc.internal.pageSize.getWidth();

    // Load and Add Cover Photo
    const coverImage = await fetch("../cover.png")
        .then((res) => res.blob())
        .then((blob) => {
            return new Promise((resolve) => {
                const reader = new FileReader();
                reader.onload = (e) => resolve(e.target.result);
                reader.readAsDataURL(blob);
            });
        });

    const coverWidth = pageWidth; // Full width of the page
    const coverHeight = 120; // Adjust the height as per your image aspect ratio
    doc.addImage(coverImage, "PNG", 0, 0, coverWidth, coverHeight);

    // Add Title below the cover photo
    const titleY = coverHeight + 20; // Adjust vertical position after the cover image
    doc.setFont("Arial", "normal");
    doc.setFontSize(20);
    doc.text("Formular finalizat cu succes!", pageWidth / 2, titleY, { align: "center" });

    // Add Success Message (aligned to the left)
    const messageStartY = titleY + 30; // Start position below the title
    doc.setFontSize(14);
    const leftMargin = 20; // Left margin for left-aligned text
    doc.text(`Nume, Prenume: ${lastName} ${firstName}`, leftMargin, messageStartY);
    doc.text(`ID-ul unic generat: ${uniqueID} / Data generarii: ${submissionDate}`, leftMargin, messageStartY + 15);

    doc.text(`Plata realizata cash.`, leftMargin, messageStartY + 30);

    doc.text(
        `QR code utilizat in cadrul Ceremoniei de Absolvire UVT - 2025`,
        leftMargin,
        messageStartY + 45
    );

    // Add QR Code (centered)
    const qrCodeElement = document.getElementById("qr-code");
    const qrImage = qrCodeElement.querySelector("img").src;

    if (qrImage) {
        const imgWidth = 50; // Width of QR code in PDF
        const imgHeight = 50; // Height of QR code in PDF
        const imgX = (pageWidth - imgWidth) / 2; // Center the QR code
        const imgY = messageStartY + 55; // Vertical position for the QR code
        doc.addImage(qrImage, "PNG", imgX, imgY, imgWidth, imgHeight);
    }

    // Add Final Payment Confirmation (centered)
    const finalMessageY = messageStartY + 120; // Position below the QR code
    doc.setFontSize(16);
    doc.text("https://absolvire.uvt.ro", pageWidth / 2, finalMessageY, { align: "center" });

    // Save PDF
    doc.save(`QRCode_${uniqueID}.pdf`);
});




   
</script>


</body></html>