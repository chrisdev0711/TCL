@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('css/scroll_down.css') }}"> 
@endsection
@section('content')
<main class="-mt-28 pb-8">
    <section aria-labelledby="hire-contract">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <x-slot name="title">
                <a href="{{ route('check-list-petrols.index') }}" class="mr-4"
                    ><i class="mr-1 icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.check_list_petrols.edit_title')
            </x-slot>
            
            <x-form
                method="PUT"
                action="{{ route('check-list-petrols.update', $checkListPetrol) }}"
                class="mt-4 parentForm"
                enctype="multipart/form-data"         
                id="check-list-petrols-edit-form"       
            >
                <div class="mb-10 rounded-lg bg-white overflow-hidden shadow">
                    <h2 class="sr-only" id="profile-overview-title">Hire Contract</h2>
                    <div class="bg-white p-6 relative">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex sm:space-x-5 tanker-header">
                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{ $check_type }} Hire Checklist</p>
                                <p class="text-sm font-medium text-gray-400">To be completed by TCL and customer upon collection.</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600 font-bold absolute top-3 right-16" style="right: 3.5%">Please sign here</p>
                            <svg class="arrows down cursor-pointer">            
                                <path class="a1" d="M0 0 L20 25 L40 0"></path>
                                <path class="a2" d="M0 20 L20 45 L40 20"></path>
                                <path class="a3" d="M0 40 L20 65 L40 40"></path>
                            </svg>
                        </div>
                    </div>
                    </div>
                </div>
                @include('app.check_list_petrols.form-inputs')
                <div class="mt-10">
                    <a href="{{ route('hires.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>
                    <a href="{{ route('check-list-petrols.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add text-primary"></i>
                        Save
                    </a>
                    @if(!isset($url_link) && $checkListPetrol->status != "signed")
                        <button type = "submit" class="button button-primary float-right">
                            <i class="mr-1 icon ion-md-save"></i>
                            Save
                        </button>
                    @endif
                </div>
            </x-form>
        </div>
    </section>
</main>
@endsection