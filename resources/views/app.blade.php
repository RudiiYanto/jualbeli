<!doctype html>
<html lang="en">
<?php
    $title = 'Home';
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">

    <title>@yield('title', $title)</title>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

<script src="script.js"></script>

</html>