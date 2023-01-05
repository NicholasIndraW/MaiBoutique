@extends('layouts.app')

@section('content')
<nav id="navbar" class style="top: @px;">
        <p>
            MAI BOUTIQUE
            <a href="/home">Home</a>
            <a href="/search">Search</a>
            <a href="/cart">Cart</a>
            <a href="/history">History</a>
            <a href="/profile">Profile</a>
        </p>
    </nav>
    <h1 style="display: flex; justify-content: center;">Find Your Best Clothes Here!</h1>
@endsection
