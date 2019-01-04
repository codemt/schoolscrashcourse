@extends('layouts.app')


@section('content')


<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">School Id</th>
        <th scope="col">School Name</th>
        <th scope="col">School Address</th>
        <th scope="col">School Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($schools as $data)
      <tr class="table-active">
        <td>{{ $data->id }}</td>
        <td>{{  $data->school_name}} </td>
        <td>{{  $data->school_description}} </td>
        <td>{{  $data->school_address}}</td>
        <td>
        <a href="{{ url('schools/edit/'.$data->id) }}" class="btn btn-primary">Edit</a>
            <button class="btn btn-danger">delete</button>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>



@endsection