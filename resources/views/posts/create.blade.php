@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/p" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="card-body col-8 offset-2">
                <div class="row">
                    <h1>Add new post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Caption') }}</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" 
                    name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
    
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Image') }}</label>
                    <input id="image" type="file" class="form-control-file" 
                    name="image" value="{{ old('image') }}"  autocomplete="image" autofocus>
    
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
