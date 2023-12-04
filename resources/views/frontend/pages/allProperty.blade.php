@extends('frontend.partial.other')

@section('content')
<div class="container ">
  <div class="row g-0 gx-5 align-items-end">
    <div class="col-lg-6">
      <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
        <h1 class="mb-3">All Property List</h1>
      </div>
    </div>
    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
      <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">

        <li class="nav-item me-2">
          <a class="btn btn-outline-primary" href="{{route('add.property')}}">Add Property</a>
        </li>

      </ul>
    </div>
  </div>
  <div class="tab-content">
    <div id="tab-1" class="tab-pane fade show p-0 active">

      <div class="row g-4">

        @foreach($houses as $house)

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">


          <div class="property-item rounded overflow-hidden">
            <div class="position-relative overflow-hidden">
              <a href="{{route('single.house', $house->id)}}"><img class="img-fluid" src="{{url('/uploads/'. $house->image)}}" alt=""></a>
              <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{$house->category}}</div>
              <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Appartment</div>
            </div>
            <div class="p-4 pb-0">
              <h5 class="text-primary mb-3">{{$house->rent_amount}}.bdt</h5>
              <a class="d-block h5 mb-2" href="{{route('single.house', $house->id)}}">{{$house->house_name}}</a>
              <p><i class="fa fa-map-marker-alt text-primary me-2">{{$house->house_address}}</i></p>
            </div>
            <div class="d-flex border-top">
              <small class="flex-fill text-center border-end py-2"><i class="bi bi-calendar2-check-fill"></i> Available From: {{$house->available_date}}</small>
              <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{$house->total_bedroom}}</small>
              <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{$house->total_bathroom}}</small>
            </div>

          </div>
        </div>

        @endforeach
        
      </div>

    </div>


  </div>
@endsection