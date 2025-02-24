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
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can ('update', $user->profile)
                    <a href='/p/create'>Add New Post</a>
                @endcan
            </div>
            @can ('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pe-5"><strong>23k</strong> followers</div>
                <div class="pe-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 "><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div>
                <a href="https://www.freecodecamp.org" class="text-primary text-decoration-none">
                <i class="fa fa-link"></i> {{$user->profile->url}}
                </a>
            </div>
        </div>
    </div>

    <div class="row pt-5 d-flex flex-wrap">
    <div class="col-2"></div>
    @foreach ($user->posts as $post )
        <div class="col-3 mb-3">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        
        @if ($loop->iteration % 3 == 0)
            <div class="col-2"></div>
        @endif
    @endforeach
</div>


</div>
@endsection
