@extends('layouts.app')

@section('content')

    <form action="{{ route("url_shoren.store") }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="url" class="form-control" placeholder="Type Url Here..." aria-label="Type Url Here..." aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="submit">Shorten Url</button>
            </div>
        </div>
        @error('url')
            <small class="form-text text-danger">{{ $message }}</small>
        @enderror

        <div class="alert-messege">
            <!--------------- Session Alert ----------------->
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <a href="{{ session()->get('success') }}"> {{ session()->get('success') }} </a>
                </div>
            @elseif(session()->has('failed'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('failed') }}
                </div>
            @endif
        </div>

    </form>


    
@endsection
