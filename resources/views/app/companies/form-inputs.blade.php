@php $editing = isset($company) @endphp

<div class="mb-10 rounded-lg bg-white overflow-hidden shadow">
    <h2 class="sr-only" id="profile-overview-title">Hire Contract</h2>
    <div class="bg-white p-6">
    <div class="sm:flex sm:items-center sm:justify-between">
        <div class="sm:flex sm:space-x-5">
        <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
            <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
            <p class="text-xl font-bold text-gray-900 sm:text-2xl">Company Add/Update</p>
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
            <h3 class="text-lg font-medium leading-6 text-gray-900">Company Information</h3>
            <p class="mt-1 text-sm text-gray-600">
                We can add some notes/instructions here.
            </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="grid grid-cols-6 gap-6 pb-6">
                        <div class="col-span-6 sm:col-span-6">
                            <div class="mt-6">
                                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                <input
                                    id="company"
                                    name="company"
                                    class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    value="{{ old('company', ($editing ? $company->company : '')) }}"
                                    maxlength="255"                             
                                    required
                                ></input>
                                
                                <div class="grid grid-cols-6 gap-6 mt-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                    <input
                                        name="address" 
                                        type="text"
                                        id="autocomplete"                                   
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                        value="{{ old('address', ($editing ? $company->address : '')) }}"
                                        maxlength="255"
                                        placeholder="Enter your address" 
                                        onFocus="geolocate()"
                                        required
                                    ></input>
                                </div>
                                <div class="col-span-6 sm:col-span-3" id="address">
                                    <label for="postcode" class="block text-sm font-medium text-gray-700">Postcode</label>
                                    <input
                                        name="postcode"
                                        type="text"
                                        id="postal_code"                                    
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                        value="{{ old('postcode', ($editing ? $company->postcode : '')) }}"
                                        maxlength="255"
                                        required
                                    ></input>
                                </div>
                            </div>  
                            </div>
                              
                            <div class="grid grid-cols-6 gap-6 pt-6">                       
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="">
                                        <label for="insurer" class="block text-sm font-medium text-gray-700">Insurance Company</label>
                                        <input
                                            type="text"
                                            name="insurer"
                                            value="{{ old('insurer', ($editing ? $company->insurer : '')) }}"
                                            maxlength="255"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required
                                            
                                        ></input>
                                    </div>
                                    <div class="mt-6">
                                        <label for="policy_expiry" class="block text-sm font-medium text-gray-700">Insurance Expiry Date</label>
                                        <input
                                            name="policy_expiry"
                                            type="date"
                                            oninput="check(this)"
                                            value="{{ old('policy_expiry', ($editing ? $company->policy_expiry : '')) }}"
                                            max="255"
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm form-date focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            required
                                            
                                        ></input>
                                    </div>
                                    <div class="mt-6">
                                        <label for="broker" class="block text-sm font-medium text-gray-700">Broker</label>
                                        <input
                                            type="text"
                                            name="broker"
                                            value="{{ old('broker', ($editing ? $company->broker : '')) }}"
                                            maxlength="255"
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
                                                value="{{ old('policy_value', ($editing ? $company->policy_value : '')) }}"
                                                maxlength="255"
                                                placeholder=""
                                                required
                                                class="block w-full py-2 pr-12 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 pl-7 sm:text-sm" placeholder="0000.00" aria-describedby="price-currency"
                                                
                                            ></input>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <div class="">
                                        <label for="policy_num" class="block text-sm font-medium text-gray-700">Policy Number</label>
                                        <input
                                            type="text"
                                            name="policy_num"
                                            value="{{ old('policy_num', ($editing ? $company->policy_num : '')) }}"
                                            maxlength="255"
                                            required
                                            class="block w-full py-2 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                            
                                        ></input>
                                    </div>
                                    <div class="mt-6">
                                        <label for="policy_type" class="block text-sm font-medium text-gray-700">Policy Type</label>
                                        <input
                                            type="text"
                                            name="policy_type"
                                            required
                                            value="{{ old('policy_type', ($editing ? $company->policy_type : '')) }}"
                                            maxlength="255"
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
                                            
                                            placeholder="policy notes here">{{ $editing ? $company->policy_notes : '' }}</textarea>
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

<script>
    var base_url = "{{ url('/') }}";
    var image_saveUrl = '{{route("images.store")}}'
    var asset_url =  "{{env('ASSET_URL')}}/pixie"
    var csrf_token =  "{{ csrf_token() }}"
    var editing = "{{ $editing }}"
    var browserConcept = "";
    if (navigator.userAgent.search("Chrome") >= 0)
        browserConcept = "chrome";
    else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0)
        browserConcept = "safari";
    if(browserConcept == "safari") {
        jQuery(function($){ //on document.ready
            $('.form-date').datepicker({ dateFormat: 'yy-mm-dd' });
        })
    }
    function check(input) {
        var expiry = input.value;

        expiry = new Date(expiry);
        var today = new Date();
        if (expiry < today) {
            input.setCustomValidity('WARNING: Insurance has expired');
        } else {
            input.setCustomValidity('');
        }   
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAP_API_KEY')}}&libraries=places&callback=initAutocomplete" async defer></script>
<script src="{{ asset('js/auto-complete.js') }}"></script>