@extends('backend.master')

@section('content')

<a href="{{route('users.addNew')}}" type="button" class="btn btn-success">Create New User</a>

<table class="table table-bordered">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  @foreach ($users as $key=>$singleUser)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$singleUser->name}}</td>
        <td>
            <img style="border-radius: 60px;" width="7%" src="{{url('/uploads/'.$singleUser->image)}}" alt="image">
        </td>
        <td>{{$singleUser->email}}</td>
        <td>{{$singleUser->role}}</td>
        <td>
            <a class="btn btn-success" href="">View</a>
            <a class="btn btn-warning" href="">Edit</a>
            <a  class="btn btn-danger"href="">Delete</a>
        </td>
    </tr>
  @endforeach


  
</table>

@endsection