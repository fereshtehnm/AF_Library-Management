@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>Borrowed At</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{ $report->book->name }}</td>
                            <td>{{ $report->borrowed_at }}</td>
                            <!-- Add more cells for additional report details -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection