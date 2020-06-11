@extends('layouts.siteLayout')

@section('content')
    <div class="container">
      <h1 class="text-center pt-5 pb-3">Select your type</h1>
    </div>

    <!-- Carousel -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
      </ol>
      <div class="carousel-inner">
        <a href="/opportunities#recruitment" class="carousel-item active">
          <img class="d-block w-100" src="{{asset('images/recruitment.png')}}" alt="Recruitment and Selection">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Recruitment and Selection </h1>
          </div>
        </a>
        <a href="/opportunities#compensation" class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/compensation.jpg')}}" alt="Compensation and Benefits">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Compensation and Benefits </h1>
          </div>
        </a>
        <a href="/opportunities#health" class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/health.png')}}" alt="Health and Safety">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Health and Safety </h1>
          </div>
        </a>
        <a href="/opportunities#relations" class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/relations.png')}}" alt="Labor and Employee Relations">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Labor and Employee Relations </h1>
          </div>
        </a>
        <a href="/opportunities#training" class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/training.jpg')}}" alt="Training and Development">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Training and Development </h1>
          </div>
        </a>
        <a href="/opportunities#risk_management" class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/risk.jpg')}}" alt="Risk Management">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Risk Management </h1>
          </div>
        </a>
        <a href="/opportunities#managing" class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/managers.jpeg')}}" alt="Managing and Directing">
          <div class="carousel-caption text-dark pb-5">
            <h1 class="badge badge-pill"> Managing and Directing </h1>
          </div>
        </a>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Cards -->

    <div class="container mb-5">
      <div class="row justify-content-around">
        <div class="card col-8 col-md-5 mt-5">
          <img src="{{asset('images/opportunities.jpg')}}" alt="Opportunities" class="card-img-top my-2 border border-warning rounded">
          <div class="card-body">
            <h2 class="card-title">Opportunities</h2>
            <div class="card-text">Every large and medium size organization keeps a fully functional HRM/HRD/Personnel department managed by HR professionals. With adequate qualification in HR you may be part of such a team.</div>
            <br />
            <a href="/opportunities" class="btn btn-warning"> See Opportunities </a>
          </div>
        </div>
        <div class="card col-8 col-md-5 mt-5">
          <img src="{{asset('images/join-us.jpeg')}}" alt="Opportunities" class="card-img-top my-2 border border-warning rounded">
          <div class="card-body">
            <h2 class="card-title">Work With Us</h2>
            <div class="card-text">
              Join our vast network ot HR's.
              Learn about HR industry by the field experts.
              Improve your skills with our facilities.
            </div>
            <br />
            <a href="/join" class="btn btn-warning"> Join Us </a>
          </div>
        </div>
      </div>
    </div>

@endsection