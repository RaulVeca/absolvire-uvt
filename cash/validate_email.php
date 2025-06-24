<?php
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {

    $email = $_GET['email'] ?? '';
    if (empty($email)) {
        echo json_encode(["error" => "Email is required."]);
        exit();
    }

    // Validate email domain
    if (!preg_match("/^[a-zA-Z0-9._%+-]+@e-uvt\.ro$/", $email)) {
        echo json_encode(["error" => "E-mail-ul trebuie să conțină @e-uvt.ro."]);
        exit();
    }

    // Check if email exists in the database
    $query = "SELECT COUNT(*) FROM (
        SELECT email FROM graduations WHERE email = ? AND payment_status = 1
        UNION ALL
        SELECT email FROM graduations_cash WHERE email = ?
    ) AS combined_results";
    // $query = "SELECT COUNT(*) FROM graduations_cash WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $email, $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    echo json_encode(["exists" => $count > 0]);
    
    exit();
}

echo json_encode(["error" => "Invalid request."]);
exit();
