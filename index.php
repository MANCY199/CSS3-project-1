<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Our India Tour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <!--
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg2.jpg" class="d-block w-100" alt="..." height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg3.jpg" class="d-block w-100 " alt="..." height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg4.jpg" class="d-block w-100" alt="..." height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->




    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="bg2.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="bg3.jpg" class="d-block w-100" alt="..." height="500">
            </div>
            <div class="carousel-item">
                <img src="bg4.jpg" class="d-block w-100" alt="..." height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-3">
            <h3 class="text-center">About US</h3>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="aboutimg.jpg" height="50" class="img-fluid aboutimg">
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4">Welcome to Our Incredible India's tour!!</h2>
                    <p class="py-3">Wondering where to spend the vacations,so don;t worry and stop searching just spend your full vacations in India with us!! we will provide you all of your needs and will provide you the best India tour that suits your budget and your taste as well.</p>
                    <a href="About.php" class="btn btn-primary">Explore more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-3">
            <h3 class="text-center">Services</h3>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-lg-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="simg.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">PinkCity Jaipur</h4>

                        <a href="#" class="btn btn-primary">check profile</a>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-lg-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="simg1.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"> TajMahal </h4>

                        <a href="#" class="btn btn-primary">check profile</a>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-4 col-12">
                <div class="card">
                    <img class="card-img-top" src="simg1.jpg" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Red Fort</h4>

                        <a href="#" class="btn btn-primary">check profile</a>
                    </div>
                </div>
            </div>


        </div>

        </div>
    </section>

    <section class="my-5">
        <div class="py-3">
            <h3 class="text-center">Gallery</h3>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="simg2.jpg" class="img-fluid pb-2">
                </div>

            </div>

        </div>

    </section>

    <section class="my-5">
        <div class="py-3">
            <h3 class="text-center">Contact Us</h3>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">

                </div>

                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">

                </div>

                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control" name="comment" ></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
    </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@OurMGProductions</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>