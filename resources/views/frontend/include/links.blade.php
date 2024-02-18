<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @foreach($utilities as $key => $item)

    <title>{{$item->title}}</title>

    <meta name="description" content="{{$item->description}}">

    <meta name="author" content="{{$item->title}}">

    <link rel="icon" type="frontend/image/png" href="frontend/assets/uploads/{{$item->faveicon}}">

    <!-- <title>MidasTouchExchange - Assets and Portfolio Management</title> -->

    <!-- <meta name="description" content="Buscom - Multipurpose Business and Corporate Template"> -->

    <!-- <link rel="shortcut icon" href="frontend/assets/images/pfavi.png" type="image/x-icon"> -->

    @endforeach


    <!-- ========== Start Stylesheet ========== -->
    <link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/assets/css/themify-icons.css" rel="stylesheet">
    <link href="frontend/assets/css/elegant-icons.css" rel="stylesheet">
    <link href="frontend/assets/css/flaticon-set.css" rel="stylesheet">
    <link href="frontend/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="frontend/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="frontend/assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="frontend/assets/css/animate.css" rel="stylesheet">
    <link href="frontend/assets/css/bootsnav.css" rel="stylesheet">
    <link href="frontend/assets/css/style.css" rel="stylesheet">
    <link href="frontend/assets/css/responsive.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->


</head>

<body>

    <div class="preloader">
        <div class="inner">

        </div>
    </div>