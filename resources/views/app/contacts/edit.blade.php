@extends('layouts.app')

@section('content')

<main class="-mt-28 pb-8">
    <section aria-labelledby="hire-contract">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <x-slot name="title">
                <a href="{{ route('companies.index') }}" class="mr-4"
                    ><i class="mr-1 icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.companies.edit_title')
            </x-slot>

            <x-form
                method="PUT"
                action="{{ route('contacts.update', $contact) }}"
                class="mt-4"
            >
                @include('app.contacts.form-inputs')

                <div class="mt-10">
                    <a href="{{ route('companies.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <a href="{{ route('contacts.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add text-primary"></i>
                        Save
                    </a>

                    <button type="submit" class="button button-primary float-right">
                        <i class="mr-1 icon ion-md-save"></i>
                        Save
                    </button>
                </div>
            </x-form>
        </div>
    </section>
</main>
@endsection
