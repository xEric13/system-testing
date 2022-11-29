@extends('layouts.app')

@section('content')
<style>
  
</style>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Occupational Form</h2>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <form method="post" action="{{url('admin/save-alumni')}}">
                    @csrf
                    {{-- Are you employed? --}}
                    <div class="md-3">
                        <label class="form-lebel">Are you employed?</label>
                        <select id="areyouemployed" name="areyouemployed" class="form-control">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        @error('areyouemployed')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    {{-- If No, how many times did you change your job? --}}
                    <div class="md-3">
                        <label class="form-lebel">If No, how many times did you change your job?</label>
                        <input type="text" class="form-control" name="Enter a number"
                        placeholder="Enter a Number" value="Enter a number">
                        @error('timesjobchanged')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <h2>Employment Information</h2>
                    {{-- Classification of Current Employer --}}
                    <div class="md-3">
                        <label class="form-lebel">Classification of Current Employer</label>
                        <select id="classification-of-current-employer" name="classification-of-current-employer" class="form-control">
                            <option value="single">Government Agency</option>
                            <option value="married">Public/State Enterprise</option>
                            <option value="divorced">Private Enterprise</option>
                            <option value="separated">Educational Institution</option>
                            <option value="widowed">Non-profit/Non-Government</option>
                            <option value="widower">Regional/International</option>
                            <option value="widowed">Self-Employed</option>
                            <option value="widower">Others:</option>
                        </select>
                        @error('classificationofcurrentemployer')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    {{-- Nature of work  --}}
                    <div class="md-3">
                        <label class="form-lebel">Nature of work</label>
                        <select id="natureofwork" name="natureofwork" class="form-control">
                            <option value="softwareengineering">Software Engineering</option>
                            <option value="systemadministration">System Administration</option>
                            <option value="systemanalyst">System Analyst</option>
                            <option value="databasemanagement">Database Management</option>
                            <option value="webdevelopment">Web Development</option>
                            <option value="programming">Programming</option>
                            <option value="networking">Networking</option>
                            <option value="planningandmanagement">Policy, Planning and Management</option>
                            <option value="consultancy">Consultancy (IT related)</option>
                            <option value="technicalsupport">Technical support</option>
                            <option value="teachingtraining">Teaching/Training</option>
                            <option value="bpo">BPO</option>
                            <option value="gamedeveloper">Game Developer</option>
                            <option value="others">Others:</option>
                        </select>
                        @error('natureofwork')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    {{-- How long have you waited before you got your first job?  --}}
                    <div class="md-3">
                        <label class="form-lebel">How long have you waited before you got your first job?</label>
                        <select id="firstjobwait" name="firstjobwait" class="form-control">
                            <option value="belowone">Below 1 month</option>
                            <option value="onetosix">1 - 6 months</option>
                            <option value="seventoeleven">7 - 11 months</option>
                            <option value="onetotwoyears">1 -2 years</option>
                            <option value="morethantwoyears">more than 2 years</option>
                        </select>
                        @error('firstjobwait')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    {{-- How long have you stayed in your job?  --}}
                    <div class="md-3">
                        <label class="form-lebel">How long have you stayed in your job?</label>
                        <select id="joblength" name="joblength" class="form-control">
                            <option value="belowone">Below 1 month</option>
                            <option value="onetosix">1 - 6 months</option>
                            <option value="seventoeleven">7 - 11 months</option>
                            <option value="onetotwoyears">1 -2 years</option>
                            <option value="morethantwoyears">more than 2 years</option>
                        </select>
                        @error('joblength')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>     

                    {{-- Was your first job:  --}}
                    <div class="md-3">
                        <label class="form-lebel">How long have you stayed in your job?</label>
                        <select id="firstjobclass" name="firstjobclass" class="form-control">
                            <option value="permanent">Permanent</option>
                            <option value="temporary">Teporary</option>
                            <option value="casual">Casual/Job Hire</option>
                        </select>
                        @error('firstjobclass')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> 
                    
                    {{-- What's your present monthly salary?  --}}
                    <div class="md-3">
                        <label class="form-lebel">What's your present monthly salary?</label>
                        <select id="presentsalary" name="presentsalary" class="form-control">
                            <option value="permanent">9,999 and below</option>
                            <option value="temporary">10,000 - 19,999</option>
                            <option value="casual">20,000 - 29,999</option>
                            <option value="permanent">30,000 - 39,999</option>
                            <option value="temporary">40,000 - 49,999</option>
                            <option value="casual">50,000 - 59,999</option>
                            <option value="permanent">60,000 - 69,999</option>
                            <option value="temporary">70,000 and above</option>
                        </select>
                        @error('presentsalary')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>  

                     {{-- How did you find your job?  --}}
                     <div class="md-3">
                        <label class="form-lebel">How did you find your job?</label>
                        <select id="how" name="how" class="form-control">
                            <option value="ad">Response to Advertisement </option>
                            <option value="friends">Information from Friends</option>
                            <option value="fambusiness">Family Business</option>
                            <option value="walkin">As a walk-in Applicant</option>  
                            <option value="others">Others</option>
                        </select>
                        @error('how')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>  
                    <br>
                    <h2>Current Status</h2>

                     {{-- Are you enrolled in any course? --}}
                     <div class="md-3">
                        <label class="form-lebel">Are you enrolled in any course?</label>
                        <select id="enrolledinanycourse" name="enrolledinanycourse" class="form-control">
                            <option value="yes">Yes </option>
                            <option value="no">No</option>
                        </select>
                        @error('enrolledinanycourse')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div> 
                    {{-- If yes, What course? current  --}}
                    <div class="md-3">
                        <label class="form-lebel">If yes, What specialization/course?</label>
                        <select id="currentcourse" name="currentcourse" class="form-control">
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                            <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                            <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                            <option value="Bachelor of Science in Community Development">Bachelor of Science in Community Development</option>
                            <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
                            <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                        </select>
                        @error('currentcourse')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    {{-- If no, do you intend to go back to school?   --}}
                    <div class="md-3">
                        <label class="form-lebel">If no, do you intend to go back to school?</label>
                        <select id="intenttogobacktoschool" name="intenttogobacktoschool" class="form-control">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        @error('intenttogobacktoschool')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    {{-- If yes, What course? new  --}}
                    <div class="md-3">
                        <label class="form-lebel">If yes, What specialization/course?</label>
                        <select id="newcourse" name="newcourse" class="form-control">
                            <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                            <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                            <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                            <option value="Bachelor of Science in Community Development">Bachelor of Science in Community Development</option>
                            <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
                            <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                        </select>
                        @error('newcourse')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror

                    </div><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('home')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
        <footer>

        </footer>
</div>
@endsection
