@extends('layouts.app')

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
    </script>

    @endsection

    @section('content')
    <!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">Subscribe our Newsletter</h5>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
  <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
  <form>
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Name">
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="Email Address">
</div>
<button type="submit" class="btn btn-primary">Subscribe</button>
</form>
</div>
</div>
</div>
</div> -->


<div id="home-section">
  <div class="dark-overlay">
    <div class="container-fluid" style="padding-top:6rem;">

      <div class="row px-4">

        <div class="col-md-3 px-3">
          <div class="card">
            <div class="card-header">
              Classes ( <span class="text-primary">{{ Carbon\Carbon::now()->format("d-m-Y") }}</span> )
            </div>
            <ul class="list-group list-group-flush">

              @foreach ($events->where('event_type','class') as $event)
              @if ($event->date == Carbon\Carbon::now()->format("Y-m-d"))
              <li class="list-group-item">{{ $event->event_name }} Class @ {{ Carbon\Carbon::parse($event['start_time'])->format('g:i a') }}</li>
              <p hidden>{{ $count = $count+1 }}</p>
              @endif
              @endforeach

              @if (count($events->where('event_type','class')) == 0 )
              <li class="list-group-item">No Classes Scheduled</li>
              @elseif ($count == 0)
              <li class="list-group-item">No Classes Scheduled</li>
              @endif

              <li class="list-group-item text-center text-light">
                <a class="btn btn-info btn-block" data-toggle="modal" data-target="#allClasses">See All Classes</a></td>
              </li>
            </ul>
          </div>

          <div class="card mt-4">
            <div class="card-header">
              Events
            </div>
            <ul class="list-group list-group-flush">

              <p hidden>{{ $count = 0 }}</p>

              @foreach ($events->where('event_type','event') as $event)
              @if ($event->date >= Carbon\Carbon::now()->format("Y-m-d"))
              <li class="list-group-item">{{ $event->event_name }} Class @ {{ Carbon\Carbon::parse($event['start_time'])->format('g:i a') }}</li>
              <p hidden>{{ $count = $count +1 }}</p>
              @endif
              @endforeach

              @if (count($events->where('event_type','event')) == 0)
              <a href="#" class="text-primary">
                <li class="list-group-item">No Upcoming Events ...</li>
              </a>
              @elseif ($count == 0)
              <a href="#" class="text-primary">
                <li class="list-group-item">No Upcoming Events ...</li>
              </a>
              @endif

            </ul>
          </div>
        </div>

        <div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="notice d-flex justify-content-between align-items-center">
                  <div class="cookie-text">This website uses cookies to personalize content and analyse traffic in order to offer you a better experience.</div>
                  <div class="buttons d-flex flex-column flex-lg-row">
                    <a href="#a" class="btn btn-success btn-sm" data-dismiss="modal">I accept</a>
                    <a href="#a" class="btn btn-secondary btn-sm" data-dismiss="modal">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--==========================
        Modals
        ============================-->

        <!-- Modal -->
        <div class="modal fade" id="allClasses" tabindex="-1" role="dialog" aria-labelledby="allClasses" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">All Classes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($events->where('event_type','class') as $event)
                      <tr>
                        <th scope="row">{{ $event->id }}</th>
                        <td>{{ $event->event_name }}</td>
                        <td>{{ $event->date}}</td>
                        <td>{{ Carbon\Carbon::parse($event['start_time'])->format('g:i a') }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-md-9 p-md-0 p-3">
          <div class="row">

            <div class="col-sm-4">
              <div class="custom-card custom-card-1">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-md-0 pt-3">
              <div class="custom-card custom-card-2">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-md-0 pt-3">
              <div class="custom-card custom-card-3">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-3">
              <div class="custom-card custom-card-3">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

            <div class="col-sm-4 pt-3" >
              <a href="/home/events">
                <div class="custom-card custom-card-1" style="padding:75px;">
                  <div class="custom-card-body text-left">
                    <h3 class="text-center text-dark">Calender of Events</h3>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-sm-4 p-3">
              <div class="custom-card custom-card-2">
                <div class="custom-card-body text-left">
                  <h3>Card title</h3>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

<!--==========================
Contact US
============================-->
<section id="contact" class="section-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h3>Contact Us</h3>
      <p>Satisifed or not we need to know your ever feedback towards UGHUB ...<br> So fell free to contact us or mail upon</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
          <address>Bengaluru, Karnataka - 560061, INDIA</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Phone Number</h3>
          <p>+91 9945887177</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:support@ughub.in">support@ughub.in</a></p>
        </div>
      </div>

    </div>


    <div class="contactForm">
      {!! Form::model($user, ['method'=>'POST', 'action'=> ['App\Http\Controllers\EventsController@index',$user->id]]) !!}

      <div class="form-row">
        <div class="form-group col-md-6">
          {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group col-md-6">
          {!! Form::text('email', null,['class'=>'form-control'])!!}
        </div>
      </div>

      {{ Form::hidden('user_id',$user->id) }}

      <div class="form-group">
        {!! Form::text('subject', null,['class'=>'form-control','placeholder'=>'Subject'])!!}
      </div>

      <div class="form-group">
        {!! Form::textarea('message', null,['class'=>'form-control','rows'=>'5','placeholder'=>'Message'])!!}
      </div>

      <div class="form-group text-center">
        {!! Form::submit('Send Message', ['style'=>'background: #18d26e;
        border: 0;
        padding: 10px 30px;
        color: #fff;
        transition: 0.4s;
        cursor: pointer']) !!}
      </div>

      {!! Form::close() !!}
    </div>

  </div>
</section><!-- #contact -->

@endsection
