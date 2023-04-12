@extends('main')
@section('title','Register')
@section('content')
    <form action="/register" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('message.name')}}</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('message.email')}}</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('message.gender')}}</label>
            <div class="col-sm-10">
                <input type="text" name="gender" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('message.role')}}</label>
            <div class="col-sm-10">
                <input type="text" name="role" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">{{__('message.image')}}</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="inputEmail3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">{{__('message.password')}}</label>
            <div class="col-sm-10">
                <input type="password" name="npass" class="form-control" id="inputPassword3">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">{{__('message.confirm_password')}}</label>
            <div class="col-sm-10">
                <input type="password" name="cpass" class="form-control" id="inputPassword3">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">{{__('message.submit')}}</button>
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif
    </form>
@endsection
