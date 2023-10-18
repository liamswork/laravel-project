@extends('layouts.app')

@section('content')

<div class="tw-h-screen tw-flex">
    <!-- Sidenav -->
    <div class="tw-flex tw-flex-col tw-items-center tw-w-72 tw-h-full tw-bg-gray-800 tw-text-white tw-p-4">
        <!-- Centered Links -->
        <ul class="tw-flex tw-flex-col tw-items-center tw-justify-center tw-space-y-4">
            <li><a href="#" class="hover:tw-text-blue-500">View all Companies</a></li>
            <li><a href="#" class="hover:tw-text-blue-500">View all Employees</a></li>
            <li><a href="#" class="hover:tw-text-blue-500">Add Company</a></li>
            <li><a href="#" class="hover:tw-text-blue-500">Add Employee</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="tw-flex-1 tw-p-8">
    <div class="tw-cards tw-grid tw-grid-cols-1 md:tw-grid-cols-2 lg:tw-grid-cols-2 xl:tw-grid-cols-2 tw-gap-4">
        <div class="tw-card tw-flex tw-flex-col tw-items-center tw-justify-center tw-border tw-border-gray-200 tw-p-4">
            <img src="{{ asset('images/employees-icon.png') }}" alt="View all employees" class="tw-w-64 tw-h-64 mx-auto">
            <button class="hover:tw-bg-blue-800 tw-btn tw-text-white tw-bg-blue-500 tw-p-2 tw-rounded-full tw-mt-2">View Employees</button>
        </div>
        <div class="tw-card tw-flex tw-flex-col tw-items-center tw-justify-center tw-border tw-border-gray-200 tw-p-4">
            <img src="{{ asset('images/companies-icon.png') }}" alt="View all companies" class="tw-w-64 tw-h-64 mx-auto">
            <button class="hover:tw-bg-blue-800 tw-btn tw-text-white tw-bg-blue-500 tw-p-2 tw-rounded-full tw-mt-2">View Companies</button>
        </div>
        <div class="tw-card tw-flex tw-flex-col tw-items-center tw-justify-center tw-border tw-border-gray-200 tw-p-4">
            <img src="{{ asset('images/employee-icon.png') }}" alt="Add an employee" class="tw-w-64 tw-h-64 mx-auto">
            <button class="hover:tw-bg-blue-800 tw-btn tw-text-white tw-bg-blue-500 tw-p-2 tw-rounded-full tw-mt-2">Add Employee</button>
        </div>
        <div class="tw-card tw-flex tw-flex-col tw-items-center tw-justify-center tw-border tw-border-gray-200 tw-p-4">
            <img src="{{ asset('images/company-icon.png') }}" alt="Add a company" class="tw-w-64 tw-h-64 mx-auto">
            <button class="hover:tw-bg-blue-800 tw-btn tw-text-white tw-bg-blue-500 tw-p-2 tw-rounded-full tw-mt-2">Add Company</button>
        </div>
    </div>
</div>

</div>
@endsection
