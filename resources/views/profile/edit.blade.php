@extends('layouts.template')

@section('title', 'index')

@section('content')


    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <h3 style="color: blue; margin: 0 auto; border: 1px solid black; width: fit-content; padding: 5px; background-color: rgb(255, 255, 125)"><a class="nav-link" :href="route('logout')"
            onclick="event.preventDefault();
                                    this.closest('form').submit();">
            {{ __('LOG OUT') }}
        </a></h3>
    </form>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>

@endsection
