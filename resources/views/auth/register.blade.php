@extends('layouts.app')

@section('content')
    <section class="bac bg-image mb-5 pb-5"
        style="background-image: url({{ asset('_eji/images/ZSB7XIxutSXh8sFDA20EQDMWBdVY7wW9tl33mFFr.jpg') }});">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                            
                                <form method="post" action="{{route("register")}}">
                                  @csrf
                                    <div class="form-outline mb-4">
                                        <label for="name"> Username:</label><span style="color:red">*</span>
                                        <input type="text" id="form3Example1cg" placeholder=" Unique username" name="username"
                                            class="form-control form-control-lg" autocomplete="off"
                                            value="{{ old('username') }}" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="name"> Full name:</label><span style="color:red">*</span>
                                        <input type="text" id="form3Example1cg" placeholder=" Name" name="name"
                                            autocomplete="off" value="{{ old('name') }}"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="name"> Email:</label><span style="color:red">*</span>
                                        <input type="email" id="form3Example3cg" placeholder="Email" name="email"
                                            autocomplete="off" value="{{ old('email') }}"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="name"> Your Phone Number:</label><span style="color:red">*</span>
                                        <input type="number" id="form3Example3cg" placeholder="Phone Number" name="phone_number"
                                            autocomplete="off" value="{{ old('phone_number') }}"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4 ">
                                        <label for="name"> Choose Country:</label><span style="color:red">*</span>
                                      <select id="form3Example3cg" class="form-control form-control-lg"  name="country" value="{{old('country')}}" id="">
                                      <option value="">Choose country</option>
                                      @foreach ($countries as $country)
                                      <option value="{{$country}}">{{$country}}</option>
                                      @endforeach
                                      </select>
                                  </div>


                                    <div class="form-outline mb-4">
                                        <label for="name"> Your are referred by:</label>
                                        <input type="text" id="form3Example3cg" placeholder="Referrer Id"
                                            name="referred_by" value="{{ old('referred_by', $referred_by) }}"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="name"> Password:</label><span style="color:red">*</span>
                                        <input type="password" id="form3Example4cg" placeholder="Password" name="password"
                                        value="{{old('password')}}"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label for="name"> Confirm password:</label><span style="color:red">*</span>
                                        <input type="password" id="form3Example4cdg" placeholder="confirm  password" name="password_confirmation"
                                        {{old('password_confirmation')}}    
                                        class="form-control form-control-lg" />
                                    </div>

                                    {{-- <div class="form-checkjustify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" /> &nbsp;
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in 
                                            <a href="#!" class="text-body"> &nbsp; &nbsp;
                                                &nbsp;
                                                <u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div> --}}

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                        &nbsp; &nbsp;
                                        <a href="index.html" type="button"
                                            class="btn btn-muted btn-block btn-lg gradient-custom-4 l text-body">home</a>

                                    </div>
                                    <div>
                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                                href="/login" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br>
@endsection
