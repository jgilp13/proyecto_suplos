<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modulo Oferta | Suplos</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Favicon icon -->
    <link rel="icon" href="master/assets/images/ type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="master/assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="master/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="master/assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="master/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="master/assets/css/modal.css">
    <link rel="stylesheet" type="text/css" href="master/assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Pre-loader start -->
  <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <?php require_once 'header.php'; ?>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <?php require_once 'left_panel.php'; ?>
                    </nav>
                    <div class="toast" style="position: absolute;right: 0; z-index: 2" data-delay="3000">  
                <div class="toast-header" data-delay="3000">
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong class="mr-auto">Complete los campos solicitados</strong>
                </div>
                <div class="toast-body">
            </div>
            </div> 
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <?php require_once 'routing.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="master/assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="master/assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="master/assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="master/assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="master/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="master/assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="master/assets/js/modernizr/css-scrollbars.js"></script>

    <!-- am chart -->
    <script src="master/assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="master/assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="master/assets/pages/todo/todo.js "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="master/assets/js/script.js"></script>
    <script type="text/javascript" src="master/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript " src="master/assets/js/SmoothScroll.js"></script>
    <script src="master/assets/pages/chart/morris/morris-custom-chart.js"></script>
    <script src="master/assets/js/pcoded.min.js"></script>
    <script src="master/assets/js/demo-12.js"></script>
    <script src="master/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="master/assets/js/advertencia.js"></script><!--Advertencias-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!--Pop up-->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script> <!--Advertencias-->
    
</body>

</html>