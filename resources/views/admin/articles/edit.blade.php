@extends('admin.index')

@section('admin.content')

  {!!
    Form::open()
        ->patch()
        ->multipart()
        ->route('admin.articles.update', [$article->id])
        ->fill($article)
  !!}

    @include('admin.articles._form')

  {!! Form::close() !!}

@endsection