@extends('layouts.master')
@section('content')
    <div class="row mb-5">
        <div class="w-32 m-8">
            <a href="{{ url('book/create') }}">
                <button type="button" class="btn btn-sm btn-primary waves-effect waves-light">Add new book</button>
            </a>
        </div>
        @foreach ($books as $book)
            <div class="col-md-3 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="../../assets/img/elements/7.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h6 class="mt-2 text-muted">{{ $book->name }}</h6>
                        <h5 class="card-title">{{ $book->category }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $book->author }}</li>
                        <li class="list-group-item">{{ $book->quantity }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('book.edit', $book->id) }}" class="card-link">Edit</a>
                        <form method="POST" action="{{ route('book.delete', ['book' => $book]) }}"
                            onsubmit="return confirm('Are you sure you want to delete this book?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg class="remove" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                    height="16">
                                    <path
                                        d="M11 1.75V3h2.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75ZM4.496 6.675l.66 6.6a.25.25 0 0 0 .249.225h5.19a.25.25 0 0 0 .249-.225l.66-6.6a.75.75 0 0 1 1.492.149l-.66 6.6A1.748 1.748 0 0 1 10.595 15h-5.19a1.75 1.75 0 0 1-1.741-1.575l-.66-6.6a.75.75 0 1 1 1.492-.15ZM6.5 1.75V3h3V1.75a.25.25 0 0 0-.25-.25h-2.5a.25.25 0 0 0-.25.25Z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
