@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt="" class="w-100"></a>
        </div>
    </div>
    <div class="row mt-2 mb-5">
        <div class="col-6 offset-3">
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
    @endforeach
</div>

<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
