@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Edit Book</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('book.update', ['id' => $books->id]) }}">
            @csrf
            @method('PUT')

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="name" value="{{ old('name', $books->name) }}" required />
                <label for="name">Name</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter the book name.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="description"
                    value="{{ old('description', $books->description) }}" required />
                <label for="description">Description</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter the book description.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="categories"
                    value="{{ old('categories', $books->categories) }}" required />
                <label for="categories">Categories</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter the book categories.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="price" value="{{ old('price', $books->price) }}"
                    required />
                <label for="price">Price</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter the book price.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="author" value="{{ old('author', $books->author) }}"
                    required />
                <label for="author">Author</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter the book author.</div>
            </div>

            <div class="form-floating form-floating-outline mb-4">
                <input type="text" class="form-control" name="quantity" value="{{ old('quantity', $books->quantity) }}"
                    required />
                <label for="quantity">Quantity</label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter the book quantity.</div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update book</button>
                </div>
            </div>
        </form>
    </div>
@endsection
