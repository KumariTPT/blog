@extends('partials.layout')

@section('content')

<div class="card bg-base-200 w-3/5 shadow-xl mx-auto my-auto">
    <div class="card-body space-y-6">
        <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: var(--fallback-b2,oklch(var(--b2)/var(--tw-bg-opacity))); box-shadow: none;">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')        </div>
        <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: var(--fallback-b2,oklch(var(--b2)/var(--tw-bg-opacity))); box-shadow: none;">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')        </div>
        <div class="p-4 sm:p-8 shadow sm:rounded-lg" style="background-color: var(--fallback-b2,oklch(var(--b2)/var(--tw-bg-opacity))); box-shadow: none;">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
                </div>
                    @endsection