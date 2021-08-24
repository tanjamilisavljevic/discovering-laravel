<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

@extends('layout')
@extends('header')
@extends('footer')

<form method="POST" action="register">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name">

    <label for="course">Course name:</label>
    <input type="text" name="course" id="course">

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email">

    <input type="submit" id="submit" name="submit" value="Go">
</form>


</body>
</html>
