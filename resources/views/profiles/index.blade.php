@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pl-5 pt-2">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 75%" alt="">
        </div>
        <div class="col-9 pt-3">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3">
                    <div class="h2">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="{{ '/p/create' }}">Add New Post</a>
                @endcan
            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="mr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="mr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="mr-5"><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-4">
                <h6><strong>{{ $user->name }}</strong></h6>
            </div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div>
                <a href="http://{{ $user->profile->website }}"><strong>{{ $user->profile->website }}</strong></a>
            </div>
        </div>
    </div>

    <div class="pt-5">
        <hr>
        <h6 class="text-center">POSTS</h6>
    </div>

    <div class="row">
        @foreach ($user->posts as $posts)
            <div class="col-4 pb-4">
                <a href="/p/{{ $posts->id }}"><img src="/storage/{{ $posts->image }}" alt="" class="w-100"></a>
            </div>
        @endforeach
    </div>
</div>
@endsection
