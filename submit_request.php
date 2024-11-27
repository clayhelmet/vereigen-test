<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $work_email = $_POST['work_mail'];
    $company_name = $_POST['com_name'];
    $company_size = $_POST['com_size'];
    $job_role = $_POST['job_role'];
    $department = $_POST['department'];
    $country_code = $_POST['country_code'];
    $phone_number = $_POST['phone'];
    $country = $_POST['country'];
    $checkbox = isset($_POST['checkbox']) ? 1 : 0;

    $sql = "INSERT INTO request (fname, lname, work_mail, com_name, com_size, job_role, department, country_code, phone, country, checkbox)
            VALUES ('$first_name', '$last_name', '$work_email', '$company_name', '$company_size', '$job_role', '$department', '$country_code', '$phone_number', '$country', $checkbox)";

    if ($conn->query($sql) === TRUE) {
        // If successful, redirect with status=success
        header("Location: index.php?status=success");
        exit();
    } else {
        // If failed, redirect with status=error
        header("Location: index.php?status=error");
        exit();
    }

    $conn->close();
}
?>
