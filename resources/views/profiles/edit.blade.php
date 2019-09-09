@extends('layouts.app')

@section('content')
<div class="container">

<form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col-8 offset-2">
            <h2 class="">Edit Profile</h2>
            
            <div class="form-group row">
                <label for="title" class="col-form-label">Title</label>
                
                <input id="title"
                    type="text" 
                    class="form-control @error('title') is-invalid @enderror"
                    name="title" 
                    value="{{ old('title') ?? $user->profile->title }}"
                    autocomplete="title"
                >

                @error('title') 
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="description" class="col-form-label">Description</label>
                
                <input id="description"
                    type="text" 
                    class="form-control @error('description') is-invalid @enderror"
                    name="description" 
                    value="{{ old('description') ?? $user->profile->description }}"
                    autocomplete="description"
                >

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="url" class="col-form-label">Url</label>
                
                <input id="url"
                    type="text" 
                    class="form-control @error('url') is-invalid @enderror"
                    name="url" 
                    value="{{ old('url') ?? $user->profile->url }}"
                    autocomplete="url"
                >

                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group row">
                <label for="image" class="col-form-label">Profile Image</label>
                <input type="file" class="form-control-file @error('caption') is-invalid @enderror p-1" id="image" name="image">
                
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="row pt-3">
                 <button class="btn btn-primary">Save Changes</button>
            </div>

        </div>
    </div>
</form>
</div>
@endsection


