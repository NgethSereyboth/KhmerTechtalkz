@extends('layouts.app')

@section('styles_scripts')

  <!-- Scripts -->
  <script src="{{ asset('js/admin.js') }}" defer></script>
    
  <!-- Styles -->
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

@endsection

@section('content')

<div class="wrapper">

  {{-- side bar --}}
  @include('admin._partials.side_bar')

  <div id="content" style="width: 100%">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="container-fluid">

        <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Open Menu</span>
        </button>

        @yield('admin.create')

      </div>
    
    </nav>

    @yield('admin.content')
  
  </div>

</div>


@endsection