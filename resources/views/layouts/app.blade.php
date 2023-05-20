<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">

<!-- Libs CSS -->
<link href={{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
<link href={{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">


<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

{{-- LOAD KONTENT --}}
<main class="container d-flex flex-column">
    @yield('content')
</main>

<!-- Libs JS -->
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>




<!-- Theme JS -->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
</body>

</html>
