<?php
header('Content-Type: application/json');

require_once "connect.php";

$sql = "SELECT DISTINCT Tip, Facultate, ProgramStudii FROM programeUVT ORDER BY Tip, Facultate, ProgramStudii";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $tip = $row['Tip'];
        $facultate = $row['Facultate'];
        $program = $row['ProgramStudii'];

        if (!isset($data[$tip])) {
            $data[$tip] = [];
        }
        if (!isset($data[$tip][$facultate])) {
            $data[$tip][$facultate] = [];
        }
        $data[$tip][$facultate][] = $program;
    }
    echo json_encode(["success" => true, "data" => $data]);
} else {
    echo json_encode(["success" => false, "message" => "No records found."]);
}

$conn->close();
?>
