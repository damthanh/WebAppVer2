@extends('master')

@section('title')
	<title> Home </title>
@stop

@section('head')
    @include('head')
@stop

@section('header')
    @include('header')
@stop

@section('content')

	<div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
					<li data-target="#carouselId" data-slide-to="2"></li>
					
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img data-src="holder.js/1004x500/auto/#777:#555/text:First slide" src="{{asset('images/UET.jpg')}}" width=1090px height=400px alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img data-src="holder.js/1004x500/auto/#666:#444/text:Second slide" src="{{asset('images/FITUET.png')}}" width=1090px height=400px alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img data-src="holder.js/1004x500/auto/#666:#444/text:Third slide" src="{{asset('images/FETUET.jpg')}}" width=1090px height=400px alt="Third slide">
					</div>
					<!-- <div class="carousel-item">
                        <img data-src="holder.js/1004x500/auto/#666:#444/text:Third slide" src="images/carousel/4.jpg" width=1004px height=400px alt="Fourth slide">
					</div>
					<div class="carousel-item">
                        <img data-src="holder.js/1004x500/auto/#666:#444/text:Third slide" src="images/carousel/5.jpg" width=1004px height=400px alt="Fifth slide">
					</div>
					<div class="carousel-item">
                        <img data-src="holder.js/1004x500/auto/#666:#444/text:Third slide" src="images/carousel/6.jpg" width=1004px height=400px alt="Sixth slide">
                    </div> -->
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
    </div>
@stop

@section('footer')
	@include('footer')
@stop