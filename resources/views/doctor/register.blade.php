@extends('layout.layout')

@section('dataLayer')
    <script>ga('send', 'pageview', [page], [fieldsObject]);</script>
@endsection

@section('content')
<div id="app">

        <div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Doctor Register') }}</div>

                <div class="card-body">
                   <form action="{{ route('doctorstore') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                       {{--'clinicName','certificate'--}}

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group row">
                           <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                           <div class="col-md-6">
                               <input id="name" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                               @if ($errors->has('lastname'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                           <div class="col-md-6">
                               <input id="age" type="number" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

                               @if ($errors->has('age'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <div class="form-group row">
                           <label for="clinicName" class="col-md-4 col-form-label text-md-right">{{ __('Clinic Name') }}</label>

                           <div class="col-md-6">
                               <input id="clinicName" type="text" class="form-control{{ $errors->has('clinicName') ? ' is-invalid' : '' }}" name="clinicName" value="{{ old('clinicName') }}" required autofocus>
                               @if ($errors->has('clinicName'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('clinicName') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                           <div class="col-md-6">
                               <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                               @if ($errors->has('city'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('gender') }}</label>

                           <div class="col-md-6">
                              <input id="gender" type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="male" > Male<br>
                               <input id="gender" type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="female" > Female<br>

                               @if ($errors->has('gender'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>


                       <div class="form-group row">
                           <label for="certificate_file" class="col-md-4 col-form-label text-md-right">{{ __('certificate_file') }}</label>

                           <div class="col-md-6">
                               <input id="certificate_file" type="file" class="form-control{{ $errors->has('certificate_file') ? ' is-invalid' : '' }}"  value="{{ old('certificate_file') }}"  name="certificate_file" >

                           @if ($errors->has('certificate_file'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('certificate_file') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>

                       {{--'degree','graduationYear', 'universityName'--}}
                       <div class="form-group row">
                           <label for="degree" class="col-md-4 col-form-label text-md-right">{{ __('Degree') }}</label>

                           <div class="col-md-6">
                               <input id="degree" type="text" class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="{{ old('degree') }}" required autofocus>

                               @if ($errors->has('degree'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group row">
                           <label for="graduationYear" class="col-md-4 col-form-label text-md-right">{{ __('Graduation Year') }}</label>

                           <div class="col-md-6">
                               <input id="graduationYear" type="number" class="form-control{{ $errors->has('graduationYear') ? ' is-invalid' : '' }}" name="graduationYear" value="{{ old('graduationYear') }}" required autofocus>

                               @if ($errors->has('graduationYear'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('graduationYear') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="universityName" class="col-md-4 col-form-label text-md-right">{{ __('University Name') }}</label>

                           <div class="col-md-6">
                               <input id="universityName" type="text" class="form-control{{ $errors->has('universityName') ? ' is-invalid' : '' }}" name="universityName" value="{{ old('universityName') }}" required autofocus>

                               @if ($errors->has('universityName'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('universityName') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>


                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="ga('send', 'event', 'Finish Register', 'As Doctor', 'success');" >
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

</div>
@endsection


