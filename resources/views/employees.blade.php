@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h3 fw-bold">Employees</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
        @foreach($employees as $employee)
            <div class="col">
                <div class="card rounded-lg shadow">
                    <div class="card-body">
                        <h2 class="h5 fw-bold">{{ $employee->fname }} {{ $employee->lname }}</h2>
                        <p class="text-secondary">Company ID: {{ $employee->company_id }}</p>
                        <p class="text-secondary">Employee ID: {{ $employee->employee_id }}</p>
                        <p class="text-secondary">{{ $employee->email }}</p>
                        <p class="text-secondary">{{ $employee->phone }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection