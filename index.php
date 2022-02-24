<?php 

include 'admin/includes/config.php';
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#" style="color: var(--bs-blue);font-size: 30px;">Stories.</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-family: Alatsi, sans-serif;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: Alatsi, sans-serif;">Admin</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-family: Alatsi, sans-serif;">Categories </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="admin/login.php">Login</a><a class="dropdown-item" href="admin/register.php">Register</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-family: Alatsi, sans-serif;">Sign In </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="admin/login.php">Login</a><a class="dropdown-item" href="admin/register.php">Register</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="highlight-phone" style="background: url(&quot;assets/img/Exyo6XmU4AEYzV3.jpg&quot;) center / cover no-repeat, #ffffff;opacity: 1;filter: blur(0px);min-height: 500px;">
        <div class="container">
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-8 col-sm-12 mb-5" style="text-align: left;margin-top: 80px;height: auto;">
                    <p style="border-color: var(--bs-white);color: var(--bs-blue);font-weight: bold;font-size: 12px;margin-top: -30px;font-family: Alatsi, sans-serif;padding: 20px;padding-left: 20px;padding-right: 20px;padding-top: 0px;padding-bottom: 0px;">. TRAVEL</p>
                    <h2 class="pulse animated" style="border: 26px none var(--bs-white);font-size: 43.128px;width: 533px;font-family: Alatsi, sans-serif;padding: 20px;padding-top: 0px;padding-bottom: 0px;min-width: 524px;">How to Visit Bali's Monkey Forest</h2>
                    <p class="bounce animated" style="border-color: var(--bs-white);color: var(--bs-white);font-weight: bold;font-size: 15px;margin-top: -20px;padding-right: 20px;padding-left: 20px;">26th August 2020 .</p><a class="btn btn-primary" role="button" href="#" style="margin-left: 20px;">Read More</a>
                </div>
                <div class="col-md-4 col-sm-12 pl-5 mt-5">
                    <?php 
                        $query = "SELECT * FROM post LIMIT 1";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result))
                        {  
                            $id = urlencode($row['id']);
                    ?>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img class="img-fluid" data-aos="fade-up" src="<?php echo $row['thumbnail'] ?>" style="border-radius: 10px; width: 100% ;border-width: 4px;border-style: solid;">
                            </div>
                            <div class="col-md-8 col-sm-8 mt-3">
                                <h3 class="pulse animated name" style="border-radius: 10px;margin-bottom: 0px;font-size: 24px;font-family: Alatsi, sans-serif;text-align: left;"><?php echo $row['title'] ?></h3>
                            </div>
                        </div>

                    <?php } ?>            

                </div>
               
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row ">
            <div class="col-md-8 col-sm-12" style="height: 500px;">
                <?php 
                    $query = "SELECT * FROM post LIMIT 1";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result))
                    {  
                        $id = urlencode($row['id']);
                ?>
                    <div class="card">
                        <div class="card-img-overlay d-table float-start flex-row-reverse" data-aos="fade" data-aos-duration="200" style="background: url(&quot;<?php echo $row['thumbnail'] ?>&quot;) no-repeat, #ffffff;margin-top: 100px; background-size: cover; background-position: center ;min-height: 450px;border-radius: 10px;box-shadow: 0px 0px 5px 1px var(--bs-gray-400);height: 356px;width: 100%; background-size: cover, auto;padding-top: 0px;">
                            <a href="post.php?postid=<?php echo $row['postid']?>" style="text-decoration: none; color: black">
                                <h4 class="bounce animated" style="margin-top: 270px;padding-left: 20px;color: var(--bs-white);font-size: 29px;font-family: Alatsi, sans-serif;box-shadow: 0px 0px 0px var(--bs-gray);"><?php echo $row['title'] ?></h4>
                            </a>    
                            <p style="margin-left: 20px;color: var(--bs-white);font-size: 12px;font-weight: bold;margin-top: 10px;"><?php echo $row['date'] ?></p>
                        </div>
                    </div>
                <?php } ?>
                <h1 style="font-family: Alatsi, sans-serif;font-size: 16.88000000000001px;padding-top: 40px;">Latest Updates</h1><hr>
                <!-- <h1 style="padding: 100px;font-size: 16.88000000000001px;color: var(--bs-dark);padding-top: 40px;padding-left: 10%;padding-bottom: 0px;font-family: Alatsi, sans-serif;width: 100%;margin-top: 30px;">Latest Posts</h1> -->
            </div>

            <?php 
                    $query = "SELECT * FROM post LIMIT 1 OFFSET 2";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result))
                    {  
                        $id = urlencode($row['id']);
                ?>
            <div class="col-md-4 col-sm-8 d-xl-flex justify-content-xl-start" style="margin-top: 100px;min-height: 450px;margin-left: 0px;">
                <div class="card-group">
                    <div class="card">
                        <img class="card-img-top w-100 d-block d-xl-flex justify-content-xl-end" style="background-position: center ;background-size: cover; var(--bs-info);width: 289px;border-radius: 10px 10px 0px 0px;" src="<?php echo $row['thumbnail'] ?>" height="200px">
                        <div class="card-body float-end" style="height: 156px;border-style: none;border-color: var(--bs-white);border-left-color: 37;box-shadow: 0px 0px 7px var(--bs-gray-500);">
                            <a href="post.php?postid=<?php echo $row['postid']?>" style="text-decoration: none; color: black">
                                <h4 class="card-title" style="font-family: Alatsi, sans-serif;font-weight: bold;font-size: 23px;padding-top: 30px;padding-left: 15px;padding-bottom: 0px;"><?php echo $row['title'] ?></h4>
                            </a>    
                            <small style="padding-left: 16px;font-family: Actor, sans-serif;font-weight: bold;"><?php echo $row['date'] ?></small>
                            <p class="card-text" style="padding-left: 20px;padding-right: 20px; padding-top: 10px;font-size: 13px;padding-bottom: 0px;color: var(--bs-gray-700);"><?php echo $row['description'] ?></p>
                            <small style="background: var(--bs-blue);color: var(--bs-white);font-family: Alatsi, sans-serif;padding: 5px;margin-left: 20px;margin-bottom: 30px;margin-top: -3px;"><?php echo $row['category'] ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php 
                $query = "SELECT * FROM post  LIMIT 100 OFFSET 2";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result))
                {  
                    $id = urlencode($row['id']);
            ?>
                <div class="col-md-4" style="margin-top: 70px;">
                    <div class="card"><img class="card-img-top w-100 d-block" src="<?php echo $row['thumbnail'] ?>" height="200px">
                        <div class="card-body" style="padding-bottom: 30px;box-shadow: 0px 0px 6px var(--bs-gray-500);">
                            <a href="post.php?postid=<?php echo $row['postid']?>" style="text-decoration: none; color: black">
                                <h4 class="card-title" style="padding-top: 20px;padding-left: 20px;font-family: Alatsi, sans-serif;font-weight: bold;"><?php echo $row['title'] ?></h4>
                            </a>
                            <p class="card-text" style="padding-left: 20px;padding-right: 20px;font-size: 13px;padding-bottom: 0px;color: var(--bs-gray-700);"><?php echo $row['description'] ?></p>
                            <small style="background: var(--bs-blue);color: var(--bs-white);font-family: Alatsi, sans-serif;padding: 5px;margin-left: 20px;margin-bottom: 30px;margin-top: -3px;"><?php echo $row['category'] ?></small>
                        </div>
                    </div>
                </div>

            <?php }  ?>
           
        </div>
    </div>
    <h1 style="padding: 100px;font-size: 16.88000000000001px;color: var(--bs-dark);padding-top: 40px;padding-left: 10%;padding-bottom: 0px;font-family: Alatsi, sans-serif;width: 100%;margin-top: 30px;">Latest Posts</h1>
    <section class="projects-horizontal">
        <div class="container">
            <div class="intro"></div>
            <div class="row projects">
                <div class="col-sm-6 item" style="padding-top: 30px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg" style="border-radius: 10px;"></a></div>
                        <div class="col">
                            <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                            <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 21px;">Helpful Tips for working from Home as a Freelancer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item" style="padding-top: 30px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/building.jpg" style="border-radius: 10px;"></a></div>
                        <div class="col">
                            <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                            <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 21px;">Helpful Tips for working from Home as a Freelancer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item" style="padding-top: 20px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/building.jpg" style="border-radius: 10px;"></a></div>
                        <div class="col">
                            <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                            <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 21px;">Helpful Tips for working from Home as a Freelancer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item" style="padding-top: 20px;">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg" style="border-radius: 10px;"></a></div>
                        <div class="col" style="border-radius: 10px;">
                            <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                            <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 21px;">Helpful Tips for working from Home as a Freelancer</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                        <p class="Header" style="font-family: Alatsi, sans-serif;">Destinations</p>
                        <hr>
                        <div class="row pb-4">
                            <div class="col-4"><a href="#"><img class="img-fluid"  src="assets/img/loft.jpg" style="height: 100% ;border-radius: 10px;"></a></div>
                            <div class="col-8 " style="border-radius: 10px;">
                                <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                                <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 15px;">Helpful Tips for working from Home as a Freelancer</h3>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-4"><a href="#"><img class="img-fluid"  src="assets/img/loft.jpg" style="height: 100% ;border-radius: 10px;"></a></div>
                            <div class="col-8 " style="border-radius: 10px;">
                                <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                                <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 15px;">Helpful Tips for working from Home as a Freelancer</h3>
                            </div>
                        </div>
                    
                  
                </div>
                <div class="col-md-4">
                    <p class="Header" style="font-family: Alatsi, sans-serif;">Lifestyle</p>
                    <hr>
                  
                    <div class="row pb-4">
                        <div class="col-4"><a href="#"><img class="img-fluid"  src="assets/img/loft.jpg" style="height: 100% ;border-radius: 10px;"></a></div>
                        <div class="col-8 " style="border-radius: 10px;">
                            <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                            <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 15px;">Helpful Tips for working from Home as a Freelancer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <p class="Header" style="font-family: Alatsi, sans-serif;">Destinations</p>
                    <hr>
                    <div class="row pb-4">
                        <div class="col-4"><a href="#"><img class="img-fluid"  src="assets/img/loft.jpg" style="height: 100% ;border-radius: 10px;"></a></div>
                        <div class="col-8 " style="border-radius: 10px;">
                            <p class="description" style="font-family: Alatsi, sans-serif;color: var(--bs-indigo);">Food</p>
                            <h3 class="name" style="font-family: Alatsi, sans-serif;font-size: 15px;">Helpful Tips for working from Home as a Freelancer</h3>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <footer class="footer-dark" style="margin-top: 60px;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2022</p>
            </div>
        </footer>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>