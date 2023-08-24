<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/js/app.js')
    <title>Your_Title</title>
</head>


@yield("header")
<body>


@include("components.header")


<div class="container-fluid">
    @yield("content")
</div>


@include("components.footer")




</body>
