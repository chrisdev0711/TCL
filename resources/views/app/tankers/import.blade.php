@extends('layouts.app')

@section('content')
<main class="-mt-24 pb-8">
    <section aria-labelledby="hire-contract">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mb-10 rounded-lg bg-white overflow-hidden shadow">
                <h2 class="sr-only" id="profile-overview-title">@lang('crud.tankers.index_title')</h2>
                <div class="bg-white p-6">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div class="sm:flex sm:space-x-5">
                            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">{{ __('crud.tankers.import') }}</p>
                                <p class="text-sm font-medium text-gray-400">.</p>
                            </div>
                        </div>
                    </div>                                        
                </div>                
            </div>
        </div>
        <div class="relative mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <form action="{{ route('excel.import') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mt-3 text-center mx-auto">            
                    <div class="mt-2 px-7 py-3">
                        <h3 class="text-sm mx-4 text-gray-500">
                            Select the Tankers List(Excel)
                        </h3>
                    </div>
                    <label
                        class="w-18 flex flex-col items-center px-2 py-2 bg-white rounded-md shadow-md tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white text-purple-600 ease-linear transition-all duration-150">
                        <i class="icon ion-md-cloud-upload" style="zoom:4.0;"></i>                
                        <input type='file' name="import_file" class="hidden" accept=".csv,.xls,.xlsx"/>
                    </label>  
                                                
                    <div class="items-center px-4 py-3 mt-3">
                        <button
                            id="ok-btn"
                            class="px-4 py-2 bg-green-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300"
                        >
                            Import Fleets
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection