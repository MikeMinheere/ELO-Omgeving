@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@section('content')

<x-slot name="header">
    <h2>
        {{ __('Profiel') }}
    </h2>
</x-slot>

<div>
    <div class="container-3">
        <div>
            <div>
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div>
            <div>
                @include('profile.partials.update-profile-photo')
            </div>
        </div>
    </div>

        <div class= "container-4">
            <div>
                @include('profile.partials.update-password-form')
            </div>
        </div>
</div>

@endsection