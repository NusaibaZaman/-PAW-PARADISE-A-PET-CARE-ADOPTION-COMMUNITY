<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paw Paradise</title>
    <link rel="icon" href="home/mg/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="home/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="home/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="home/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="home/css/style.css">

    
</head>

<body>
    <!--::header part start::-->
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Header part end-->

    <!-- banner part start-->
    <?php echo $__env->make('home.adoptpart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- banner part start-->

    <!-- product list start-->
    <?php echo $__env->make('home.supplies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- product list end-->

    <!-- client review part here -->
    <?php echo $__env->make('home.reviews', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- client review part end -->

    <!-- subscribe part here -->
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="home/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.min.js"></script>
    <!-- magnific popup js -->
    <script src="home/js/jquery.magnific-popup.js"></script>
    <!-- carousel js -->
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="home/js/slick.min.js"></script>
    <script src="home/js/jquery.counterup.min.js"></script>
    <script src="home/js/waypoints.min.js"></script>
    <script src="home/js/contact.js"></script>
    <script src="home/js/jquery.ajaxchimp.min.js"></script>
    <script src="home/js/jquery.form.js"></script>
    <script src="home/js/jquery.validate.min.js"></script>
    <script src="home/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html><?php /**PATH D:\Laravel\paw2\resources\views/home/userpage.blade.php ENDPATH**/ ?>