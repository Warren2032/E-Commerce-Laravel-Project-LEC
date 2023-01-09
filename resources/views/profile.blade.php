@extends('layouts.app')
@section('content')
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto mt-20" style="padding: 2rem">
        <form action="{{ route('profile-update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="hidden" name="gender" value="{{ $user->gender }}">
            <input type="hidden" name="dob" value="{{ $user->dob }}">
            <div class="form-group mb-6">
                <label for="default-radio-1" class="ml-2 text-sm font-medium">Name</label>
                <input name="name" type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput125" placeholder="{{ $user->name }}" value="{{ $user->name }}">
            </div>
            <div class="form-group mb-6">
                <label for="default-radio-1" class="ml-2 text-sm font-medium">Email</label>
                <input name="email" type="email"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput125" placeholder="{{ $user->email }}" value="{{ $user->email }}">
            </div>
            <div class="form-group mb-6">
                <label for="default-radio-1" class="ml-2 text-sm font-medium">Gender</label>
                <div></div>
                <div class="form-check form-check-inline">
                    <input style="margin: 1rem" name="gender" type="radio" value="male"
                        {{ $user->gender === 'male' ? 'checked' : '' }} /> Male
                    <input style="margin: 1rem" name="gender" type="radio" value="female"
                        {{ $user->gender === 'female' ? 'checked' : '' }} /> Female
                </div>
            </div>
            <div class="form-group mb-6">
                <label for="default-radio-1" class="ml-2 text-sm font-medium">Date of birth</label>
                <input value="{{ $user->dob }}" name="dob" type="date"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput125" placeholder="">
            </div>
            <button type="submit"
                class="btn btn-primary btn-block btn-lg font-medium waves-effect waves-light">Update</button>

        </form>
    </div>
@endsection
