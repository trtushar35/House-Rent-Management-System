@extends('backend.master')

@section('content')

<form action="{{route('house.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">House Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="House Name" name="house_name" required>
      @error('house_name')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>


    <div class="col-md-4 mb-3">
      <label for="validationDefault01">House Owner Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="House Owner Name" name="house_owner_name" required>
      @error('house_owner_name')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">House Address</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="House Address" name="house_address" required>
      @error('house_address')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Division</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Division" name="division" required>
      @error('division')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">District</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="District" name="district" required>
      @error('district')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Thana</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Thana" name="thana" required>
      @error('thana')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Floor Number</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Floor Number" name="floor_number" required>
      @error('floor_number')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">flat Number</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Flat Number" name="flat_number" required>
      @error('flat_number')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Total Bedroom</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Total Bedroom" name="total_bedroom" required>
      @error('total_bedroom')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Total Bathroom</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Total Bathroom" name="total_bathroom" required>
      @error('total_bathroom"')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Rent Amount</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Rent amount" name="rent_amount" required>
      @error('rent_amount')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">House Category</label>
      <label for="">Select Category:</label>
      <select required class="form-control" name="category" id="" required> 
        <!-- <option value="">Admin</option> -->
        <option value="Family">Family</option>
        <option value="Bachelor">Bachelor</option>
        <option value="Office">Office</option>
      </select>
      @error('categoy')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Available Date</label>
      <input type="date" class="form-control" id="validationDefault01" placeholder="Available Date" name="available_date" required>
      @error('available_date')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Summary</label>
      <input type="text" row="3" class="form-control" id="validationDefault01" placeholder="Summary" name="summary">
      @error('summary')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Image</label>
      <input type="file" class="form-control" id="validationDefault01" placeholder="Total Flat" name="image" required>
      @error('image')
      <div class="alert alert-danger">{{ $message}}</div>
      @enderror
    </div>


  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>

  <button class="btn btn-primary" type="submit">Submit form</button>
</form>


@endsection