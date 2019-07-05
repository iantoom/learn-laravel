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

                    @can('update', $user->profile)
                        <a href="/p/create"> Add New Post</a>
                    @endcan

                </div>
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                <div class="d-flex">
                    <div class=""><strong>{{$user->posts->count()}}</strong> posts</div>
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
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post -> image }}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
