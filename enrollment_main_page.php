<?php 

session_start();

@include "./config.php";
@include "./checkInfo.php";

if(isset($_POST['submit'])) { 

    $_SESSION['yearLevel'] = $_POST['yearLevel'];

    if($_POST['studentType'] == 'regular') { 

        $_SESSION['student_type'] = 'REGULAR';
        $studentType = $_SESSION['student_type'];
        $studentName = $_SESSION['student_name'];
        $updateStudType = mysqli_query($conn, "UPDATE students SET student_type = '$studentType' WHERE student_name = '$studentName'");

        header("Location: ./section_selection_page.php");

    }else if($_POST['studentType'] == 'irregular') { 

        $_SESSION['student_type'] = 'IRREGULAR';
        $studentType = $_SESSION['student_type'];
        $studentName = $_SESSION['student_name'];
        $updateStudType = mysqli_query($conn, "UPDATE students SET student_type = '$studentType' WHERE student_name = '$studentName'");

        header("Location: ./section_selection_page.php");

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
    <title>ENROLLMENT::</title>

    <!-- BOOTSTRAP IMPORT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loading.css">

</head>
<body>

   <div class="container d-flex justify-content-center align-items-center" style = "min-height:100vh;">

   <form class = "border p-3 shadow rounded" style = "width:500px; background-color:white;" method = "post"> 

        <h1 class = "text-center mb-3"><b>STUDENT <span style = "color:#2980B9;">INFO</span></b></h1>

        <div class="mb-4">

            <h4><b>Name: <?php $studentName = $_SESSION['student_name']; echo $studentName;?></b></h4>

        </div>
        
        <div class="mb-4">

            <h4><b>Student ID: <?php $studentID = $_SESSION['student_id']; echo $studentID;?></b></h4>

        </div>

        <div class="mb-4">

            <h4><b>Course: <?php $studentCourse= $_SESSION['student_course']; echo $studentCourse;?></b></h4>

        </div>
        

        <select class="form-select" aria-label="Year Level Selection" name = "yearLevel" required>

            <option selected value ="2Y1">2Y1</option>
            <option value="2Y2">2Y2</option>
            <option value="IGNORE">ASSUMED YEAR LEVELS ONLY (IGNORE THIS)</option>

        </select> <br>

        <select class="form-select" aria-label="Year Level Selection" name = "studentType" style = "box-shadow: 3px 3px 3px solid black;" required>

            <option selected value ="regular">REGULAR</option>
            <option value="irregular">IRREGULAR</option>

        </select> <br>

        <button type="submit" name = "submit" class="btn btn-primary" style = "width:7rem;">Proceed</button>

    </form>



   </div>

    
</body>
</html>