@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">

            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="/storage/{{ $post->user->profile->pofileImage() }}" class="w-100 rounded-circle" style="max-width: 4em">
                </div>
                <div>
                    <div class="font-weight-bolder">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <span class="badge badge-pill badge-secondary">-</span>
                        <a href="#" class="">Follow</a>
                    </div>
                </div>

            </div>

            <hr>

            <p>
                <span class="font-weight-bolder">
                    <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
