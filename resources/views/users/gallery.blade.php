@extends('layouts.app')


@section('content')

  <!--==========================
  About Us Section
  ============================-->
  <section id="about" >
    <div class="container"  style="padding-top:3rem;">
      <header class="section-header">
        <h3>Photo Gallery</h3>
        <p>
          {{-- As friends we are ready to accompany you with your journey of undergraduate studies, we are with full confident on make your UG college studies easy and valuable,UG hub is a concept of friend teaching his best friend. I am ready with all the tools that makes you a best student in your academic year. --}}
          The term ‘Lasya‘, in the context of Hindu Mythology, stands for the dance performed by Goddess Parvati. Lasya means beauty, happiness and grace. Lasya Dance Studio is an institution that share the happiness, grace rhythm of dance. Explore the glimpse of dance in the form of pictures.
        </p>
      </header>

      <!-- Gallery -->
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFzY6P-v1KVdPJ_f3YNF3ljGvca7YBd2Gvpg&usqp=CAU"
          class="w-100 shadow-1-strong rounded mb-4"
          alt=""
          />

          <img
          src="https://www.dance.nyc/images/users/16244/IMG_8047article_image.JPG"
          class="w-100 shadow-1-strong rounded mb-4"
          alt=""
          />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img
          src="https://www.culturalindia.net/iliimages/Bharatanatyam-1_1.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
          alt=""
          />

          <img
          src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
          class="w-100 shadow-1-strong rounded mb-4"
          alt=""
          />
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <img
          src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
          class="w-100 shadow-1-strong rounded mb-4"
          alt=""
          />

          <img
          src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg"
          class="w-100 shadow-1-strong rounded mb-4"
          alt=""
          />
        </div>
      </div>
      <!-- Gallery -->

    </div>
  </section><!-- #about -->
@endsection
