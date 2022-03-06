@php $editing = isset($contact) @endphp

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
                                    value="{{ old('company', ($editing ? $contact->company->company : '')) }}"
                                    maxlength="255"
                                    list="company_list"   
                                    onmouseover="focus();old = value;" 
                                    onmousedown = "value = '';" 
                                    onmouseup="value = old;"                                    
                                    required
                                    {{$editing ? "disabled" : ""}}
                                ></input>
                                @if (!$editing)
                                <datalist id="company_list">
                                    @forelse ($companies as $company)
                                        <option value="{{ $company['company'] }}" id="{{$company['id']}}"></option>
                                    @empty
                                        <option value = "there is no data"></option>
                                    @endforelse
                                </datalist>
                                <input type="hidden" name="company_id" id="company_id"></input>
                                @endif
                            </div>
                            
                            <div id="contact">  
                                
                                <div>    
                                    @if (!$editing)                 
                                    <div class="grid grid-cols-6 gap-6 pt-6">                       
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                                            <x-inputs.text
                                                name="addMoreInputFields[0][contact]"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('contact', ($editing ? $contact->contact : '')) }}"
                                                maxlength="255"
                                                required
                                            ></x-inputs.text>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                            <x-inputs.text
                                                name="addMoreInputFields[0][email]"  
                                                type="email"                                  
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('email', ($editing ? $contact->email : '')) }}"
                                                maxlength="255"
                                                required
                                            ></x-inputs.text>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                            <x-inputs.text
                                                name="addMoreInputFields[0][phone]"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('phone', ($editing ? $contact->phone : '')) }}"
                                                maxlength="255"
                                                required
                                                >
                                            </x-inputs.text>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                                            <x-inputs.text
                                                name="addMoreInputFields[0][mobile]"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('mobile', ($editing ? $contact->mobile : '')) }}"
                                                maxlength="255"
                                                required
                                            ></x-inputs.text>
                                        </div>
                                    </div>                                 
                                    @else
                                    <div class="grid grid-cols-6 gap-6 pt-6">                       
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                                            <x-inputs.text
                                                name="contact"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('contact', ($editing ? $contact->contact : '')) }}"
                                                maxlength="255"
                                                required
                                            ></x-inputs.text>
                                            <input
                                                type="hidden"
                                                name="company_id"
                                                value="{{$editing ? $contact->id : ''}}"
                                            ></input>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                            <x-inputs.text
                                                name="email"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('email', ($editing ? $contact->email : '')) }}"
                                                maxlength="255"
                                                required
                                            ></x-inputs.text>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                            <x-inputs.text
                                                name="phone"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('phone', ($editing ? $contact->phone : '')) }}"
                                                maxlength="255"
                                                required
                                                >
                                            </x-inputs.text>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                                            <x-inputs.text
                                                name="mobile"                                    
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2"
                                                value="{{ old('mobile', ($editing ? $contact->mobile : '')) }}"
                                                maxlength="255"
                                                required
                                            ></x-inputs.text>
                                        </div>
                                    </div> 
                                    @endif
                            </div>                             
                               
                            </div>
                            @if (!$editing)
                            <div class="grid grid-cols-2 grid-flow-col">
                                <a href="#" class="pl">+
                                </a>
                                <br/>
                                <a href="#" class="mi">-
                                </a>
                            </div>       
                            @endif                                      
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
    $(document).ready(function(){
        $('#company').on('input',function(){
            let CompanyName = $('#company').val();
            let company_id = $('#company_list').find('option[value="' +CompanyName + '"]').attr('id');
            $('#company_id').val(company_id);   
        });
    });
    var i = 0;
    $(function() {        
        $('a.pl').click(function(e) {
            e.preventDefault();
            var txt = '';
            i++;
            txt += '<div><div class="grid grid-cols-6 gap-6 pt-6">';                       
            txt += '<div class="col-span-6 sm:col-span-3">';
            txt += '<label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>';
            txt += '<input type="text" name="addMoreInputFields['+i+'][contact]"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2" value="" maxlength="255" required></input></div>';
            txt += '<div class="col-span-6 sm:col-span-3">';
            txt += '<label for="email" class="block text-sm font-medium text-gray-700">Email</label>';
            txt += '<input type="email" name="addMoreInputFields['+i+'][email]" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2" value=""  maxlength="255" required></input></div></div>';
            txt += '<div class="grid grid-cols-6 gap-6">';
            txt += '<div class="col-span-6 sm:col-span-3">';
            txt += '<label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>';
            txt += '<input type="text" name="addMoreInputFields['+i+'][phone]" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2" value="" maxlength="255" required></input></div>';
            txt += '<div class="col-span-6 sm:col-span-3">';
            txt += '<label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>';
            txt += '<input type="text" name="addMoreInputFields['+i+'][mobile]" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-2" value="" maxlength="255" required></input></div></div></div>'; 

            $('#contact').append(txt);


        });
        $('a.mi').click(function (e) {
            e.preventDefault();
            if ($('#contact div').length > 1) {
                $('#contact').children().last().remove();
            }
        });
    });
</script>