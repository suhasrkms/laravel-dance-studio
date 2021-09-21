@extends('layouts.admin')

@section('javascript')

  <script type="text/javascript">
  toastr.options.progressBar = true;
  toastr.options.closeButton = true;
  toastr.options.newestOnTop = true;
  // toastr.options.positionClass = "toast-bottom-right";
</script>

{{-- displaying error --}}

<script>
@if ($errors->any())
@foreach ($errors->all() as $error)
setTimeout(
  function(){
    toastr.error('{{$error}}', 'Cannot send Feedback');
  } , 1000);
  @endforeach
  @endif
  </script>

  {{-- displaying Session --}}
  <script>
  @if(Session::has('message'))
  setTimeout(
    function(){
      toastr.success('{{ Session::get('message') }}');
    } , 1000);
    @endif

    @if(Session::has('delete'))
    setTimeout(
      function(){
        toastr.error('{{ Session::get('delete') }}');
      } , 1000);
      @endif
      </script>

    @endsection

    @section('content')

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Events</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Event Name</th>
                  <th>Info</th>
                  <th>Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($events as $event)
                  <tr>
                    <td class="text-capitalize">{{ $event->event_type }}</td>
                    <td class="text-capitalize">{{ $event->event_name}}</td>
                    <td>{{ $event->event_info}}</td>
                    <td>{{ $event->date }}</td>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#model{{ $event->id }}" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm rounded-0 ml-2" type="button" data-toggle="modal" data-target="#delete{{ $event->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>

                  <!-- Update Modal -->

                  <div class="modal fade bd-example-modal-lg" id="model{{ $event->id }}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Event</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body pl-4">

                          {!! Form::model($event, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\AdminEventsController@update',$event->id]]) !!}


                          <div class="form-row">

                            <div class="form-group col-md-12">
                              {!! Form::label('event_type', 'Event Type') !!}
                              {!! Form::select('event_type', ['class' =>'Class', 'event'=>'Event']  , 'class' , ['class'=>'form-control col-4'])!!}
                            </div>

                            <div class="form-group col-md-6">
                              {!! Form::label('event_name', 'Event Name') !!}
                              {!! Form::text('event_name', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group col-md-12">
                              {!! Form::label('event_info', 'Information / Address') !!}
                              {!! Form::textarea('event_info', null, ['class'=>'form-control', 'rows' => 3, 'cols' => 60])!!}
                            </div>

                            <div class="form-group col-md-6">
                              {!! Form::label('date', 'Date') !!}
                              {!! Form::date('date', null, ['class'=>'form-control'])!!}
                            </div>

                            <div class="form-group col-md-12">
                              {!! Form::label('start_time','Time: ') !!} <br>
                              {!! Form::time('start_time', null, ['class'=>'form-control col-3 d-inline'])!!} to
                              {!! Form::time('end_time', null, ['class'=>'form-control col-3 d-inline'])!!}
                            </div>
                          </div>
                        </div>

                        <div class="modal-footer">
                          {{-- <button type="button" class="btn btn-success">Save changes</button> --}}
                          {!! Form::submit('Save changes', ['class'=>'btn btn-success']) !!}

                          {!! Form::close() !!}
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="delete{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Do you really want to delete these records? This process cannot be undone.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>

                          {!! Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\AdminEventsController@destroy',$event->id]]) !!}
                          <div class="form-group">
                            {!! Form::submit('Delete Event', ['class'=>'btn btn-danger']) !!}
                          </div>
                          {!! Form::close() !!}

                          {{-- <button type="button" class="btn btn-danger">Save changes</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    @endsection()
