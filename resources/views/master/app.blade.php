<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/bigdeal/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jul 2021 11:46:55 GMT -->

<head>
  <title>Bigdeal - Multi-purpopse E-commerce Html Template</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="big-deal">
  <meta name="keywords" content="big-deal">
  <meta name="author" content="big-deal">
  <link rel="icon" href="{{ asset('vendor/themes/images/favicon/favicon.png') }}" type="image/x-icon">
  <link rel="shortcut icon" href="{{ asset('vendor/themes') }}/images/favicon/favicon.png" type="image/x-icon">

  <!--Google font-->
  <link href="fonts.googleapis.com/css0679.css?family=PT+Sans:400,700&amp;display=swap" rel="stylesheet">
  <link href="fonts.googleapis.com/csse7ca.css?family=Raleway&amp;display=swap" rel="stylesheet">

  <!--icon css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/themify.css">


  <!--Slick slider css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/slick.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/slick-theme.css">

  <!--Animate css-->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/animate.css">
  <!-- Bootstrap css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/bootstrap.css">

  <!-- Theme css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendor/themes') }}/css/color2.css" media="screen" id="color">
</head>

<body class="bg-light">
  @include('master.nav')
  <!-- loader start -->
  <div class="loader-wrapper">
    <div>
      <img src="{{ asset('vendor/themes') }}/images/loader.gif" alt="loader">
    </div>
  </div>
  <!-- loader end -->
  @yield('master-page')


  <script src="https://use.fontawesome.com/bb34672705.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
  <!-- latest jquery-->
  <script src="{{ asset('vendor/themes') }}/js/jquery-3.3.1.min.js"></script>

  <!-- slick js-->
  <script src="{{ asset('vendor/themes') }}/js/slick.js"></script>

  <!-- popper js-->
  <script src="{{ asset('vendor/themes') }}/js/popper.min.js"></script>
  <script src="{{ asset('vendor/themes') }}/js/bootstrap-notify.min.js"></script>

  <!-- menu js-->
  <script src="{{ asset('vendor/themes') }}/js/menu.js"></script>

  <!-- timer js -->
  <script src="{{ asset('vendor/themes') }}/js/timer2.js"></script>

  <!-- Bootstrap js-->
  <script src="{{ asset('vendor/themes') }}/js/bootstrap.js"></script>

  <!-- tool tip js -->
  <script src="{{ asset('vendor/themes') }}/js/tippy-popper.min.js"></script>
  <script src="{{ asset('vendor/themes') }}/js/tippy-bundle.iife.min.js"></script>

  <!-- father icon -->
  <script src="{{ asset('vendor/themes') }}/js/feather.min.js"></script>
  <script src="{{ asset('vendor/themes') }}/js/feather-icon.js"></script>

  <!-- Theme js-->
  <script src="{{ asset('vendor/themes') }}/js/modal.js"></script>
  <script src="{{ asset('vendor/themes') }}/js/script.js"></script>
  <script>
    $(document).ready(function() {
        $('.color-picker').hide()
    })
  </script>
</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jul 2021 11:46:55 GMT -->

</html>