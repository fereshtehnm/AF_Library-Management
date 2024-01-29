@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Book Name</th>
                        <th>User ID</th>
                        <th>Reserved At</th>
                        <th>Return At</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{ $report->book_id }}</td>
                            <td>{{ $report->user_id }}</td>
                            <td>{{ $report->reserve_data }}</td>
                            <td>{{ $report->return_date }}</td>

                            <!-- Add more cells for additional report details -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
