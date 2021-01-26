@extends('layouts.admin')

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
            </tr>
          </thead>

          @foreach ($events as $event)

            <tbody>
              <tr>
                <td class="text-capitalize">{{ $event->event_type }}</td>
                <td class="text-capitalize">{{ $event->event_name}}</td>
                <td>{{ $event->event_info}}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->start_time }}</td>
                <td>{{ $event->end_time }}</td>
              </tr>
            </tbody>

          @endforeach
        </table>
      </div>
    </div>
  </div>

@endsection()
