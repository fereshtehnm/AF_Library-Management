@extends('layouts.master')
@section('content')
    <div class="row mb-5">
  <!-- Help Center Header -->
  <div class="help-center-header d-flex flex-column justify-content-center align-items-center">
                  <h3 class="text-center text-primary fw-semibold">Hello, how can we help?</h3>
                  <p class="text-center px-3 mb-0">Common troubleshooting topics:</p>
                  <div class="input-wrapper my-3 input-group input-group-lg input-group-merge px-5">
                    <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-magnify mdi-20px"></i></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search"
                      aria-label="Search"
                      aria-describedby="basic-addon1" />
                  </div>
                </div>
                <!-- /Help Center Header -->

                <!-- Get to know our site -->
                <div class="help-center-popular-articles py-5">
                  <div class="container-xl">
                    <h4 class="text-center my-4">GET STARTED</h4>
                    <div class="row mb-2">
                      <div class="col-lg-10 mx-auto">
                        <div class="row">
                          <div class="col-md-4 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                              <div class="card-body text-center">
                                <img
                                  class="mb-3"
                                  src="../../assets/svg/icons/rocket.svg"
                                  height="60"
                                  alt="Help center landing" />
                                <h5>SignUp/SignIn</h5>
                                <p>Whether you're new or you're a power user, You can signIn and SignUp</p>
                                <a class="btn btn-outline-primary" href="{{ url('/login') }}">Read More</a>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4 mb-md-0 mb-4">
                            <div class="card border shadow-none">
                              <div class="card-body text-center">
                                <img
                                  class="mb-3"
                                  src="../../assets/svg/icons/gift.svg"
                                  height="60"
                                  alt="Help center landing" />
                                <h5>Get To know with Our Books</h5>
                                <p>Are you a new customer wondering What our Books are?</p>
                                <a class="btn btn-outline-primary" href="{{ url('/book') }}">Read More</a>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="card border shadow-none">
                              <div class="card-body text-center">
                                <img
                                  class="mb-3"
                                  src="../../assets/svg/icons/keyboard.svg"
                                  height="60"
                                  alt="Help center landing" />
                                <h5>Our Librarys and Their Addresses:</h5>
                                <p>This article will show you how to expand the functionality of...</p>
                                <a class="btn btn-outline-primary" href="./pages-help-center-article.html">Read More</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Get to know our site -->
                 <!-- Help Area -->
                 <div class="help-center-contact-us bg-help-center">
                  <div class="container-xl">
                    <div class="row justify-content-center py-5 my-4">
                      <div class="col-md-8 col-lg-6 text-center">
                        <h4>Still need help?</h4>
                        <p class="mb-4">
                          Our specialists are always happy to help. Contact us during standard business hours or email
                          us 24/7 and we'll get back to you.
                        </p>
                        <div class="d-flex justify-content-center flex-wrap gap-4">
                          <a href="javascript:void(0);" class="btn btn-primary">Visit our community</a>
                          <a href="javascript:void(0);" class="btn btn-primary">Contact us</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Help Area -->
    </div>
@endsection
