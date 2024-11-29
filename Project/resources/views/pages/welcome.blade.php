@extends('layouts.Client.app')

@section('title','| Home Page')


@section('mainContent')
 <!-- Masthead-->
        <header class="masthead bg text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avatar.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">{!! $title !!}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">🌾 {{ $title }} - Where Fields of Gold Flourish with Rapeseed Dreams 🌻</p>
            </div>
        </header>
@endsection
