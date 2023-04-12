@extends('main') {{-- otomatis si home.blade mendpatkan template dari si main.blade.php --}}
@section('title','Product') {{-- ini versi pendek AKA cman tlisan tok --}}
@section('content')
    <div class="row mt-3 mb-3">
        <div class="col">
            <form class="d-flex" role="search" action="/search" method="post">
                @csrf
                <input class="form-control me-2" type="search" name="search">
            </form>
        </div>

        <div class="col">
            <a href="/product/add">
                <button type="button" class="btn btn-primary">Add Product</button>
            </a>
        </div>

        <div class="col">
            @foreach($data as $d)
                <div class="card mt-2 mb-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$d->name}}</h5> {{--   {{}} == echo == output         --}}
                        <p class="card-text">{{$d->qty}}</p>
                        <a href="/update/{{$d->id}}" class="card-link">Update</a>
                        <a href="/delete/{{$d->id}}" class="card-link">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            {{$data->links()}}
        </div>
    </div>
@endsection
