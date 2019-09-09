@extends('layouts.app')

@section('content')
<div class="container">

<form action="/p" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <h2 class="">Add New Post</h2>
            <div class="form-group row">
                <label for="caption" class="col-form-label">Post Caption</label>
                
                <input id="caption"
                    type="caption" 
                    class="form-control @error('caption') is-invalid @enderror"
                    name="caption" 
                    value="{{ old('caption') }}"
                    autocomplete="caption"
                >

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="image" class="col-form-label">Post Image</label>
                <input type="file" class="form-control-file @error('image') is-invalid @enderror p-1" id="image" name="image">
                
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row pt-4">
                 <button class="btn btn-primary">Submit Post</button>
            </div>

        </div>
    </div>
</form>
</div>
@endsection
