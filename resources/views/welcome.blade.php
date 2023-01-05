@extends('layouts.app')

@section('content')
    <nav class="navbar" style="background-color: #f6df9b;" id="navbar">
      <div class="container-fluid">
          <a class="navbar-brand">MaiBoutique</a>
          <form class="d-flex" role="search">
            @if (Route::has('login'))
            <div class="btn btn-outline-dark" id="button0">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Sign In') }}</a>
            </div>
            @endif
        </form>
        </div>
      </nav>

      <div class="pic1">
        <div class="box">
          <div class="block">
            <img src="image/logo1.png" class="img" style="height: 175px;">
            <h1>Welcome to <u>MaiBoutique</u></h1>
            <p>
              Online Boutique that Provides You with Various Clothes to Suit Your Various Activities
            </p>
            <!-- <button type="button" class="btn btn-outline-dark" id="button1" a href="#">Sign Up</button> -->
            @if (Route::has('register'))
                <div class="btn btn-outline-dark" id="button1">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('SIGN UP NOW') }}</a>
                </div>
            @endif
          </div>
        </div>
      </div>
@endsection