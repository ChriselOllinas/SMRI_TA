@extends('includes.header')
@extends('includes.navbar')
@extends('includes.sidenav')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Account') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeUser') }}">
                        @csrf

                        <!-- ADID -->
                        <div class="form-group row">
                            <label for="ADID" class="col-md-4 col-form-label text-md-right">{{ __('ADID') }}</label>

                            <div class="col-md-6">
                                <input id="ADID" type="text" class="form-control @error('ADID') is-invalid @enderror" name="ADID" value="{{ old('ADID') }}" required autocomplete="ADID" autofocus>

                                @error('ADID')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                       <!--  FULL NAME -->
                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                       <!--  EMAIL ADDRESS -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- PASSWORD -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- WORKBOOK ACCESS -->
                        <div class="form-group row">
                        <label for="target_table" class="col-md-4 col-form-label text-md-right">{{ __('Workbook Access') }}</label>  
                        <div class="col-md-6">
                          <!-- select -->
                          <div class="form-group">
                            
                            <select class="form-control">
                              <option>OPTION</option>
                             
                            </select>
                          
                          </div>
                        </div>
                     <!-- USER TYPE -->
                        <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>
                        <div class="col-md-6">
                       
                          <!-- select -->
                          <div class="form-group">
                            <select class="form-control">
                              <option>0</option>
                              <option>1</option>
                            </select>
                          </div>
                          
                        </div>
                      </div>
                      <!-- BUTTON -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create Account') }}
                                </button>

                                <button type="" class="btn btn-danger">
                                    {{ __('Cancel') }}
                                </button>

                                 <button type="" class="btn btn-warning">
                                    {{ __('Reset') }}
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
@extends('includes.footer')

