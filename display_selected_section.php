<?php 

session_start();

@include "./config.php";
@include "./checkInfo.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "refresh" content = "60; url = ./index.php">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECTED SECTION::</title>
    
    <!-- BOOTSTRAP IMPORT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="loading.css">

</head>
<body>

    <div class="d-flex justify-content-center align-items-center" style = "min-height:30vh; min-width: 40vh;">

        <form class = "border shadow p-3 rounded" style = "background-color:white; width: 500px;" method = "post">

            <?php 

                $studentName = $_SESSION['student_name'];
                $studentType = $_SESSION['student_type'];

                $getStudentsDetails = mysqli_query($conn, "SELECT * FROM students WHERE student_name = '$studentName' AND student_type = '$studentType'");

                if(mysqli_num_rows($getStudentsDetails) > 0) { 

                    while($fetchStudentDetails = mysqli_fetch_assoc($getStudentsDetails)) { 

            ?> 
                <div class="mb-3">

                    <h2 class = "text-center">HELLO, <b><?php echo $fetchStudentDetails['student_name'];?>!</b></h2>

                </div>


                <?php 
                
                    if($studentType == 'REGULAR') { 

                ?>

                    <div class="mb-3">

                        <div class="alert alert-success text-center" role="alert">

                            <span style = "font-size:1.4rem;">You are a <b><?php $studentType = $fetchStudentDetails['student_type']; strtoupper($studentType); echo $studentType;?></b> student.</span>

                        </div>

                    </div>

                <?php 
                
                    }else {
                ?>

                    <div class="mb-3">

                        <div class="alert alert-danger text-center" role="alert">

                            <span style = "font-size:1.4rem;">You are a <b><?php $studentType = $fetchStudentDetails['student_type']; strtoupper($studentType); echo $studentType;?></b> student.</span>

                        </div>

                    </div>

                <?php }; ?>

            <?php 
                           
                    };

                };
            ?>
        </form>

    </div>

        <div class="container d-flex justify-content-center align-items-center " style = "min-height:10vh;">

            <div class="card shadow rouded" style = "width:400px;  height:650px; width:1400px;">

                <div class="card-header">

                    <span class = "d-flex justify-content-center align-items-center"><b>SELECTED SECTION SCHEDULE</b></span>

                </div>

                <div class="card-body">

                    <table class="table">

                        <thead class = " justify-content-center align-items-center">

                            <tr>

                                <th class="col-4">SUBJECT</th>
                                <th class="col-4">TIME</th>
                                <th class = "col">DAY</th>
                                <th class = "col-1">ROOM</th>

                            </tr>
          
                        </thead>

                        <?php 
                        
                            if($_GET['selectedSection'] == 'bt304') { 

                                $section = "BT304";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                                
                            </tbody>

                        <?php 

                                };
                            };               
                        
                            }else if($_GET['selectedSection'] == 'bt305'){

                                $section = "BT305";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };

                            }else if($_GET['selectedSection'] == 'bt402') {

                                $section = "BT402";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 

                                    };
                                };
                            }else if($_GET['selectedSection'] == 'bt405'){

                                $section = "BT405";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php
                                    };
                                };

                            }else if($_GET['selectedSection'] == 'ba301') { 

                                $section = "BA301";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");
                                
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

                                </tr>

                            </tbody>
                        <?php
                                    };
                                };

                            }else if($_GET['selectedSection'] == 'ba302') { 

                                $section = "BA302";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };

                            }else if($_GET['selectedSection'] == 'ba402') {

                                $section = "BA402";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };
                            }else if($_GET['selectedSection'] == 'ba404') {

                                $section = "BA404";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };
                            }else if($_GET['selectedSection'] == 'bcs301') { 

                                $section = "BCS301";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                                };

                            };
                        }else if($_GET['selectedSection'] == 'bcs302') { 

                            $section = "BCS302";
                            $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                                    };
                                };
                            }else if($_GET['selectedSection'] == 'bcs402') { 

                                $section = "BCS402";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 
                        
                                    };
                                };
                            }else if($_GET['selectedSection'] == 'bcs404') {

                                $section = "BCS404";
                                $updateSectionQuery = mysqli_query($conn, "UPDATE students SET  student_section = '$section' WHERE student_name = '$studentName'");

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

                                </tr>

                            </tbody>

                        <?php 

                                    };
                                };
                            };
                                
                        ?>
                    </table>

                </div>

                <form method = "post" action = "./enrolled_section_page.php">

                    <div class = "card-footer float-right ml-2" style = "background-color:white;">

                        <div class = "d-flex justify-content-end">

                            <button class = "btn btn-primary align-self-end btn btn-lg btn-block btn-danger" name = "back">Back</button>
                            <button class = "btn btn-primary align-self-end btn btn-lg btn-block btn-primary" style = "margin-left: 10px;" name = "enroll">Enroll Here</button>

                        </div>

                    </div>

                </form>
                
            </div>
                
        </div>
    
</body>
</html>