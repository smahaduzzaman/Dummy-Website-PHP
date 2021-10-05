<!DOCTYPE html>
<html lang="en">

<head>
    <title>a Teacher's Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Navbar Secton Start Here -->
    <?php
  include 'menu.php';
  ?>
    <!-- Navbar Secton End Here -->

    <!-- Carosel Section Start Here -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./images/learning.jpg" class="d-block w-100" alt="learning">
            </div>
            <div class="carousel-item">
                <img src="./images/school.jpg" class="d-block w-100" alt="school">
            </div>
            <div class="carousel-item">
                <img src="./images/teacher.jpg" class="d-block w-100" alt="teacher">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carosel Section End Here -->

    <!-- About Section Start Here -->
    <section>
        <div>
            <h2 class="text-center display-4 my-5">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid aboutimg" src="./images/lecture.jpg" alt="university">
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-5">
                    <h2>Here is the Sponser of a-Teacher</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae repellat earum unde inventore
                        vel distinctio libero fugiat molestiae, accusamus ipsa aliquam rem consequatur
                        error cum ipsam quae sit recusandae perferendis, voluptatibus odio
                        temporibus illum dignissimos debitis. Nulla blanditiis dolores,
                        cumque vitae quisquam asperiores esse reprehenderit.</p>
                    <button class="btn btn-warning" href="about.php">Checkout Here</button>
                </div>
                <div>

                </div>
            </div>
        </div>
    </section>
    <!-- About Section End Here -->

    <!-- Our Services Start Here -->
    <section>
        <div>
            <h2 class="text-center display-4 my-5">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row  text-center">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/teacher-day.jpg" class="card-img-top  text-center" alt="teacher">
                        <div class="card-body">
                            <h5 class="card-title">Science Group</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/teacher-day.jpg" class="card-img-top  text-center" alt="teacher">
                        <div class="card-body">
                            <h5 class="card-title">Arts Group</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/teacher-day.jpg" class="card-img-top  text-center" alt="teacher">
                        <div class="card-body">
                            <h5 class="card-title">Commerce Group</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Services End Here -->

    <!-- Gallery Section Start Here -->
    <section>
        <div>
            <h2 class="text-center display-4 my-5">Our Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img class="img-fluid pb-4" src="./images/gallery1.jpg" alt="gallery1">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img class="img-fluid pb-4" src="./images/gallery2.jpg" alt="gallery2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img class="img-fluid pb-4" src="./images/gallery3.png" alt="gallery3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img class="img-fluid pb-4" src="./images/gallery4.jpg" alt="gallery4">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img class="img-fluid pb-4" src="./images/gallery5.jpg" alt="gallery5">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img class="img-fluid pb-4" src="./images/gallery6.jpg" alt="gallery6">
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Section End Here -->

    <!-- Form Section Start Here -->
    <section>
        <div>
            <h2 class="text-center display-4 my-5">Touch With Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="./images/board-teach.jpg" alt="university">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <form action="userinfo.php" method="POST">
                        <div class="form-group>
            <label for=" user">Username</label> <br>
                            <input type="text" name="user" autocomplete="off" class="form-control">
                        </div>
                        <br>
                        <div class="form-group>
            <label for=" email">E-Mail</label> <br>
                            <input type="text" name="email" autocomplete="off" class="form-control">
                        </div>
                        <br>
                        <div class="form-group>
            <label for=" mobile">Mobile Number</label> <br>
                            <input type="number" name="mobile" autocomplete="off" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="comments">Your Message</label> <br>
                            <textarea name="comments" class="form-control"></textarea>
                            <!-- name="" id="" cols="30" rows="10" -->
                        </div>
                        <br>
                        <div>
                            <input type="submit" name="submit"
                                class="form-control bg-secondary text-uppercase text-white">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Section End Here -->

    <!-- Footer Section Start Here -->
    <?php
       include 'footer.php';
    ?>
    <!-- Footer Section End Here -->

</body>

</html>