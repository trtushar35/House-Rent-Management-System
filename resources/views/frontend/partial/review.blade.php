<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h1 class="mb-3">Client Review</h1>
      @auth
      <a class="btn btn-primary" href="{{route('review')}}">Give Review</a>
      @endauth
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      @foreach($reviewRatings as $review)

      <div class="testimonial-item bg-light rounded p-3">
        <div class="bg-white border rounded p-4">
          <p>{{$review->review}}</p>
          <div class="d-flex align-items-center">
            <img class="img-fluid flex-shrink-0 rounded" src="{{url('/uploads/'. $review->user->image)}}" alt="" style="width: 45px; height: 45px;">
            <div class="ps-3">
              <h6 class="fw-bold mb-1">{{$review->user->name}}</h6>
              <small>{{$review->user->role}}</small>
            </div>
          </div>
        </div>
      </div>

      @endforeach
      <!-- <div class="owl-nav">
        <div class="owl-prev"><i class="bi bi-arrow-left"></i></div>
        <div class="owl-next"><i class="bi bi-arrow-right"></i></div>
      </div>
      <div class="owl-dots disabled"></div> -->
    </div>
  </div>
</div