@extends('layout')
@extends('header')
@extends('footer')
@section('container')
    <form method="POST" action="register">
        @csrf
        <div class="form">
            <div class="formWrapper">
                <label for="name" class="label">Name:</label>
                <input type="text" name="name" id="name" class="input">

                <label for="course" class="label">Course name:</label>
                <input type="text" name="course" id="course" class="input">

                <label for="email" class="label">E-mail:</label>
                <input type="email" id="email" name="email" class="input">
            </div>
        </div>
        <div class="buttonWrapper">
            <input class="submitButton" type="submit" id="submit" name="submit" value="Go">
            <a href="../public/" class="link" id="homeLink">🌾 Go home</a>
        </div>
    </form>


@endsection
