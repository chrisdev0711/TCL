@extends('layouts.app')

@section('content')
<main class="-mt-28 pb-8">
    <section aria-labelledby="hire-contract">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <x-slot name="title">
                <a href="{{ route('tankers.index') }}" class="mr-4"
                    ><i class="mr-1 icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.tankers.edit_title')
            </x-slot>

            <x-form
                method="PUT"
                action="{{ route('tankers.update', $tanker) }}"
                class="mt-4"
            >
                @include('app.tankers.form-inputs')

                <div class="mt-10">
                    <a href="{{ route('tankers.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <a href="{{ route('tankers.create') }}" class="button">
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
