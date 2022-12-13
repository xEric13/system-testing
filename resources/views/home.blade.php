@extends('layouts.app')

@section('content')
<style>
  
</style>
<div class="container card">

    <div class="row d-flex align-items-center">
        <div class="col-3 p-2">
                <img style="border-right: 2px #333 solid;" class="w-75 p-4 m-4" src="/img/logo.png" alt=""> 
        </div>
        <div class="col-4 p-2 m-2 ">
                <p style="text-transform:capitalize;"><strong>{{ Auth::user()->firstName }} {{ Auth::user()->middleInitial }} {{ Auth::user()->familyName }}</strong></p>
                <p style="text-transform:capitalize;">{{ Auth::user()->email }}</p>
                <p style="text-transform:capitalize;">{{ Auth::user()->gender }}</p>
                <p>Born in {{ Auth::user()->birthday }}</p>
                <p style="text-transform:capitalize;">{{ Auth::user()->presentAddress }}</p>
                <p style="text-transform:capitalize;">{{ Auth::user()->yearGraduated }}</p>
                <p style="text-transform:capitalize;">{{ Auth::user()->course }}</p>
        </div>
    </div>
        <div class="row p-5 bg-black m-3 rounded-3 bg-opacity-10 justify-content-center">
            <h1 style="text-align: center">
                Occupational Data
            </h1>
            <div class="col-4 bg-black p-5 m-4 bg-opacity-10 rounded-2">
                <p>
                    Year Graduated
                </p>
                <p>
                    {{ Auth::user()->yearGraduated }}
                </p>

            </div>
            <div class="col-4 bg-black p-5 m-4 bg-opacity-10 rounded-2">
                <p>Civil Status</p>
                <p style="text-transform:capitalize;">
                    {{ Auth::user()->civilStatus }}
                </p>
            </div>
            <div class="col-4 bg-black p-5 m-4 bg-opacity-10 rounded-2">
                <p>Occupation</p>
                <p>
                    {{ Auth::user()->occupation }}
                </p>
            </div>
            <div class="col-4 bg-black p-5 m-4 bg-opacity-10 rounded-2">
                <p>Curriculum</p>
                <p>
                    {{ Auth::user()->curriculum }}
                </p>
            </div>
            <div class="col-4 bg-black p-5 m-4 bg-opacity-10 rounded-2 text-uppercase">
                <p>Course</p>
                <p style="text-transform:capitalize;">
                    {{ Auth::user()->course }}
                </p>
            </div>
            <div class="col-4 bg-black p-5 m-4 bg-opacity-10 rounded-2">
                <p>Date of Birth</p>
                    {{ Auth::user()->birthday }}
            </div>
            <a href="occupationalform" class="btn btn-primary">Edit Occupational Information</a>
           
        </div>
        <footer>

        </footer>
</div>
@endsection
