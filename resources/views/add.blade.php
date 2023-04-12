@extends('main') {{-- otomatis si home.blade mendpatkan template dari si main.blade.php --}}
@section('title','Add Product') {{-- ini versi pendek AKA cman tlisan tok --}}
@section('content')
    <form action="/product/add" method="post">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quantity</label>
            <input type="number" name="qty" class="form-control" id="formGroupExampleInput2" >
        </div>
        <button type="submit" class="btn btn-info">submit</button>
    </form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger mt-3 mb-3" role="alert">
                {{$error}}
            </div>
        @endforeach
        @endif
@endsection
