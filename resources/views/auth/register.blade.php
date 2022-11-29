@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- family name --}}
                        <div class="row mb-3">
                            <label for="familyName" class="col-md-4 col-form-label text-md-end">{{ __('Family Name') }}</label>

                            <div class="col-md-6">
                                <input id="familyName" type="text" class="form-control @error('familyName') is-invalid @enderror" name="familyName" value="{{ old('familyName') }}"  autocomplete="familyName">

                                @error('familyName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- first name --}}
                        <div class="row mb-3">
                            <label for="middleInitial" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}"  autocomplete="firstName">

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- middle initial --}}
                        <div class="row mb-3">
                            <label for="middleInitial" class="col-md-4 col-form-label text-md-end">{{ __('Middle Initial') }}</label>

                            <div class="col-md-6">
                                <input id="middleInitial" type="text" class="form-control @error('middleInitial') is-invalid @enderror" name="middleInitial" value="{{ old('middleInitial') }}"  autocomplete="middleInitial">

                                @error('middleInitial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- maiden name --}}
                        <div class="row mb-3">
                            <label for="maidenName" class="col-md-4 col-form-label text-md-end">{{ __('Maiden Name') }}</label>

                            <div class="col-md-6">
                                <input id="maidenName" type="text" class="form-control @error('maidenName') is-invalid @enderror" name="maidenName" value="{{ old('maidenName') }}"  autocomplete="maidenName">

                                @error('maidenName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- password address--}}
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- gender-incomplete --}}
                        <div class="row mb-3">
                            <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                            <div class="col-md-6">
                                <select id="Gender" name="gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        {{-- birthday-incomplete --}}
                        <div class="row mb-3">
                            <label for="birthday" class="col-md-4 col-form-label text-md-end">Birthday:</label>
                            <div class="col-md-6">
                                <input type="date" id="birthday" class="form-control" name="birthday">
                            </div>
                        </div>
                        {{-- civil status-incomplete --}}
                        <div class="row mb-3">
                            <label for="civilStatus" class="col-md-4 col-form-label text-md-end">Civil Status</label>
                            <div class="col-md-6">
                                <select id="civilStatus" name="civilStatus" class="form-control">
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="separated">Separated</option>
                                    <option value="widowed">Widowed</option>
                                    <option value="widower">Widower</option>
                                </select>
                            </div>
                        </div>   
                        {{-- present address--}}
                        <div class="row mb-3">
                            <label for="presentAddress" class="col-md-4 col-form-label text-md-end">{{ __('Present Address') }}</label>

                            <div class="col-md-6">
                                <input id="presentAddress" type="presentAddress" class="form-control @error('presentAddress') is-invalid @enderror" name="presentAddress" value="{{ old('presentAddress') }}"  autocomplete="presentAddress">

                                @error('presentAddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- year graduated --}}
                        <div class="row mb-3">
                            <label for="yearGraduated" class="col-md-4 col-form-label text-md-end">{{ __('Year Graduated') }}</label>

                            <div class="col-md-6">
                                <input id="yearGraduated" name="yearGraduated" type="yearGraduated" class="form-control @error('yearGraduated') is-invalid @enderror" name="yearGraduated" value="{{ old('yearGraduated') }}"  autocomplete="yearGraduated">

                                @error('yearGraduated')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- course-incomplete --}}
                        <div class="row mb-3">
                            <label for="course" class="col-md-4 col-form-label text-md-end">Course</label>
                            <div class="col-md-6">
                                <select id="course" name="course" class="form-control">
                                    <option value="Bachelor of Science in Information Technology">Bachelor of Science in Information Technology</option>
                                    <option value="Bachelor of Science in Information System">Bachelor of Science in Information System</option>
                                    <option value="Bachelor of Science in Computer Science">Bachelor of Science in Computer Science</option>
                                    <option value="Bachelor of Science in Community Development">Bachelor of Science in Community Development</option>
                                    <option value="Bachelor of Science in Mathematics">Bachelor of Science in Mathematics</option>
                                    <option value="Bachelor of Science in Biology">Bachelor of Science in Biology</option>
                                </select>
                            </div>
                        </div> 
                        {{-- examspassed-incomplete --}}
                        <div class="row mb-3">
                            <label for="examsPassed" class="col-md-4 col-form-label text-md-end">Examinations Passed</label>
                            <div class="col-md-6">
                                <select id="examsPassed" name="examsPassed" class="form-control">
                                    <option value="prc">PRC</option>
                                    <option value="cse">CSE</option>
                                    <option value="tesda">Tesda</option>
                                    <option value="other">Other:</option>
                                </select>
                            </div>
                        </div> 
                        {{-- awards --}}
                        <div class="row mb-3">
                            <label for="awards" class="col-md-4 col-form-label text-md-end">{{ __('Awards during Graduation') }}</label>

                            <div class="col-md-6">
                                <input id="awards" type="awards" class="form-control @error('awards') is-invalid @enderror" name="awards" value="{{ old('awards') }}"  autocomplete="awards">

                                @error('awards')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- register --}}
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
