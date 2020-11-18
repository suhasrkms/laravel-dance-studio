@extends('layouts.app')

@section('content')

  <div class="container" style="min-height:580px; padding-top:7rem; color:black;">
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

              <div class="form-group pl-3 pt-3">
                {!! Form::label('password', 'Current Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('oldpassword', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group pl-3">
                {!! Form::label('password', 'New Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('newpassword', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group pl-3">
                {!! Form::label('password', 'Confirm Password:',['class'=>'col-12 text-left pl-0']) !!}
                {!! Form::password('confirmpassword', ['class'=>'col-md-8 form-control'])!!}
              </div>

              <div class="form-group row mb-0 mr-4">
                <div class="col-md-8 offset-md-4 text-right">
                  {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
                </div>
              </div>
              <h4>{{ $user->password }}</h4>
              {!! Form::close() !!}
            </div>
          </div>

        </div>
      </div>


    @endsection




    <form action="{{ url('admin/admin-admin-password-update/'.$admin->id) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
            <label for="new_password" class="form-label">New Password (Minimum of 6 characters. No spaces.) <span class="required-alert">*</span></label>
            <input type="password" class="form-control" name="new_password" id="new_password" />

            @if ($errors->has('new_password'))
                <div class="help-block">
                     {{ $errors->first('new_password') }}
                </div>
           @endif

       </div>
       <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
            <label for="confirm_password" class="form-label">Confirm New Password <span class="required-alert">*</span></label>
            <input type="password" class="form-control" name="confirm_password" id="confirm_password" />

            @if ($errors->has('confirm_password'))
                <div class="help-block">
                     {{ $errors->first('confirm_password') }}
                </div>
           @endif

      </div>
      <div class="form-group clearfix">
         <button type="submit" class="btn btn-primary">Save New Password</button>
      </div>
     </form>
