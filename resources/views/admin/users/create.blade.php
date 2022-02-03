@extends('admin.index')

@section('admin.content')

  {!!
    Form::open()
        ->post()
        ->multipart()
        ->route('admin.users.store')
  !!}

    @include('admin.users._form')

  {!! Form::close() !!}

@endsection