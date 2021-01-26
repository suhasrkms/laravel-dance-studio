@extends('layouts.app')

@section('content')

  <div class="container" style="min-height:580px; padding-top:7rem; color:black;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Profile</div>

          <div class="card-body text-center">

            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\UserProfileController@store']) !!}

            <div class="form-group">
              {!! Form::label('name', 'Name',['class'=>'pr-4']) !!}
              {!! Form::text('name', null, ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('name', 'Name',['class'=>'pr-4']) !!}
              {!! Form::text('name', null, ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('name', 'Name',['class'=>'pr-4']) !!}
              {!! Form::text('name', null, ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
