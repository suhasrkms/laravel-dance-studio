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
          <h6 class="m-0 font-weight-bold text-primary">Teachers Info</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th></th>
                  <th>Name</th>
                  <th>Information</th>
                  <th>Rating</th>
                  <th>Styles</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($teachers_info as $t_info)
                  <tr>
                    <td><img height="50px" class="img-responsive rounded" src="{{ $t_info->dp_path }}" alt=""></td>
                    <td class="text-capitalize">{{ $t_info->name }}</td>
                    <td>{{ $t_info->information }}</td>
                    <td>{{ $t_info->rating }} of 5</td>
                    <td>{{ $t_info->style }}</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#update{{ $t_info->id }}" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm rounded-0 ml-2" type="button" data-toggle="modal" data-target="#delete{{ $t_info->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>

                  <!-- Update Modal -->

                  <div class="modal fade bd-example-modal-lg" id="update{{ $t_info->id }}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update Teacher's Information</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body pl-4">

                          {!! Form::model($t_info, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\AdminTeachersController@update', $t_info->id],'files'=>true]) !!}

                          <div class="row">
                            <div class="form-group col-6">
                              {!! Form::label('dp_path', 'Change Display Pic') !!}
                              <br>
                              {!! Form::file('dp_path', null,['class'=>'form-control'])!!}
                            </div>
                            <div class="col-6">
                              <img height="100px" class="img-responsive rounded float-right pr-4" src="{{ $t_info->dp_path }}" alt="">
                            </div>
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
                            {!! Form::checkbox('style[]', 'Western', str_contains($t_info, 'Western'))!!}
                            {!! Form::label('dance','Western') !!}
                            &nbsp;&nbsp;&nbsp;
                            {!! Form::checkbox('style[]', 'Contemporary', str_contains($t_info, 'Contemporary'))!!}
                            {!! Form::label('dance','Contemporary') !!}
                            &nbsp;&nbsp;&nbsp;
                            {!! Form::checkbox('style[]', 'Bharatanatyam', str_contains($t_info, 'Bharatanatyam'))!!}
                            {!! Form::label('dance','Bharatanatyam') !!}
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
                  <div class="modal fade" id="delete{{ $t_info->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                          {!! Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\AdminUsersController@destroy',$t_info->id]]) !!}
                          <div class="form-group">
                            {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
                          </div>
                          {!! Form::close() !!}

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
