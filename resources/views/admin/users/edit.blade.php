@extends('admin.index')

@section('admin.content')

  {!!
    Form::open()
        ->patch()
        ->multipart()
        ->route('admin.users.update', [$user->id])
        ->fill($user)
  !!}

    @include('admin.users._form')

  {!! Form::close() !!}

@endsection