@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
<div class="container-fluid">
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button> -->
    <a class="navbar-brand" href="/home">MaiBoutique</a>
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
            <button class="btn btn-outline-dark" type="submit" id="button0" a href="/create">Add Item</button>
            <button class="btn btn-outline-dark" type="submit" id="button0" a href="#">Sign Out</button>
    </div>
</div>
</nav>

<div class="box2">
    <div class="block3">
        <h2>Add Item</h2>
        <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="box3">

            <div class="mb-3 form-group">
                <label for="image" class="form-label">Clothes Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3 form-group">
                <label for="name" class="form-label">Clothes Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="5-20 letters">
            </div>

            <div class="mb-3 form-group">
                <label for="description" class="form-label">Clothes Desc</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="min 5 letters">
            </div>

            <div class="mb-3 form-group">
                <label for="price" class="form-label">Clothes Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="≥1000">
            </div>

            <div class="mb-3 form-group">
                <label for="stock" class="form-label">Clothes Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" placeholder="≥1">
            </div>

            <button class="btn btn-outline-dark" id="button3">Add</button> 
            </div>
        </form>
    </div>
</div>
@endsection
