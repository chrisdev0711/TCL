@php
    $editing = isset($checkListMilk);
    $url_link = isset($url_link);
    $isSuperAdmin = null;
    if(Auth::user())
        $isSuperAdmin = Auth::user()->isSuperAdmin();
@endphp

{{ csrf_field() }}
<x-inputs.group class="w-full" hidden>
    <x-inputs.select name="checklist_type" label="Checklist Type">
        <option  value="{{ $check_type }}" selected>{{ $check_type == 'On' ? 'On' : 'Off' }}</option>
    </x-inputs.select>
</x-inputs.group>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Vehicle Check</h3>
            <p class="mt-1 text-sm text-gray-600">
                Please confirm each of these items has been checked.
            </p>
            </div>
        </div>

        <div class="relative mt-5 md:mt-0 md:col-span-2">
            <div class="fixed inset-0 z-10 w-full h-full bg-gray-100 overlay opacity-60" style="display:none;">
                <div class="absolute spinner inset-1/2 "></div>
            </div>
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6 pb-6">
                        <div class="col-span-6 sm:col-span-2">
                            <div class="">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="cladding_panels"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "cladding_panels"
                                                    {{$editing ? $checkListMilk->cladding_panels == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="cladding_panels" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Cladding Panels</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="wings_stays"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "wings_stays"
                                                    {{$editing ? $checkListMilk->wings_stays == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="wings_stays" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Wings / Stays</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="ladder"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "ladder"
                                                    {{$editing ? $checkListMilk->ladder == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="ladder" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Ladder</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="rear_bumper"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "rear_bumper"
                                                    {{$editing ? $checkListMilk->rear_bumper == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="rear_bumper" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Rear Bumper</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <div class="">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="lights"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "lights"
                                                    {{$editing ? $checkListMilk->lights == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="lights" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Lights</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="valve_operation"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "valve_operation"
                                                    {{$editing ? $checkListMilk->valve_operation == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="valve_operation" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Valve Operation</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="compartment_internal"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "compartment_internal"
                                                    {{$editing ? $checkListMilk->compartment_internal == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="compartment_internal" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Compartment / Internal</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <div class="">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="side_guards"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "side_guards"
                                                    {{$editing ? $checkListMilk->side_guards == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="side_guards" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Side Guards</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="vacuum_pump"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "vacuum_pump"
                                                    {{$editing ? $checkListMilk->vacuum_pump == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="vacuum_pump" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Vacuum Pump</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                <div class="flex items-center">
                                    <div class="w-full max-w-xl -mx-auto">
                                        <div class="flex items-center" x-data="{ on: false }">
                                            <div class="toggle colour">
                                                <input
                                                    id="chassis"
                                                    class="hidden toggle-checkbox"
                                                    type="checkbox"
                                                    name = "chassis"
                                                    {{$editing ? $checkListMilk->chassis == true ? 'checked' : '' : ''}}
                                                    {{$url_link ? 'disabled' : ''}}
                                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                />
                                                <label for="chassis" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                            </div>
                                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                                <span class="text-sm font-medium text-gray-900">Chassis</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <div class="">
                                <label for="vehicle_check_note" class="block text-sm font-medium text-gray-700">
                                        Notes
                                </label>
                                <div class="mt-1">
                                <textarea
                                    id="vehicle_check_note"
                                    name="vehicle_check_note"
                                    rows="3"
                                    class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    {{$url_link ? 'disabled' : ''}}
                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                    >{{ $checkListMilk->vehicle_check_note ?? '' }}</textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Note any damage in items checked above.</p>
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
                <h3 class="text-lg font-medium leading-6 text-gray-900">Video Walkaround</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Please video a complete walk around of the vehicle paying particular attention to any damages.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6 pb-6">

@if(!$url_link)
                    {{-- Column 1 33.3% --}}
                    <script>
                        var int_video_source = "{{ old('int_video', ($editing ? $checkListMilk->int_video : '')) }}";
                        var ext_video_source = "{{ old('ext_video', ($editing ? $checkListMilk->ext_video : '')) }}";
                    </script>

                    <div class="col-span-6 align-top sm:col-span-3" style="height : 210px">
                        <video-tag id="internal-video-tag" ></video-tag>
                    </div>
                    <input  {{$url_link ? 'disabled' : ''}} {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}} name = "int_video" id = "int_video_form"  value = "{{ old('int_video', ($editing ? $checkListMilk->int_video : '')) }}" hidden>

                    {{-- Column 2 33.3%--}}
                    <div class="col-span-6 sm:col-span-3"  style="height : 210px">
                        <video-tag id="external-video-tag"></video-tag>
                    </div>
                    <input {{$url_link ? 'disabled' : ''}} {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}} name = "ext_video" id = "ext_video_form" value = "{{ old('ext_video', ($editing ? $checkListMilk->ext_video : '')) }}" hidden>
                    {{-- Column 4 100%--}}
                    <div class="col-span-6 sm:col-span-6">
                        <p class="mt-2 text-sm text-gray-500">Tap the video icon to open the video recorder, click the record button to start/stop recording.</p>
                        <p class="mt-2 text-sm text-gray-500">Each video can be up-to X minutes/seconds long.</p>
                    </div>
@endif

                    
@if($url_link)
                    <div class="col-span-6 align-top sm:col-span-3" style="height : 490px">
                        <video width="366" controls>
                            <source src="{{ $checkListMilk->int_video }}" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                    </div>

                    <div class="col-span-6 sm:col-span-3"  style="height : 490px">
                        <video width="366" controls>
                            <source src="{{ $checkListMilk->ext_video }}" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                    </div>

@endif

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
            <h3 class="text-lg font-medium leading-6 text-gray-900">Cleaning Certificate</h3>
            <p class="mt-1 text-sm text-gray-600">
                Please upload the image to certificate the cleaning status here.
            </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <div class="mt-1 border border-gray-200">
                            <img id="cleaning_status_image" class="mx-auto"
                                src="{{old('cleaning_status', $editing ? ($checkListMilk->cleaning_status && str_contains($checkListMilk->cleaning_status, '/')) ? asset($checkListMilk->cleaning_status) : '/img/camera_icon.png' : '/img/camera_icon.png')}}" alt="cleaning_status_image">
                            <input type="file" id="cleaning_status_image_form" name = 'cleaning_status' hidden
                            value = "{{old('cleaning_status', $editing ? $checkListMilk->cleaning_status : '/img/tanker.jpg')}}" accept="image/*"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pl-6 mt-4">
                <div class="flex items-center">
                    <div class="w-full max-w-xl -mx-auto">
                        <div class="flex items-center" x-data="{ on: false }">
                            <div class="toggle colour">
                                <input
                                    id="cleaning_check"
                                    class="hidden toggle-checkbox"
                                    type="checkbox"
                                    name = "cleaning_check"
                                    {{$editing ? $checkListMilk->cleaning_check == true ? 'checked' : '' : ''}}
                                    {{$url_link ? 'disabled' : ''}}
                                    {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                />
                                <label for="cleaning_check" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                            </div>
                            <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                <span class="text-sm font-medium text-gray-900">Cleaning Status Check</span>
                            </span>
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
            <h3 class="text-lg font-medium leading-6 text-gray-900">Tyre Check</h3>
            <p class="mt-1 text-sm text-gray-600">
                Please confirm tread depth on all tyres.
            </p>
            </div>
        </div>
        <div class="mt-0 md:col-span-2">
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <div class="col-span-3 sm:col-span-3">
                        @php
                            $disabled = $url_link ? 'disabled' : '';
                            $disabled = false;
                        @endphp
                        <fieldset>
                            <div class="mt-1 -space-y-px bg-white rounded-md shadow-sm">
                                {{-- <div>
                                    <label for="card-number" class="sr-only">Card number</label>
                                    <input
                                    type="text" name="card-number" id="card-number" class="relative block w-full bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-t-md focus:z-10 sm:text-sm" placeholder="Card number">
                                </div> --}}
                                <div class="flex -space-x-px">
                                    <div class="relative flex-1 block w-1/2 w-full min-w-0 text-center">
                                        <span type="text" class="relative block w-full bg-transparent border-gray-300 rounded-none rounded-tl-md focus:z-10 sm:text-sm">
                                            N/S
                                        </span>
                                    </div>
                                    <div class="flex-1 min-w-0 text-center">
                                        <span type="text" class="relative block w-full bg-transparent border-gray-300 rounded-none rounded-tr-md focus:z-10 sm:text-sm">
                                            O/S
                                        </span>
                                    </div>
                                </div>
                                <div class="flex -space-x-px">
                                    <div class="flex-1 w-1/2 min-w-0">
                                        @if ($url_link)
                                            <input
                                                type="text"
                                                name="ns_1"
                                                value="{{ old('ns_1', ($editing ? $checkListMilk->ns_1 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                disabled
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                            ></input>
                                        @else
                                            <input
                                                type="text"
                                                name="ns_1"
                                                value="{{ old('ns_1', ($editing ? $checkListMilk->ns_1 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                            ></input>
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        @if ($url_link)
                                            <input
                                                type="text"
                                                name="os_1"
                                                value="{{ old('os_1', ($editing ? $checkListMilk->os_1 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                disabled
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                            ></input>
                                        @else
                                            <input
                                                type="text"
                                                name="os_1"
                                                value="{{ old('os_1', ($editing ? $checkListMilk->os_1 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                            ></input>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex -space-x-px">
                                    <div class="flex-1 w-1/2 min-w-0">
                                        @if($url_link)
                                            <input
                                                type="text"
                                                name="ns_2"
                                                value="{{ old('ns_2', ($editing ? $checkListMilk->ns_2 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                required
                                                disabled
                                            ></input>
                                        @else
                                            <input
                                                type="text"
                                                name="ns_2"
                                                value="{{ old('ns_2', ($editing ? $checkListMilk->ns_2 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                                required
                                            ></input>
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        @if($url_link)
                                            <input
                                                type="text"
                                                name="os_2"
                                                value="{{ old('os_2', ($editing ? $checkListMilk->os_2 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                disabled
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                            ></input>
                                        @else
                                            <input
                                                type="text"
                                                name="os_2"
                                                value="{{ old('os_2', ($editing ? $checkListMilk->os_2 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                            ></input>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex -space-x-px">
                                    <div class="flex-1 w-1/2 min-w-0">
                                        @if($url_link)
                                            <input
                                                type="text"
                                                name="ns_3"
                                                value="{{ old('ns_3', ($editing ? $checkListMilk->ns_3 : '')) }}"
                                                maxlength="255"
                                                disabled
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                            ></input>
                                        @else
                                            <input
                                                type="text"
                                                name="ns_3"
                                                value="{{ old('ns_3', ($editing ? $checkListMilk->ns_3 : '')) }}"
                                                maxlength="255"
                                                placeholder="mm"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                            ></input>
                                        @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        @if ($url_link)
                                            <input
                                                type="text"
                                                name="os_3"
                                                value="{{ old('os_3', ($editing ? $checkListMilk->os_3 : '')) }}"
                                                maxlength="255"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                placeholder="mm"
                                                disabled
                                            ></input>
                                        @else
                                            <input
                                                type="text"
                                                name="os_3"
                                                value="{{ old('os_3', ($editing ? $checkListMilk->os_3 : '')) }}"
                                                maxlength="255"
                                                class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-br-md focus:z-10 sm:text-sm"
                                                placeholder="mm"
                                                {{$editing && $checkListMilk->status=='signed' ? 'disabled' : ''}}
                                            ></input>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </fieldset>
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
        <h3 class="text-lg font-medium leading-6 text-gray-900">Tanker Inspection</h3>
        <p class="mt-1 text-sm text-gray-600">
            Please mark any damage on the splat diagram.
        </p>
        </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)
                    <a id = "left-side" class={{ $editing && $checkListMilk->status=='signed' ? 'disabled-link' : '' }} >
                        <img id="left-side-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->ext_splat_left) : asset($hire->tanker->ext_splat_left)}}" alt="left-side-image">
                    </a>
                    @else
                    <img id="left-side-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->ext_splat_left) : asset($hire->tanker->ext_splat_left)}}" alt="left-side-image">
                    @endif
                    <input                    
                    id = "left-side-image-form" name = 'ext_splat_left' hidden value = "{{$editing ? $checkListMilk->ext_splat_left : $hire->tanker->ext_splat_left}}"/>
                </div>
            </div>
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)
                    <a id = "front-side" class={{ $editing && $checkListMilk->status=='signed' ? 'disabled-link' : '' }}>
                        <img id="front-side-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->ext_splat_front) : asset($hire->tanker->ext_splat_front)}}" alt="front-side-image">
                    </a>
                    @else
                    <img id="front-side-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->ext_splat_front) : asset($hire->tanker->ext_splat_front)}}" alt="front-side-image">
                    @endif
                    <input
                    id = "front-side-image-form" name = 'ext_splat_front' hidden value = "{{$editing ? $checkListMilk->ext_splat_front : $hire->tanker->ext_splat_front}}" />
                </div>
            </div>

            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)
                    <a id = "back-side" class={{ $editing && $checkListMilk->status=='signed' ? 'disabled-link' : '' }} >
                        <img id="back-side-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->ext_splat_rear) : asset($hire->tanker->ext_splat_rear)}}" alt="back-side-image">
                    </a>
                    @else
                    <img id="back-side-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->ext_splat_rear) : asset($hire->tanker->ext_splat_rear)}}" alt="back-side-image">
                    @endif
                    <input
                        id = "back-side-image-form" name = 'ext_splat_rear' hidden
                        value = "{{$editing ? $checkListMilk->ext_splat_rear : $hire->tanker->ext_splat_rear}}"
                    />
                </div>
            </div>
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)
                    <a id = "right-side" class={{ $editing && $checkListMilk->status=='signed' ? 'disabled-link' : '' }}>
                        <img id="right-side-image" class="mx-auto"
                        src="{{$editing ? asset($checkListMilk->ext_splat_right) : asset($hire->tanker->ext_splat_right)}}"
                        alt="right-side-image"></a>
                    @else
                    <img id="right-side-image" class="mx-auto"
                        src="{{$editing ? asset($checkListMilk->ext_splat_right) : asset($hire->tanker->ext_splat_right)}}"
                        alt="right-side-image">
                    @endif
                    <input
                        id = "right-side-image-form" name = 'ext_splat_right' hidden
                        value = "{{$editing ? $checkListMilk->ext_splat_right : $hire->tanker->ext_splat_right}}"
                    />
                </div>
            </div>

            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)    
                    <a id = "internal" class={{ $editing && $checkListMilk->status=='signed' ? 'disabled-link' : '' }}><img id="internal-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->int_splat) : asset($hire->tanker->int_splat)}}" alt="internal-image"></a>
                    @else
                    <img id="internal-image" class="mx-auto" src="{{$editing ? asset($checkListMilk->int_splat) : asset($hire->tanker->int_splat)}}" alt="internal-image">
                    @endif
                    <input
                        id = "internal-image-form" name = 'int_splat' hidden
                        value = "{{$editing ? $checkListMilk->int_splat : $hire->tanker->int_splat}}"
                    />
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
    'editing' => $editing,
    'data' => $editing ? $checkListMilk : null,
    'contract_editable' => $url_link,
    'checklist_editable' => $editing && $checkListMilk->status == 'signed' ? true : false
])
@if($editing)
<span class="text-sm font-medium font-bold text-gray-600 cursor-pointer up">Scroll up &uarr;</span>
@endif
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    <div class="border-t border-gray-200"></div>
    </div>
</div>

<script>
    var image_saveUrl = '{{route("images.store")}}'
    var asset_url =  "{{env('ASSET_URL')}}/pixie"
    var csrf_token =  "{{ csrf_token() }}"
    var editing = "{{ $editing }}"
    var isSuperAdmin = "{{$isSuperAdmin}}"
    var checkListObj = {!! json_encode($editing ? $checkListMilk : null) !!}
    var flg = "milks";
    var hire = {!! json_encode($hire) !!}
</script>

<script src="{{ asset('js/checklist.js') }}"></script>
<script src="{{ asset('js/signature.js') }}"></script>

