<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Alumni</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('admin/update-alumni')}}">
                    @csrf 
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class="form-lebel"> Family Name</label>
                        <input type="text" class="form-control" name="familyName"
                        placeholder="Enter Family Name" value="{{$data->familyName}}">
                        @error('familyName')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">First Name</label>
                        <input type="text" class="form-control" name="firstName"
                        placeholder="Enter First Name" value="{{$data->firstName}}">
                        @error('firstName')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Maiden Name</label>
                        <input type="text" class="form-control" name="maidenName"
                        placeholder="Enter Middle Name" value="{{$data->maidenName}}">
                        @error('maidenName')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Middle Initial</label>
                        <input type="text" class="form-control" name="middleInitial"
                        placeholder="Enter Middle Initial" value="{{$data->middleInitial}}">
                        @error('middleInitial')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Email</label>
                        <input type="text" class="form-control" name="email"
                        placeholder="Enter Email" value="{{$data->email}}">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Gender</label>
                        <select id="gender" name="gender" class="form-control" value="{{$data->gender}}">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Birthday</label>
                        <input type="date" class="form-control" name="birthday"
                        placeholder="Enter Birthday" value="{{$data->birthday}}">
                        @error('birthday')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Civil Status</label>
                        <select id="civilStatus" name="civilStatus" class="form-control" value="{{$data->civilStatus}}">
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="widowed">Widowed</option>
                            <option value="widower">Widower</option>
                        </select>
                        @error('civilstatus')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Address</label>
                        <input type="presentAddress" class="form-control" name="presentAddress"
                        placeholder="Enter Address" value="{{$data->presentAddress}}">
                        @error('presentAddress')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Year Graduated</label>
                        <input type="yearGraduated" class="form-control" name="yearGraduated"
                        placeholder="Enter Year Graduated" value="{{$data->yearGraduated}}">
                        @error('yearGraduated')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Course</label>
                        <select id="course" name="course" class="form-control" value="{{$data->course}}">
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                            <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                            <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                            <option value="Bachelor of Science in Community Development">Bachelor of Science in Community Development</option>
                            <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
                            <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                        </select>
                        @error('course')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Exam Passed</label>
                        <select id="examsPassed" name="examsPassed" class="form-control" value="{{$data->examPassed}}">
                            <option value="prc">PRC</option>
                            <option value="cse">CSE</option>
                            <option value="tesda">Tesda</option>
                            <option value="other">Other:</option>
                        </select>
                        @error('exampassed')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel">Awards</label>
                        <input type="text" class="form-control" name="awards"
                        placeholder="Enter Awards" value="{{$data->awards}}">
                        @error('awards')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('admin/alumni-list')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>