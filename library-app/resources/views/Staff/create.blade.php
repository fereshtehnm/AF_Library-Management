@extends('layouts.master')
@section('content')
    <div class="container">
        <h2>Create Staff</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('staff.store') }}" class="needs-validation" novalidate>
            @csrf

          <div class="form-floating form-floating-outline mb-4">
            <input
              type="text"
              class="form-control"
              name="name"
              value="{{ old('name') }}"
              required />
            <label for="name">Name</label>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>

          <div class="form-floating form-floating-outline mb-4">
          <input
          type="text"
          class="form-control"
          name="phone_number"
          value="{{ old('phone_number') }}"
          required />
          <label for="phone_number">Phone Number</label>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter your number.</div>
          </div>

          <div class="form-floating form-floating-outline mb-4">
            <input
              type="email"
              name="email"
              class="form-control"
              aria-label="john.doe"
              value="{{ old('email') }}"
              required />
            <label for="email">Email</label>
            <div class="valid-feedback">Looks good!</div>
            <div class="invalid-feedback">Please enter a valid email</div>
          </div>
          <div class="mb-4 form-password-toggle">
            <div class="input-group input-group-merge">
              <div class="form-floating form-floating-outline">
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  required />
                <label for="password">Password</label>
              </div>
              <span class="input-group-text rounded-end cursor-pointer" id="basic-default-password4"
                ><i class="mdi mdi-eye-off-outline"></i
              ></span>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your password.</div>
            </div>
          </div>            
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
    </div>
@endsection
