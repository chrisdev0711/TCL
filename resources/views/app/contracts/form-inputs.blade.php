@section('styles')
<link rel="stylesheet" href="{{ asset('css/scroll_down.css') }}">
@endsection
<div class="mb-10 overflow-hidden bg-white rounded-lg shadow">
    <h2 class="sr-only" id="profile-overview-title">Hire Contract</h2>
    <div class="relative p-6 bg-white">
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="sm:flex sm:space-x-5">
            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
                <p class="text-xl font-bold text-gray-900 sm:text-2xl">Hire Contract</p>
                <p class="text-sm font-medium text-gray-400">To be completed by TCL and customer.</p>
            </div>
        </div>
        <div>
            <p class="absolute text-sm font-medium font-bold text-gray-600 top-3 right-16">Signature</p>
            <svg class="cursor-pointer arrows down">
                <path class="a1" d="M0 0 L20 25 L40 0"></path>
                <path class="a2" d="M0 20 L20 45 L40 20"></path>
                <path class="a3" d="M0 40 L20 65 L40 40"></path>
            </svg>
        </div>
    </div>
    </div>
</div>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Hiring Company</h3>
        <p class="mt-1 text-sm text-gray-600">
            Select the custom from the company dropdown.
        </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">


            <div class="grid grid-cols-6 gap-6 pb-6">
                <div class="col-span-6 sm:col-span-3">
                    <div class="">
                        <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                        <x-inputs.text
                            name="contact"
                            id="contact"
                            value="{{ $hire->company->contact }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="company_id" class="block text-sm font-medium text-gray-700">Company</label>
                        <x-inputs.text
                            name="company_id"
                            id="company_id"
                            value="{{ $hire->company->company }}"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <x-inputs.text
                            name="email"
                            id="email"
                            value="{{ $hire->company->email }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <div class="">

                        <label for="order_num" class="block text-sm font-medium text-gray-700">Order Number</label>
                        <x-inputs.text
                            name="order_num"
                            id="order_num"
                            value="{{ $hire->order_num }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <x-inputs.text
                            name="phone"
                            id="phone"
                            value="{{ $hire->company->phone }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                        <x-inputs.text
                            name="mobile"
                            id="mobile"
                            value="{{ $hire->company->mobile }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-6">
                    <div class="">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <x-inputs.text
                            name="address"
                            id="address"
                            value="{{ $hire->company->address }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Equipment Details</h3>
        <p class="mt-1 text-sm text-gray-600">
            Select the Tanker from the Tanker dropdown.
        </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6 pb-6">

                    <div class="col-span-6 sm:col-span-3">
                        <div class="">
                            <label for="tanker_id" class="block text-sm font-medium text-gray-700">Tanker</label>
                            <x-inputs.select
                                name="tanker_id"
                                id="tanker_id"
                                disabled
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200">
                                @php $selected = $hire->tanker_id @endphp
                                <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Tanker</option>
                                @foreach($tankers as $value => $label)
                                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
                                @endforeach
                            </x-inputs.select>
                        </div>
                        <div class="mt-6">
                            <label for="equipment" class="block text-sm font-medium text-gray-700">Equipment</label>
                            <x-inputs.text
                                name="equipment"
                                id="equipment"
                                value="{{ $hire->tanker->equipment }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                disabled
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="make" class="block text-sm font-medium text-gray-700">Make</label>
                            <x-inputs.text
                                name="make"
                                id="make"
                                value="{{ $hire->tanker->make }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                disabled
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="chassis" class="block text-sm font-medium text-gray-700">Chassis Number</label>
                            <x-inputs.text
                                name="chassis"
                                id="chassis"
                                value="{{ $hire->tanker->chassis_num }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                disabled
                            ></x-inputs.text>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <div class="">
                            <label for="mot_expiry" class="block text-sm font-medium text-gray-700">MOT Expiry Date</label>
                            <x-inputs.text
                                name="mot_expiry"
                                id="mot_expiry"
                                value="{{ $hire->mot_expiry }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                disabled
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="adr_expiry" class="block text-sm font-medium text-gray-700">ADR Expiry Date</label>
                            <x-inputs.text
                                name="adr_expiry"
                                id="adr_expiry"
                                value="{{ $hire->adr_expiry }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                disabled
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="service_interval" class="block text-sm font-medium text-gray-700">Service Interval (weeks)</label>
                            <datalist id="interval-list">
                                <option value="6"></option>
                                <option value="7"></option>
                                <option value="8"></option>
                            </datalist>
                            <input
                                name="service_interval"
                                class="w-full mt-1"
                                value="{{ $hire->service_interval }}"
                                type="range"
                                min="6"
                                max="8"
                                step="1"
                                list="interval-list"
                                tooltip bind:value
                                disabled
                            />
                            <div class="grid w-full grid-cols-3">
                                <label>6</label>
                                <label class="text-center">7</label>
                                <label class="text-right">8</label>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="discharge_pump" class="block text-sm font-medium text-gray-700">Discharge Pump Fitted</label>
                            <div class="mt-2">
                                <div>
                                    <label class="inline-flex items-center">
                                    <input
                                        name="discharge_pump"
                                        id="discharge_pump_f"
                                        type="radio"
                                        class="form-radio"
                                        checked
                                        value="0"
                                        disabled
                                        {{ $hire->discharge_pump == 0 ? 'checked' : '' }}
                                        >
                                    <span class="ml-2">No</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                    <input
                                        name="discharge_pump"
                                        id="discharge_pump_t"
                                        type="radio"
                                        class="form-radio"
                                        value="1"
                                        {{ $hire->discharge_pump == 1 ? 'checked' : '' }}
                                        disabled>
                                    <span class="ml-2">Yes</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>


<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Hire Details</h3>
            <p class="mt-1 text-sm text-gray-600">
                Charging details for this hire.
            </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6 pb-6">
                        <div class="col-span-6 sm:col-span-3">
                            <div class="">
                                <label for="contract_num" class="block text-sm font-medium text-gray-700">Hire Contract Number</label>
                                <x-inputs.text
                                    name="contract_num"
                                    id="contract_num"
                                    value="{{ $hire->contract_num }}"
                                    maxlength="255"
                                    class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                    disabled
                                ></x-inputs.text>
                            </div>
                            <div class="mt-6">
                                <label for="start_date" class="block text-sm font-medium text-gray-700">Hire Start Date</label>
                                <input
                                    name="start_date"
                                    type="date"
                                    max="255"
                                    class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                    value="{{ optional($hire->start_date)->format('Y-m-d') }}"
                                    disabled
                                ></input>
                            </div>
                            <div class="mt-6">
                                <label for="end_date" class="block text-sm font-medium text-gray-700">Hire End Date</label>
                                <input
                                    name="end_date"
                                    type="text"
                                    value="{{ optional($hire->end_date)->format('Y-m-d') }}"
                                    max="255"
                                    disabled
                                    class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                ></input>
                            </div>
                            <div class="mt-6">
                                <label for="deposit" class="block text-sm font-medium text-gray-700">Deposit Month</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        name="deposit"
                                        id="deposit"
                                        type="text"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200"
                                        placeholder="0000.00"
                                        value="{{ $hire->deposit }}"
                                        aria-describedby="price-currency"
                                        disabled
                                    ></x-inputs.text>
                                    </div>
                            </div>

                            <div class="mt-6">
                                <span class="block text-sm font-medium text-gray-700">Hire Type</span>
                                <div class="mt-1">
                                    <x-inputs.select
                                        name="hire_type"
                                        id="hire_type"
                                        disabled
                                        class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200">
                                        <option value="Weekly" {{ $hire->hire_type == "Weekly" ? 'selected' : ''}}>Weekly</option>
                                        <option value="Monthly" {{ $hire->hire_type == "Monthly" ? 'selected' : ''}}>Monthly</option>
                                        <option value="3 Months +" {{ $hire->hire_type == "3 Months +" ? 'selected' : ''}}>3 Months +</option>
                                        <option value="6 Months +" {{ $hire->hire_type == "6 Months +" ? 'selected' : ''}}>6 Months +</option>
                                        <option value="12 Months +" {{ $hire->hire_type == "12 Months +" ? 'selected' : ''}}>12 Months +</option>
                                    </x-inputs.select>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="hire_rate" class="block text-sm font-medium text-gray-700">Hire Rate</label>
                                <div class="relative mt-2 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        name="hire_rate"
                                        value="{{ $hire->hire_rate }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                        disabled
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="monthly_rate" class="block text-sm font-medium text-gray-700">Monthly Rate</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        name="monthly_rate"
                                        value="{{ $hire->monthly_rate }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                        disabled
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8">
                                <label for="charge" class="block text-sm font-medium text-gray-700">Delivery</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        name="charge"
                                        value="{{ $hire->charge }}"
                                        maxlength="255"
                                        disabled
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="block text-sm font-medium text-gray-700">Maintenance</span>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio"
                                                class="form-radio"
                                                name="maintenance_included"
                                                value="0"
                                                disabled
                                                {{ $hire->maintenance_included == "0" ? 'checked' : '' }}
                                                checked>
                                            <span class="ml-2">None</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio"
                                                class="form-radio"
                                                name="maintenance_included"
                                                disabled
                                                {{ $hire->maintenance_included == "1" ? 'checked' : '' }}
                                                value="1"
                                            >
                                            <span class="ml-2">Maintenance Included</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <div class="">
                                <label for="collection_charge" class="block text-sm font-medium text-gray-700">Collection</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        name="collection_charge"
                                        value="{{ $hire->collection_charge }}"
                                        maxlength="255"
                                        disabled
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="water_fill_charge" class="block text-sm font-medium text-gray-700">Water Fill</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        disabled
                                        name="water_fill_charge"
                                        value="{{ $hire->water_fill_charge }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="commissioning_charge" class="block text-sm font-medium text-gray-700">Commission Charge</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        disabled
                                        name="commissioning_charge"
                                        value="{{ $hire->commissioning_charge }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="cleaning_outside_charge" class="block text-sm font-medium text-gray-700">Cleaning Outside Charge</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        disabled
                                        name="cleaning_outside_charge"
                                        value="{{ $hire->cleaning_outside_charge }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="cleanout_charge" class="block text-sm font-medium text-gray-700">Clean Out Charge</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        disabled
                                        name="cleanout_charge"
                                        value="{{ $hire->cleanout_charge }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-7">
                                <label for="other_charge" class="block text-sm font-medium text-gray-700">Other</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        disabled
                                        name="other_charge"
                                        value="{{ $hire->other_charge }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="charge_notes" class="block text-sm font-medium text-gray-700">Charge Notes</label>
                                <textarea
                                    disabled
                                    id="charge_notes"
                                    name="charge_notes"
                                    rows="3"
                                    class="block w-full bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                                    placeholder="charge notes here">{{ $hire->charge_notes }}</textarea>
                            </div>
                            <div class="mt-3">
                                <label for="tyre_wear_charge" class="block text-sm font-medium text-gray-700">Tyre Wear SOR</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <x-inputs.text
                                        disabled
                                        name="tyre_wear_charge"
                                        value="{{ $hire->tyre_wear_charge }}"
                                        maxlength="255"
                                        placeholder="Card Expiration Date"
                                        class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                    ></x-inputs.text>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        Per mm + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <span class="block text-sm font-medium text-gray-700">Tyres</span>
                                <div>
                                    <div class="mt-2">
                                        <label class="inline-flex items-center">
                                            <input
                                                type="radio"
                                                class="form-radio"
                                                name="tyres_included"
                                                disabled
                                                {{ $hire->tyres_included == "0" ? 'checked' : '' }}
                                                value="0"
                                                checked>
                                            <span class="ml-2">None</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input
                                                type="radio"
                                                class="form-radio"
                                                name="tyres_included"
                                                {{ $hire->tyres_included == "1" ? 'checked' : '' }}
                                                value="1"
                                            >
                                            <span class="ml-2">Tyres Included</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Delivery Details</h3>
        <p class="mt-1 text-sm text-gray-600">
            Only disabled if vehicle is to be delivered to customer by TCL.
        </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6 pb-6">
                    <div class="col-span-6 sm:col-span-3">
                        <div class="">
                            <label for="delivery_contact_name" class="block text-sm font-medium text-gray-700">Delivery Contact Name</label>
                            <x-inputs.text
                                disabled
                                name="delivery_contact_name"
                                id="delivery_contact_name"
                                value="{{ $hire->delivery_contact_name }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_address" class="block text-sm font-medium text-gray-700">Delivery Address</label>
                            <x-inputs.text
                                disabled
                                name="delivery_address"
                                id="delivery_address"
                                value="{{ $hire->delivery_address }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_postcode" class="block text-sm font-medium text-gray-700">Delivery Postcode</label>
                            <x-inputs.text
                                disabled
                                name="delivery_postcode"
                                id="delivery_postcode"
                                value="{{ $hire->delivery_postcode }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            ></x-inputs.text>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <div class="">
                            <label for="delivery_phone" class="block text-sm font-medium text-gray-700">Delivery Phone</label>
                            <x-inputs.text
                                disabled
                                name="delivery_phone"
                                id="delivery_phone"
                                value="{{ $hire->delivery_phone }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_email" class="block text-sm font-medium text-gray-700">Delivery Email</label>
                            <x-inputs.text
                                disabled
                                name="delivery_email"
                                id="delivery_email"
                                value="{{ $hire->delivery_email }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_fax" class="block text-sm font-medium text-gray-700">Delivery Fax</label>
                            <x-inputs.text
                                disabled
                                name="delivery_fax"
                                id="delivery_fax"
                                value="{{ $hire->delivery_fax }}"
                                maxlength="255"
                                class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            ></x-inputs.text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Insurance Information</h3>
        <p class="mt-1 text-sm text-gray-600">
            Customers insurance policy details..
        </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">

            <div class="grid grid-cols-6 gap-6 pb-6">

                <div class="col-span-6 sm:col-span-3">
                    <div class="">
                        <label for="insurer" class="block text-sm font-medium text-gray-700">Insurance Company</label>
                        <x-inputs.text
                            name="insurer"
                            value="{{ $hire->insurer }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="policy_expiry" class="block text-sm font-medium text-gray-700">Insurance Expiry Date</label>
                        <input
                            name="policy_expiry"
                            type="date"
                            value="{{ optional($hire->policy_expiry)->format('Y-m-d') }}"
                            max="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="broker" class="block text-sm font-medium text-gray-700">Broker</label>
                        <x-inputs.text
                            name="broker"
                            value="{{ $hire->broker }}"
                            maxlength="255"
                            disabled
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="policy_value" class="block text-sm font-medium text-gray-700">Replacement Value</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                £
                                </span>
                            </div>
                            <x-inputs.text
                                name="policy_value"
                                value="{{ $hire->policy_value }}"
                                maxlength="255"
                                placeholder="Card Expiration Date"
                                class="block w-full py-2 pr-12 bg-gray-200 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm md:bg-gray-200" placeholder="0000.00" aria-describedby="price-currency"
                                disabled
                            ></x-inputs.text>
                        </div>
                    </div>
                    <div>
                        <input type="text" name="hirer_ip" id="hirer_ip" value="{{ request()->ip() }}" hidden>
                        <input type="text" name="hirer_geo" id="hirer_geo" value="{{ request()->userAgent() }}" hidden>
                    </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <div class="">
                        <label for="policy_num" class="block text-sm font-medium text-gray-700">Policy Number</label>
                        <x-inputs.text
                            name="policy_num"
                            value="{{ $hire->policy_num }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="policy_type" class="block text-sm font-medium text-gray-700">Policy Type</label>
                        <x-inputs.text
                            name="policy_type"
                            value="{{ $hire->policy_type }}"
                            maxlength="255"
                            class="block w-full py-2 mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            disabled
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="policy_notes" class="block text-sm font-medium text-gray-700">Policy Notes</label>
                        <textarea
                            disabled
                            id="policy_notes"
                            name="policy_notes"
                            rows="5"
                            class="block w-full mt-1 bg-gray-200 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm md:bg-gray-200"
                            placeholder="policy notes here">{{ $hire->policy_notes }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>



@include('components.section.signature-form', [
    'editing' => true,
    'data' => $hire,
    'signing' => true,
    'terms_condition' => true
])

<span class="text-sm font-medium font-bold text-gray-600 cursor-pointer up">Scroll up &uarr;</span>

<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>
<!-- Modal Dialog -->

<div class="fixed inset-0 z-50 flex items-center justify-center w-full overflow-hidden terms_conditions-modal animated faster" style="background: rgba(0,0,0,.7);">
    <div class="z-50 w-full shadow-lg modal-container rounded-xl">
        <div class="modal-content">
            <div class="relative sm:max-w-6xl sm:mx-auto">
                <div class="absolute inset-0 transform -skew-y-6 shadow-lg bg-gradient-to-r from-cyan-400 to-light-blue-500 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                    <div class="relative px-4 py-10 mx-auto bg-white shadow-lg sm:rounded-3xl sm:p-20">
                        <div class="py-4 space-y-4 overflow-scroll text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                            <p class="text-2xl font-bold text-gray-500">Terms &amp; Conditions</p>
                            <p>This is the text of the terms and conditions.</p>
                            <textarea class="block w-full mt-1 form-textarea" rows="10">
1	DEFINITIONS AND INTERPRETATION
The following definitions and rules of interpretation apply in this Agreement:-
1.1	Definitions
“Agreement” means these Conditions together with the Hire Form;
“Applicable Laws” means any and all laws, regulations, codes and guidelines of any governmental or other competent authority which are applicable or relate to the Equipment or its use, operation or storage (including any BSI British Standards or ISO International Standards which are applicable or relate to the Equipment or its use, operation or storage);
“Assumptions” has the meaning given to it in Condition 3.7.1;
“Business Day” means a day, other than a Saturday or a Sunday, on which clearing banks are open for commercial business in London;
“Change of Control” means if a person who has Control of any entity ceases to do so or if another person acquires Control of it;
“Collection Date” means the date for collection of the Equipment, being the Commencement Date unless otherwise agreed between the Parties;
“Commencement Date” means the date identified as such on the Hire Form;
“Company” means TCL Tanker Rental Limited, a company registered in England and Wales with registered number 02796542 and having its registered office at c/o Mitchell Diesel Limited, Fulwood Road, South Fulwood Industrial Estate, Sutton in Ashfield, Nottinghamshire NG17 2JZ;
“Company Address” means the Company’s premises at Lotherton Way, Garforth, Leeds, LS25 2JY;
“Company Affiliate” means any person that directly, or indirectly through one or more intermediaries, Controls or is under the Control of, or is under common Control with, as the case may be, the Company;
“Conditions” means these conditions of hire together with the attached Schedule and any reference to a “Condition” is a reference to the relevant condition of these Conditions;
“Confidential Information” means all information designated as such by either Party together with all other information which relates to the business, affairs, products, developments, trade secrets, know-how, personnel, customers and suppliers of either Party or information which may reasonably be regarded as confidential information of that Party including details of the Agreement and its terms;
“Control” means the possession, direct or indirect, of the power to direct or cause the direction of the management or policies of a person, whether through ownership of securities, by contract or otherwise and includes where a person owns 50% or more of the voting rights (whether by way of securities, partnership interest, under a shareholders agreement or otherwise) held in another person;
“Daily Operational Checks” means the daily checks and procedures to be performed by the Hirer in respect of the Equipment, as set out in the Schedule;
“Deposit” has the meaning given to it in Condition 3.3;
“Destroyed Equipment” has the meaning given to it in Condition 8.10;
“Equipment” means the tankers, vehicles, trailers and/or other plant and/or other equipment to be supplied for hire to the Hirer by the Company, as set out on the Hire Form, together with any replacements, component parts, extensions, spares, additions or accessories supplied to the Hirer by the Company in relation to any of the foregoing;
“Equipment Replacement Value” means the replacement value of the Equipment, as set out on the Hire Form;
“Equipment Specification” means the description(s) of the Equipment set out on the Hire Form under the headings, ‘Type,’ and ‘Description’;
“Good Industry Practice” means the exercise of the standard of skill, care, knowledge and foresight which would reasonably and ordinarily be expected from an experienced person engaged in the business of the Hirer;
“Hire Charges” means the charges payable in respect of the hire of the Equipment as set out on the Hire Form, any applicable additional charges as set out on the Hire Form, and such other charges which the Parties agree shall be payable by the Hirer in respect of its hire of the Equipment;
“Hire Form” means the form setting out details of the hire of the Equipment to which these Conditions are attached;
“Hirer” means the person hiring the Equipment as identified on the Hire Form;
“Hirer Affiliate” means any person that directly, or indirectly through one or more intermediaries, Controls or is under the Control of, or is under common Control with, as the case may be, the Hirer;
“Hirer’s Premises” means any premises at which the Hirer stores or makes use of the Equipment and any other premises belonging to or occupied by the Hirer from time to time;
“Insolvency Event” means, in respect of a Party, where: (i) that Party ceases or threatens to cease to carry on business; (ii) that Party becomes unable to pay its debts within the meaning of Section 123 of the Insolvency Act 1986; (iii) an order is made or a resolution is passed for the winding up of that Party; (iv) an order is made for the appointment of an administrator of that Party or an administrator is appointed or notice of intention to appoint such an administrator is given by that Party or its directors or any other person; (v) a receiver or manager or administrative receiver is appointed in respect of all or any of that Party’s assets or undertaking; (vi) circumstances arise which entitle a court to make a winding up order in respect of that Party; (vii) that Party proposes a voluntary arrangement or any composition, compromise or arrangement with its creditors; or (viii) any circumstances occur in respect of that Party or that Party takes any steps which are analogous to any of the foregoing in any jurisdiction;
    “Minimum Hire Period” means the minimum period of time for which the Equipment is to be hired by the Customer and for which the Hire Charges shall be payable, as set out on the Hire Form;
“Off-hire Inspection Report” means the return inspection note to which these Conditions are attached to be signed by or on behalf of the Company and the Hirer to record the condition of the Equipment on its return by the Hirer to the Company;
“On-hire Inspection Report” means the delivery inspection note to which these Conditions are attached to be signed by or on behalf of the Company and the Hirer to record the condition of the Equipment on delivery to the Hirer;
“Party” means the Hirer or the Company as the case may be and “Parties” shall be construed accordingly;
“Period of Hire” means the period of time as set out in Condition 12.1;
“Registered Cleaning Station” means a cleaning station which is a member of the National Road Tanker Cleaners Association (NRTCA);
“Routine Servicing” means the maintenance and servicing work in respect of the Equipment to be undertaken by or on behalf of the Hirer and described as such on the Hire Form and other routine maintenance work in respect of the Equipment and arising from the use of the Equipment to be carried out in accordance with the Agreement and Good Industry Practice;
“Schedule” means the schedule attached to and forming part of these Conditions; and
“Working Hours” means 8.30am to 4pm on each Business Day.
1.2	words in the singular include the plural and vice versa;
1.3	words referring to the whole are treated as including any reference to any part of the whole;
1.4	any words following the terms including, include, in particular, for example or any similar expression shall be construed as illustrative and shall not limit the sense of the words, description, definition, phrase or term preceding those terms;
1.5	any reference to any statute or statutory provision (including any subordinate legislation) is a reference to it as it is in force from time to time and includes any statute, statutory provision or subordinate legislation  which it amends or re-enacts and any subordinate legislation made from time to time under that statute or statutory provision;
1.6	any reference to a “person” includes any natural person, firm, company, corporation, body corporate, government, state or agency of a state, trust or foundation, or any unincorporated body, association or partnership (whether or not having separate legal personality) of two or more of the foregoing;
1.7	any reference to an English legal term for any action, remedy, method of judicial proceeding, legal document, legal status, court, official or any legal concept, state of affairs or thing is deemed in respect of any jurisdiction other than England to include that which most approximates in that jurisdiction to the English legal term; and
1.8	the headings in these Conditions are inserted for convenience only and do not affect the interpretation or construction of these Conditions.
2	SUPPLY OF EQUIPMENT
2.1	The Company agrees to provide the Equipment for hire and the Hirer agrees to take the Equipment on hire in accordance with the terms of the Agreement.
2.2	No description, specification or illustration contained in any product pamphlet or other sales or marketing literature prepared by or on behalf of the Company or any other party shall form part of the Agreement.
2.3	The Hirer confirms that, in relation to the Agreement:
2.3.1	it is not a “consumer” as defined in the Unfair Contract Terms Act 1977; and
2.3.2	it is not an “individual” as defined in the Consumer Credit Act 1974 (as amended) or if it is an “individual” as defined in the Consumer Credit Act 1974 (as amended), it:
(a)	is entering into the Agreement wholly or predominantly for the purposes of a business carried on by it or intended to be carried on by it;
(b)	understands that unless the Hire Form signed by the Hirer contained the heading “Hire Agreement regulated by the Consumer Credit Act 1974”, it will not have the benefit of the protection and remedies that would be available to it under the Consumer Credit Act 1974 (as amended) if the Agreement were a regulated agreement under that Act; and
(c)	is aware that, if there is any doubt as to the consequences of the Agreement not being regulated by the Consumer Credit Act 1974 (as amended), it should seek independent legal advice.
3	PAYMENT OF HIRE CHARGES
3.1	Unless otherwise stated, the Hire Charges and all other charges quoted in connection with the Agreement are strictly exclusive of Value Added Tax, which where applicable shall be payable in addition by the Hirer at the appropriate rate prevailing at the time payment is due.
3.2	The Hirer shall pay the Hire Charges in the amounts and on the dates specified on the Hire Form (unless otherwise agreed in writing by the Parties). The relevant date for payment specified on the Hire Form shall be the due date for such payment, and such payment shall be due without previous demand or invoice. The Hirer shall ensure payment is received by the Company in full and cleared funds before or on the due date for payment. Unless otherwise agreed by the Company in writing, payment shall be made by Direct Debit (subject to any standard terms applicable to the scheme) to the bank account nominated in writing by the Company. Time for payment of the Hire Charges is of the essence of the Agreement.
3.3	The Hirer shall, on the Commencement Date, pay a deposit amount equal to one month’s worth of Hire Charges to the Company (the “Deposit”). The Deposit is a deposit against default by the Hirer of payment of any Hire Charges or any loss of or damage caused to the Equipment. If the Hirer fails to make any payments of the Hire Charges in accordance with this Agreement, or causes any loss or damage to the Equipment (in whole or in part), the Company shall be entitled to apply the Deposit against such default, loss or damage. The Hirer shall pay to the Company any sums deducted from the Deposit within ten (10) Business Days of a demand for the same. The Deposit (or balance thereof) shall be refundable within five (5) Business Days of the completion of the Off-hire Inspection Report.
3.4	If the Hirer fails to make any payment due under this Agreement by the due date for payment, then, without limiting the Company’s remedies under this Agreement, the Hirer shall pay interest on the overdue amount at the rate of 4% per annum above the Bank of England’s base rate from time to time . This interest shall accrue on a daily basis from the due date until actual payment of the overdue amount, whether before or after judgment. The Hirer shall pay the interest together with the overdue amount. In relation to payments disputed in good faith, interest under this Condition 3.4 is payable only after the dispute is resolved, on sums found or agreed to be due, from the due date until payment.
3.5	All sums due to be paid by the Hirer under the Agreement are to be paid in full without any deduction or withholding other than as required by law. The Hirer is not entitled to assert any credit, set-off or counterclaim against the Company in order to justify withholding payment of any such sums in whole or in part.
3.6	Any payments due to be made by the Hirer to the Company may be held by the Company as payment in or towards satisfaction of any sums due and owing to the Company under the Agreement notwithstanding that the Hirer may have intended such payments to be held by the Company in some other way. The Company may also hold any payment made to it by the Hirer as payment in or towards satisfaction of any sums due by the Hirer to the Company other than under the Agreement.
3.7	The Hirer acknowledges and agrees that:
3.7.1	the Hire Charges have been calculated on the assumption that the rates and bases of corporation tax, Value Added Tax and permitted capital allowances in force at the date of the Agreement will remain unchanged for the Period of Hire and that the Company will be entitled to obtain and retain capital allowances in respect of its capital expenditure on the Equipment at such rates  on a reducing balance basis (the “Assumptions”); and
3.7.2	if any of the Assumptions prove to be incorrect, the Hirer shall pay to the Company, if requested by the Company to do so, by way of increased Hire Charges or an additional payment on demand if the Agreement has terminated (together with Value Added Tax if appropriate), such sums as are required to place the Company in the financial position in which it would have been had the Assumptions been correct and fulfilled and Hire Charges paid in full by the Hirer to the Company. Such sums are to be determined by the Company’s auditors or appointed accountant and their written confirmation of the applicable sums shall be final, conclusive and binding on the Hirer.  and will remain payable notwithstanding termination or expiry of the Agreement for any reason.
3.8	The Hirer acknowledges and agrees that where the Period of Hire exceeds twelve (12) months, the Company shall be entitled (but not obliged) to increase the Hire Charges at any time (provided that it shall only do so once during each consecutive period of twelve (12) months) at a rate not greater than any increase in the United Kingdom Retail Prices Index for the immediately preceding twelve (12) month period.
4	DELIVERY
4.1	Unless otherwise agreed by the Parties in writing, delivery of Equipment will take place ex works at the Company Address (the “Delivery Location”). The Hirer shall collect the Equipment from the Delivery Location on the Collection Date. Delivery will be completed once the Company has made the Equipment available at the Delivery Location and notified the Hirer of this.
4.2	Delivery of the Equipment will not take place and the Equipment will not otherwise be made available to the Hirer unless and until any and all Hire Charges (or any other sums) which are payable on signature of the Agreement or prior to delivery of the Equipment have been paid in full. Any date or time given by the Company for delivery of the Equipment will be an estimate only. Time for delivery will not be of the essence of the Agreement.
4.3	Delays in delivery of the Equipment shall not entitle the Hirer to refuse delivery, claim damages, or terminate this Agreement unless otherwise permitted under these Conditions. The Company shall have no liability for any failure or delay in delivering the Equipment to the extent that any failure or delay is caused by the Hirer’s failure to comply with its obligations under this Agreement.
4.4	The Hirer will, at its own expense and in good time before the estimated date and time for delivery of the Equipment, suitably prepare the Hirer’s Premises (and any relevant access routes) for the safe storage and use and operation of the Equipment and obtain any necessary insurances, documentation, licences, authorisations or approvals necessary to take possession of and store, use and operate the Equipment.
4.5	If the Hirer fails to take delivery of the Equipment from the Delivery Location in accordance with Condition 4.1, then except where the failure or delay is caused by the Company’s failure to comply with its obligations under this Agreement:
4.5.1	delivery shall be deemed to have been completed at 9:00 am on the day following the Collection Date;
4.5.2	the Company may store the Equipment until such time as the Equipment is collected by the Hirer and the Hirer will be liable for all related costs and expenses (including costs related to the storage and insurance of the Equipment); and
4.5.3	for the avoidance of doubt, risk of loss of or damage to the Equipment will be borne by the Hirer during any such storage of the Equipment by the Company.
4.6	Upon delivery, the Equipment will be jointly inspected by authorised representatives of the Company and the Hirer (unless the Hirer chooses not to be represented when the inspection shall proceed in its absence and the Hirer shall be bound by its outcome) and the On-hire Inspection Report will be prepared. The general condition of the Equipment (including any failure of the Equipment to comply with any description or specification of the Equipment agreed by the Parties, any other damage to or deficiency of the Equipment, any lack of cleanliness of the Equipment and the tyre tread depths of the tyres forming part of the Equipment) shall be noted on the On-hire Inspection Report.
4.7	The Hirer acknowledges and agrees that following delivery of the Equipment, it shall: (i) confirm that it has been given sufficient opportunity to inspect the Equipment and that (with the exception of any items noted on the On-hire Inspection Report) the Equipment is in good condition and corresponds with the Equipment Specification and any other description(s) or specification(s) agreed by the Parties, is of satisfactory quality and is fit for the purpose for which it is intended at the time of delivery to the Hirer; and (ii) accept the Equipment by signing the On-hire Inspection Report. Any person who attends the inspection on behalf of the Hirer shall be conclusively deemed to have authority to sign the On-hire Inspection Report on behalf of the Hirer.
5	TITLE AND RISK
5.1	Risk in the Equipment shall pass to the Hirer on completion of delivery (pursuant to Condition 4.1) and shall remain solely with the Hirer until possession of the Equipment is returned to the Company in accordance with the terms of the Agreement.
5.2	The Equipment shall at all times remain the property of the Company, and the Hirer shall have no right, title, or interest in or to the Equipment (save the right to possession and use of the Equipment subject to the terms and conditions of this Agreement).
5.3	The Hirer shall give immediate written notice to the Company in the event of any loss, accident or damage to the Equipment arising out of or in connection with the Hirer’s possession or use of the Equipment.
6	HIRER’S OBLIGATIONS
6.1	The Hirer shall during the term of this Agreement:
6.1.1	ensure that the Equipment is kept and operated in a suitable environment, used only for the purposes for which it is designed (including in respect of any products which may be contained in the Equipment), and operated in a skilled and proper manner by trained competent staff in accordance with any operating instructions (including not to load any goods into the vessel or tank barrel portion of any Equipment at a temperature exceeding the maximum temperature detailed on the Equipment’s identification plate) provided by the Company or the manufacturer of the Equipment;
6.1.2	take such steps (including compliance with all safety and usage instructions provided by the Company) as may be necessary to ensure, so far as is reasonably practicable, that the Equipment is at all times safe and without risk to health when it is being set, used, cleaned or maintained by a person at work;
6.1.3	maintain at its own expense the Equipment in good and substantial repair in order to keep it in as good an operating and roadworthy condition as it was on the Commencement Date (fair wear and tear only excepted) including replacement of worn, damaged and lost parts, and make good any damage to the Equipment;
6.1.4	obtain, effect and at all times keep effective all permissions, licences, permits and consents which may from time to time be required in connection with the use, operation or storage of the Equipment (including, where applicable, a current Department of Transport MOT Test Certificate (subject to Condition 7.2) and any permissions, licences, permits and consents required for use in countries other than the United Kingdom);
6.1.5	unless otherwise agreed by the Parties, carry out all Routine Servicing with all due care and in accordance with such instructions and at the intervals recommended by the Company and at the Hirer’s own expense replace all worn or damaged parts (including tyres) with new parts of the make, standard and quality of the originals, provided that all maintenance and servicing work to be carried out on the Equipment or the replacement of any parts will require the prior approval of the Company and the Company reserves the right to replace any substandard part fitted to the Equipment by the Hirer at the cost of the Hirer;
6.1.6	subject to Condition 6.1.5 above, make no alteration to the Equipment and shall not remove any existing component(s) from the Equipment without the prior written consent of the Company unless carried out to comply with any mandatory modifications required by law or any regulatory authority or unless the component(s) is/are replaced immediately (or if removed in the ordinary course of repair and maintenance as soon as practicable) by the same component or by one of a similar make and model or an improved/advanced version of it. Title and property in all substitutions, replacements, renewals made in or to the Equipment shall vest in the Company immediately upon installation;
6.1.7	keep the Company fully informed of all material matters relating to the Equipment;
6.1.8	permit the Company or its duly authorised representative to inspect (including where appropriate testing, servicing, repair and maintenance) the Equipment at all reasonable times and for such purpose to enter upon any premises at which the Equipment may be located, and shall grant reasonable access and facilities for such inspection;
6.1.9	maintain operating and maintenance (including testing, servicing and repairs) records of the Equipment and make copies of such records readily available to the Company, together with such additional information as the Company may reasonably require;
6.1.10	not, without the prior written consent of the Company, part with control of (including for the purposes of repair or maintenance), sell or offer for sale, underlet or lend the Equipment or allow the creation of any mortgage, charge, lien or other security interest in respect of it;
6.1.11	not without the prior written consent of the Company, attach the Equipment to any land or building so as to cause the Equipment to become a permanent or immovable fixture on such land or building. If the Equipment does become affixed to any land or building then the Equipment must be capable of being removed without material injury to such land or building and the Hirer shall repair and make good any damage caused by the affixation or removal of the Equipment from any land or building and indemnify the Company against all losses, costs or expenses incurred as a result of such affixation or removal;
6.1.12	not do or permit to be done any act or thing which will or may jeopardise the right, title and/or interest of the Company in the Equipment and, where the Equipment has become affixed to any land or building, the Hirer must take all necessary steps to ensure that the Company may enter such land or building and recover the Equipment both during the term of this Agreement and for a reasonable period thereafter, including by procuring from any person having an interest in such land or building, a waiver in writing and in favour of the Company of any rights such person may have or acquire in the Equipment and a right for the Company to enter onto such land or building to remove the Equipment;
6.1.13	not suffer or permit the Equipment to be confiscated, seized or taken out of its possession or control under any distress, execution or other legal process, but if the Equipment is so confiscated, seized or taken, the Hirer shall notify the Company and the Hirer shall at its sole expense use its best endeavours to procure an immediate release of the Equipment and shall indemnify the Company on demand against all losses, costs, charges, damages and expenses incurred as a result of such confiscation;
6.1.14	not use the Equipment for any unlawful purpose;
6.1.15	not destroy, deface or obscure any identifying mark on or relating to the Equipment nor apply any livery or distinguishing markings to the Equipment without the prior written consent of the Company (except to the extent required by Applicable Laws or otherwise in compliance with these Conditions);
6.1.16	ensure that at all times the Equipment remains readily identifiable as being the Company's property;
6.1.17	affix any form of marking to the Equipment that the Company may require from time to time (including markings which identify the Equipment as the property of the Company and that it is on hire to the Hirer);
6.1.18	obtain and maintain adequate insurance cover in respect of any goods that the Hirer intends to carry or store in the Equipment and act in accordance with Good Industry Practice and the terms of any such insurance policy in respect of the carriage or storage of such goods (including carrying out regular checks that such goods are secure and free from risk of loss or damage during such carriage or storage);
6.1.19	perform the Daily Operational Checks in accordance with the Schedule throughout the Period of Hire;
6.1.20	not use or allow the Equipment to be used outside the European Union without the prior written consent of the Company;
6.1.21	on request by the Company, deliver to the Company a written election pursuant to Section 177 of the Capital Allowances Act 2001 in a form and substance satisfactory to the Company, or such other election, confirmation or waiver as may be required by the Company to ensure that for tax purposes the Equipment is treated as belonging to the Company;
6.1.22	deliver up the Equipment at the end of the Period of Hire and in any event on termination of this Agreement at such address as the Company requires, or if necessary allow the Company or its representatives access to any premises where the Equipment is located for the purpose of removing the Equipment; and
6.1.23	not do or permit to be done anything which could invalidate the insurances referred to in Condition 8.
6.2	The Hirer acknowledges that the Company shall not be responsible for any loss of or damage to the Equipment arising out of or in connection with any negligence, misuse, mishandling of the Equipment or otherwise caused by the Hirer or its officers, employees, agents and contractors, and the Hirer undertakes to indemnify the Company on demand against the same, and against all losses, liabilities, claims, damages, costs or expenses of whatever nature otherwise arising out of or in connection with any failure by the Hirer to comply with the terms of this Agreement.
7	OBLIGATIONS OF THE COMPANY
7.1	The Company shall ensure that at the Collection Date the Equipment is in good and substantial repair and roadworthy condition (fair wear and tear accepted) and in working order.
7.2	If the Minimum Hire Period is less than three (3) months, the Company shall where applicable ensure that the Equipment has a current Department of Transport MOT Test Certificate during the Period of Hire.
8	INSURANCE, LOSS AND DAMAGE
8.1	Without prejudice to the liability of the Hirer to the Company, the Hirer shall, throughout the Period of Hire or (if longer) for so long as the Equipment remains in the possession or under the control of the Hirer, at its own expense, obtain and maintain the following insurances with a reputable insurer:
8.1.1	insurance of the Equipment to an amount equal to the full Equipment Replacement Value comprehensively against all usual risks of loss, damage or destruction by fire, theft or accident, and such other risks as the Company may from time to time nominate in writing;
8.1.2	insurance for such amounts as a prudent owner or operator of the Equipment would insure for, or such amount as the Company may from time to time reasonably require, to cover any third party or public liability risks of whatever nature and however arising in connection with the Equipment; and
8.1.3	insurance against such other or further risks relating to the Equipment as may be required by law, together with such other insurance as the Company may from time to time consider reasonably necessary and advise to the Hirer.
8.2	Where the Equipment includes a trailer or semi-trailer, the Hirer shall ensure that such Equipment remains fully insured in accordance with Condition 8.1 when such Equipment is detached from its drawing vehicle.
8.3	All insurance policies procured by the Hirer shall be endorsed to provide the Lessor with at least thirty days’ prior written notice of cancellation or material change (including any reduction in coverage or policy amount) and shall upon the Company's request name the Company on the policies as a loss payee in relation to any claim relating to the Equipment.  The Hirer shall be responsible for paying any deductibles due on any claims under such insurance policies.
8.4	The Hirer shall give immediate written notice to the Company in the event of any loss, accident or damage to the Equipment arising out of or in connection with the Hirer's possession or use of the Equipment.
8.5	The Hirer shall, on demand, supply copies of the relevant insurance policies or other insurance confirmation acceptable to the Company and proof of premium payment to the Company to confirm the insurance arrangements.
8.6
8.7	If the Hirer fails to effect or maintain any of the insurances required under this Agreement, the Company shall be entitled to effect and maintain the same, pay such premiums as may be necessary for that purpose and recover the same as a debt due from the Hirer.
8.8	The Hirer will be wholly responsible for payment of any insurance excesses. If the Hirer fails to pay any such insurance excesses then the Company shall be entitled to pay the excess or excesses and recover the same as a debt due from the Hirer.
8.9	The Hirer will not use the Equipment or allow the Equipment to be used for any purpose not permitted by the terms and conditions of any policy of insurance maintained in relation to the Equipment nor do or allow to be done any act or omission which may cause such insurance to be invalidated.
8.10	In the event of any breakdown or loss of or damage to all or any part of the Equipment, however caused, the Hirer will:
8.10.1	give immediate notice to the Company by telephone and confirm such notice in writing within three (3) days after such notification is given by telephone; and
8.10.2	make any appropriate claim or claims under any insurance policy maintained in relation to the Equipment in such manner as the Company will require and will not, in any manner, settle or compromise any such claim without the prior written consent of the Company.
8.11	Subject to Condition 8.10, the Hirer will be solely responsible for and will promptly reinstate or repair any Equipment which has been damaged or become defective and the Hirer will continue to pay the Hire Charges in respect of such Equipment during the period of such reinstatement or repair. All insurance monies received in respect of any such damage or defects shall be applied firstly, in or towards payment to the Company of any amounts due and outstanding from the Hirer to the Company under the Agreement and secondly, in or towards reimbursing the Hirer for any Hire Charges paid during the period of reinstatement or repair.
8.12	If, during the Period of Hire, any Equipment is lost, destroyed, stolen, confiscated or damaged beyond repair (the “Destroyed Equipment”), in accordance with Condition 12.6 the hire of such Destroyed Equipment under the Agreement will cease and the Equipment Replacement Value will become payable to the Company by the Hirer. In that event, the Company may at its option apply any insurance proceeds received by it under any insurance policy maintained pursuant to this Condition 8:
8.12.1	towards the procurement of replacement equipment of equivalent value, such replacement equipment to be deemed to be Equipment for all purposes under the Agreement and the Hirer will be liable to pay the Hire Charges in accordance with the Agreement as if such loss had not occurred;
8.12.2	towards payment to the Company of:
(a)	all payments of the Hire Charges and all other monies then due or in arrears under the Agreement in respect of or attributable to such Destroyed Equipment together with interest (to be calculated in accordance with Condition 3.4); and
(b)	all other sums and amounts due under the Agreement in respect of such Destroyed Equipment.
8.13	The Hirer will remain liable to pay to the Company any and all sums that remain due and outstanding to the Company under the Agreement after the Company has received any insurance monies under any insurance policy maintained pursuant to this Condition 8.
8.14	Nothing in this Condition 8 shall oblige the Company to take any steps to effect recovery from either its own insurers or the Hirer’s insurers in respect of any breakdown or loss of or damage to the Equipment.
9	WARRANTIES AND LIABILITY
9.1	The Hirer warrants and represents that it has and will have full power, authority and right and has taken or will take all steps necessary to enter into and carry out its obligations under the Agreement.
9.2	This Agreement sets forth the full extent of the Company's obligations and liabilities in respect of the Equipment and its hiring to the Hirer. In particular, there are no conditions, warranties or other terms, express or implied, including as to quality, fitness for a particular purpose or any other kind whatsoever, that are binding on the Company except as specifically stated in this Agreement. Any condition, warranty or other term concerning the Equipment which might otherwise be implied into or incorporated within this agreement, whether by statute, common law or otherwise, is expressly excluded.
9.3	Subject to the provisions of Condition 9.4:
9.3.1	the Company will not be liable to the Hirer under or in connection with the Agreement for any indirect or consequential loss or damages, loss of profit, loss of revenue, loss of business or loss of goodwill, in each case howsoever caused, even where foreseeable; and
9.3.2	the Company’s total liability under or in connection with the Agreement (including any liability for the acts or omissions of its employees, agents and subcontractors) whether caused by breach of contract, tort, negligence, breach of statutory duty, misrepresentation, restitution or arising in any other way whatsoever, shall not exceed a sum equal to the Hire Charges.
9.4	Nothing contained in the Agreement will be construed so as to limit any liability which cannot legally be limited, including:
9.4.1	death or personal injury caused by negligence;
9.4.2	fraud or fraudulent misrepresentation; and
9.4.3	either Party’s liability for the willful misconduct of that Party, its employees, agents or subcontractors.
10	INDEMNITY
10.1	Without prejudice to any other provision of the Agreement, the Hirer shall be solely responsible for and shall indemnify the Company in respect of all actions, claims, proceedings, costs, losses and damages which the Company may sustain, suffer or incur as a result of or in connection with any breach of the Agreement or any negligence or misuse or mishandling of the Equipment by the Hirer or its officers, employees, agents or contractors.
11	CLEANLINESS OF EQUIPMENT
11.1	The Hirer shall be responsible for inspecting the interior of the Equipment to ensure the suitability and cleanliness for the purpose for which it is to be used.
11.2	The interior of the Equipment will be inspected on delivery to the Hirer and a statement of the internal conditions of the interior of the Equipment together with reference to the last clean of the Equipment shall be noted on the On-hire Inspection Report. In the event of a dispute over the internal condition or cleanliness of the Equipment when it is returned to the Company, the On-hire Inspection Report will be used as evidence of the internal condition of the Equipment prior to the commencement of the Period of Hire.
11.3	The Hirer shall pay the cost of repairs or cleaning required as a result of any staining, corrosion or damage to the vessel or tank barrel of the Equipment due to the carriage or storage in the Equipment of any product which is not in accordance with any instructions, recommendations or guidelines (whether in writing or oral) notified to the Hirer by the Company or the manufacturer of the Equipment or which is not in accordance with any Applicable Laws.
12	TERM AND TERMINATION
12.1	The Agreement and the Period of Hire will commence on the Commencement Date and shall continue indefinitely, unless terminated earlier in accordance with the terms of this Agreement.
12.2	The Hirer may terminate the Agreement at any time on giving the Company not less than three (3) Business Days’ notice in writing, provided such notice shall not expire before the end of the Minimum Hire Period.
12.3	Without prejudice to any other right or remedy which may be available to the Company, the Company may terminate the Agreement with immediate effect at any time on giving the Hirer not less than five (5) Business Days’ notice in writing.
12.4	Without prejudice to any other right or remedy which may be available to the Company, the Company may terminate the Agreement with immediate effect at any time by giving written notice to the Hirer:
12.4.1	if the Hirer fails to pay any Hire Charges or any other sums due to the Company in full when due;
12.4.2	if the Hirer commits a material breach of the Agreement which is incapable of remedy, or which if capable of remedy is not remedied within 30 days of being notified to do so;
12.4.3	if an Insolvency Event occurs in respect of the Hirer;
12.4.4	if the Hirer encumbers or in any way charges the Equipment;
12.4.5	if there is an adverse change in the financial position, standing or profitability of the Hirer which the Company considers to be material;
12.4.6	if there is a Change of Control of the Hirer;
12.4.7	if, in the opinion of the Company, the Equipment no longer has any further useful working life or, for any reason, has become hazardous to health and safety of persons or property and is not, in the opinion of the Company, capable of being repaired and/or made safe; or
12.4.8	the Hirer (being an individual) dies or, by reason of illness or incapacity (whether mental or physical), is incapable of managing their affairs or becomes a patient under any mental health legislation.
12.5	This Agreement shall automatically terminate if the Equipment becomes Destroyed Equipment.
12.6	Upon termination of the Agreement for any reason:
12.6.1	the Company's consent to the Hirer's possession of the Equipment shall terminate and the Company may, by its authorised representatives, without notice and at the Hirer's expense, retake possession of the Equipment and for this purpose may enter any premises at which the Equipment is located;
12.6.2	without prejudice to any other rights or remedies of the Hirer, the Hirer shall pay to the Company on demand:
(a)	all Hire Charges and other sums due but unpaid at the date of such demand together with any interest accrued pursuant to Condition 3.4; and
(b)	any costs and expenses incurred by the Company in recovering the Equipment and/or in collecting any sums due under this agreement (including any storage, insurance, repair, transport, legal and remarketing costs);
12.6.3	the Hirer shall promptly return the Equipment to the Company at the Company Address during Working Hours, complete and in good order in accordance with the terms of this Agreement, including:
(a)	empty of all goods or materials;
(b)	free of accidental damage;
(c)	fully maintained and serviced;
(d)	in a clean condition externally and internally; and
(e)	together with a European cleaning document (ECD) from a Registered Cleaning Station stating that the interior of the Equipment has been cleaned in a manner appropriate to the last product carried.
12.7	If the Agreement terminates prior to the end of the Minimum Hire Period then, without prejudice to any other rights of the Company, the Hirer will promptly pay to the Company, except where the Agreement terminates due to the default of the Company or is terminated by the Company pursuant to Condition 12.4, a sum equal to the remaining Hire Charges that would have been payable by the Hirer if the Agreement had continued until the end of the Minimum Hire Period, and such sums may be partly or wholly recovered from any Deposit.
12.8	Notwithstanding termination of the Agreement, the obligations of the Hirer under the Agreement shall continue until the Company recovers possession of the Equipment and, without prejudice to the generality of the foregoing, the obligations of the Hirer under Condition 12.8 shall continue until payment in full to the Company of all sums due to the Company under the Agreement. The provisions of Condition 12.8 and this Condition 12.9 shall not constitute a renewal or extension of the Period of Hire.
12.9	If the Company is unable to recover possession of the Equipment for any reason (including where the Equipment is Destroyed Equipment), the Hirer will pay to the Company an amount equal to the Equipment Replacement Value.
12.10	Following the end of the Period of Hire and on return of the Equipment to the Company Address, the Company will conduct an inspection of the Equipment in order to complete the Off-hire Inspection Report. Unless the Hirer chooses not to be represented at the inspection, the Hirer shall, on request by the Company and within three (3) Business Days after the return of the Equipment to the Company, attend at such premises as may be notified to the Hirer by the Company for the purposes of such inspection. Subject to Condition 12.12, the Hirer shall (even where it declines to be present at the inspection):
12.10.1	be bound by the outcome of the inspection and the contents of the Off-hire Inspection Report;
12.10.2	pay the full cost of any repairs to the Equipment which are identified as being required in the Off-hire Inspection Report and carried out by or on behalf of the Company; and
12.10.3	if the Hirer returns the Equipment with a tyre having a usable tread depth less than that stated on the On-hire Inspection Report,  pay to the Company an amount equal to the shortfall in depth measured in millimetres divided by the number of millimetres of usable tread depth when new and multiplied by the then current price of a new identical (or nearest equivalent) tyre produced by the same manufacturer.
12.11	In the event that the Hirer disputes the condition of the Equipment on its return to the Company as recorded on the Off-Hire Inspection Report, the Hirer may request that the Equipment shall be examined by an engineer appointed by the Freight Transport Association whose report on the condition of the Equipment (including to the amount of any damages suffered by the Company) shall be conclusive and binding on both Parties. The costs of any such examination shall be borne by the Hirer.
13	CONFIDENTIALITY
13.1	Subject to the provisions of Condition 13.6, each Party undertakes that it shall not, during the term of the Agreement and for a period of five (5) years after termination or expiry, disclose to any person any Confidential Information of the other Party except as permitted by Condition 13.2.
13.2	Each Party may disclose the other Party’s Confidential Information:
13.2.1	to its employees, officers, representatives or advisers who need to know such information for the purposes of carrying out the Party’s obligations under this Agreement. Each Party shall inform such persons to whom it discloses the other Party’s Confidential Information of the confidential nature of the Confidential Information before disclosure and shall ensure that such persons shall comply with the obligations set out in this Condition 13 as if they were a party to this Agreement; and
13.2.2	as may be required by law, a court of competent jurisdiction or any governmental or regulatory authority.
13.3	No Party shall use any other Party’s Confidential Information for any purpose other than to exercise its rights and perform its obligations under this Agreement.
13.4	Each Party shall remain liable at all times for the failure of any persons to whom it discloses the other Party’s Confidential Information to comply with the obligations set out in this Condition 13.
13.5	Upon termination or expiry of the Agreement, if requested by the other Party, each Party will cease to use and return to the other Party (or at the request of the other Party, destroy) any and all Confidential Information of the other Party then in its possession or control and will not retain any copies of the same save where otherwise required by Applicable Laws.
13.6	The provisions of this Condition 13 shall not apply to any Confidential Information which:
13.6.1	at the time of receipt by the recipient Party is in the public domain, or subsequently comes into the public domain through no fault of the recipient Party, its officers, employees, agents or contractors;
13.6.2	is lawfully received by the recipient Party from a third party on an unrestricted basis;
13.6.3	is already known to the recipient Party before its receipt under the Agreement;
13.6.4	is independently developed by the recipient Party or its employees, agents or contractors; or
13.6.5	the Parties agree in writing is not confidential or may be disclosed.
13.7	The Hirer acknowledges and agrees that the Company may conduct credit checks against the Hirer with a credit reference agency in connection with this Agreement (“Enquiries”). The Company may provide such credit reference agency with information about the Hirer received under this Agreement as part of the Enquiries.  The result of such Enquiries and such other information may be used by the Company to make credit decisions relating to the Hirer or to prevent fraud or trace debtors.
13.8	The Company shall comply with all Applicable Laws in the exercise of its rights under Condition 13.7.
14	FORCE MAJEURE
14.1	The Company shall not be in breach of the Agreement if its performance of the Agreement is delayed or prevented by any circumstances or conditions beyond its reasonable control including any war, industrial dispute, strike, lockout, riot, malicious damage, fire, storm, flood, Act of God, accident, failure of production equipment, any statute, rule, byelaw, order, regulation or requisition made or issued by any government department, local or other duly constituted authority. In such circumstances, the Company shall be entitled to a reasonable extension of time for performing such obligations.
14.2	If performance of the Agreement by the Company is delayed or prevented by any circumstances or conditions referred to in Condition 14.1 for a period of fourteen (14) days or more, then the Company may terminate this Agreement without liability.
15	GENERAL
15.1	The Company may at any time (without notice or consent) assign, transfer, mortgage, charge, subcontract, delegate, declare a trust over or deal in any other manner with any of its rights and obligations under the Agreement. The Hirer may not at any time assign, transfer, mortgage, charge, subcontract, delegate, declare a trust over or deal in any other manner with any of its rights and obligations under the Agreement without the prior written consent of the Company.
15.2	Any notice to be given under, or in connection with the matters contemplated by, the Agreement must be in writing and signed by or on behalf of the Party giving it and will be served by delivering it personally or sending it by fax or pre-paid recorded delivery or registered post to the registered office or principal place of business of the other Party or by e-mail to such email address as may be notified in writing by the relevant Party to the other Party (or as otherwise notified in writing by the relevant Party to the other Party).
15.3	The Agreement constitutes the entire agreement between the Parties and supersedes any prior drafts, agreements, undertakings, understandings, representations, warranties and arrangements of any nature between the Parties, whether or not in writing, in relation to the subject matter of the Agreement.
15.4	Each Party acknowledges that in entering into this Agreement it does not rely on, and shall have no remedies in respect of, any statement, representation, assurance or warranty (whether made innocently or negligently) that is not set out in this Agreement. Each Party agrees that it shall have no claim for innocent or negligent misrepresentation or negligent misstatement based on any statement in this Agreement.
15.5	Except as expressly provided in this Agreement, the rights and remedies provided under the Agreement are in addition to, and not exclusive of, any rights or remedies provided by law and may be enforced separately or concurrently with any other right or remedy.
15.6	No amendment or variation of the Agreement or any of the documents referred to in it will be effective unless it is in writing and signed by or on behalf of each of the Parties.
15.7	No failure or delay by a Party to exercise any right or remedy provided under the Agreement is to constitute a waiver of that (or any other) right or remedy, nor preclude or restrict its further exercise. No single or partial exercise of such right or remedy is to preclude or restrict the further exercise of that (or any other) right or remedy.
15.8	Nothing in the Agreement is intended to or shall be deemed  to operate to create a partnership or joint venture of any kind between the Parties, constitute any Party the agent of another Party, or to authorise either Party make or enter into any commitments for or on behalf of any other Party. Each Party confirms it is acting on its own behalf and not for the benefit of any other person.
15.9	If any Condition (or part of a Condition) is or becomes illegal, invalid or unenforceable, it shall be deemed deleted, but that shall not affect the legality, validity or enforceability of any other Condition (or any other part of that Condition).
15.10	Any Company Affiliate may enjoy the benefit of the Company’s rights and enforce the terms of the Agreement in accordance with the provisions of the Contracts (Rights of Third Parties) Act 1999. Except as otherwise provided in this Condition 15.10, a person who is not a Party has no rights under the Contracts (Rights of Third Parties) Act 1999 to enforce, or to enjoy the benefit of, any term of the Agreement and the operation of that Act is excluded but this does not affect any right or remedy of a third party which exists or is available apart from that Act. The rights of the Parties to rescind or vary this Agreement are not subject to the consent of any other person.
15.11	 The Agreement shall be governed by and construed in accordance with the laws of England and Wales, and the Parties irrevocably agree that the courts of England and Wales shall have exclusive jurisdiction to settle any dispute or claim (including non-contractual disputes or claims) arising out of or in connection with this Agreement or its subject matter or formation.

                            </textarea>
                        </div>
                        <div class="relative flex pt-6 text-base">
                            <x-inputs.checkbox
                                id="terms_check"
                                name="terms_check"
                                class="mt-1 mr-3"
                                label=""
                            ></x-inputs.checkbox>
                            <p class="pr-10">I agree with this Terms and Conditions</p>
                            <div class="absolute right-0">
                                <span class="p-3 ml-3 text-white rounded-lg cursor-pointer bg-cyan-500 hover:bg-cyan-600 add_result_data terms_conditions_close">Close</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Dialog -->
