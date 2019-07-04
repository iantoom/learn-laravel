@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pr-5 pt-5">
            <img style="max-width: 18em"
            class="rounded-circle"
            src="https://images.pexels.com/photos/1308881/pexels-photo-1308881.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
        </div>
        <div class="col-9 pl-5 pt-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1> {{$user -> username}} </h1>
                    <a href="#"> Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class=""><strong>69</strong> posts</div>
                    <div class="pl-5"><strong>23k</strong> followers</div>
                    <div class="pl-5"><strong>999</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user -> profile -> title }}</div>
                <div>
                    {{ $user->profile->description }}
                </div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
    </div>
    <div class="row pt-5" style="overflow:hidden; height: 27em">
        <div class="col-4"><img src="https://images.pexels.com/photos/1382734/pexels-photo-1382734.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://images.pexels.com/photos/458766/pexels-photo-458766.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://images.pexels.com/photos/1386604/pexels-photo-1386604.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100"></div>
    </div>
</div>
@endsection
