@extends('layouts.admin')

@section('content')

  @if (count($teachers)==0)
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h1 class="display-4 py-5 text-center">  No Teachers Found Or All Teachers Details has been filled. </h1>
      </div>
    </div>
  @else
    <div class="card shadow mb-4">

      <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Create Teachers Information</h5>
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

        {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\AdminTeachersController@store', 'files'=>true]) !!}

        <div class="form-group">
          {!! Form::label('teachers_id', 'Teachers Name') !!}
          {!! Form::select('teachers_id', $teachers, null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('dp_path', 'Display Pic') !!}
          <br>
          {!! Form::file('dp_path', null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('information', 'Bio') !!}
          {!! Form::textarea('information', null, ['class'=>'form-control','rows' => 3, 'cols' =>  40])!!}
        </div>

        <div class="form-group">
          {!! Form::label('rating', 'Rating') !!}
          {!! Form::select('rating',['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5'],null, ['class'=>'form-control col-1']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('dance','Dance Style Known') !!}
          <br>
          {!! Form::checkbox('style[]', 'Western', true); !!}
          {!! Form::label('dance','Western') !!}
          &nbsp;&nbsp;&nbsp;
          {!! Form::checkbox('style[]', 'Contemporary'); !!}
          {!! Form::label('dance','Contemporary') !!}
          &nbsp;&nbsp;&nbsp;
          {!! Form::checkbox('style[]', 'Bharatanatyam'); !!}
          {!! Form::label('dance','Bharatanatyam') !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Create Event', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

      </div>
    </div>
  @endif
@endsection()
