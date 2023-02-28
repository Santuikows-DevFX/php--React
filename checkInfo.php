<?php 
session_start();
@include "./config.php";

if(isset($_POST['studentID']) && isset($_POST['studentPass'])) { 

    function check_data($data) { 

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;

    }

    $studentID = check_data($_POST['studentID']);
    $studentPass = check_data($_POST['studentPass']);
    
    if(empty($studentID) || empty($studentPass) ) { 

        header("Location: ./index.php?error=Empty Field Detected!");

    }else { 

        $selectQuery = mysqli_query($conn, "SELECT * FROM students WHERE student_id = '$studentID' AND student_pass = '$studentPass'");

        if(mysqli_num_rows($selectQuery) > 0) { 

            $fetchedStudentInfo = mysqli_fetch_assoc($selectQuery);

            if($fetchedStudentInfo['payment_status'] == 'UNPAID') { //check if students payment status is unpaid so it will be directed to payment page
                
                //global storages
                $_SESSION['student_name'] = $fetchedStudentInfo['student_name'];
                $_SESSION['student_course'] = $fetchedStudentInfo['student_course'];
                $_SESSION['status'] = $fetchedStudentInfo['enrollment_status'];
                $_SESSION['student_id'] = $fetchedStudentInfo['student_id'];
                $_SESSION['student_type']= $fetchedStudentInfo['student_type'];

                header("Location: ./unpaid_student_page.php");

            }else if($fetchedStudentInfo['enrollment_status'] == 'ENROLLED'){ //check if students is already enrolled to prevent re-enrolling

                $_SESSION['student_name'] = $fetchedStudentInfo['student_name'];
                $_SESSION['student_course'] = $fetchedStudentInfo['student_course'];
                $_SESSION['status'] = $fetchedStudentInfo['enrollment_status'];
                $_SESSION['student_id'] = $fetchedStudentInfo['student_id'];
                $_SESSION['student_type']= $fetchedStudentInfo['student_type'];

                header("Location: ./admin_dashboard/student_dashboard_page.php");

            }else if($fetchedStudentInfo['student_id'] === $studentID && $fetchedStudentInfo['student_pass'] === $studentPass){ //if student is already paid

                $_SESSION['student_name'] = $fetchedStudentInfo['student_name'];
                $_SESSION['student_course'] = $fetchedStudentInfo['student_course'];
                $_SESSION['status'] = $fetchedStudentInfo['enrollment_status'];
                $_SESSION['student_id'] = $fetchedStudentInfo['student_id'];
                $_SESSION['student_type']= $fetchedStudentInfo['student_type'];

                 header("Location: ./enrollment_main_page.php");
                
            }else { 

                header("Location: ./index.php?error=Incorrect ID or Pass!");

            }

        }else { 

            header("Location: ./index.php?error=Incorrect ID or Pass!");


        }

    }

}

?>