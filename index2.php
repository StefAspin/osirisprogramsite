
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main2.css" rel="stylesheet" />
    <link href="css/carousel.css" rel="stylesheet">
  </head>

<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" id="headerTitle" href="#">Osiris</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a
                href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/jumbotron.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>A New Way of Working</h1>
              <p>Combining a new architecture, methodology and quality practices,we are accelerating and improving our digital framework.</p>
              <p><a class="btn btn-lg btn-primary carouselButton" href="#" role="button">Find out more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="resources/citybanner1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary carouselButton" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary carouselButton" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->


<!-- START THE FEATURETTES -->
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading technicalText">Technical Stream. <span class="text-muted">A new foundation.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="./resources/technicalIcon.png">
      </div>
    </div>
    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading agileText">Agile Stream. <span class="text-muted">Delivering speed to value.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 col-md-pull-7">
        <img class="featurette-image img-responsive center-block" src="./resources/agileIcon.png">
      </div>
    </div>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading qualityText">Quality Stream. <span class="text-muted">First time, everytime.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" src="./resources/qualityIcon.png">
      </div>
    </div>
    <div class="row featurette">
      <div class="col-md-7 col-md-push-5">
        <h2 class="featurette-heading analyticsText">Analytics Stream. <span class="text-muted">Knowledge is power.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>
    </div>

    <!-- FOOTER -->
    <footer>
      <div class="footer">
        <div class="col-xs-12 inline-row" id="footerBanner">
          <div class="col-xs-4">
            <p>&copy; 2016 Company, Inc.</p>
          </div>
          <div class="col-xs-4">
            <p>
              <a href="#" class="footerLink">Privacy</a>
              <a href="#" class="footerLink">Terms</a>
            </p>
          </div>
          <div class="col-xs-4">
            <p class="pull-right"><a href="#headerTitle" class="footerLink">Back to top</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
