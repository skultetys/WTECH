@extends('layout.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}" >
<main>
    <!--Do we want placeholders?-->
    <div class="space d-flex align-items-center justify-content-center">
        <form class="my-5 col-10 col-md-4 col-sm-8 col-lg-4 col-xl-4" action="/registration" method="POST">
            @csrf
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">First name</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Surname</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="" name="surname">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Username</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" placeholder="" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Repeat password</label>
                <div class="col-sm-7">
                    <input type="password" class="form-control" placeholder="" name="password2">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">E-mail</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" placeholder="" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Birthday</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="birthday"/>
                </div>
            </div>
            <div class="form-group row pb-3">
                <label class="col-sm-5 col-form-label">Gender</label>
                <div class="col-sm-7 ">
                    <div class="form-check form-check-inline pl-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline pl-5">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-group row justify-content-between">
                <a href=".."><button type="button" class="btn border-black btn-white">Back</button></a>
                <a href="#"><button type="submit" class="btn btn-dark">Register</button></a>
            </div>
        </form>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
@endsection
