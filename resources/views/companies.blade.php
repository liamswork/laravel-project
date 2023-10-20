@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Companies</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Website</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{ $company->company_id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->logo }}</td>
                    <td>{{ $company->website }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection