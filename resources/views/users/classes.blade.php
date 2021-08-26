@extends('layouts.app')

@section('javascript')

<style>

.date-card {
  width: 25rem;
}

.datestamp {
  width: 4rem;
}
.datestamp *:not(.sr-only) {
  display: block;
  font-size: 1rem;
  line-height: 1rem;
  text-align: center;
}
.datestamp .datestamp-month {
  background-color: #E71321;
  color: white;
  position: relative;
}
.datestamp .datestamp-month abbr {
  text-decoration: none;
  text-transform: uppercase;
}
.datestamp .datestamp-day {
  color: #1f7bc1;
  font-size: 3rem;
  line-height: 1;
}
.datestamp.small {
  width: 3rem;
}
.datestamp.small *:not(.sr-only) {
  font-size: 0.875rem;
}
.datestamp.small .datestamp-day {
  font-size: 2rem;
  line-height: 1;
}

.date-summary .date-time,
.date-summary .date-location,
.date-card .date-time,
.date-card .date-location {

  position: relative;
}
.date-summary .date-time::before,
.date-summary .date-location::before,
.date-card .date-time::before,
.date-card .date-location::before {
  color: rgba(0, 0, 0, 0.4);
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  left: 0;
  position: absolute;
  text-align: center;
  width: 1rem;
}
.date-summary .date-time::before,
.date-card .date-time::before {
  content: "";
}
.date-summary .date-location::before,
.date-card .date-location::before {
  content: "";
}

.date-card {
  box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.2);
  position: relative;
  overflow: hidden;
  transition: all 0.25s;
}
.date-card::before {
  background-color: rgba(0, 0, 0, 0.05);
  -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  content: "";
  display: block;
  width: 5.6rem;
  height: 6.5rem;
  position: absolute;
  transform: scale(3);
  transition: all 0.25s;
  z-index: 0;
}
.date-card .datestamp,
.date-card .date-body {
  position: relative;
  z-index: 2;
}
.date-card.js-date-clickthrough:hover {
  border-color: rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
.date-card.js-date-clickthrough:hover::before {
  transform: scale(4);
}
</style>
<script type="text/javascript">
$(document).ready(function(){

  // indicate that javascript has acted
  // and make the whole card clickable to the link on the heading
  $(".date-card.date-clickthrough").each(function(){
    if (!$(this).hasClass("js-date-clickthrough")) {
      $(this).addClass("js-date-clickthrough").click(function(e){
        if (!$(e.target).is("a")) {
          window.location.href = $(this).find("h2 a").eq(0).attr("href");
        }
      });
    }
  });
});
</script>

@endsection

@section('content')

<div id="home-section">
  <div class="dark-overlay">
    <div class="container-fluid" style="padding-top:6rem;">

      <h1 class="display-4 pt-0 text-light">Classes</h1>

      @if (count($events->where('event_type','class')) == 0)
        <h1 class="display-1 text-center pt-5 text-light">No Events Found</h1>
      @else
      <div class="row px-4">

      @foreach ($events->where('event_type','class')->sortBy('date') as $event)

        <div class="col-md-4 px-3 pb-4">
          <div class="card date-clickthrough d-flex flex-row">
            <div class="datestamp small m-3">
              <span class="datestamp-month badge rounded-0">
                <abbr title="November">{{ Carbon\Carbon::parse($event->date)->format('M') }}</abbr>
              </span>
              <span class="datestamp-day py-1">{{ Carbon\Carbon::parse($event->date)->format('d') }}</span><span class="sr-only">,</span>
              <span class="datestamp-year badge text-muted border-top border-grey">{{ Carbon\Carbon::parse($event->date)->format('Y') }}</span>
            </div>
            <div class="date-body border-left p-3">
              <h2 class="h4 font-weight-bold date-title mt-0 " style="color:#19d36e;">{{ $event->event_name }}</h2>
              <div class="mb-1"><i class="pr-2 fa fa-clock-o"></i>{{ Carbon\Carbon::parse($event->start_time)->format('g:i A') }} to {{ Carbon\Carbon::parse($event->end_time)->format('g:i A') }}</div>
              <i class="pr-2 fa fa-map-marker"></i> Information<br>
              <div style="padding-left:22px;">
              {{ $event->event_info }}<br></div>
            </div>
          </div>
        </div>

      @endforeach

        {{-- <div class="col-md-4 px-3 pb-4">
          <div class="card date-clickthrough d-flex flex-row">
            <div class="datestamp small m-3">
              <span class="datestamp-month badge rounded-0">
                <abbr title="November">Nov</abbr>
              </span>
              <span class="datestamp-day py-1">9</span><span class="sr-only">,</span>
              <span class="datestamp-year badge text-muted border-top border-grey">2020</span>
            </div>
            <div class="date-body border-left p-3">
              <h2 class="h4 font-weight-bold date-title mt-0"><a href="#title">This is the Name of the Event</a></h2>
              <div class="mb-1"><i class="pr-2 fa fa-eye"></i>12:00pm to 2:00pm</div>
              <i class="pr-2 fa fa-eye"></i>  Student Lounge<br>
              <div style="padding-left:29px;">Lewisohn Hall, 2970 Broadway, New York, NY 10027<br><a href="#map">Map</a></div>
            </div>
          </div>
        </div> --}}

      </div>
    @endif
    </div>
  </div>
</div>
</div>

@endsection
