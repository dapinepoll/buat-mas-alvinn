@extends('main') {{-- otomatis si home.blade mendpatkan template dari si main.blade.php --}}
@section('title','Update Product') {{-- ini versi pendek AKA cman tlisan tok --}}
@section('content')
    <form action="/product/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$item->id}}">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$item->name}}">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quantity</label>
            <input type="number" name="qty" class="form-control" id="formGroupExampleInput2" value="{{$item->qty}}">
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
