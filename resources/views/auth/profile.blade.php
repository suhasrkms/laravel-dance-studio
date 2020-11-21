@extends('layouts.app')

@section('content')

  <div class="container" style="min-height:580px; padding-top:7rem; color:black;">
    @if(Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
    @endif
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <h4>Profile Information</code></h5>
          <span class="text-justify" style="padding-top:-3px;">Update your account's profile information and email address.</span>
        </div>

        <div class="col-lg-8 text-center pt-0">
          <div class="card py-4 mb-5 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">

            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\ProfileController@update',$user->id]]) !!}

            <div class="form-group px-3">
              {!! Form::label('name', 'Name ',['class'=>'col-12 text-left pl-0']) !!}
              {!! Form::text('name', null, ['class'=>' col-md-8 form-control'])!!}

              {!! Form::label('email', 'Email ',['class'=>'pt-3 col-12 text-left pl-0']) !!}
              {!! Form::email('email', null, ['class'=>'col-md-8 form-control'])!!}

            </div>

            <div class="form-group row mb-0 mr-4">
              <div class="col-md-8 offset-md-4 text-right">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
              </div>
            </div>

          </div>
        </div>

      </div>
      <div class="border-bottom border-grey"></div>

      <div class="row justify-content-center pt-5">
        <div class="col-lg-4">
          <h4>Update Password</code></h5>
            <span class="text-justify" style="padding-top:-3px;">Ensure your account is using a long, random password to stay secure.</span>
          </div>

          <div class="col-lg-8 text-center pt-0">
            <div class="card py-4 mb-5 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
              <div class="form-group px-3 ">

                {!! Form::label('current_password', 'Current Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('current_password', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group px-3">
                {!! Form::label('new_password', 'New Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('new_password', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group px-3">
                {!! Form::label('new_confirm_password', 'Confirm Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('new_confirm_password', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group row mb-0 mr-4">
                <div class="col-md-8 offset-md-4 text-right">
                  {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>

        </div>
      </div>

    @endsection
