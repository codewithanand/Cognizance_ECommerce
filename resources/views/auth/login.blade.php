@extends('layouts.client.master')

@section('title', 'Login - LaCommerce')

@section('content')
    <div class="untree_co-section">
        <div class="container">
            <div class="block">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-8 pb-4">
                        <form method="post" action="{{url('/login')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="text-black" for="email">Email address</label>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}">
                                @error('email')
                                    <small class="text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="text-black" for="password">Password</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                    <small class="text-danger">*{{$message}}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary-hover-outline">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
