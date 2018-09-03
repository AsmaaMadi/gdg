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
                <div class="card-header">{{ __('Patient Register') }}</div>

                <div class="card-body">
                   <form action="{{ route('patientstore') }}" method="POST" enctype="multipart/form-data">
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
                           <label for="why" class="col-md-4 col-form-label text-md-right">{{ __('Reason of visiting doctor') }}</label>

                           <div class="col-md-6">
                               <textarea  id="why" type="text" class="form-control{{ $errors->has('why') ? ' is-invalid' : '' }}" name="why" value="{{ old('why') }}" required autofocus></textarea>

                               @if ($errors->has('why'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('why') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="reservation_date" class="col-md-4 col-form-label text-md-right">{{ __('Resarvation date') }}</label>

                           <div class="col-md-6">
                               <input id="reservation_date" type="date" class="form-control{{ $errors->has('reservation_date') ? ' is-invalid' : '' }}" name="reservation_date" value="{{ old('reservation_date') }}" required autofocus>

                               @if ($errors->has('reservation_date'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reservation_date') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="hour" class="col-md-4 col-form-label text-md-right">{{ __('hour') }}</label>

                           <div class="col-md-6">
                               <input id="hour" type="number" class="form-control{{ $errors->has('hour') ? ' is-invalid' : '' }}" name="hour" value="{{ old('hour') }}" required autofocus>

                               @if ($errors->has('hour'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hour') }}</strong>
                                    </span>
                               @endif
                           </div>
                       </div>

                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" onclick="ga('send', 'event', 'Finish Register', 'As Patient', 'success');" >
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


