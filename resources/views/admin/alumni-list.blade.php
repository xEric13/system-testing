@extends('layouts.sidebar')
@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni List</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">



</head>

<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Alumni List</h2>
                <div style="margin-right:10%; float: right" >
                    <a href="{{url('admin/add-alumni')}}" class="btn btn-primary">Add Alumni</a>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>Civil Status</th>
                                <th>Address</th>
                                <th>Year Graduated</th>
                                <th>Course</th>
                                <th>Exam Passed</th>
                                <th>Awards</th>
                           </tr>    
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp

                        @foreach ($data as $alu)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$alu->firstName}} {{$alu->middleInitial}} {{$alu->familyName}}</td>
                                <td>{{$alu->email}}</td>
                                <td>{{$alu->gender}}</td>
                                <td>{{$alu->birthday}}</td>
                                <td>{{$alu->civilStatus}}</td>
                                <td>{{$alu->presentAddress}}</td>
                                <td>{{$alu->yearGraduated}}</td>
                                <td>{{$alu->course}}</td>
                                <td>{{$alu->examsPassed}}</td>
                                <td>{{$alu->awards}}</td>
                                <td>
                                    <a href="{{url('admin/edit-alumni/'.$alu->id)}}" class="btn btn-primary my-3" >Edit</a>
                                    
                                    <a href="{{url('admin/delete-alumni/'.$alu->id)}}" class="btn btn-danger ">Delete</a>
                                    
                                    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Delete
                                    </button> --}}
                                      
                                      <!-- Modal -->
                                      {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting User</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              Do you want to delete this user?
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="button" onclick="window.location.href='{{url('admin/delete-alumni/'.$alu->id)}}';"class="btn btn-danger">Yes</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
</body>
@endsection