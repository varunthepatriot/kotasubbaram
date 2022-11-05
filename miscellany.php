<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta content="" name="description">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="" property="og:title">
  <meta content="" property="og:type">
  <meta content="" property="og:url">
  <meta content="" property="og:image">

  <link href="site.webmanifest" rel="manifest">
  <link href="icon.png" rel="apple-touch-icon">
  <!-- Place favicon.ico in the root directory -->
  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <meta content="#fafafa" name="theme-color">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid" style="padding-left: 0px; padding-right: 0px">
  <div id="_header" class="headerbg">
    <!--partial:menu.partial.html -->
    <?php include 'templates/header.html'?>
    <!-- partial -->
  </div>
  <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; background-color: #a2d3f0;">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li>Miscellany</li>
      </ul>
    </div>
  </div>
  <!--Content-->
  <div id="cards_landscape_wrap-2" style=" background-color: #a2d3f0;">
    <div class="container">
      <div class="row">
        <div class="miscellanyWrapperDiv">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-6">
            <a href="acknow.php">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img alt="" src="img/misc1.png"/>
                  </div>
                  <div class="text-container">
                    <h6> Acknowledgements </h6>
                    <p style="font-size: 16px">Acknowledgements <a href="delineation.php" target="_self"><u><br><strong>View more..</strong></u></a></p>
                    <p><strong>Start your tour of my  Web Home</strong></p><br><br>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-6">
            <a href="delineation.php">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img alt="" src="img/misc2.png"/>
                  </div>
                  <div class="text-container">
                    <h6> Delineation</h6>
                    <p style="font-size: 16px">Journey from BHU, IIT, teachings & Research contributions in Physical Sciences <a href="delineation.php"><u><br><strong>Join me, will take you there...</strong></u></a></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!--about-->
      <div style="width:100%; line-height:65vm; margin-top: 20px; box-shadow: 3px 7px 5px 3px rgba(212,212,212,0.75);">
        <blockquote style="font-family: 'Roboto Condensed'; font-size: large; line-height: 2;">
          Most of the published work detailed here is several years old and has been in the public domain to
          apparently facilitate free access to all interested for legitimate use. .
        </blockquote>
      </div>
    </div>
  </div>

<!--Footer-->
  <div id="footer" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 10px 0px; background-color: #333">
    <?php include 'templates/footer.html'?>
  </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/script.js"></script>

<script name="toggle-grid" type="text/javascript">
  $(document).ready(function () {
    $(document).on("keypress", function (event) {
      // If 'alt + g' keys are pressed:
      if (event.which === 169) {
        $('#toggle-grid').toggle();
      }
    });

    $('#toggle-grid').on("click"
      , function () {
        $('.pixel-grid').toggle();
        $('#toggle-grid').toggleClass('orange');
      });
  });
</script>

</body>
</html>
