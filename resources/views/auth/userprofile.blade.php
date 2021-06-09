@extends('layouts.app')

@section('content')

  <div class="container" style="min-height:580px; padding-top:7rem; color:black;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Please Complete your Profile to proceed</div>

          <div class="card-body ">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                  <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endforeach
            @endif

            {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\UserProfileController@store']) !!}

            <div class="form-group">
              {!! Form::label('phone_no', 'Phone :',['class'=>'pr-4']) !!}
              {!! Form::text('phone_no', null, ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('age', 'Age',['class'=>'pr-5']) !!}
              {!! Form::number('age', null,['class'=>'form-control col-md-2 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('style', 'Dance Style :',['class'=>'pr-4']) !!}
              {!! Form::select('style', ['Western' =>'Western', 'Contemporary '=>'Contemporary ', 'Bharatanatyam'=>'Bharatanatyam']  , null , ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::label('prefered_batch', 'Prefered Batch:',['class'=>'pr-2']) !!}
              {!! Form::select('prefered_batch', ['morning' =>'Morning', 'evening'=>'Evening', 'night'=>'Night']  , null , ['class'=>'form-control col-md-4 d-inline'])!!}
            </div>

            <div class="form-group">
              {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
