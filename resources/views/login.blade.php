@extends('main')
@section('title','Login')
@section('content')
    <form action="/login" method="post">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('message.email')}}</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">{{__('message.password')}}</label>
            <div class="col-sm-10">
                <input type="password" name="npass" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">{{__('message.remember_me')}}</label>
            <div class="col-sm-10">
                <input type="checkbox" name="remember">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('message.login')}}</button>
    </form>
@endsection
