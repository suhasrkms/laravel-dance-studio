@extends('layouts.app')

@section('content')

  <div id="home-section">
    <div class="dark-overlay">

      <div class="container-fluid" style="padding-top:6rem;">

        <div class="row px-4">

          <div class="col-md-3 px-3">
            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item bg-light">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
                <li class="list-group-item text-center">
                  <a href="/Account/Login" class="btn btn-info btn-block">Login/Register</a></td>
                </li>
              </ul>
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
                <div class="custom-card custom-card-1" style="padding:75px;"> 
                  <div class="custom-card-body text-left">
                    <h3 class="text-center">Calender of Events</h3>
                  </div>
                </div>
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
    <div class="form">
      <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div>
      <form action="" method="post" role="form" class="contactForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="{{ Auth::user()->name }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="{{ Auth::user()->email }}" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validation"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validation"></div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div>
  </div>
</section><!-- #contact -->

@endsection
