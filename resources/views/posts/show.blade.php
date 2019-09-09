@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" style="" /> 
        </div>

        <div class="col-4">
            <div class="">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="">
                        <img src="{{$post->user->profile->profileImage()}}" alt="" class="rounded-circle w-100" style="max-width:40px;"/>
                        <a href="/profile/{{$post->user->id}}" class="text-dark font-weight-bold" style="text-decoration:none"> {{$post->user->username}}</a>
                    </div>

                   <div class="">
                        <div class="">
                            <a href="#" class="btn btn-secondary btn-sm">Follow</a>
                        </div>
                   </div>
               </div>

               <hr>

                <p>
                    <span class="font-weight-bold"> 
                        <a href="/profile/{{$post->user->id}}" class="text-dark" style="text-decoration:none"> {{$post->user->username}}</a>
                    </span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    
    </div>   
</div>
@endsection
