<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  
   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        i.fa.fa-user.act {
        color: #f9b12e;
        animation:blink 1s linear infinite; 
     }
     @keyframes blink{
         50%{
             opacity:.3;
         }
     }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="home.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Menus</li><!-- /.menu-title -->
                   
                    
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sub Menus</a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-calendar fa-lg"></i><a href="Book.php">Booking Form</a></li>
                           <li><i class="fa fa-check-circle"></i><a href="check.php">Check Availablity</a></li>
                        </ul>
                    </li>

                 

                   
              

            
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <b>Dashboard</b>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user act" style="font-size:45px;margin-right:23px;"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                
                <!-- /Widgets -->
                <!--  Traffic  -->
                
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
                
                <!-- /.orders -->
                <!-- To Do and Live Chat -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Book Event</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" >
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Event Name</label>
                                                <input id="cc-payment" name="ename" type="text" class="form-control" placeholder="Enter a event name" aria-required="true" aria-invalid="false" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Mobile No</label>
                                                <input id="cc-payment" name="mno" type="number" class="form-control" placeholder="Enter a Mobile No" aria-required="true" aria-invalid="false" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="cc-name" class="control-label mb-1">Start Date</label>
                                                <input id="cc-name" name="from" type="date" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the date" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-number" class="control-label mb-1">End Date</label>
                                                <input id="cc-number" name="to" type="date" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="row">
                                               
                                                <div class="col-6">
                                                   
                                                    
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="s" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-calendar fa-lg"></i>&nbsp;
                                                    <span id="payment-button-amount">Book</span>
                                                    <span id="payment-button-sending" style="display:none;">Adding..</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> 

                    </div>
                    <div class="col-lg-6">
                       <?php if(isset($_GET['status'])){
                           $st=$_GET['status'];
                           if($st==1){?>
                            <div class="card-body">
                                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">                                       
                                        Booking successful
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                           </div>       
                           <?php }else{?>
                            <div class="card-body">
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">                                       
                                    Date is Already Booked Please Select Another
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                           </div>
                            
                           <?php } } ?>
                       
                      
                </div>
               
            </div>
         
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
       
    </div>
    <?php
if(isset($_POST['s'])){
    $con=mysqli_connect("localhost","root","","test");
$event=mysqli_real_escape_string($con,$_POST['ename']);
$mno=mysqli_real_escape_string($con,$_POST['mno']);
$from=mysqli_real_escape_string($con,date('Y-m-d',strtotime($_POST['from'])));
$to=mysqli_real_escape_string($con,date('Y-m-d',strtotime($_POST['to'])));

$res=$con->query("select * from booking where Start='$from' OR  End='$to'");
$cnt=mysqli_num_rows($res);
if($cnt==0){
    $sql="insert into booking values(NULL,'$event','$mno','$from','$to')";
    $con->query($sql);
    echo '<script>window.location="book.php?status=1"</script>';
   
}else{
    echo '<script>window.location="book.php?status=0"</script>';
   
}



}


?>


    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
   
    <!--Local Stuff-->

</body>
</html>
