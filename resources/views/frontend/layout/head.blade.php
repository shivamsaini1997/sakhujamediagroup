<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Site Title -->
    @stack('title')

  <!-- Site Favicon -->
  <link rel="shortcut icon" href="{{asset($globalSetting?$globalSetting->favicon: '')}}" type="image/x-icon">

  <!-- All CSS Files -->
  <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/progressbar.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('/backend/plugins/toastr/toastr.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/master.css')}}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css?v=' . time()) }}">


</head>

<body>
