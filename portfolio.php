<?php
require('userdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" /> -->
  <!-- the above link make the body white and disturbs the navbar alignment -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/30c494f2e9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/30c494f2e9.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./index.css">
  <title>Blacksmith</title>
</head>

<body onload="loading()">
  <div id="web-loader"></div>
  <div class="header container-fluid">
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
  <main>
    <div class="container-fluid portfolio" style="background-color: rgb(0, 0, 0); margin-top: 20rem;">
    <?php
          $sql = "SELECT * FROM portfolio";
          $result = mysqli_query($db, $sql);
          mysqli_fetch_all($result, MYSQLI_ASSOC);
          $fourblocks = 0;
          foreach ($result as $row){
            if($fourblocks == 0){
              ?>
              <div class="row pt-5 pb-5 portfolio__row"> <?php
              }
            
              echo $row['model_id'];
              $fourblocks++;
              ?>
              <div class="col portfolio__col" data-bs-toggle="modal" data-bs-target="#modal-one">
              <div class="card portfolio__card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <div class="sketchfab-embed-wrapper">
                    <iframe title="Bulky Knight" frameborder="0" allowfullscreen class="portfolio__iframe"
                      mozallowfullscreen="true" webkitallowfullscreen="true"
                      allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport
                      execution-while-not-rendered web-share
                      src="<?=$row['model_embed']?>"></iframe>
                    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                      <a href="<?=$row['model_link']?>"
                        target="_blank" style="font-weight: bold; "> <?=$row['model_name']?></a> by
                      <a href="<?=$row['model_user_link']?>"
                        target="_blank" style="font-weight: bold; "><?=$row['model_user']?></a> on
                      <a href="<?=$row['model_site_link']?>"
                        target="_blank" style="font-weight: bold; "><?=$row['model_site']?></a>
                    </p>
                  </div>
                </div>
    
              </div>
            </div>
            <div class="modal fade portfolio__modal " id="modal-one" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true" style="width: 300rem;">
              <div class="modal-dialog container">
                <div class="modal-content portfolio__modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title portfolio__modal--title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="sketchfab-embed-wrapper">
                      <iframe title="Bulky Knight" frameborder="0" allowfullscreen class="portfolio__iframe"
                        mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="<?=$row['model_embed']?>"></iframe>
                      <p style="font-size: 1rem; font-weight: normal; margin: 5px; color: #4A4A4A;">
                        <a href="<?=$row['model_link']?>"
                          target="_blank" style="font-weight: bold; "> <?=$row['model_name']?></a> by
                        <a href="<?=$row['model_user_link']?>"
                          target="_blank" style="font-weight: bold; "> <?=$row['model_user']?></a> on
                        <a href="<?=$row['model_site_link']?>"
                          target="_blank" style="font-weight: bold; "><?=$row['model_site']?></a>
                      </p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            
            
            <?php
              if($fourblocks == 4){
              ?>
              </div> <?php
              $fourblocks = 0;
              }

          }
            ?>

  </main>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <img src="./images/logo_bottomText.png" alt="" class="footer-logo">
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li>
              <a href="#">FAQ</a>
            </li>
            <li>
              <a href="#">shipping</a>
            </li>
            <li>
              <a href="#">returns</a>
            </li>
            <li>
              <a href="#">order status</a>
            </li>
            <li>
              <a href="#">payment options</a>
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li>
              <a href="#">watch</a>
            </li>
            <li>
              <a href="#">bag</a>
            </li>
            <li>
              <a href="#">shoes</a>
            </li>
            <li>
              <a href="#">dress</a>
            </li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
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

    $(window).scroll(function () {
      if (window.scrollY > 100) {
        document.getElementById("FirstHeader").classList.add("scrolled");
        document.getElementById("SecondHeader").classList.add("scrolled");
      } else {
        document.getElementById("FirstHeader").classList.remove("scrolled");
        document.getElementById("SecondHeader").classList.remove("scrolled");
        document.getElementById("FirstHeader").classList.add("unscrolled");
        document.getElementById("SecondHeader").classList.add("unscrolled");
      }
    });

    $(document).ready(function () {
      $(".carousel").carousel({
        interval: 350 * 10,
        pause: "false",
      });
    });
  </script>
</body>

</html>