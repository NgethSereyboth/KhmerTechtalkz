@extends('layouts.app')

@section('styles_scripts')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
    
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endsection

@section('content')

  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-12 col-lg-8 col-xl-12">
        <!-- news-->
        @include('home._index.news')

        <!-- who we are -->
        @include('home._index.who_we_are')

        <!-- what we do -->
        @include('home._index.what_we_do')

        <!-- donate -->
        @include('home._index.donate')

        <!-- career -->
        @include('home._index.career')

        <!-- Contact -->
        @include('home._index.contact')
          
      </div>
    </div>
  </div>

  <!-- Footer -->
  @include('home._index.footer')

@endsection