<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />

    <title>PortFolio</title>
    <!-- Reflux Template https://templatemo.com/tm-531-reflux -->

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css" />
    <link rel="stylesheet" href="../assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="../assets/css/owl.css" />
    <link rel="stylesheet" href="../assets/css/lightbox.css" />
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="../assets/images/lucie.jpg" alt="" /></a>
              <!-- Photo de profil -->
            </div>
            <div class="author-content">
              <h4>LEPRETRE Lucie</h4>
              <span>Bachelor Animation 3D <br />et jeux vidéos</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section2">Mon CV</a></li>
                <li><a href="#section3">Me contacter</a></li>
                <li><a href="javascript:void(0);" onclick="history.back();">Retour</a></li>
              </ul>
            </nav>
            <div class="image">
              <a href="https://www.ynov.com/campus/lille">
                <img src="../assets/images/logoynov.jpg" alt="" />
              </a>
            </div>
            
            <div class="copyright-text">
              <p>Lille Ynov Campus</p>
              </div>
          </div>
        </div>
      </div>

      <!-- Photos -->
      <section class="section about-me" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>Photos</h2>
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
              <form class="isotope-toolbar">
                <label><input type="radio" data-type="*" checked name="isotope-filter" /></label>
                <label><input type="radio" data-type="cv" name="isotope-filter" /><span>CV</span></label>
                <label><input type="radio" data-type="download" name="isotope-filter" /><span>Télécharger en PDF</span></label>
              </form>

              <div class="isotope-box">
                <div class="isotope-item" data-type="cv">
                  <figure class="snip1321">
                    <img src="../assets/images/cv_lucie.jpg" alt="CV Lucie" />
                    <figcaption>
                      <a href="../assets/images/cv_lucie.jpg" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Voir</h4>
                      <span>Cliqué pour agrandir</span>
                    </figcaption>
                  </figure>
                </div>

                <div class="isotope-item" data-type="download">
                  <figure class="snip1321">
                    <img src="../assets/images/qrcode_cv.png" alt="QR Code" />
                    <br><br>
                    <div class="white-button">
                    <a href="../assets/images/cv_3d_lucie.pdf" download="cv_3d_lucie.pdf">Scanne le QR CODE ou clique ici pour le Télécharger</a>
                    </div>
                    <figcaption>
                      <a href="../assets/images/qrcode_cv.png" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                      <h4>Voir</h4>
                      <span>Cliqué pour agrandir</span>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Me contacter -->
      <section class="section my-services" data-section="section3">
        <div class="container">
          <div class="section-heading">
            <h2>Me contacter</h2>
            <div class="line-dec"></div>
            <span>Voici mes coordonnées pour plus de renseignement</span>
          </div>
          <div>
            <div class="container">
              <h1>Mes Coordonnées</h1>
              <div class="contact-info">
                <h2>Email :</h2>
                <p><a href="mailto:lucielululepretre@gmail.com">lucielululepretre@gmail.com</a></p>
              </div>
              <div class="contact-info">
                <h2>Téléphone :</h2>
                <p><a href="tel:+33698448270">+33 6 98 44 82 70</a></p>
              </div>
              <div class="contact-info">
                <h2>Adresse :</h2>
                <p>4 Boulevard de l'usine<br />59800 Lille<br />France</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Scripts -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/isotope.min.js"></script>
      <script src="../assets/js/owl-carousel.js"></script>
      <script src="../assets/js/lightbox.js"></script>
      <script src="../assets/js/custom.js"></script>
      <script>
        $(".main-menu li:first").addClass("active");

        var showSection = function showSection(section, isAnimate) {
          var direction = section.replace(/#/, ""),
            reqSection = $(".section").filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $("body, html").animate(
              {
                scrollTop: reqSectionPos,
              },
              800
            );
          } else {
            $("body, html").scrollTop(reqSectionPos);
          }
        };

        var checkSection = function checkSection() {
          $(".section").each(function () {
            var $this = $(this),
              topEdge = $this.offset().top - 80,
              bottomEdge = topEdge + $this.height(),
              wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var currentId = $this.data("section"),
                reqLink = $("a").filter("[href*=\\#" + currentId + "]");
              reqLink.closest("li").addClass("active").siblings().removeClass("active");
            }
          });
        };

        $(".main-menu").on("click", "a", function (e) {
          e.preventDefault();
          showSection($(this).attr("href"), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
      </script>
    </div>
  </body>
</html>
