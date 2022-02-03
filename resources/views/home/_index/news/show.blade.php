@extends('layouts.app')

@section('styles_scripts')

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
    
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endsection

@section('content')

  <!-- Main Content-->
  <div class="container">

    <div class="card mt-5 mb-5 pl-5 pr-5">
      
      <h2
        class="mt-3 mb-3"
      >
        {{ $article->title }}
      </h2>

      <div>

        <img 
          class="img-fluid"
          src="{{ asset('storage/'.$article->image) }}" 
          alt="{{ $article->title }}"
        >

      </div>

      <p
        class="mt-3 mb-3"
      >
        {{ $article->content }}
      </p>



    </div>

  </div>

  <!-- Footer -->
  @include('home._index.footer')

@endsection