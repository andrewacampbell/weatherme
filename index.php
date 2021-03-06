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

    <title>findmyweather</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-md-offset-3 center">
                <h1 class="center white">Weather Finder</h1>
                <p class="center white lead bold">Enter your city to get Weather status</p>

              <form action="">

                  <div class="form-group">

                    <input type="text" id="location" class="form-control" placeholder="Eg: New York, Paris, Rome">

                  </div>

                  <input type="submit" id="btnweather" class="btn btn-success btn-lg forcast " value="Get Forcast">

              </form>
                 <div id="success" class="alert alert-success white">Success!</div>

                 <div id="failed" class="alert alert-success white">No Result for that location.</div>

                  <div id="nocity" class="alert alert-success">Please enter a city.</div>

                 <footer class="center white"> &copy; Fizure.inc <?php echo date('Y'); ?></footer>
            </div>

        </div>
           
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>