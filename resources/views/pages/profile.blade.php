@extends('layouts.dashboard')

@section('content')
    <h1 class="text-light">User Profile</h1>
    <div class="container bg-light p-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <img id="profile_img" width="100px" style="border-radius: 100px"
                    src="{{ Auth::user()->avatar == null ? asset('images/user.png') : asset('storage/avatars/' . Auth::user()->avatar) }}"
                    alt="">
                <br><span class="alert">{{ Auth::user()->name }}</span>

            </div>
                <div class="col-md-12 pt-5">

                    <form class="w-100 " action="{{ route('dashboard.update_profile') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container-fluid bg-dark w-100 p-2">
                            <div class="row w-100">

                                <div class="col-md-6 w-100 text-light">
                                    <label for="username">Username</label>
                                    <input type="text" value="{{Auth::user()->username}}" class="w-100 alert alert-muted" disabled>
                                </div>

                                <div class="col-md-6 w-100 text-light">
                                    <label for="name">Fullname</label>
                                    <input type="text" name="name" value="{{Auth::user()->name}}"  class="w-100 alert alert-light">
                                </div>

                                <div class="col-md-6 w-100 text-light">
                                    <label for="email">Email</label>
                                    <input type="text" value="{{Auth::user()->email}}" class="w-100 alert alert-muted" disabled>
                                </div>

                                <div class="col-md-6 w-100 text-light">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" value="{{Auth::user()->country}}" class="w-100 alert alert-light">
                                </div>

                                <div class="col-md-6 w-100 text-light">
                                    <label for="state">State</label>
                                    <input type="text"name="state" value="{{Auth::user()->state}}" class="w-100 alert alert-light">
                                </div>

                                <div class="col-md-6 w-100 text-light">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" name="phone_number" value="{{Auth::user()->phone_number}}" class="w-100 alert alert-light">
                                </div>

                                <div class="col-md-3 w-100 text-light text-center">
                                    <img id="new_img" width="50px" style="border-radius: 100px"
                                    src="{{ Auth::user()->avatar == null ? asset('images/user.png') : asset('storage/avatars/' . Auth::user()->avatar) }}"
                                    alt="">
                                </div>

                                <div class="col-md-9 w-100 text-light ">
                                    <label for="country">Change Profile Picture</label>
                                    <input  type="file" name="avatar" class="w-100 alert alert-light text-center">
                                </div>

                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-primary" value="Save Profile">
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
        </div>
    </div>
@endsection
