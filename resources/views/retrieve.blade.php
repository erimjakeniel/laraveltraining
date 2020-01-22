@extends('layout')

@section('title')
@section('sidebar')
@endsection('sidebar')

@section('content')
<link rel="stylesheet" href="css/retrieve.css">

<a href="{{route('create')}}"><button class="button add">ADD STUDENT</button></a>
<center>
    <table border=1 id="table">
       

        <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Action</th>
        <tr>
            @foreach($humans as $human)
        <tr>
            <td>{{$human['first_name']}}</td>
            <td>{{$human['middle_name']}}</td>
            <td>{{$human['last_name']}}</td>
            <td> {{$human['email']}}</td>
            <td> {{$human['age']}}</td>
            @if($human['gender'] == 1)
            <td> Male</td>
            @else
            <td>Female</td>
            @endif
            <td> {{$human['address']}}</td>
            <td>
                <a href="{{url('edit',$human['id'])}}"><button  class="button edit ">Edit</button></a>
                </a>&nbsp;&nbsp;<a href="delete/{{$human->id}}"><button 
                        class="button delete">Delete</button></a>
            </td>

        </tr>
        @endforeach
    </table>
</center>
@endsection('content')