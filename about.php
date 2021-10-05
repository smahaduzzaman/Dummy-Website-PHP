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

    <div class="mt-4 p-5 bg-primary text-white rounded w-5">
        <h1>a-Teacher</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae repellat earum unde inventore
            vel distinctio libero fugiat molestiae, accusamus ipsa aliquam rem consequatur
            error cum ipsam quae sit recusandae perferendis, voluptatibus odio
            temporibus illum dignissimos debitis. Nulla blanditiis dolores,
            cumque vitae quisquam asperiores esse reprehenderit.</p>
    </div>

    <!-- About Section Start Here -->
    <section>
        <div>
            <h2 class="text-center display-4 my-5">About Us</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid aboutimg" src="./images/indian.jpg" alt="university">
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

    <!-- Footer Section Start Here -->
    <?php
      include 'footer.php';
     ?>
    <!-- Footer Section End Here -->

</body>

</html>
