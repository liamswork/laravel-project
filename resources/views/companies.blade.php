@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-3xl font-semibold">Companies</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
        @foreach($companies as $company)
            <div class="bg-gray-100 rounded-lg shadow-md p-4 border border-gray-200 mb-4">
                <img src="{{ $company->logo }}" alt="{{ $company->name }} logo" class="w-full h-32 object-cover">
                <div class="mt-4">
                    <h2 class="text-xl font-semibold">
                        <a href="/companies/{{ $company->slug }}" class="text-blue-500 hover:underline">
                            <i class="fa-solid fa-building"></i>{{ $company->name }}
                        </a>
                    </h2>
                    <p>
                        <i class="fa-solid fa-envelope-open-text"></i>
                        {{ $company->email }}
                    </p>
                    <p>
                        <i class="fa-solid fa-link"></i>
                        <a href="{{ $company->website }}" class="text-blue-500 hover:underline" target="_blank">{{ $company->website }}</a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection