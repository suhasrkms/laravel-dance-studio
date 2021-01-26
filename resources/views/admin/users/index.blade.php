@extends('layouts.admin')

@section('content')

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Users ( {{ count($users) }} )</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Created At</th>
              <th>Updated At</th>
            </tr>
          </thead>

          @foreach ($users as $user)

            <tbody>
              <tr>
                <td>{{ $user->id }}</td>
                <td class="text-capitalize">{{ $user->name}}</td>
                <td>{{ $user->email }}</td>
                <td class="text-capitalize">{{ $user->role}}</td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>
              </tr>
            </tbody>

          @endforeach
        </table>
      </div>
    </div>
  </div>

@endsection()
