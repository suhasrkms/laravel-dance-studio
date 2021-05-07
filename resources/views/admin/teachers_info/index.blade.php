@extends('layouts.admin')

@section('content')

  <h1>Helooo</h1>
  {{$teachers_info}}

  @foreach ($teachers_info as $info)
    <img height="50px" src="/TeachersImages/{{ $info->dp_path }}" alt="">
  @endforeach

@endsection
