<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SFM Calls</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    {{--<link rel="stylesheet" href="/css/bootstrap-theme.min.css">--}}
</head>



<body>
@include('templates.partials.navbar')
<div class="container">
@include('templates.partials.alerts')
@yield('content')


</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script>
    $.material.init()
</script>
</body>
</html>