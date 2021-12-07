@extends('mainpage')
@section('content')

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.aspca.org/sites/default/files/styles/feature_slider_1502x700/public/billboard/desktop/dec-ea1_this-time-next-year_112921_homepage.jpg?itok=7G7kkYP5" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.aspca.org/sites/default/files/styles/feature_slider_1502x700/public/billboard/desktop/december-another-day_112420_homepage.jpg?itok=8Yj9cyFB" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container">
      <h1 style="text-align: center; opacity:30%;">Original site: <a href="https://www.aspca.org/">ASPCA</a></h1>
    <h1 class="" style="text-align: center; margin-bottom:2rem">The Latest</h1>
      <div class="row">
          <div class="col">
            <p style="color: grey">December 3, 2021</p>
            <h2 style="color: orangered">USA: Support Goldie’s Act to Protect Dogs in Puppy Mills</h2>
            Urge Congress to fix the USDA policies that have failed puppy mill dogs and allowed animal suffering for far too long. Support the passage of Goldie's Act!
          </div>
          <div class="col">
            <p style="color: grey">November 29, 2021</p>
            <h2 style="color: orangered">Creating a More Humane Food System with Groundbreaking Legislation in New York State</h2>
            New York State spends well over $1 billion each year on meals provided at public institutions. Proposed legislation could allow those institutions to source higher-welfare food products, rather than being forced to use the cheapest option available, thus paving the way for a more humane food system. 
          </div>
      </div>
    
  </div>

@endsection
