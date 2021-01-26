@extends('layouts.admin')

@section('content')

  <div class="card shadow mb-4">

    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Create Event</h5>
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

      {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\AdminEventsController@store']) !!}

      <div class="form-group">
        {!! Form::label('event_type', 'Event Type') !!}
        {!! Form::select('event_type', ['class' =>'Class', 'event'=>'Event']  , 'class' , ['class'=>'form-control col-4'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('event_name', 'Event Name:') !!}
        {!! Form::text('event_name', null, ['class'=>'form-control'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('event_info', 'Information') !!}
        {!! Form::textarea('event_info', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40])!!}
      </div>
      <div class="form-group">
        {!! Form::label('date', 'Date') !!}
        {!! Form::date('date', null, ['class'=>'form-control col-6'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('start_time','Time: ') !!}
        {!! Form::time('start_time', null, ['class'=>'form-control col-4 d-inline'])!!} to
        {!! Form::time('end_time', null, ['class'=>'form-control col-4 d-inline'])!!}
      </div>

      <div class="form-group">
        {!! Form::submit('Create Event', ['class'=>'btn btn-primary']) !!}
      </div>

      {!! Form::close() !!}

    </div>

  </div>
@endsection()
