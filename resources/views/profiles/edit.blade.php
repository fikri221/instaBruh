@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/profile/{{ $user->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="card-body col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
                    name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>
    
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
                    name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="website" class="col-md-4 col-form-label">{{ __('Website') }}</label>
                    <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" 
                    name="website" value="{{ old('website') ?? $user->profile->website }}"  autocomplete="website" autofocus>
    
                    @error('website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Foto Profile') }}</label>
                    <input id="image" type="file" class="form-control-file" 
                    name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>
    
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary" type="submit">Simpan Profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
