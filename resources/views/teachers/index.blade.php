@extends('layouts.app')

@section('content')

  <div id="home-section">
    <div class="dark-overlay">
      <div class="container-fluid px-5" style="padding: 6rem 0 3rem 0;">
        <h1 class="display-4 pt-0 text-light d-inline">Add Class</h1>

        @if(Session::has('message'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endforeach
        @endif

        <div class="row pt-2">
          <div class="col-12 col-lg-6 pb-3">
            <div class="card">
              <div class="card-body">

                {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\TeachersEventController@store']) !!}

                <div class="form-group">
                  {!! Form::label('event_name', 'Class Name:') !!}
                  {!! Form::text('event_name', null, ['class'=>'form-control col-lg-6'])!!}
                </div>

                <div class="form-group">
                  {!! Form::label('event_info', 'Information / Address') !!}
                  {!! Form::textarea('event_info', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 40])!!}
                </div>
                <div class="form-group">
                  {!! Form::label('date', 'Date') !!}
                  {!! Form::date('date', null, ['class'=>'form-control col-lg-6'])!!}
                </div>

                <div class="form-group">
                  {!! Form::label('start_time','Time: ') !!}
                  {!! Form::time('start_time', null, ['class'=>'form-control col-4 d-inline'])!!} to
                  {!! Form::time('end_time', null, ['class'=>'form-control col-4 d-inline'])!!}
                </div>

                <div class="form-group">
                  {!! Form::submit('Create Event', ['class'=>'btn btn-primary mt-3']) !!}
                </div>

                {!! Form::close() !!}

              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="card">
              <div class="card-header">
                All Classes
              </div>
              <ul class="list-group list-group-flush">

                @foreach ($events->where('event_type','class')->sortBy('start_time') as $event)
                @if ( Carbon\Carbon::parse($event->date)->format('Y-m-d') == Carbon\Carbon::now()->format("Y-m-d") || Carbon\Carbon::parse($event->date)->format('Y-m-d') == Carbon\Carbon::tomorrow()->format("Y-m-d"))
                <li class="list-group-item"> {{ $event->event_name }} Class <span class="text-success"> @ {{ Carbon\Carbon::parse($event['start_time'])->diffForHumans() }}</span></li>
                <p hidden>{{ $count = $count+1 }}</p>
                @endif
                @endforeach

                @if (count($events->where('event_type','class')) == 0 )
                <li class="list-group-item">No Classes Scheduled</li>
                @elseif ($count == 0)
                <li class="list-group-item">No Classes Scheduled</li>
                @endif

              </ul>

            </div>
          </div>

        </div>

      </div>
    </div>
  </div>

@endsection
