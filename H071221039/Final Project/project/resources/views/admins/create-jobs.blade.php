@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Jobs</h5>
                    <form action="{{ route('store.jobs') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline  mb-4 mt-4">
                            <label for="job-title">Job Title</label>
                            <input type="text" name="job_title" id="form1Example" class="form-control" placeholder="job_title">
                        </div>
                        @if($errors->has('job_title'))
                        <p class="alert alert-danger">{{ $errors->first('job_title')  }}</p>
                        @endif
                        
                        <div class="form-outline  mb-4">
                            <label for="job-region">Job Region</label>
                            <select name="job_region" class="form-select form-control" id="job-region">
                                <option value="Jakarta">Jakarta</option>
                                <option value="Makassar">Makassar</option>
                                <option value="Papua">Papua</option>
                                <option value="Samarinda">Samarinda</option>
                                <option value="Bali">Bali</option>
                                <option value="Medan">Medan</option>
                            </select>
                        </div>
                        @if($errors->has('job_region'))
                        <p class="alert alert-danger">{{ $errors->first('job_region')  }}</p>
                        @endif
                        
                        <div class="form-outline mb-4">
                            <label for="company">Company</label>
                            <input type="text" name="company" id="form1Example" class="form-control" placeholder="Company">
                        </div>
                        @if($errors->has('company'))
                        <p class="alert alert-danger">{{ $errors->first('company')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="job-type">Job Type</label>
                            <select name="job_type" class="form-select form-control" id="job-type">
                                <option value="Part Time">Part Time</option>
                                <option value="Full Time">Full Time</option>
                            </select>
                        </div>
                        @if($errors->has('job_type'))
                        <p class="alert alert-danger">{{ $errors->first('job_type')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="vacancy">Vacancy</label>
                            <input type="text" name="vacancy" id="form1Example" class="form-control" placeholder="job_title">
                        </div>
                        @if($errors->has('vacancy'))
                        <p class="alert alert-danger">{{ $errors->first('vacancy')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="experience">Experience</label>
                            <select name="experience" class="form-select form-control" id="experience">
                                <option value="1-3 years">1-3 years</option>
                                <option value="3-6 years">3-6 years</option>
                                <option value="6-9 years">6-9 years</option>
                            </select>
                        </div>
                        @if($errors->has('experience'))
                        <p class="alert alert-danger">{{ $errors->first('experience')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="salary">Salary</label>
                            <select name="salary" class="form-select form-control" id="salary">
                                <option value="+- $Rp. 1.000.000">+- $Rp. 1.000.000</option>
                                <option value="+- $Rp. 2.000.000">+- $Rp. 2.000.000</option>
                                <option value="+- $Rp. 3.000.000">+- $Rp. 3.000.000</option>
                                <option value="+- $Rp. 4.000.000">+- $Rp. 4.000.000</option>
                                <option value="+- $Rp. 5.000.000">+- $Rp. 5.000.000</option>
                                <option value="+- $Rp. 6.000.000">+- $Rp. 6.000.000</option>
                                <option value="+- $Rp. 7.000.000">+- $Rp. 7.000.000</option>
                                <option value="+- $Rp. 8.000.000">+- $Rp. 8.000.000</option>
                                <option value="+- $Rp. 9.000.000">+- $Rp. 9.000.000</option>
                                <option value="+- $Rp. 10.000.000">+- $Rp. 10.000.000</option>
                            </select>
                        </div>
                        @if($errors->has('salary'))
                        <p class="alert alert-danger">{{ $errors->first('salary')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="gender">Gender</label>
                            <select name="gender" class="form-select form-control" id="salary">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Universal">Umum</option>
                            </select>
                        </div>
                        @if($errors->has('gender'))
                        <p class="alert alert-danger">{{ $errors->first('gender')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="application_deadline">Application Deadline</label>
                            <input type="text" name="application_deadline" id="form1Example" class="form-control" placeholder="application_deadline">
                        </div>
                        @if($errors->has('application_deadline'))
                        <p class="alert alert-danger">{{ $errors->first('application_deadline')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="jobdescription">Job Description</label>
                            <textarea name="jobdescription" id="" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        @if($errors->has('jobdescription'))
                        <p class="alert alert-danger">{{ $errors->first('jobdescription')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="responsibilities" class="text-black">Responsibilities</label>
                            <textarea name="responsibilities" id="" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        @if($errors->has('responsibilities'))
                        <p class="alert alert-danger">{{ $errors->first('responsibilities')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="education_experience" class="text-black">Education & Experience</label>
                            <textarea name="education_experience" id="" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        @if($errors->has('education_experience'))
                        <p class="alert alert-danger">{{ $errors->first('education_experience')  }}</p>
                        @endif
                        
                        <div class="form-outline  mb-4 mt-4">
                            <label for="otherbenefits" class="text-black">Other Benefits</label>
                            <textarea name="otherbenefits" id="" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        @if($errors->has('otherbenefits'))
                        <p class="alert alert-danger">{{ $errors->first('otherbenefits')  }}</p>
                        @endif

                        <div class="form-outline  mb-4 mt-4">
                            <label for="category">Category</label>
                            <select name="category" class="form-select form-control" id="salary">
                                @foreach ($categories as $category)
                                    <option value="{{ $category -> name }}">{{ $category -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('category'))
                        <p class="alert alert-danger">{{ $errors->first('category')  }}</p>
                        @endif

                        
                        <div class="form-outline  mb-4 mt-4">
                            <label for="image">Images</label>
                            <input type="file" name="image" id="form1Example" class="form-control">
                        </div>
                        @if($errors->has('image'))
                        <p class="alert alert-danger">{{ $errors->first('image')  }}</p>
                        @endif
                        
                        <div class="col-lg-4 ml-auto">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" name="submit" class="btn btn-primary mb-4 text-center">Create</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection