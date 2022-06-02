@extends('layouts.app')

@section('title', "Home")

@section('header')
    @include('pages.home._header')
@endsection

@section('content')
    @include('pages.home._features')

    @include('pages.home._welcome')

    @include('pages.home._products')

    @include('pages.home._reason')

    @include('pages.home._testimonial')

    @include('pages.home._news-article')
@endsection
