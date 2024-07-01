<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Prime Appliance</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Date Range Picker css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between logo_container">
      <a href="../index.html" class="logo d-flex align-items-center">
        <!-- <img src="../assets/img/logo.png" alt=""> -->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 282.2 75.9" style="enable-background:new 0 0 282.2 75.9;" xml:space="preserve">
          <style type="text/css">
            .secondary{fill:#03037F;}
            .primary{fill:#ED1C24;}
          </style>
          <g id="icon">
            <path class="secondary" d="M38.9,19.1c0,0,0.1,0,0.2,0.1c0.9-4.2,3.6-6.9,6.8-9.4c-0.4,0-0.7,0-1,0c-0.7,0.1-1.1,0.6-1.5,1   c-2.1,1.8-3.5,4.1-4.1,6.8C39.1,18,39,18.5,38.9,19.1 M52,30.5c1.1,0.3,2.4,0.6,3.5,0.9c1.2,0.3,2.4,0.7,3.6,1   c1.8,0.6,3.6,1.1,5.4,1.7c1.5,0.5,3.1,1.1,4.6,1.7c1.4,0.6,2.8,1.1,4.2,1.7c0.7,0.3,1.2,0.2,1.8-0.1C68.8,33.9,56.1,30.5,52,30.5    M39.5,32c-4.3,0-8.5-0.1-12.7-0.1c0,0,0,0-0.1-0.1c0-0.5,0.1-1,0.2-1.5c0.3-1.4,0.6-2.9,0.9-4.3c0.4-1.9,0.9-3.8,1.4-5.7   c0.2-0.9,0.5-1.7,0.6-2.6c0.2-1.4,0.9-2.4,1.8-3.4c2-2.2,4.4-3.7,7.1-4.7c1.6-0.6,3.1-1.1,4.8-1.4c0.6-0.1,1.3-0.2,2-0.3   C46,6.2,46.7,5.5,48,5.5c1.2,0,2,0.8,2.3,2.4c0.3,0.1,0.6,0.2,0.9,0.2c1.4,0.1,2.8,0.6,4.2,1.1c2.7,1,5.1,2.6,7.4,4.3   c1.8,1.3,3.5,2.8,4.7,4.7c0.9,1.4,1.4,3.1,1.4,4.8c0,1.1,0,2.3-0.1,3.4c-0.1,0.8-0.3,1.5-0.4,2.3c-0.1,0.9-0.3,1.7-0.4,2.6   c0.1,0.1,0.2,0.2,0.3,0.2c1,0.3,2,0.6,2.9,1c1,0.3,1.9,0.7,2.9,1.1c1.4,0.6,2.8,1.1,4.2,1.7c1.4,0.6,2.9,1.3,4.3,2   c1.1,0.6,2.3,1.2,3.4,2c0.6,0.4,1.1,1,1.5,1.6c0.7,1,0.5,2.1-0.4,3.1c-1.1,1.3-2.6,2.1-4.2,2.6c-1.9,0.6-3.8,0.7-5.8,0.4   C77,47,77,47,77,46.9c-0.7-1-1.4-2-2.2-2.9c-0.8-0.9-1.9-1.4-3-2c-4.2,1.5-8.4,2.9-12.9,3.1c0.3,0.5,0.7,1,1,1.5   c0.3,0.6,0.3,1.3,0.1,2c0,0.2-0.3,0.4-0.5,0.6c-0.8-0.2-0.9-0.3-0.9-1c0.1-0.9-0.2-1.5-1-2c-0.9-0.5-2,0-2.5,0.9   c0,0.1-0.1,0.3-0.2,0.4c-0.1,0.3-0.3,0.5-0.6,0.6c-0.3,0-0.6-0.2-0.7-0.5c0,0,0-0.1-0.1-0.2c0.1-1,0.7-1.7,1.4-2.3   c-0.9-0.2-1.7-0.3-2.4-0.6c-1.4-0.4-2.7-0.9-3.9-1.7c-1.7-1.1-3.1-2.3-4.4-3.8c-1.1-1.2-2.1-2.6-2.9-4c-0.5-0.8-0.9-1.6-1.3-2.4   C39.7,32.2,39.6,32.1,39.5,32"/>
            <path class="primary" d="M75.8,47.6c0.7,0.1,1.4,0.2,2.1,0.3c-0.1,0.4-0.1,0.8-0.2,1.1c-0.3,1.7-0.7,3.3-1,4.9   c-0.1,0.4-0.2,0.9-0.3,1.3c0,0.4-0.3,0.5-0.6,0.6c-1.9,0.1-3.9,0.2-5.8,0.3c-0.5,0-1,0.1-1.6,0.2c-0.2,0.3-0.4,0.6-0.6,1   c-0.7,1-1.4,2-2,3c-0.1,0.1-0.2,0.3-0.3,0.4c0.8,2.4,1.6,4.8,2.4,7.3c-2.6,1.7-5.2,3.4-7.8,5.2c-1-0.9-1.9-1.7-2.9-2.6   c-0.9-0.9-1.9-1.7-2.8-2.6c-0.9,0.2-1.8,0.4-2.7,0.6c-0.7,0.2-1.5,0.3-2.2,0.5c-0.2,0-0.5,0.3-0.6,0.5c-0.8,1.5-1.6,3.1-2.4,4.6   c-0.3,0.6-0.6,1.1-0.9,1.7c-2.8-0.6-5.5-1.1-8.1-1.7c-0.1-1.1-0.2-2-0.3-3c0-1-0.1-2-0.1-3s-0.3-1.8-1.2-2.4   c-1.1-0.7-2.2-1.5-3.3-2.3c-2.4,0.8-4.8,1.5-7.3,2.3c-1.7-2.6-3.4-5.2-5.1-7.8c1.7-2,3.4-3.8,5.1-5.7c-0.3-1.7-0.6-3.5-1-5.3   c-2.3-1.1-4.6-2.3-6.8-3.5c0.6-3.1,1.3-6,1.9-9.1c0.5-0.1,0.9-0.2,1.4-0.2c0.9-0.1,1.9-0.1,2.9-0.1c1.1,0,2.2-0.1,3.3-0.2   c0.2,0,0.4-0.2,0.6-0.4s0.3-0.4,0.4-0.6h2.9c-0.1,0.2-0.1,0.3-0.2,0.4c-1.4,2-2.3,4.3-3,6.7c-0.2,0.9-0.3,1.7-0.5,2.6   c-0.1,1-0.2,2-0.2,3.1c0,1.3,0.3,2.6,0.4,3.8c0.3,1.7,0.9,3.4,1.6,5c0.9,1.8,1.9,3.4,3.2,4.9c1.4,1.6,2.9,2.9,4.6,4   c1.9,1.2,4,2.2,6.3,2.7c2.5,0.6,5,0.6,7.5,0.3c4.3-0.7,8-2.4,11.2-5.3c2.3-2.1,4.1-4.6,5.4-7.6c0.6-1.5,1.2-3.1,1.4-4.8   c0.1-1.2,0.2-2.5,0.3-3.7c0-0.3,0-0.7,0-1.1c0.8-0.3,1.5-0.6,2.2-0.8c1.3,0.7,2.5,1.4,3.7,1.9c0.7,0.3,0.9,0.8,0.9,1.4   C75.6,46.8,75.7,47.2,75.8,47.6"/>
            <path class="primary" d="M17.5,12.4c-1.8-1.5-3.5-2.9-5.2-4.3c-0.9,0.4-2,1.7-1.9,2.3c1.5,1.2,3.1,2.5,4.6,3.7c0.2,0.2,0.5,0.3,0.8,0.4   C16.4,13.8,17,13.3,17.5,12.4 M16,0c0.2,0.2,0.4,0.3,0.6,0.6c-0.2,0.3-0.3,0.6-0.5,0.8c-0.9,1.2-1.7,2.5-2.6,3.7   C13,5.8,13.4,6.8,14,7.2c2.4,1.8,4.8,3.5,7.1,5.2c0.1,0.1,0.2,0.2,0.3,0.3c-0.3,0.9-0.6,1.7-0.9,2.6c-0.7,0.3-1.5,0.7-2.2,1   c-1.2,0.6-2.5,1.2-3.7,1.8c-0.6,0.3-0.9,0.8-1.1,1.4c-0.4,1.1-0.8,2.2-1.2,3.3c0,0.1-0.1,0.3-0.1,0.5c0.4,0.5,0.8,1.1,1.2,1.6   c0.7,0.8,0.9,1.7,1.1,2.6c0.4,2.3,1.2,4.3,2.5,6.3c0.3,0.4,0.7,0.8,1.1,1.2c-0.4,2-0.8,4-1.2,6c-0.1,0-0.2,0-0.3,0   c-1.5-0.6-3.1-1.2-4.6-1.8c-1.1-0.4-2.1-1-3.1-1.7c-0.7-0.5-0.8-0.8-0.4-1.6c0.1-0.2,0.1-0.3,0.1-0.5c0.2-0.7,0.3-1.4,0.4-2   c1.3-0.9,1.5-1.6,1-3c0.7-1.4,0.9-1.8-0.2-2.9c0.1-0.3,0.3-0.6,0.3-0.9c0.3-0.9,0-1.7-0.9-2s-1.7-0.6-2.6-1c0-0.1,0-0.2,0-0.3   C7.4,21.9,8,20.5,8.4,19c0.3-0.9,0.8-1.6,0.7-2.6c0-0.4-0.2-0.9-0.3-1.2c-0.7-1.6-1.5-3.2-2.3-4.8c-0.1-0.2-0.1-0.6,0-0.8   c0.6-1.7,1.3-3.5,1.9-5.2c0.3-0.9,0.8-1.3,1.5-1.6c2-0.9,3.9-1.8,5.8-2.6h0.1C15.9,0,16,0,16,0"/>
            <path class="primary" d="M97.3,28.3c-0.2-0.5-0.4-1-0.6-1.4c-0.3-0.6-0.3-1.1,0-1.7c0.7-1.4,1.4-2.7,2.2-4c0,0,0.1-0.1,0.2-0.2   c1.1,0.3,2.3,0.6,3.4,0.9c0,0.2,0,0.3,0,0.5c0,1.4,0,2.8-0.1,4.2c0,0.8-0.5,1.2-1,1.7c-0.3,0.3-0.7,0.5-1.1,0.9   c-1.2,4.3-2.4,8.8-3.7,13.3c0.7,0.2,1.3,0.4,2,0.6v0.1c-0.7,0.6-1.4,1.1-2.2,1.7c0.3,0.3,0.6,0.7,0.9,1.1c-0.1,0.2-0.2,0.4-0.3,0.7   c-0.1,0-0.3,0-0.4,0c-0.8-0.2-1.6-0.4-2.5-0.6c-0.5-0.1-0.9-0.2-1.4-0.2c-0.6,0-1.1,0.4-1.2,1c0,0.2-0.1,0.4-0.1,0.6   c0,0.2-0.1,0.4-0.1,0.6c-1.4,0.2-1.6,1.2-1.7,2.3c-1.1,0.9-1.3,1.6-0.8,3.1c-0.2,0.6-0.4,1.2-0.6,1.8c-0.1,0.3-0.2,0.7-0.3,1.1   c-0.1,0.3-0.3,0.5-0.6,0.6c-0.9,0.2-1.8,0.2-2.8,0s-2-0.3-3.1-0.5c-1.4-0.3-2.8-0.6-4.3-0.9c0.3-1.9,0.7-3.8,1.1-5.7   c0.1,0,0.3-0.1,0.4,0c1.8,0.2,3.3-0.4,4.8-1.3c1.6-0.9,2.9-2.1,4.1-3.5c0.7-0.9,1.7-1.2,2.7-1.6c0.5-0.2,1-0.4,1.6-0.6   c-0.2-0.6-0.4-1.2-0.6-1.8c0,0,0-0.1,0.1-0.1c0.6,0.2,1.3,0.3,2,0.5C94.8,37.1,96.1,32.7,97.3,28.3"/>
            <path class="primary" d="M33.5,33h3.2c0,0.1-0.1,0.2-0.1,0.3c-1.6,1.6-2.9,3.4-3.7,5.5c-0.6,1.4-1,2.8-1.1,4.2   c-0.1,1.1-0.2,2.1-0.2,3.2c0,1.5,0.3,3,0.8,4.4c0.7,2,1.6,3.8,3,5.4c1.7,2.1,3.9,3.7,6.5,4.6c1.9,0.7,3.9,1.1,5.9,1.1   c2.8,0,5.4-0.8,7.8-2.2c2.3-1.3,4.1-3.1,5.5-5.3c1-1.5,1.7-3.2,2.2-5c0.3-1.1,0.5-2.2,0.5-3.4c0-0.3,0-0.5,0.1-0.8   c0.9-0.2,1.6-0.4,2.5-0.6c0,0.6,0,1,0,1.5c-0.2,1.3-0.3,2.6-0.6,3.9c-0.3,1.4-0.9,2.8-1.6,4.1c-1.2,2.2-2.7,4.1-4.6,5.7   c-1.8,1.5-3.8,2.6-6,3.4c-2.1,0.8-4.3,1.1-6.6,1.1c-4.5-0.1-8.3-1.7-11.6-4.6c-2.3-2-4-4.6-5.1-7.4c-0.7-1.9-1.1-3.8-1.3-5.8   c-0.1-1.4,0-2.7,0.1-4c0.3-2.3,1.1-4.5,2.3-6.5C32.1,34.9,32.8,33.9,33.5,33"/>
            <path class="primary" d="M88.7,55.7c0.3,0,0.6,0.1,0.9,0.2c-0.2,0.9-0.4,1.6-0.6,2.3c-0.3,1.1-0.7,2.3-1,3.5c0,0.2-0.2,0.4,0.2,0.6   c0.5-1,0.6-2,1-3.1s0.6-2.1,1-3.1c0.6,0.1,1.2,0.3,1.8,0.4c-0.2,1.1-0.6,2.2-0.8,3.2c-0.3,1.1-0.7,2.1-0.8,3.2c0,0,0.1,0,0.2,0.1   c0.1-0.1,0.2-0.2,0.3-0.3c0.2-0.6,0.3-1.2,0.5-1.8c0.4-1.4,0.7-2.7,1.1-4c0.6-0.2,1.5,0,1.8,0.4c-0.4,1.6-0.9,3.2-1.3,4.9   c-0.2,0.8-0.4,1.6-0.6,2.3c-0.4,1.2-1.9,2-2.9,2.1c-1.5,0.1-2.8-0.9-3.2-2c-0.3-0.8-0.4-1.5-0.2-2.3c0.4-1.5,0.9-2.9,1.3-4.4   c0-0.2,0.2-0.3,0.3-0.4c0.7-0.2,1-0.7,1-1.4V56C88.6,55.8,88.7,55.8,88.7,55.7"/>
            <path class="primary" d="M3.2,33.6c1.6,0.6,3.1,1.1,4.6,1.7c-0.3,0.9-0.6,1.7-0.9,2.5c-0.6,1.6-1.1,3.1-1.7,4.7   c-0.5,1.4-1.8,2.2-3.3,1.9C1,44.2,0.2,43.2,0,42.2c-0.1-0.8,0.3-1.5,0.5-2.2c0.6-1.4,1.1-2.8,1.7-4.2c0.2-0.6,0.5-1.1,0.7-1.7   C2.9,33.9,3.1,33.8,3.2,33.6"/>
            <path class="secondary" d="M49.6,55.9c-3.1-0.2-5.7-1-7.8-3.2c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.3-0.2-0.6,0.1-0.9   c0.3-0.3,0.6-0.3,0.9-0.1c0.2,0.2,0.4,0.3,0.6,0.6c1,1,2.3,1.7,3.6,2.1c1.7,0.5,3.4,0.5,5,0.2c1.7-0.4,3.3-1.2,4.3-2.8   c0.3-0.6,0.8-0.6,1.1-0.3s0.3,0.6,0.1,0.9c-0.9,1.4-2,2.3-3.4,2.9C52.4,55.6,51,55.8,49.6,55.9"/>
            <path class="secondary" d="M44.9,44.1c0,0.3,0,0.5,0,0.7c-0.1,0.4-0.4,0.6-0.8,0.6c-0.4,0-0.6-0.3-0.6-0.7c0-0.5,0.1-0.9-0.2-1.4   c-0.4-0.7-1-1.1-1.8-1c-0.8,0-1.4,0.5-1.7,1.3c-0.1,0.4-0.3,0.6-0.7,0.6c-0.6,0-0.9-0.4-0.7-0.9c0.4-1.4,1.4-2.4,2.9-2.5   c1.7-0.1,3.1,0.9,3.6,2.5C44.9,43.6,44.9,43.9,44.9,44.1"/>
            <path class="primary" d="M97,50.8c-0.1,1-0.5,1.4-1.5,1.2c-0.9-0.2-1.7-0.4-2.5-0.6c-0.6-0.1-1.2-0.2-1.8-0.3c-0.4-0.1-0.8-0.3-0.9-0.7   c0-0.5,0-1,0.4-1.4c0.3-0.3,0.6-0.2,1,0c0.3,0.2,0.6,0.3,1,0.4c1.2,0.3,2.5,0.5,3.7,0.7C97,50.2,97,50.5,97,50.8"/>
            <path class="primary" d="M4.1,26.5c1.5,0.5,2.8,1,4.3,1.5c0.2,0.1,0.4,0,0.6,0c0.9,0,1.2,0.6,0.9,1.4c-0.3,0.9-0.8,1-1.6,0.7   c-1.3-0.5-2.6-0.9-3.8-1.4c-0.2-0.1-0.4-0.2-0.6-0.3c-0.3-0.2-0.5-0.5-0.4-0.9C3.6,27.2,3.7,26.7,4.1,26.5"/>
            <path class="primary" d="M90,51c0.6,0.6,1.4,0.6,2.2,0.8c1.2,0.3,2.4,0.5,3.6,0.7c0.2,0,0.3,0.1,0.5,0.2c0.2,0.8-0.1,1.4-0.7,1.6   c-1.4-0.3-2.7-0.6-4-0.9c-0.6-0.1-1.1-0.2-1.7-0.3c-0.5-0.1-0.7-0.4-0.6-0.9C89.3,51.7,89.4,51.3,90,51"/>
            <path class="primary" d="M21.6,4.6c0.4,0.2,0.5,0.5,0.5,0.9C22,6.2,22,7,22,7.7c0,1.1,0,2.1-0.1,3.2c0,0.2,0,0.4,0,0.6   c0,0-0.1,0-0.1,0.1c-1-0.7-2-1.4-2.9-2.1C18.9,9.1,21,5.2,21.6,4.6"/>
            <path class="primary" d="M3.3,28.8c1.5,0.6,3,1.1,4.4,1.7c0.6,0.2,1.2,0.3,1.9,0.5c0.3,0.6,0,1.4-0.8,1.8c-1.4-0.5-2.8-1.1-4.3-1.6   c-0.3-0.1-0.7-0.3-1.1-0.3c-0.6-0.2-0.9-0.6-0.6-1.1C2.9,29.4,3.1,29.1,3.3,28.8"/>
            <path class="primary" d="M5.5,24c0.2,0.1,0.5,0.2,0.7,0.3c1,0.4,2,0.7,3,1.1c0.6,0.2,0.7,0.5,0.5,1.1c0,0.2-0.2,0.4-0.3,0.6   c-0.3,0.4-0.6,0.6-1.1,0.4c-1-0.4-2.1-0.8-3.1-1.1c-0.2-0.1-0.3-0.1-0.5-0.2c-0.3-0.2-0.5-0.6-0.3-0.9C4.7,24.7,4.7,24,5.5,24"/>
            <path class="primary" d="M92.9,46.5c0.9,0.2,1.8,0.4,2.7,0.6c0.4,0.1,0.8,0.2,1.2,0.3c0.4,0.1,0.6,0.4,0.6,0.9c0,0.6-0.1,1.2-0.8,1.4   c-0.9-0.2-1.8-0.4-2.7-0.6c-0.4-0.1-0.8-0.2-1.2-0.3c-0.3-0.1-0.6-0.3-0.6-0.6C91.9,47.6,92.4,46.7,92.9,46.5"/>
            <path class="primary" d="M95.5,55.4c0,0.8-0.5,1.1-1.3,1c-0.9-0.2-1.7-0.3-2.5-0.5c-0.7-0.1-1.4-0.3-2-0.5c-0.5-0.2-0.6-0.5-0.3-1.1   c0.2-0.5,0.6-0.7,1-0.6c0.9,0.2,1.7,0.4,2.5,0.6c0.6,0.1,1.2,0.2,1.8,0.3C95.1,54.7,95.5,55,95.5,55.4"/>
            <path class="primary" d="M2.4,32.4c0.1-0.5,0.2-1,0.9-1.1c0.8,0.3,1.7,0.6,2.5,0.9c0.7,0.3,1.3,0.5,2,0.7c0.4,0.1,0.6,0.3,0.7,0.7   c0,0.2-0.1,0.3-0.2,0.5c-0.2,0.6-0.6,0.8-1.1,0.6c-1.3-0.5-2.6-1-3.9-1.4C2.8,33.1,2.4,32.9,2.4,32.4"/>
            <path class="primary" d="M16,11.7c0.3,0,0.7,0.3,0.8,0.6c0.1,0.3-0.1,0.6-0.4,0.7c-0.4,0.2-0.8,0.3-1.2,0.5c-0.4,0.1-0.7,0-0.8-0.3   s-0.1-0.7,0.2-0.9C15,12.1,15.5,11.9,16,11.7"/>
            <path class="primary" d="M15.2,11.2c-0.5,0.6-1.3,0.7-2,1c-0.1,0-0.3-0.1-0.3-0.2c-0.1-0.2-0.3-0.4-0.3-0.6c0-0.2,0.2-0.4,0.4-0.6   c0.3-0.2,0.6-0.3,0.9-0.3C14.6,10.4,14.9,10.5,15.2,11.2"/>
            <path class="primary" d="M12.6,9.1c0.4,0,0.7,0.2,0.8,0.5s0,0.6-0.3,0.7c-0.4,0.2-0.8,0.3-1.2,0.5c-0.3,0.1-0.7-0.1-0.9-0.4   c-0.1-0.3,0-0.6,0.4-0.8C11.8,9.4,12.3,9.3,12.6,9.1"/>
          </g>
          <g id="text-3">
            <path class="secondary" d="M111,69.2h1.1v5.6H111V69.2z"/>
            <path class="secondary" d="M114.4,69.2h6.8V70h-2.9v4.8h-1.1V70h-2.9L114.4,69.2L114.4,69.2z"/>
            <path class="secondary" d="M123.5,68.7h1.1v0.8l-0.4,0.8h-0.5l0.2-0.6h-0.4C123.5,69.7,123.5,68.7,123.5,68.7z"/>
            <path class="secondary" d="M132,71.4c1.3,0,2,0.4,2,1.2v1c0,0.8-0.7,1.2-2,1.2h-4.8V74h4.8c0.6,0,0.9-0.1,0.9-0.4v-1   c0-0.3-0.3-0.4-0.9-0.4h-3c-1.3,0-2-0.4-2-1.2v-0.6c0-0.8,0.7-1.2,2-1.2h4.6V70H129c-0.6,0-0.9,0.1-0.9,0.4V71   c0,0.3,0.3,0.4,0.9,0.4L132,71.4L132,71.4z"/>
            <path class="secondary" d="M141.8,69.2h6.8V70h-2.9v4.8h-1.1V70h-2.9L141.8,69.2L141.8,69.2z"/>
            <path class="secondary" d="M150.9,69.2h1.1v5.6h-1.1V69.2z"/>
            <path class="secondary" d="M154.6,69.2h1l3.3,4.6l3.3-4.6h0.9v5.6h-1v-3.9l-2.8,3.9h-0.9l-2.8-3.9v3.9h-1V69.2L154.6,69.2z"/>
            <path class="secondary" d="M166.9,72.3V74h4.7v0.8h-5.8v-5.6h5.8V70h-4.7v1.4h4.5v0.8L166.9,72.3L166.9,72.3z"/>
            <path class="secondary" d="M179.4,69.2h6.8V70h-2.9v4.8h-1.1V70h-2.9L179.4,69.2L179.4,69.2z"/>
            <path class="secondary" d="M193.7,74c0.6,0,0.9-0.1,0.9-0.4v-3.2c0-0.3-0.3-0.4-0.9-0.4h-3.2c-0.6,0-0.9,0.1-0.9,0.4v3.2   c0,0.3,0.3,0.4,0.9,0.4H193.7z M188.5,70.4c0-0.8,0.7-1.2,2-1.2h3.2c1.3,0,2,0.4,2,1.2v3.2c0,0.8-0.7,1.2-2,1.2h-3.2   c-1.3,0-2-0.4-2-1.2V70.4z"/>
            <path class="secondary" d="M210.1,74v0.8h-4.3c-1.3,0-2-0.4-2-1.3v-3c0-0.9,0.7-1.3,2-1.3h4.3V70h-4.3c-0.6,0-0.9,0.2-0.9,0.5v3   c0,0.3,0.3,0.5,0.9,0.5H210.1z"/>
            <path class="secondary" d="M220.3,74.8h-1.1l-2.9-4.6l-3,4.6h-1.1l3.7-5.6h0.8L220.3,74.8z"/>
            <path class="secondary" d="M222.3,69.2h1.1V74h4.6v0.8h-5.6v-5.6H222.3z"/>
            <path class="secondary" d="M230.2,69.2h1.1V74h4.6v0.8h-5.6v-5.6H230.2z"/>
            <path class="secondary" d="M244.9,70.1V72h3.3c0.6,0,0.9-0.1,0.9-0.4v-1.1c0-0.3-0.3-0.4-0.9-0.4H244.9z M243.8,74.8v-5.6h4.3   c1.3,0,2,0.4,2,1.2v1.1c0,0.8-0.7,1.2-2,1.2h-3.3v2.1L243.8,74.8L243.8,74.8z"/>
            <path class="secondary" d="M253.5,70.1v1.4h3.4c0.6,0,0.9-0.1,0.9-0.4v-0.7c0-0.3-0.3-0.4-0.9-0.4L253.5,70.1L253.5,70.1z M252.4,74.8   v-5.6h4.4c1.3,0,2,0.4,2,1.2v0.7c0,0.7-0.5,1.1-1.4,1.2l1.3,2.6h-1.1l-1.3-2.5h-2.9v2.5L252.4,74.8L252.4,74.8z"/>
            <path class="secondary" d="M261.4,69.2h1.1v5.6h-1.1V69.2z"/>
            <path class="secondary" d="M265.1,69.2h1l3.3,4.6l3.3-4.6h0.9v5.6h-1v-3.9l-2.8,3.9H269l-2.8-3.9v3.9h-1L265.1,69.2L265.1,69.2z"/>
            <path class="secondary" d="M277.3,72.3V74h4.7v0.8h-5.8v-5.6h5.8V70h-4.7v1.4h4.5v0.8L277.3,72.3L277.3,72.3z"/>
          </g>
          <g id="text-2">
            <path class="primary" d="M115.5,61.9h2.6l-1.3-4l0,0L115.5,61.9z M115.3,54.7h3.1l4.3,11.5h-3.1l-0.7-2h-4l-0.7,2H111L115.3,54.7z"/>
            <path class="primary" d="M126.5,60.1h2c0.9,0,1.6-0.4,1.6-1.4s-0.7-1.5-1.6-1.5h-2V60.1z M123.6,54.7h5.4c2.1,0,4.2,1,4.2,3.7   c0,2.9-1.6,4-4.2,4h-2.5v3.8h-3L123.6,54.7L123.6,54.7z"/>
            <path class="primary" d="M137.6,60.1h2c0.9,0,1.6-0.4,1.6-1.4s-0.7-1.5-1.6-1.5h-2V60.1z M134.6,54.7h5.4c2.1,0,4.2,1,4.2,3.7   c0,2.9-1.6,4-4.2,4h-2.5v3.8h-3V54.7H134.6z"/>
            <path class="primary" d="M145.6,54.7h3v8.9h5.4v2.6h-8.4V54.7L145.6,54.7z"/>
            <path class="primary" d="M155.5,54.7h3v11.5h-3V54.7z"/>
            <path class="primary" d="M163.8,61.9h2.6l-1.3-4l0,0L163.8,61.9z M163.7,54.7h3.1l4.3,11.5H168l-0.7-2h-4l-0.7,2h-3.1L163.7,54.7z"/>
            <path class="primary" d="M171.8,54.7h3.1l4,7.1l0,0v-7.1h2.8v11.5h-3.1l-4-7.2l0,0v7.2h-2.8V54.7z"/>
            <path class="primary" d="M191.4,58.8c-0.2-1.1-1.1-1.8-2.3-1.8c-1.9,0-2.7,1.7-2.7,3.4s0.7,3.4,2.7,3.4c1.4,0,2.2-0.8,2.3-2.1h3   c-0.2,3-2.3,4.7-5.3,4.7c-3.5,0-5.7-2.7-5.7-6s2.3-6,5.7-6c2.5,0,5.2,1.6,5.3,4.3L191.4,58.8L191.4,58.8z"/>
            <path class="primary" d="M196,54.7h9.2v2.4H199v2h5.7v2.3H199v2.2h6.3v2.6H196V54.7L196,54.7z"/>
            <path class="primary" d="M215.2,59.7h2.5c0.9,0,1.4-0.5,1.4-1.4s-0.7-1.2-1.5-1.2h-2.4V59.7z M212.2,54.7h5.9c2,0,4,0.9,4,3.2   c0,1.2-0.6,2.4-1.8,2.9l0,0c1.2,0.3,1.6,1.7,1.7,2.8c0,0.5,0.1,2.2,0.5,2.6h-3c-0.3-0.4-0.3-1.5-0.3-1.8c-0.1-1.1-0.3-2.3-1.7-2.3   h-2.3v4.2h-3L212.2,54.7L212.2,54.7z"/>
            <path class="primary" d="M223.8,54.7h9.2v2.4h-6.2v2h5.7v2.3h-5.7v2.2h6.3v2.6h-9.3V54.7z"/>
            <path class="primary" d="M237.8,60.1h2c0.9,0,1.6-0.4,1.6-1.4s-0.7-1.5-1.6-1.5h-2V60.1z M234.8,54.7h5.4c2.1,0,4.2,1,4.2,3.7   c0,2.9-1.6,4-4.2,4h-2.5v3.8h-3V54.7H234.8z"/>
            <path class="primary" d="M248,61.9h2.6l-1.3-4l0,0L248,61.9z M247.8,54.7h3.1l4.3,11.5h-3.1l-0.7-2h-4l-0.7,2h-3.1L247.8,54.7z"/>
            <path class="primary" d="M256,54.7h3v11.5h-3V54.7z"/>
            <path class="primary" d="M264.1,59.7h2.5c0.9,0,1.4-0.5,1.4-1.4s-0.7-1.2-1.5-1.2h-2.4V59.7L264.1,59.7z M261.1,54.7h5.9   c2,0,4,0.9,4,3.2c0,1.2-0.6,2.4-1.8,2.9l0,0c1.2,0.3,1.6,1.7,1.7,2.8c0,0.5,0.1,2.2,0.5,2.6h-3c-0.3-0.4-0.3-1.5-0.3-1.8   c-0.1-1.1-0.3-2.3-1.7-2.3h-2.3v4.2h-3L261.1,54.7L261.1,54.7z"/>
            <path class="primary" d="M275.1,62.4c0.1,1.4,0.9,1.8,2.2,1.8c0.9,0,1.8-0.3,1.8-1.2c0-1-1.7-1.2-3.3-1.7c-1.7-0.5-3.4-1.2-3.4-3.3   c0-2.5,2.5-3.5,4.7-3.5c2.3,0,4.6,1.1,4.6,3.7h-3c0-1.1-0.9-1.4-1.9-1.4c-0.6,0-1.4,0.2-1.4,1c0,0.9,1.7,1.1,3.3,1.5   s3.3,1.2,3.3,3.3c0,2.9-2.5,3.9-5,3.9c-2.6,0-5-1.1-5-4.1H275.1L275.1,62.4z"/>
          </g>
          <g id="text-1-hover">
            <path class="secondary" d="M191,47.3c0.1,0.1,0.2,0.3,0.2,0.5l0,0l0,0c0,0.2,0,0.3-0.2,0.4c-0.1,0.1-0.3,0.3-0.5,0.3   c-0.3,0-0.7-0.3-0.8-0.8c0-0.2,0.1-0.3,0.2-0.5c0.1-0.1,0.3-0.2,0.6-0.2v-0.8V47C190.7,47.1,190.9,47.2,191,47.3 M198.3,18.8   c-0.3-0.6-0.6-1.1-1-1.7l-2-3.5c-0.3-0.5-0.6-0.8-1.1-0.9c-0.2-0.1-0.4-0.1-0.6-0.1c-0.2,0-1.2,0.1-1.2,1.4c0,0,0,4.7,0,5h-0.9   c-1,0-2,0-3,0v-5.1c0,0,0-0.1,0-0.2c0-0.6-0.6-1.1-1.2-1.1h-0.1c-0.6,0-1.2,0.3-1.5,0.9c-0.4,0.6-0.8,1.3-1.1,2l-1.8,3.1   c-0.6,0.9-0.4,1.9,0.3,2.6l0.6,0.6c0.4,0.4,0.8,0.8,1.1,1.1c0.2,0.2,0.4,0.4,0.6,0.6c0.3,0.2,0.5,0.5,0.7,0.7   c0.7,0.7,1.1,1.6,1.1,2.6c0,3.5,0,12,0,17c0,1.9,0,3.3,0,3.9c0,0.2,0,0.4,0,0.6c0.2,0.9,0.7,1.7,1.5,2.2c0.5,0.3,1.1,0.6,1.7,0.6   h0.1c1,0,1.9-0.4,2.6-1.2c0.5-0.6,0.8-1.4,0.8-2.2c0-1.9,0-19.2,0-20.8c0-0.6,0-1,0.2-1.4c0.2-0.5,0.3-0.9,0.6-1.2   c0.3-0.3,0.6-0.6,0.8-0.9l0.1-0.1c0.7-0.7,1.4-1.5,2.2-2.2C198.5,20.6,198.7,19.6,198.3,18.8"/>
            <path id="cogs" class="secondary" d="M193.2,8.1c-0.2-0.2-0.3-0.4-0.5-0.6c0-0.1,0.1-0.3,0.1-0.3c0.2-0.1,0.4-0.1,0.6-0.2   c0-0.1,0-0.3,0-0.4c-0.2-0.1-0.4-0.2-0.6-0.2c0-0.1-0.1-0.3-0.1-0.3c0.2-0.2,0.3-0.3,0.5-0.6c-0.1-0.1-0.1-0.3-0.2-0.4   c-0.3,0-0.5,0.1-0.7,0.1c-0.1-0.1-0.2-0.2-0.3-0.3c0-0.2,0.1-0.5,0.1-0.7C192,4.1,191.8,4,191.7,4c-0.2,0.2-0.3,0.3-0.5,0.5   c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1-0.1-0.2-0.2c0-0.2-0.1-0.4-0.2-0.6h-0.4c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0-0.3,0-0.3,0.1   c-0.2-0.2-0.3-0.3-0.6-0.5c-0.1,0.1-0.3,0.1-0.4,0.2c0,0.3,0.1,0.5,0.1,0.7c-0.1,0.1-0.2,0.2-0.3,0.3c-0.2,0-0.5-0.1-0.7-0.1   c-0.1,0.1-0.1,0.3-0.2,0.4c0.2,0.2,0.3,0.4,0.5,0.6c0,0.1,0,0.2-0.1,0.3c0,0,0,0-0.1,0.1c-0.1,0-0.1,0-0.2,0.1   c-0.1,0-0.3,0.1-0.4,0.1v0.4c0.2,0.1,0.4,0.1,0.6,0.2h0.1c0,0.1,0,0.2,0.1,0.3c-0.2,0.2-0.3,0.4-0.5,0.6c0.1,0.1,0.1,0.3,0.2,0.3   c0.3,0,0.5-0.1,0.7-0.1c0.1,0.1,0.2,0.2,0.3,0.3c0,0.3-0.1,0.5-0.1,0.7c0.1,0.1,0.3,0.1,0.4,0.2c0.2-0.2,0.4-0.3,0.6-0.5   c0.1,0,0.3,0.1,0.3,0.1c0.1,0.3,0.2,0.5,0.2,0.7h0.4c0.1-0.2,0.1-0.4,0.2-0.6c0,0,0-0.1,0.1-0.1s0.2,0,0.3-0.1   c0.2,0.2,0.3,0.3,0.6,0.5c0.1-0.1,0.3-0.1,0.4-0.2c0-0.3-0.1-0.5-0.1-0.7l0,0c0.1-0.1,0.1-0.2,0.2-0.3c0.3,0,0.5,0.1,0.7,0.1   C193.1,8.3,193.2,8.2,193.2,8.1 M189.7,11.1c-0.2,0-0.4-0.1-0.6-0.2c-0.3,0.3-0.7,0.6-1,0.9c-0.2-0.1-0.5-0.3-0.7-0.4   c0.1-0.4,0.2-0.9,0.3-1.3c-0.2-0.2-0.3-0.3-0.5-0.5c-0.4,0.1-0.9,0.2-1.3,0.3c-0.1-0.3-0.3-0.5-0.4-0.7c0.3-0.3,0.6-0.7,0.9-1   c0-0.2-0.1-0.4-0.2-0.6c-0.4-0.1-0.8-0.3-1.2-0.4V6.3c0.4-0.1,0.9-0.3,1.2-0.4c0-0.2,0.1-0.4,0.2-0.6c-0.3-0.3-0.6-0.7-0.9-1   c0.1-0.3,0.3-0.5,0.4-0.7c0.4,0.1,0.9,0.2,1.3,0.3c0.2-0.2,0.3-0.3,0.5-0.5c-0.1-0.4-0.2-0.9-0.3-1.3c0.3-0.1,0.5-0.3,0.7-0.4   c0.3,0.3,0.7,0.6,1,0.9c0.2,0,0.4-0.1,0.6-0.2c0.1-0.4,0.3-0.9,0.4-1.3h0.8c0.2,0.4,0.3,0.9,0.4,1.3c0.2,0,0.4,0.1,0.6,0.2   c0.3-0.3,1-0.9,1-0.9l0.6,0.4l-0.3,1.1c0,0,0.4,0.5,0.6,0.6c0.4-0.1,0.9-0.2,1.3-0.3c0.1,0.3,0.3,0.5,0.4,0.7   c-0.3,0.3-0.6,0.7-0.9,1c0,0.1,0.1,0.2,0.1,0.3v0.1c0,0.1,0.1,0.2,0.2,0.2c0.3,0.1,0.6,0.2,1,0.3h0.1v0.8c-0.2,0-0.4,0.1-0.6,0.2   c-0.2,0.1-0.4,0.1-0.6,0.2c0,0-0.1,0-0.1,0.1c0,0.2-0.1,0.4-0.1,0.6l0,0c0.3,0.3,0.6,0.6,0.9,1c-0.1,0.2-0.3,0.5-0.4,0.7   c-0.4-0.1-0.9-0.2-1.3-0.3c-0.2,0.2-0.3,0.3-0.5,0.5c0.1,0.4,0.2,0.9,0.3,1.3c-0.3,0.1-0.5,0.3-0.7,0.4c-0.3-0.3-0.7-0.6-1-0.9   c-0.2,0-0.4,0.1-0.6,0.2c-0.1,0.4-0.3,0.9-0.4,1.3h-0.8C190,12,189.8,11.5,189.7,11.1"/>
            <path class="secondary" d="M190.5,5.3c-0.8,0-1.4,0.6-1.4,1.4s0.6,1.5,1.5,1.4c0.8,0,1.4-0.6,1.4-1.4C192,6,191.3,5.3,190.5,5.3    M190.5,8.8c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S191.6,8.8,190.5,8.8"/>
          </g>
          <g id="text-1">
            <path class="secondary" d="M120.7,30.3h6.6c3.1,0,5.3-1.3,5.3-4.7c0-3.6-2.3-5-5.3-5h-6.6C120.7,20.6,120.7,30.3,120.7,30.3z M110.9,12.6   h18c7.1,0,13.7,3.2,13.7,12.2c0,9.4-5.4,13.1-13.7,13.1h-8.1v12.6h-9.9L110.9,12.6L110.9,12.6z"/>
            <path class="secondary" d="M157.1,29.1h8.3c3,0,4.6-1.6,4.6-4.5c0-2.8-2.2-4.1-5-4.1h-7.9L157.1,29.1L157.1,29.1z M147.2,12.6h19.3   c6.7,0,13.3,3,13.3,10.7c0,4.1-2,8-6,9.5v0.1c4,0.9,5.2,5.5,5.5,9.1c0.1,1.6,0.3,7.2,1.6,8.6h-9.8c-0.9-1.3-1-5-1.1-6   c-0.3-3.8-0.9-7.7-5.5-7.7H157v13.8h-9.9L147.2,12.6L147.2,12.6z"/>
            <path class="secondary" d="M202.4,12.6h14.5l6.6,25.3h0.1l6.6-25.3h14.5v37.9h-9.3V21.8h-0.1l-8,28.8h-7.5l-8-28.8h-0.1v28.8h-9.3V12.6   L202.4,12.6z"/>
            <path class="secondary" d="M251.5,12.6h30.2v7.9h-20.3v6.6H280v7.7h-18.6V42h20.9v8.5h-30.8L251.5,12.6L251.5,12.6z"/>
          </g>
        </svg>
      </a>
    </div><!-- End Logo -->
    <i class="bi bi-list toggle-sidebar-btn"></i>
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Larice Gaba</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-lg-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{ auth()->user()->name }}</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item d-flex align-items-center">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                    </button>
                </form>
            </li>


          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="../index.html">
          <i class="ri-home-4-fill"></i>
          <span>Main</span>
        </a>
      </li>
      <!-- End Main Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('rja/new') ? 'active' : '' }}" data-bs-target="#Reporting-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard-data-fill"></i>
          <span>Reporting Panel</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Reporting-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('rja.new')}}" class="{{ Request::is('rja/new') ? 'active' : '' }}">
              <i class="bi bi-circle"></i>
              <span>New RJA</span>
            </a>
          </li>
          <li>
            <a href="{{ route('rja.submitted') }}">
                <i class="bi bi-circle"></i>
                <span>Submitted RJA</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i>
              <span>Approved RJA</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i>
              <span>Denied RJA</span>
            </a>
          </li>
        </ul>
      </li><!-- End Reporting Panel Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear-fill"></i>
          <span>Settings</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Technicians Phone Numbers</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>B2B/Warranty Customer Setup</span>
            </a>
          </li>
        </ul>
      </li><!-- End Settings Nav -->

    </ul>

  </aside><!-- End Sidebar-->

