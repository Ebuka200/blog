<?php
    include 'includes/config.php';

    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    // echo "YEsssss";
    if(isset($_POST['submit'])){


        //Getting values from forms
        $firstname = $_POST['firstname'];   
        $lastname = $_POST['lastname'];   
        $email = $_POST['email'];
        $address = $_POST['address'];


        $filename = $_FILES["avatar"]["name"];
        $tempname = $_FILES["avatar"]["tmp_name"];
        $file_type=$_FILES['avatar']['type'];
        $file_size =$_FILES['avatar']['size'];
        // $file_ext=strtolower(end(explode('.',$_FILES['avatar']['name'])));

        $extensions= array("jpeg","jpg","png");
        $folder = "avatar/".$filename;

        $city = $_POST['city'];
        $country = $_POST['country'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(firstname, lastname, email, address, city, country, thumbnail, password) values('$firstname', '$lastname', '$email','$address', '$city', '$country', '$folder' ,'$password')";

        // $sql = "INSERT INTO user(firstname, lastname, passport, email_address, company, position, address, age, cell_number , gender, password) values('asd','asd', 'asd','asd@c','asd','asd','asd','1','1','asd','asd')";

        $query = mysqli_query($conn, $sql);
        // if(in_array($file_ext,$extensions)=== false){
        //     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        //  }

         if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
         }
         
         if(empty($errors)==true){
            move_uploaded_file($tempname,"avatar/".$filename);
            echo "Success";
         }else{
            print_r($errors);
         }


        $error2 = false;
        var_dump($query);
        if($query){
            $error2 = true;

            echo "<script>
                    alert('Successfully added! Login here');
                    location.href ='login.php';
                    
                </script>"; 
        }else {
            
            echo "<script>alert('User not added!');
            location.href ='register.php';
                        </script>";
        }
    }


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/image2.jpeg&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" role="form" action="register.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="firstname"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="Last Name" name="lastname"></div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Address" name="address"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="file" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Profile Picture" name="avatar"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="examplePasswordInput" placeholder="City" name="city"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="exampleRepeatPasswordInput" placeholder="Country" name="country"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_repeat"></div>
                                </div>
                                <input class="btn btn-primary d-block btn-user w-100" type="submit" name="submit" value="Register">
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="login.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>