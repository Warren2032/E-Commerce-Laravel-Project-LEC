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

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        {{-- Gender --}}
                        <div class="row mb-3 ">
                            <label for="radio_button_gender" class="col-md-4 col-form-label text-md-end" >{{ __('Gender') }}</label>

                            <div class="d-flex flex-column col-md-6 @error('radio_button_gender') is-invalid  @enderror">
                                {{--no error message when validation failed, please add--}}
                                <div class="d-inline-flex form-check">
                                    <input class="form-check-input me-1 " type="radio" name="radio_button_gender" id="Male" value="Male">
                                    <label class="form-check-label" for="Male">
                                        Male
                                    </label>
                                </div>
                                <div class="d-inline-flex form-check">
                                    <input class="form-check-input me-1" type="radio"  name="radio_button_gender" id="Female" value="Female">
                                    <label class="form-check-label" for="Female">
                                        Female
                                    </label>
                                </div>

                                @error('radio_button_gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                        {{-- DOB --}}
                        <div class="form-group mb-3" style="width">
                            <label for="default-radio-1" class="ml-2 text-sm font-medium">Date of birth</label>
                            <input name="dob" type="date" required autocomplete="name" autofocus
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleInput125"
                                placeholder="">
                        </div>

                        <div class="row mb-0">
                            <div class="text-center">
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
