
<?php 

@include "./config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENROLLMENT SYSTEM</title>

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

            <form class = "border p-3 shadow rounded" method = "post" action = "./checkInfo.php" style = "background-color: #FFFFFF; width: 400px;">

                <h1 class = "text-center mb-3"><b>STUDENT <span style = "color:#2980B9;">LOGIN</span></b></h1>

                <?php 
                     if(isset($_GET['error'])) {
                    
                ?>
                    <div class="alert alert-danger text-center" role="alert">

                        <b><?php echo $_GET['error'];?></b>

                    </div>
                    
                <?php }else if(isset($_GET['errorMsg'])) {
                ?>
                    <div class="alert alert-danger text-center" role="alert">

                        <b><?php echo $_GET['errorMsg'];?></b>

                    </div>
                <?php } ?>

                <div class="mb-4">
                    <input type="text" class="form-control" aria-describedby="studentID" name = "studentID" placeholder = "Student ID" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="studentPass" placeholder = "Password" required>
                </div>

                <button type="submit" name = "submit" class="btn btn-primary" style = "width:7rem;">Submit</button>

            </form>

        </div>

</body>
</html>