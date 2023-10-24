@extends('layouts.app')

@section('content') 
<div class="container">
    <h1><i class="fa-solid fa-building"></i> {{ $company->name }}</h1>
    <p><i class="fa-solid fa-link"></i>Website: {{ $company->website }}</p>
    <p><i class="fa-solid fa-envelope-open-text"></i> Email: {{ $company->email }}</p>
    <br>
    <a class="ttext-blue-500 hover:underline" href="/companies">Go back </a>
</div>
@endsection