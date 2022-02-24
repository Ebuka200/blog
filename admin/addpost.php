<?php
    include 'includes/config.php';

    $conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    // echo "YEsssss";
    if(isset($_POST['submit'])){


        //Getting values from forms
        $title = $_POST['title'];   
        $category = $_POST['category'];   
        $description = $_POST['description'];
        


        $filename = $_FILES["thumbnail"]["name"];
        $tempname = $_FILES["thumbnail"]["tmp_name"];
        $file_type= $_FILES['thumbnail']['type'];
        $file_size= $_FILES['thumbnail']['size'];
        // $file_ext=strtolower(end(explode('.',$_FILES['avatar']['name'])));

        $extensions= array("jpeg","jpg","png");
        $folder = "../thumbnail/".$filename;

        $postid = $_POST['postid'];

        $sql = "INSERT INTO post(title, category, description, thumbnail, postid) values('$title', '$category', '$description','$folder', '$postid')";

        // $sql = "INSERT INTO user(firstname, lastname, passport, email_address, company, position, address, age, cell_number , gender, password) values('asd','asd', 'asd','asd@c','asd','asd','asd','1','1','asd','asd')";

        $query = mysqli_query($conn, $sql);
        // if(in_array($file_ext,$extensions)=== false){
        //     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        //  }

         if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
         }
         
         if(empty($errors)==true){
            move_uploaded_file($tempname,"../thumbnail/".$filename);
            echo "Success";
         }else{
            print_r($errors);
         }


        $error2 = false;
        var_dump($query);
        if($query){
            $error2 = true;

            echo "<script>
                    alert('Successfully created! ');
                    location.href ='index.php';
                    
                </script>"; 
        }else {
            
            echo "<script>alert('Post not created');
            
                        </script>";
        }
    }


?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'includes/sidebar.php' ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <?php 
                                            if(isset($_SESSION['email'])){
                                                while($session_row = mysqli_fetch_assoc($session_query)){
                                                    $email = $session_row['email'];
                                        ?>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $email ?></span>
                                        <img class="border rounded-circle img-profile" src="<?php echo $session_row['thumbnail'] ?>"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>

                           <?php }} ?> 
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                <div class="card o-hidden border-0 shadow-lg my-5" style="height: auto;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row row justify-content-center align-items-center h-100">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                <div class="text-center">
                                
                                <h1 class="h4 text-gray-900 mb-4 mt-5">Create Post</h1>
                            </div>
                            <form class="user" role="form" action="addpost.php" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3" >
                                    <input type="text" style="border-radius: 5px" rows="5" class="form-control form-control-user" name="title" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Title...">
                                </div>
                               
                                <div class="form-group mb-3">
                                
                                    <select class="form-control" name="category" id="exampleInputEmail" aria-describedby="emailHelp" style="height: 50px; font-size: 13px">
                                        <option  value="null">Category</option>
                                        <option value="Pending">Lifestyle</option>
                                        <option value="Arrived">Education</option>
                                        <option value="Arrived">Travel</option>
                                        <option value="Arrived">Food</option>
                                        <option value="Arrived">Health</option>
                                        <option value="Arrived">News</option>
                                        <option value="Arrived">Finance & Business</option>
                                        <option value="Arrived">Tech</option>
                                        <option value="Arrived">Gist</option>
                                    </select>  
                                
                                </div>

                                <div class="form-group mb-3">
                                  <textarea col="8" rows="8" style="border-radius: 5px" type="text" class="form-control form-control-user" name="description" id="exampleInputPassword" placeholder="Description" ></textarea>
                                </div>

                                <div class="form-group mb-3" >
                                    <label>Thumbnail:</label>
                                    <input type="file" style="border-radius: 5px" rows="5" class="form-control form-control-user" name="thumbnail" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Title...">
                                </div>


                                <div class="form-group d-none">
                                    <input type="text" rows="5" class="form-control form-control-user" name="postid" id="exampleInputEmail" aria-describedby="emailHelp" 
                                      
                                    value="<?php 
                                    
                                    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
                                      function generate_string($input, $strength = 16) {
                                          $input_length = strlen($input);
                                          $random_string = '';
                                          for($i = 0; $i < $strength; $i++) {
                                              $random_character = $input[mt_rand(0, $input_length - 1)];
                                              $random_string .= $random_character;
                                          }
                                      
                                          return $random_string;
                                      }
                                      
                                      // Output: iNCHNGzByPjhApvn7XBD
                                      echo generate_string($permitted_chars, 7);
                                   
                                    
                                    ?>">
                                </div>

                               

                                
                               
                                <input href="" class="mb-5 btn btn-primary btn-user btn-block" style="border-radius: 5px" type="submit" name="submit" value="Submit"/>
                                
                            
                            </form>
                            
                    </div>
                </div>
            </div>
                        
                            
                </div>
    </div>
                    
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>