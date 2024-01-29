@extends('layouts.master')
@section('content')
    <div class="row mb-5">
        <div class="w-32 m-8">

            <a href="{{ url('book/create') }}">
                <button type="button" class="mb-3 btn btn-sm btn-secondary waves-effect waves-light">Add new book</button>
            </a>
        </div>
        @foreach ($books as $book)
            <div class="col-md-3 col-sm-4">
                <div class="card">
                    @php
                        $images = File::files(public_path('assets/img/elements'));
                        $randomImage = $images[array_rand($images)];
                    @endphp
                    <img class="card-img-top" src="{{ asset('assets/img/elements/' . $randomImage->getFilename()) }}"
                        alt="Card image cap" style="width:298px;height:150px;" />
                    <div class="card-body">
                        <h6 class="mt-2 text-muted">Book Name:{{ $book->name }}</h6>
                        <h5 class="card-title"> Category:{{ $book->category }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">author:{{ $book->author }}</li>
                        <li class="list-group-item">quantity:{{ $book->quantity }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{ route('book.edit', ['id' => $book->id]) }}" class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                <path
                                    d="M11.013 1.427a1.75 1.75 0 0 1 2.474 0l1.086 1.086a1.75 1.75 0 0 1 0 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 0 1-.927-.928l.929-3.25c.081-.286.235-.547.445-.758l8.61-8.61Zm.176 4.823L9.75 4.81l-6.286 6.287a.253.253 0 0 0-.064.108l-.558 1.953 1.953-.558a.253.253 0 0 0 .108-.064Zm1.238-3.763a.25.25 0 0 0-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 0 0 0-.354Z">
                                </path>
                            </svg>
                        </a>

                        <form method="POST" action="{{ route('book.delete', ['book' => $book->id]) }}"
                            onsubmit="return confirm('Are you sure you want to delete this book?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light">
                                <svg class="remove" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16"
                                    height="16">
                                    <path
                                        d="M11 1.75V3h2.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H5V1.75C5 .784 5.784 0 6.75 0h2.5C10.216 0 11 .784 11 1.75ZM4.496 6.675l.66 6.6a.25.25 0 0 0 .249.225h5.19a.25.25 0 0 0 .249-.225l.66-6.6a.75.75 0 0 1 1.492.149l-.66 6.6A1.748 1.748 0 0 1 10.595 15h-5.19a1.75 1.75 0 0 1-1.741-1.575l-.66-6.6a.75.75 0 1 1 1.492-.15ZM6.5 1.75V3h3V1.75a.25.25 0 0 0-.25-.25h-2.5a.25.25 0 0 0-.25.25Z">
                                    </path>
                                </svg>
                            </button>
                        </form>
                        <div class="w-32 m-8">
                            <button type="button" class="btn btn-sm btn-secondary waves-effect waves-light d-right"
                                data-bs-toggle="modal" data-bs-target="#dateTimeModal">Borrow book</button>
                            @auth

                               <div class="modal fade" id="dateTimeModal" tabindex="-1"
                                            aria-labelledby="dateTimeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="dateTimeModalLabel">Return Time</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('books.borrow', ['book' => $book->id]) }}"
                                                            method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id"
                                                                value="{{ auth()->user()->id }}">

                                                            <div class="mb-3">
                                                                <label for="dateInput" class="form-label">Date</label>
                                                                <input type="date" class="form-control" id="dateInput"
                                                                    name="return_date" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="timeInput" class="form-label">Time</label>
                                                                <input type="time" class="form-control" id="timeInput"
                                                                    name="return_time" required>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-sm btn-primary waves-effect waves-light d-right">
                                                                Borrow book
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <p class="text-danger">Login to borrow a book</p>
                                    @endauth

                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach

    </div>
@endsection
