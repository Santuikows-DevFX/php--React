<?php 

session_start();
@include "./config.php";
@include "./checkInfo.php";

if(isset($_POST['updatePayment'])) { 

    $studentID = $_SESSION['student_id'];
    $newPaymentStatus = "PAID";
    $updatePaymentQuery = mysqli_query($conn, "UPDATE students SET payment_status = '$newPaymentStatus' WHERE student_id = '$studentID'");

    if($updatePaymentQuery) { 

        header("Location: ./enrollment_main_page.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv = "refresh" content = "60; url = ./index.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETTLE PAYMENT::</title>

    <!-- BOOTSTRAP IMPORTS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loading.css">

</head>
<body>

    <div class="container d-flex justify-content-center align-items-center" style = "min-height:100vh;">

        <form class = "border shadow rounded p-3" style = "width:500px; background-color: #fff;" method = "post">

            <div class="mb-3">

                <h1 class = "text-center"><span style = "color:red; font-weight:bold;">ASSUMED</span> THAT THE STUDENT SETTLED HIS/HER PAYMENT HERE.</h1>

            </div>

            <hr class="sidebar-divider mb-2">

            <div class = "buttonContainer d-flex justify-content-center align-items-center" >

                <button type="submit" name = "updatePayment" class="btn btn-primary" style = "font-size: 18px;">Proceed to enrollment</button>

            </div>

        </form>

    </div>
    
</body>
</html>

