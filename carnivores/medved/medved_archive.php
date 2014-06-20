
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>mèdved @ carnivores</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modify.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../medved/medved.php">carnivores / mèdved </a>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="../index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">tools<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="medved.php">mèdved</a></li>
                <li><a href="../aquila/">aquila</a></li>
              </ul>
            </li>
            <li class='active'>
              <a href="medved_archive.php">archive</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container visible-xs" style='height:1em'></div>
    <div class="container visible-sm visible-md visible-lg" >
      <div class="page-header">
        <h1><a href='medved_archive.php'><img src="../img/medved.png" alt="medved-logo"></a>mèdved <small> archive</small></h1>
      </div>
    </div>

    <!-- ARCHIVE CONTENT -->
    <div class='container archive table-responsive hidden-xs'>
      <table class="table table-condensed table-hover archive_table" id="" >
        <tr>
          <th>#</th>
          <th>domain</th>
          <th>server</th>
          <th>date</th>
          <th style='text-align:center'>records</th> 
          <th style='text-align:center'>download</th>
        </tr>
      </table>
    </div>
    <div class='container archive table-responsive visible-xs'>
      <table class="table table-condensed table-hover archive_table" id="" style='font-size: 0.8em'>
        <tr>
          <th>#</th>
          <th>domain</th>
          <th>server</th>
          <th>date</th>
          <th style='text-align:center'>records</th> 
          <th style='text-align:center'>download</th>
        </tr>
      </table>
    </div>

    <!-- END ARCHIVE CONTENT -->
    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <script>
    $(document).ready( function (){
        $.getJSON( "medved_ajax.php?archive<?php if ( isset( $_GET['domain'] ) ) { $domain = $_GET['domain']; echo '='.$domain; } ?>", function( data ) {
          console.log(data);
            for (var i = 0; i < data.length ; i++ ){
              if (data[i].domain ){
                  var anchor = "<a href='"+ data[i].url +"'>" + "<span class='glyphicon glyphicon-cloud-download'></span>" + "</a>";
                  var table_row    = "<tr><td>"+(i+1)+"</td><td><a href='medved_archive.php?domain="+ data[i].domain +"'>"+ data[i].domain +"</a></td><td>"+ data[i].server +"</td><td>"+ data[i].date +"</td><td style='text-align:center'>"+ data[i].number_of_records +"</td><td style='text-align:center'>"+ anchor +"</td></tr>";
                  $('.archive_table').append(table_row);
              }
            }
        });
    });
    

    </script>
    <script src='../js/shortcut.js'></script>
    <script>
      shortcut.add("Alt+Shift+m",function() {
        window.location.href = 'medved.php';
      });
      shortcut.add("Alt+Shift+a",function() {
        window.location.href = 'medved_archive.php';
      });
    </script>
  </body>
</html>
