<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  @foreach($utilities as $key => $item)

  <title>{{$item->title}} - Admin</title>

  <link rel="icon" type="frontend/image/png" href="frontend/assets/uploads/{{$item->faveicon}}">
  @endforeach

  <!-- plugins:css -->
  <link rel="stylesheet" href="../backend/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../backend/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../backend/assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../backend/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../backend/assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../backend/assets/css/style.css">
  <!-- End layout styles -->

  <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/extensions/sweetalert2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css') }}">
</head>

<body>