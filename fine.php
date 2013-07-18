<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Garmin CP TEST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS: BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- CSS: FONT AWESOME -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">

</head>

<body>

    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Get data from Garmin device</h1>
          <h4>Step 2/2</h4>
        </div>
        <p class="lead">This application automatically detect if the Communicato Plugin is correctly installed on the browser, if there are Garmin devices connected and it automatically exctract some basic information from the device.</p>
        <div class="row">
          <div class="span4">
            <p>In this example the data received from the Garmin device are printed on the page with the <em>echo</em> PHP funcion. Of course, you can easily manage these data (i.e.: sending them to a database).</p>
            <p>Thank you!</p>
          </div>
          <div class="span8">
            <div class="well">
              <h4 class="muted">Product Name:</h4>
              <h2><?php echo $_POST["myName"]; ?></h2>
            </div>
            <div class="well">
              <h4 class="muted">Product ID:</h4>
              <h2><?php echo $_POST["myId"]; ?></h2>
            </div>
            <div class="well">
              <h4 class="muted">Product Part Number:</h4>
              <h2><?php echo $_POST["myPartNumber"]; ?></h2>
            </div>
            <div class="well">
              <h4 class="muted">Product Description:</h4>
              <h2><?php echo $_POST["myDescription"]; ?></h2>
            </div>
            <div class="well">
              <h4 class="muted">Product SW Version:</h4>
              <h2><?php echo $_POST["mySwVersion"]; ?></h2>
            </div>
          </div>
        </div><!-- /raw -->       
      </div><!-- /container -->

      
    </div><!-- /wrap -->

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">Curtesy of <a href="http://www.giuseppegarbin.com">Giuseppe Garbin</a>.</p>
      </div>
    </div>

  </body>
</html>