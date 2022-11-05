<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Feedback</title>
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
  <div class="container-fluid" style="padding-left: 0px; padding-right: 0px">
    <div class="headerbg">
      <?php include 'templates/header.html'?>
    </div>
    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; background-color: #eee;">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="home.php">Home</a></li>
          <li>Feedback</li>
        </ul>
      </div>
    </div>
    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px; margin-bottom: 30px;">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px; line-height: 28px;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"
               style="background-color: rgb(239, 239, 239); width: 100%; margin: 70px auto; padding: 0;">
            <section>
              <div>
                <div class="row">
                  <div class="col-sm-12" >
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div>
                          <h2>CONTACT US</h2>
                        </div>
                        <form action="forms/sendmail.php" method="post" data-form-title="CONTACT US">
                          <input type="hidden" data-form-email="true">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                          </div>
                          <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                          </div>
                          <div>
                            <button name="formId" value="1" type="submit" class="btn btn-lg btn-danger">CONTACT US</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><br>
          </div>
        </div>
      </div>
    </div>
  </div>
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
</body>
</html>


