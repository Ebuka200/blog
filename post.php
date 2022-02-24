<?php 

include 'admin/includes/config.php';
$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);


if (isset($_GET['postid'])) {
    $postid = urldecode($_GET['postid']);
    // $id = intval($id);
    $sql = "SELECT * FROM post where postid = '$postid' ";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        while ($row = mysqli_fetch_assoc($query)) {
            // $post_date = date('F j, Y', $row['post_date']);
            $id = $row['id'];
            $title = $row['title'];
            $author = $row['author'];
            $category = $row['category'];
            $description = $row['description'];
            $date = $row['date'];
            $thumbnail = $row['thumbnail'];
            
        }
    }
}

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Testimonials.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">


    
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="#" style="color: var(--bs-blue);font-size: 30px;">Stories.</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-family: Alatsi, sans-serif;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" style="font-family: Alatsi, sans-serif;">Admin</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-family: Alatsi, sans-serif;">Categories </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="admin/login.php">Lifestyle</a>
                            <a class="dropdown-item" href="admin/register.php">Education</a>
                            <a class="dropdown-item" href="admin/register.php">Travel</a>
                            <a class="dropdown-item" href="admin/register.php">Food</a>
                            <a class="dropdown-item" href="admin/register.php">Health</a>
                            <a class="dropdown-item" href="admin/register.php">News</a>
                            <a class="dropdown-item" href="admin/register.php">Finance & Business</a>
                            <a class="dropdown-item" href="admin/register.php">Tech</a>
                            <a class="dropdown-item" href="admin/register.php">Gist</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="font-family: Alatsi, sans-serif;">Sign In </a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="admin/login.php">Login</a><a class="dropdown-item" href="admin/register.php">Register</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center"><?php echo $title ?></h1>
                        <p class="text-center"><span class="by">By</span> <?php echo $author ?></a><span class="date"><?php echo $date ?> </span></p>
                        <img class="img-fluid" width="100%" height="100%" src="<?php echo $thumbnail ?>">
                    </div>
                    <div class="text" style="padding: 15px">
                        <p><?php echo $description ?>  </p>

                    </div>
                    <section class="testimonials-clean">
                        <div class="container" style="padding-bottom: 50px;margin-bottom: 50px;">
                            <div class="intro" style="margin: auto;margin-right: 100px;text-align: center;width: 100%;">
                                <h2 class="text-center" style="font-size: 21.128px;">Comments</h2>
                                <p class="text-center" style="text-align: center;">Our customers love us! Read what they have to say below. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                            </div>
                            <div class="row people" style="padding-top: 30px;">
                                <?php
                                    if (isset($_GET['postid'])) {
                                        $postid = urldecode($_GET['postid']);
                                        // $id = intval($id);
                                        $sql = "SELECT * FROM comments where post_id = '$postid' ";
                                        $query = mysqli_query($conn, $sql);
                                        if ($query) {
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                // $post_date = date('F j, Y', $row['post_date']);
                                                $postid = $row['post_id'];
                                                $fullname = $row['fullname'];
                                                $comment = $row['comment'];
                                                $date = $row['date'];
                                                
                                                
                                       
                                ?>
                                <div class="col-md-6 col-lg-4 item" style="width: 100%;">
                                    <div class="box" style="width: 100%;margin-bottom: 30px;"><img class="rounded-circle" src="<?php echo $thumbnail ?>">
                                        <h5 class="name" style="font-size: 15px;"><?php echo $fullname ?></h5>
                                        <p class="description" style="text-align: left;font-family: Lora, serif;min-width: 30px;"><?php echo $comment ?></p>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    }
                                } 
                                ?>
                                    
                               
                            </div>
                            <section class="contact-clean">
                                <form method="post" style="margin-left: 0px;margin-right: 0px;width: 100%;max-width: 100%;padding-top: 20px;">
                                    <h2 class="text-center">Post Comment</h2>
                                    <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                                    <div class="mb-3"><textarea class="form-control" name="message" placeholder="Comment..." rows="14"></textarea></div>
                                    <div class="mb-3"><button class="btn btn-primary" type="submit">send </button></div>
                                </form>
                            </section>
                        </div>
                    </section>
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
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>