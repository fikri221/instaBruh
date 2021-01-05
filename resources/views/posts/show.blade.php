@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div>
                    <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px" alt="">
                </div>
                <div class="pl-3">
                    <strong>
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <a href="#" class="pl-3">Follow</a>
                    </strong>
                </div>
            </div>
            <hr>
            
            <p>
                <span>
                    <strong>
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </strong>
                </span> 
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
