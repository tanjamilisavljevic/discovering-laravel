
@extends('layout')
@extends('header')
@extends('footer')
@section('container')
<form method="POST" action="register">
    @csrf

    <label for="name" class="col-form-label">Name:</label>
    <input type="text" name="name" id="name">

    <label for="course" class="col-form-label">Course name:</label>
    <input type="text" name="course" id="course">

    <label for="email" class="col-form-label">E-mail:</label>
    <input type="email" id="email" name="email">

    <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Go">
</form>
@endsection
