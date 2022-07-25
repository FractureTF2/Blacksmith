<?php
require('userdb.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" /> -->
  <!-- the above link make the body white and disturbs the navbar alignment -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/30c494f2e9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./index.css" />

  <title>Blacksmith</title>
</head>

<body onload="loading()">
  <div id="web-loader"></div>

  <div id="mainbody">
    <div class="header">
      <header class="fixed-top " id="FirstHeader">
        <nav class="header__navbar navbarclass ">
            <div class="header__logo ">
                <a href="./index.html">
                    <img
                        src="./images/logo.png"
                        alt="Logo"
                        class="header__logo--image"
                        id="header__logo"
                    >
                </a>
            </div>
            <ul class="header-navbar ">
                <!-- <li class="header-navbar__item">
                <a class="header-navbar__link "><img src="./images/logo.png" alt="" class="header-navbar__link-logo"></a>
            </li> -->
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./portfolio.html">Portfolio</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./games.html">Games</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./blogs.html">Blog</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./purchase.html">Purchase</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./about.html">About</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./career.html">Career</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./services.html">Services</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link header1-hovereffect" href="./contactUs.html">Contact</a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link" href="">
                        <i class="fa fa-brands fa-facebook-f fa-1x"></i>
                    </a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link" href="">
                        <i class="fa fa-brands fa-twitter"></i>
                    </a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link" href="">
                        <i class="fa fa-brands fa-pinterest"></i>
                    </a>
                </li>
                <li class="header-navbar__item">
                    <a class="header-navbar__link" href="">
                        <i class="fa fa-brands fa-youtube"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

      <header class="fixed-top-2" id="SecondHeader">
        <nav class="header navbarclass">
          <ul class="header-navbar">
            <li class="header-navbar__item">
              <a class="header-navbar__link" href="">Services</a>
            </li>
            <li class="header-navbar__item">
              <a class="header-navbar__link" href="">Portfolio</a>
            </li>
            <li class="header-navbar__item">
              <a class="header-navbar__link" href="">Gallery</a>
            </li>
            <li class="header-navbar__item">
              <a class="header-navbar__link" href="">Clients</a>
            </li>
            <li class="header-navbar__item">
              <a class="header-navbar__link" href="">Reviews</a>
            </li>
          </ul>
        </nav>
      </header>
    </div>

    <!-- slider -->

    <div class="container-fluid" style="height: 50vh; width: 100vw; padding: 0">
      <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="carousel-caption">
              <h3>First slide label</h3>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl
                consectetur.
              </p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <h3>Second slide label</h3>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl
                consectetur.
              </p>
            </div>
          </div>
          <div class="item">
            <div class="carousel-caption">
              <h3>Third slide label</h3>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl
                consectetur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slider Ended -->
    <main>
      <div class="container">
        <dic class="row">
          <p class="h1 ml-5 mb-5 mt-5 text-white">Technology & Services</p>
        </dic>
      </div>

      <?php
        $sql = "SELECT * FROM services";
        $result = mysqli_query($db, $sql);
        mysqli_fetch_all($result, MYSQLI_ASSOC);
        $resultsetconst = 0;
        var_dump($result);
        foreach ($result as $row){
         
          $resultset[$resultsetconst++] = $row;
        }
      ?>

      <div class="container">
        <div class="row services__cardRow-1">
          <div class="col">
            <div data-aos="fade-up-right" data-aos-duration="2000">
              <div class="cardRow__card--services services__card-1">
                <div class="card-body">
                  <h5 class="services__card-title"><em><?= $resultset[0]['service_name'] ?></em></h5>
                  <h5 class="services__card-detail"><em><?= $resultset[0]['service_detail'] ?></em></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div data-aos="fade-up-left" data-aos-duration="3000">
              <div class="cardRow__card--services services__card-2">
                <div class="card-body">
                  <h5 class="services__card-title"><?= $resultset[1]['service_name'] ?></h5>
                  <h5 class="services__card-detail"><em><?= $resultset[1]['service_detail'] ?></em></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div data-aos="fade-up-left" data-aos-duration="3000">
              <div class="cardRow__card--services services__card-3">
                <div class="card-body">
                  <h5 class="services__card-title"><?= $resultset[2]['service_name'] ?></h5>
                  <h5 class="services__card-detail"><em><?= $resultset[2]['service_detail'] ?></em></h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row services__cardRow-2">
          <div class="col">
            <div data-aos="fade-up-right" data-aos-duration="2000">
              <div class="cardRow__card--services services__card-4">
                <div class="card-body">
                  <h5 class="services__card-title"><em><?= $resultset[3]['service_detail'] ?></em></h5>
                  <h5 class="services__card-detail"><em><?= $resultset[3]['service_detail'] ?></em></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div data-aos="fade-up-left" data-aos-duration="3000">
              <div class="cardRow__card--services services__card-5">
                <div class="card-body">
                  <h5 class="services__card-title"><?= $resultset[4]['service_detail'] ?></h5>
                  <h5 class="services__card-detail"><em><?= $resultset[4]['service_detail'] ?></em></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div data-aos="fade-up-left" data-aos-duration="3000">
              <div class="cardRow__card--services services__card-6">
                <div class="card-body">
                  <h5 class="services__card-title"><?= $resultset[5]['service_detail'] ?></h5>
                  <h5 class="services__card-detail"><em><?= $resultset[5]['service_detail'] ?></em></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <img src="./images/logo_bottomText.png" alt="" class="footer-logo" />
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">watch</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">dress</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script src="./index.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.12.1/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script>
    AOS.init();
    $(document).ready(function () {
      $(".carousel").carousel({
        interval: 350 * 10,
        pause: "false",
      });
    });
    
  </script>
</body>

</html>