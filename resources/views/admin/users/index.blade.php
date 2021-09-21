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
          <h6 class="m-0 font-weight-bold text-primary">Users ( {{ count($users) }} )</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display table table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td class="text-capitalize">{{ $user->name}}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-capitalize">{{ $user->role}}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                    <td>
                      <div class="btn-group">
                        <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" data-target="#update{{ $user->id }}" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-edit"></i></button>
                        <button class="btn btn-danger btn-sm rounded-0 ml-2" type="button" data-toggle="modal" data-target="#delete{{ $user->id }}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                      </div>
                    </td>
                  </tr>


                  <!-- Update Modal -->

                  <div class="modal fade bd-example-modal-lg" id="update{{ $user->id }}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Update User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body pl-4">

                          {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\AdminUsersController@update',$user->id]]) !!}

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
                            {!! Form::select('role', ['student' =>'Student', 'teacher'=>'Teacher', 'admin'=>'Admin']  , null , ['class'=>'form-control col-4'])!!}
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
                  <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                          {!! Form::open(['method'=>'DELETE', 'action'=> ['App\Http\Controllers\AdminUsersController@destroy',$user->id]]) !!}
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
