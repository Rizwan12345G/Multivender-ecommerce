<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="frontend/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="frontend/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('Frontend.header')
        <!-- end header section -->

        <!-- slider section -->
        @include('Frontend.slider')
        <!-- end slider section -->
    </div>
    <!-- why section -->
    @include('Frontend.why')
    <!-- end why section -->

    <!-- arrival section -->
    @include('Frontend.arrival')
    <!-- end arrival section -->

    <!-- product section -->
    @include('Frontend.product')
    <!-- end product section -->

    <!-- subscribe section -->
    @include('Frontend.subscribe')
    <!-- end subscribe section -->
    <!-- client section -->
    @include('Frontend.client')
    <!-- end client section -->
    <!-- footer start -->
    @include('Frontend.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="frontend/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="frontend/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="frontend/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="frontend/js/custom.js"></script>
</body>

</html>
