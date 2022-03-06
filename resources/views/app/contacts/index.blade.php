@extends('layouts.app')

@section('content')

<main class="-mt-24 pb-8">
    <section aria-labelledby="hire-contract">

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">

        {{-- START TOP CARD --}}
        <div class="mb-10 rounded-lg bg-white overflow-hidden shadow">
            <h2 class="sr-only" id="profile-overview-title">@lang('crud.companies.index_title')</h2>
            <div class="bg-white p-6">
              <div class="sm:flex sm:items-center sm:justify-between">
                <div class="sm:flex sm:space-x-5">
                  <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                    <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
                    <p class="text-xl font-bold text-gray-900 sm:text-2xl">Customer Contacts</p>
                    <p class="text-sm font-medium text-gray-400">.</p>
                  </div>
                </div>
              </div>

              {{-- START SEARCH --}}
              <div class="md:w-full">
                <form>
                    <div class="flex items-stretch w-full">
                        <x-inputs.text
                            id="indexSearch"
                            name="search"
                            value="{{ $search ?? '' }}"
                            placeholder="{{ __('crud.common.search') }}"
                            autocomplete="off"
                        ></x-inputs.text>

                        <div class="ml-1">
                            <button
                                type="submit"
                                class="button button-primary"
                            >
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
              </div>
              {{-- END SEARCH --}}

              {{-- START CONTENT IN TOP CARD --}}
              <div class="mt-4 mb-5">
                <div class="flex flex-wrap">
                    <div class="md:w-full text-right">
                        @can('create', App\Models\Contact::class)
                        <a
                            href="{{ route('contacts.create') }}"
                            class="button button-primary"
                        >
                            <i class="mr-1 icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="block w-full ">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="mb-4 bg-transparent divide-y divide-gray-200 w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                                @lang('crud.companies.inputs.contact')
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                                @lang('crud.companies.inputs.company')
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                                @lang('crud.companies.inputs.address')
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                                @lang('crud.companies.inputs.phone')
                                            </th>                                            
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                                @lang('crud.companies.inputs.mobile')
                                            </th>                                            
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">
                                                    @lang('crud.common.actions')
                                                </span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contacts as $contact)
                                        <tr class="bg-white hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $contact->contact ?? '-' }}
                                            </td>
                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                {{ $contact->company->company ?? '-' }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $contact->company->address ?? '-' }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $contact->phone ?? '-' }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{ $contact->mobile ?? '-' }}
                                            </td>
                                            <td class="px-6 py-4 text-right text-sm font-medium">
                                                <a href="{{ route('contacts.edit', $contact->id) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7">@lang('crud.common.no_items_found')</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td class="pt-10 px-10" colspan="7">
                                                {!! $contacts->render() !!}
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              {{-- END CONTENT IN TOP CARD --}}
            </div>
        </div>
        {{-- END TOP CARD --}}

        {{-- START CARD 2 --}}

        {{-- END CARD 2 --}}

    </div>
    </section>
</main>

@endsection
