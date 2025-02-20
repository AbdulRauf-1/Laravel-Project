@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfeEuebGUR5UWkozU_isulBDItZe2eKmlpHw&s" style="width: 100px; height: 100px;" class="mt-5">
        </div>
        <div class="col-5">
            <div><h1>freecodecamp</h1></div>
            <div class="d-flex">
                <div class="pe-5"><strong>1000</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 "><strong>freeCodeCamp.org</strong></div>
            <div>We're a global community of millions of people learning to code together.
            LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div>
                <a href="https://www.freecodecamp.org" class="text-primary text-decoration-none">
                <i class="fa fa-link"></i> www.freecodecamp.org
                </a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-2"></div>
        <div class="col-3">
            <img src="images/pic1.jpg" class="w-100">
        </div>
        <div class="col-3">
            <img src="images/pic2.jpg" class="w-100"  style="height: 300px;">
        </div>
        <div class="col-3">
            <img src="images/pic3.jpg" class="w-100"  style="height: 300px;">
        </div>

    </div>

</div>
@endsection
