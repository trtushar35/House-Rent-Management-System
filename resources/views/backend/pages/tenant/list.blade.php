@extends('backend.master')

@section('content')
<h1>Tenants List</h1>

<a href="{{route('tenant.addNew')}}" type="button" class="btn btn-success">Add Tenant Details</a>
<a href="{{route('tenant.print')}}" type="button" class="btn btn-success">Print</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  @foreach ($tenants as $key=>$tenant)

  <tbody>
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$tenant->name}}</td>
      <td>{{$tenant->email}}</td>
      <td>0{{$tenant->phone}}</td>
      <td>{{$tenant->address}}</td>
      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>

    @endforeach
  </tbody>

</table>

@endsection