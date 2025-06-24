<?php
date_default_timezone_set('Europe/Bucharest');
session_start();

require_once "connect.php";

function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $unique_id = uniqid("grad_");
    $last_name = sanitizeInput($_POST["lastName"]);
    $first_name = sanitizeInput($_POST["firstName"]);
    $email = sanitizeInput($_POST["email"]);
    $phone = sanitizeInput($_POST["phone"]);
    $cnp = ""; // Kept CNP but empty
    $city = sanitizeInput($_POST["city"]);
    $county = sanitizeInput($_POST["county"]);
    $address = sanitizeInput($_POST["address"]);
    $gender = sanitizeInput($_POST["gender"]);
    $cycle = sanitizeInput($_POST["cycle"]);
    $promotion = sanitizeInput($_POST["promotion"]);
    $faculty = sanitizeInput($_POST["faculty"]);
    $program = sanitizeInput($_POST["programstudy"]);
    $robe_guide = isset($_POST["robeGuide"]) ? 1 : 0;
    $robe_size = sanitizeInput($_POST["robeSize"]);
    $cap_guide = isset($_POST["capGuide"]) ? 1 : 0;
    $cap_size = sanitizeInput($_POST["capSize"]);
    $special_needs = sanitizeInput($_POST["specialNeeds"]);
    $payment_method = sanitizeInput($_POST["paymentMethod"]);
    $confirm_info = isset($_POST["confirmInfo"]) ? 1 : 0;
    $termeni_info = isset($_POST["termeniInfo"]) ? 1 : 0;
    $payment_status = 0;
    $amount = 190;
    $submission_date = date("Y-m-d H:i:s");

    $emailCheckQuery = "SELECT payment_status FROM graduations_cash WHERE email = ?";
    $stmt = $conn->prepare($emailCheckQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($existingPaymentStatus);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if ($existingPaymentStatus == 1) {
            echo json_encode(["error" => "E-mail-ul este deja înregistrat și achitat."]);
            $stmt->close();
            $conn->close();
            exit();
        } else {
            $deleteQuery = "DELETE FROM graduations_cash WHERE email = ?";
            $deleteStmt = $conn->prepare($deleteQuery);
            $deleteStmt->bind_param("s", $email);
            $deleteStmt->execute();
            $deleteStmt->close();
        }
    }
    $stmt->close();

    $insertQuery = "INSERT INTO graduations_cash 
    (unique_id, last_name, first_name, email, phone, cnp, city, county, address, gender, cycle, promotion, faculty, program, robe_guide, robe_size, cap_guide, cap_size, special_needs, payment_method, confirm_info, termeni_info, payment_status, amount, submission_date) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($insertQuery);
    if (!$stmt) {
        die(json_encode(["error" => "Prepare failed: " . $conn->error]));
    }

    $stmt->bind_param(
        "sssssssssssssssssssssssss",
        $unique_id,
        $last_name,
        $first_name,
        $email,
        $phone,
        $cnp,
        $city,
        $county,
        $address,
        $gender,
        $cycle,
        $promotion,
        $faculty,
        $program,
        $robe_guide,
        $robe_size,
        $cap_guide,
        $cap_size,
        $special_needs,
        $payment_method,
        $confirm_info,
        $termeni_info,
        $payment_status,
        $amount,
        $submission_date
    );

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();

        $qr_link = "https://absolvire.uvt.ro/cash/confirmare_inregistrare.php";

       

        sendConfirmationEmail($last_name, $first_name, $email, $qr_link);
        echo json_encode(["redirect" => $qr_link])

;
 
    } else {
        echo json_encode(["error" => "Error inserting data: " . $stmt->error]);
    }
}

function sendConfirmationEmail($last_name, $first_name, $email, $qr_link) {
    $url = 'https://api.brevo.com/v3/smtp/email';

    $body = json_encode([
        "sender" => [
            "name" => "Absolvire UVT",
            "email" => "festivitateabsolvire@e-uvt.ro"
        ],
        "to" => [
            [
                "email" => $email,
                "name" => $last_name . ' ' . $first_name
            ]
        ],
        "subject" => "[Confirmare înregistrare] Ceremonia de Absolvire UVT 2025",
        "htmlContent" => "Bună ziua,<br><br>
            Înregistrarea a fost realizată cu succes.<br>
            <b>Vă rugăm să efectuați plata la sediul Fundației UVT din Bd. Vasile Pârvan nr. 4, Timișoara, Timiș</b>.<br>
            Pentru informații suplimentare despre ceremonie, accesați site-ul: <a href='https://absolvire.uvt.ro'>Absolvire UVT</a>.<br><br>
            <br><strong> Confirmarea înregistrării nu este valabilă fără confirmarea plății.</strong><br>
            Cu drag,<br><b>Echipa UVT</b>"
    ]);

    $curl = curl_init($url);
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $body,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'api-key: xkeysib'
        ]
    ]);

    curl_exec($curl);
    curl_close($curl);
}
?>
