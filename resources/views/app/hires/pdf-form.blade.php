<div class="mb-10 overflow-hidden bg-white rounded-lg shadow">
    <h2 class="sr-only" id="profile-overview-title">Hire Contract</h2>
    <div class="relative p-6 bg-white">
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="sm:flex sm:space-x-5 tanker-header">
            <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
                <p class="text-xl font-bold text-gray-900 sm:text-2xl">Hire Contract</p>
                <p class="text-sm font-medium text-gray-400">To be completed by TCL and customer.</p>
            </div>
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
                        <input
                            type="text"
                            name="contact"
                            id="contact"
                            value="{{$hire->contact->contact}}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"                            
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="company_id" class="block text-sm font-medium text-gray-700">Company</label>
                        <x-inputs.text
                            name="company_id"
                            id="company_id"
                            value="{{ $hire->contact->company->company }}"
                            class="block w-full h-auto py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <x-inputs.text
                            name="email"
                            id="email"
                            value="{{$hire->contact->email}}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></x-inputs.text>
                    </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <div class="">
                        <label for="order_num" class="block text-sm font-medium text-gray-700">Order Number</label>
                        <input
                            type="text"
                            name="order_num"
                            id="order_num"
                            value="{{ $hire->order_num}}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <x-inputs.text
                            name="phone"
                            id="phone"
                            value="{{ $hire->contact->phone }}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></x-inputs.text>
                    </div>
                    <div class="mt-6">
                        <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                        <x-inputs.text
                            name="mobile"
                            id="mobile"
                            value="{{ $hire->contact->mobile }}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></x-inputs.text>
                    </div>
                </div>
                <div class="col-span-6 sm:col-span-6">
                    <div class="">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <x-inputs.text
                            name="address"
                            id="address"
                            value="$hire->contact->company->address}}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
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
                            <select
                                name="tanker_id"
                                id="tanker_id"
                                value="{{$hire->tanker->tanker}}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </select>
                        </div>
                        <div class="mt-6">
                            <label for="equipment" class="block text-sm font-medium text-gray-700">Equipment</label>
                            <x-inputs.text
                                name="equipment"
                                id="equipment"
                                value="{{ $hire->tanker->equipment}}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="make" class="block text-sm font-medium text-gray-700">Make</label>
                            <x-inputs.text
                                name="make"
                                id="make"
                                value="{{$hire->tanker->make}}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                readonly
                            ></x-inputs.text>
                        </div>
                        <div class="mt-6">
                            <label for="chassis" class="block text-sm font-medium text-gray-700">Chassis Number</label>
                            <x-inputs.text
                                name="chassis"
                                id="chassis"
                                value="{{ $hire->tanker->chassis_num }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></x-inputs.text>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <div class="">
                            <label for="mot_expiry" class="block text-sm font-medium text-gray-700">MOT Expiry Date</label>
                            <input
                                name="mot_expiry"
                                id="mot_expiry"
                                type="date"
                                value="{{ $hire->mot_expiry }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
                        </div>
                        <div class="mt-6">
                            <label for="adr_expiry" class="block text-sm font-medium text-gray-700">ADR Expiry Date</label>
                            <input
                                name="adr_expiry"
                                type="date"
                                id="adr_expiry"
                                value="{{ $hire->adr_expiry }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
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
                                value="{{ $hire->service_interval}}"
                                type="range"
                                />
                            <div class="grid w-full grid-cols-3">
                                <label>6</label>
                                <label class="text-center">7</label>
                                <label class="text-right">8</label>
                            </div>
                        </div>
                        <div class="mt-4">
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
                                        {{ $hire->discharge_pump == 0 ? 'checked' : ''  }}
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
                                        {{ $hire->discharge_pump == 1 ? 'checked' : ''}}
                                    >
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
                                <input
                                    type="text"
                                    name="contract_num"
                                    id="contract_num"
                                    value="{{ $hire->contract_num }}"
                                    class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                ></input>
                            </div>
                            <div class="mt-6">
                                <label for="start_date" class="block text-sm font-medium text-gray-700">Hire Start Date</label>
                                <input
                                    name="start_date"
                                    type="date"
                                    class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    value="{{ optional($hire->start_date)->format('Y-m-d')}}"
                                ></input>
                            </div>
                            <div class="mt-6">
                                <label for="end_date" class="block text-sm font-medium text-gray-700">Hire End Date</label>
                                <input
                                    name="end_date"
                                    type="date"
                                    value="{{optional($hire->end_date)->format('Y-m-d') }}"
                                    class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
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
                                    <input
                                        type="text"
                                        name="deposit"
                                        id="deposit"
                                        type="text"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm"
                                        placeholder="0000.00"
                                        value="{{ $hire->deposit }}"
                                        aria-describedby="price-currency"                                    
                                    ></input>
                                    </div>
                            </div>

                            <div class="mt-6">
                                <span class="block text-sm font-medium text-gray-700">Hire Type</span>
                                <div class="mt-1">
                                    <select
                                        name="hire_type"
                                        id="hire_type"
                                        class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="Weekly" {{$hire->hire_type == "Weekly" ? 'selected' : '' }}>Weekly</option>
                                        <option value="Monthly" {{ $hire->hire_type == "Monthly" ? 'selected' : ''}}>Monthly</option>
                                        <option value="3 Months +" {{ $hire->hire_type == "3 Months +" ? 'selected' : ''}}>3 Months +</option>
                                        <option value="6 Months +" {{ $hire->hire_type == "6 Months +" ? 'selected' : ''}}>6 Months +</option>
                                        <option value="12 Months +" {{ $hire->hire_type == "12 Months +" ? 'selected' : ''}}>12 Months +</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label for="hire_rate" class="block text-sm font-medium text-gray-700">Hire Rate</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <input
                                        type="text"
                                        name="hire_rate"
                                        id="hire_rate"
                                        value="{{ $hire->hire_rate }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
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
                                    <input 
                                        type="text"
                                        name="monthly_rate"
                                        id="monthly_rate"
                                        value="{{ $hire->monthly_rate }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input >
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
                                    <input
                                        type="text"
                                        name="charge"
                                        value="{{ $hire->charge }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                                        + VAT
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-8">
                                <span class="block text-sm font-medium text-gray-700">Maintenance</span>
                                <div class="mt-2">
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio"
                                                class="form-radio"
                                                name="maintenance_included"
                                                id="maintenance_included_f"
                                                value="0"
                                                {{ $hire->maintenance_included == "0" ? 'checked' : ''}}
                                                checked
                                            >
                                            <span class="ml-2">None</span>
                                        </label>
                                    </div>
                                    <div>
                                        <label class="inline-flex items-center">
                                            <input type="radio"
                                                class="form-radio"
                                                name="maintenance_included"
                                                id="maintenance_included_t"
                                                {{ $hire->maintenance_included == "1" ? 'checked' : '' }}
                                                value="1">
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
                                    <input 
                                        type="text"
                                        name="collection_charge"
                                        value="{{ $hire->collection_charge }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input >
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
                                    <input
                                        type="text"
                                        name="water_fill_charge"
                                        value="{{ $hire->water_fill_charge }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
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
                                    <input
                                        type="text"
                                        name="commissioning_charge"
                                        value="{{ $hire->commissioning_charge }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
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
                                    <input
                                        type="text"
                                        name="cleaning_outside_charge"
                                        value="{{$hire->cleaning_outside_charge}}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
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
                                    <input
                                        type="text"
                                        name="cleanout_charge"
                                        value="{{ $hire->cleanout_charge }}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                        
                                    ></input>
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
                                    <input
                                        type="text"
                                        name="other_charge"
                                        value="{{$hire->other_charge}}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
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
                                    id="charge_notes"
                                    name="charge_notes"
                                    rows="3"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                >{{$hire->charge_notes}}</textarea>
                            </div>
                            <div class="mt-3">
                                <label for="tyre_wear_charge" class="block text-sm font-medium text-gray-700">Tyre Wear SOR</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">
                                        £
                                        </span>
                                    </div>
                                    <input
                                        type="text"
                                        name="tyre_wear_charge"
                                        value="{{ $hire->tyre_wear_charge}}"
                                        class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                    ></input>
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
                                                id="tyres_included_f"
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
                                                id="tyres_included_t"
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
            Only  if vehicle is to be delivered to customer by TCL.
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
                            <input
                                type="text"
                                name="delivery_contact_name"
                                id="delivery_contact_name"
                                value="{{$hire->delivery_contact_name}}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_address" class="block text-sm font-medium text-gray-700">Delivery Address</label>
                            <input
                                type="text"
                                name="delivery_address"               
                                value="{{ $hire->delivery_address }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_postcode" class="block text-sm font-medium text-gray-700">Delivery Postcode</label>
                            <input
                                name="delivery_postcode"
                                id="postal_code"
                                type="text"
                                value="{{ $hire->delivery_postcode}}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <div class="">
                            <label for="delivery_phone" class="block text-sm font-medium text-gray-700">Delivery Phone</label>
                            <input
                                type="text"
                                name="delivery_phone"
                                id="delivery_phone"
                                value="{{ $hire->delivery_phone }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_email" class="block text-sm font-medium text-gray-700">Delivery Email</label>
                            <input
                                type="text"
                                name="delivery_email"
                                id="delivery_email"
                                value="{{ $hire->delivery_email }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
                        </div>
                        <div class="mt-6">
                            <label for="delivery_fax" class="block text-sm font-medium text-gray-700">Delivery Fax</label>
                            <input
                                type="text"
                                name="delivery_fax"
                                id="delivery_fax"
                                value="{{ $hire->delivery_fax }}"
                                class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            ></input>
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
                        <input
                            type="text"
                            name="insurer"
                            value="{{ $hire->insurer }}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="policy_expiry" class="block text-sm font-medium text-gray-700">Insurance Expiry Date</label>
                        <input
                            name="policy_expiry"
                            type="date"
                            value="{{optional($hire->policy_expiry)->format('Y-m-d')}}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="broker" class="block text-sm font-medium text-gray-700">Broker</label>
                        <input
                            type="text"
                            name="broker"
                            value="{{$hire->broker}}"
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="policy_value" class="block text-sm font-medium text-gray-700">Replacement Value</label>
                        <div class="relative mt-1 rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">
                                £
                                </span>
                            </div>
                            <input
                                type="text"
                                name="policy_value"
                                value="{{ $hire->policy_value }}"
                                class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"                                
                            ></input>
                        </div>
                    </div>
                    <div>
                        <input id="hirer_ip" type="text" name="hirer_ip" value="https://dev.tanker.cloud" hidden>
                        <input id="hirer_geo" type="text" name="hirer_geo" value="TCL host" hidden>
                    </div>
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <div class="">
                        <label for="policy_num" class="block text-sm font-medium text-gray-700">Policy Number</label>
                        <input
                            type="text"
                            name="policy_num"
                            value="{{$hire->policy_num}}"
                            
                            
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="policy_type" class="block text-sm font-medium text-gray-700">Policy Type</label>
                        <input
                            type="text"
                            name="policy_type"
                            
                            value="{{ $hire->policy_type }}"
                            
                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        ></input>
                    </div>
                    <div class="mt-6">
                        <label for="policy_notes" class="block text-sm font-medium text-gray-700">Policy Notes</label>
                        <textarea
                            id="policy_notes"
                            name="policy_notes"
                            rows="5"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            
                            >{{ $hire->policy_notes }}</textarea>
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
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>
