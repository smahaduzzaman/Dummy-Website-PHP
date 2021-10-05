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

    <!-- Contacts Section Start Here -->
    <div class="jumbotron jumbotron-sm mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1">
                        Contact us <small>Feel free to contact us</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mt-5">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                                        required="required" />
                                </div>
                                <div class="form-group mt-5">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="form-group mt-5">
                                    <label for="subject">
                                        Subject</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Choose One:</option>
                                        <option value="service">General Customer Service</option>
                                        <option value="suggestions">Suggestions</option>
                                        <option value="product">Product Support</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                        required="required" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">
                            P:</abbr>
                        (123) 456-7890
                    </address>
                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </form>
            </div>
        </div>
    </div>
    <!-- Contacts Section End Here -->

    <!-- Footer Section Start Here -->
    <?php
  include 'footer.php';
  ?>
    <!-- Footer Section End Here -->

</body>

</html>
