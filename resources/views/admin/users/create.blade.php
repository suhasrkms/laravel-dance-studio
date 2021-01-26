@extends('layouts.admin')

@section('content')

  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Create User</h5>
    </div>
    <div class="card-body">

      @if(Session::has('message'))
        <p class=" pb-3 alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
      @endif

      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
            {{ $error }} <br>
          @endforeach
        </ul>
      @endif

      {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\AdminUsersController@store']) !!}

      <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('role', 'Role:') !!}
        {!! Form::select('role', ['student' =>'Student', 'teacher'=>'Teacher', 'admin'=>'Admin']  , 'student' , ['class'=>'form-control col-4'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}

    </div>

  </div>
@endsection()
