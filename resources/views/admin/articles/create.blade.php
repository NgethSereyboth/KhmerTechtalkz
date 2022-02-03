@extends('admin.index')

@section('admin.content')

  {!!
    Form::open()
        ->post()
        ->multipart()
        ->route('admin.articles.store')
  !!}

    @include('admin.articles._form')

  {!! Form::close() !!}

@endsection