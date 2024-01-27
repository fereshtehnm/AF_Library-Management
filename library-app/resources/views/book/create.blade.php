@extends('layouts.master')
@section('content')
    <div class="container">
        <h2>Create Book</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('book.store') }}" class="needs-validation" novalidate>
            @csrf

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
                <label for="name">Name</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter book name.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="description" value="{{ old('description') }}" required />
                <label for="description">Description</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter book description.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="categories" value="{{ old('categories') }}" required />
                <label for="categories">Book Category</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter book category.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="number" class="form-control" name="price" value="{{ old('price') }}" required />
                <label for="price">Price</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter book price.</div>
            </div>


            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="author" value="{{ old('author') }}" required />
                <label for="author">Author</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter book author.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" required />
                <label for="quantity">Quantity</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter book quantity.</div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
