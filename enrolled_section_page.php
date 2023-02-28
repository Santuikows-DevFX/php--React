<?php 

session_start();

@include "./config.php";
@include "./checkInfo.php";

if(isset($_POST['back'])) { 

    header("Location: ./section_selection_page.php");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv = "refresh" content = "60; url = ./index.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENROLLED::</title>
    
    <!-- BOOTSTRAP IMPORT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loading.css">

</head>
<body>

    <div class="container d-flex justify-content-center align-items-center" style = "min-height:30vh;">

        <?php 

            $studentName = $_SESSION['student_name'];
        
            if(isset($_POST['enroll'])) { 

                $getEnrolledStudentInfo = mysqli_query($conn, "SELECT student_section FROM students WHERE student_name = '$studentName'");

                $getEnrollmentStatus = mysqli_query($conn, "SELECT * FROM students WHERE student_name = '$studentName'");
                $fetchStatus = mysqli_fetch_assoc($getEnrollmentStatus);

                $updatedEnrollmentStatus = 'ENROLLED';
                $updateEnrollStatus = mysqli_query($conn, "UPDATE students SET enrollment_status = '$updatedEnrollmentStatus' WHERE student_name = '$studentName'");

                if($fetchStatus['enrollment_status'] == 'ENROLLED') {

                    header("Location: ./index.php?errorMsg=YOU ARE ALREADY ENROLLED, PLEASE LOGIN AGAIN!");

                }else if(mysqli_num_rows($getEnrolledStudentInfo) > 0) {

                    while($fetchedEnrolledStudentsInfo = mysqli_fetch_assoc($getEnrolledStudentInfo)){
        ?>

        <?php ?>
            <form class = "shadow p-3 rounded" style = "background-color:#52BE80; width: 650px;" method = "post">

                <div class="alert alert-success text-center display-6" role="alert">

                    You are now <b><u>registered</u></b> in <?php echo $fetchedEnrolledStudentsInfo['student_section'];?>.

                </div>

            </form>
            
    </div>

    <div class="container d-flex justify-content-center align-items-center " style = "min-height:10vh;">

            <div class="card shadow rouded" style = "width:400px;  height:650px; width:1400px;">

                <div class="card-header">

                    <span class = "d-flex justify-content-center align-items-center"><b><?php echo $fetchedEnrolledStudentsInfo['student_section'];?> SECTION SCHEDULE</b></span>

                </div>

                <div class="card-body">

                    <table class="table">

                        <thead class = " justify-content-center align-items-center">

                            <tr>

                                <th class="col-4">SUBJECT</th>
                                <th class="col-4">TIME</th>
                                <th class = "col">DAY</th>
                                <th class = "col-1">ROOM</th>
                                <th class="col-4">SECTION</th>

                            </tr>
          
                        </thead>

                        <?php 
                        
                            if($fetchedEnrolledStudentsInfo['student_section'] == 'BT304') { 

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bt304_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {
                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                                
                            </tbody>

                        <?php 

                                };
                            };               
                        
                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BT305'){

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bt305_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };

                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BT402') {
            
                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bt402_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 

                                    };
                                };
                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BT405'){

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bt405_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php
                                    };
                                };

                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BA301') { 

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM ba301_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {
       
                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>
                        <?php
                                    };
                                };

                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BA302') { 

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM ba302_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {
       

                        ?>
                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };

                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BA402') {

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM ba402_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {
       
                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };
                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BA404') {

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM ba404_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {
  
                        ?>
                        
                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };
                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BCS301') { 

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bcs301_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {

                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                            
                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                                };

                            };
                        }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BCS302') { 

                    
                            $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bcs302_schedule_list");

                            if(mysqli_num_rows($getSectionSchedule) > 0) {

                                while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };
                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BCS402') { 

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bcs402_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {
    
                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 
                        
                                    };
                                };
                            }else if($fetchedEnrolledStudentsInfo['student_section'] == 'BCS404') {

                                $getSectionSchedule = mysqli_query($conn, "SELECT * FROM bcs404_schedule_list");

                                if(mysqli_num_rows($getSectionSchedule) > 0) {
    
                                    while($fetchSectionSchedule = mysqli_fetch_assoc($getSectionSchedule)) {

                        ?>

                            <tbody>

                                <tr>

                                    <td><?php echo $fetchSectionSchedule['subjects'];?></td>
                                    <td><?php echo $fetchSectionSchedule['time'];?></td>
                                    <td><?php echo $fetchSectionSchedule['day'];?></td>
                                    <td><?php echo $fetchSectionSchedule['room'];?></td>
                                    <td><?php echo $fetchedEnrolledStudentsInfo['student_section'];?></td>

                                </tr>

                            </tbody>

                        <?php 

                                    };
                                };
                            };
                                
                        ?>
                    </table>

                </div>

                <form method = "post" action = "./Pre-Assessment.php">

                    <div class = "card-footer float-right ml-2" style = "background-color:white;">

                        <div class = "d-flex justify-content-end">

                            <button class = "btn btn-primary align-self-end btn btn-lg btn-block btn-primary" style = "margin-left: 10px;" name = "print">Print Pre-Assessment</button>

                        </div>

                    </div>

                </form>
                
            </div>
        </div>

        <?php
                    };
                };
            }; 
        
        ?>
    
</body>
</html>