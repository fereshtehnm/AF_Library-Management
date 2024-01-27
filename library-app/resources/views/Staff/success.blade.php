@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Staff Created Successfully</h2>

        <p>Thank you for creating a new staff member.</p>

        <a href="{{ route('staff.index') }}">Back to staff list</a>
    </div>
@endsection
