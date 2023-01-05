@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
    <div class="container-fluid">
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> -->
        <a class="navbar-brand" href="#">MaiBoutique</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/search">Search</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
            </li>
        </ul>
                <a class="btn btn-outline-dark" type="submit" id="button0" a href="/create">Add Item</a>
                <a class="btn btn-outline-dark" type="submit" id="button0" a href="#">Sign Out</a>
        </div>
    </div>
</nav>

      <h2>Find Your Best Clothes Here!</h2>

<div class="box">
<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($clothes as $clothes)
        <div class="card" style="width: 18rem;">
            <center><img src="{{asset('storage/images/' . $clothes->image)}}" class="card-img-top" alt="{{$clothes->image}}"></center>
            <div class="card-body">
                <h5 class="card-title">{{$clothes->name}}</h5>
                <p class="card-text">Rp {{$clothes->price}}</p>
                <a href="#" class="btn btn-primary">More Detail</a>
            </div>
        </div>
    @endforeach
</div>

    <div class="pagination2">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
