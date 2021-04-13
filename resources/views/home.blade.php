<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SPA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ url('/') }}/css/nucleo-icons.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link type="text/css" href="{{ url('/') }}/css/argon-design-system.css" rel="stylesheet">

</head>
<body>

    <div id="app">
            <app-home></app-home>
    </div>

    <!-- Core -->
    <script src="{{ url('/') }}/js/core/jquery.min.js"></script>
    <script src="{{ url('/') }}/js/core/popper.min.js"></script>
    <script src="{{ url('/') }}/js/core/bootstrap.min.js"></script>

    <!-- Theme JS -->
    <script src="{{ url('/') }}/js/argon-design-system.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body> 
</html>