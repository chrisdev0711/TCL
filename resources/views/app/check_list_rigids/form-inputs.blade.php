@php
    $editing = isset($checkListRigid);
    $url_link = isset($url_link);
    $isSuperAdmin = null;
    if(Auth::user())
        $isSuperAdmin = Auth::user()->isSuperAdmin();
@endphp

{{ csrf_field() }}
<x-inputs.group class="w-full" hidden>
    <x-inputs.select name="checklist_type" label="Checklist Type">
        <option
            value="{{ $check_type }}"
            selected > {{ $check_type == 'On' ? 'On' : 'Off' }}
        </option>
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
                                                id="paintwork"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "paintwork"
                                                {{$editing ? $checkListRigid->paintwork == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="paintwork" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Paintwork</span>
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
                                                id="cab_seat"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "cab_seat"
                                                {{$editing ? $checkListRigid->cab_seat == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="cab_seat" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Cab Seat</span>
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
                                                id="glass_mirrors"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "glass_mirrors"
                                                {{$editing ? $checkListRigid->glass_mirrors == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="glass_mirrors" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Glass / Mirrors </span>
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
                                                id="valves_controls"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "valves_controls"
                                                {{$editing ? $checkListRigid->valves_controls == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="valves_controls" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Valves & Controls</span>
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
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "rear_bumper"
                                                {{$editing ? $checkListRigid->rear_bumper == true ? 'checked' : '' : ''}}
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
                                                id="wings_stays"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "wings_stays"
                                                {{$editing ? $checkListRigid->wings_stays == true ? 'checked' : '' : ''}}
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
                                                id="lights"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "lights"
                                                {{$editing ? $checkListRigid->lights == true ? 'checked' : '' : ''}}
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
                                                id="vaccum_pump"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "vaccum_pump"
                                                {{$editing ? $checkListRigid->vaccum_pump == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="vaccum_pump" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Vaccum Pump</span>
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
                                                id="levels"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "levels"
                                                {{$editing ? $checkListRigid->levels == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="levels" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Levels</span>
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
                                                id="camera_operation"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "camera_operation"
                                                {{$editing ? $checkListRigid->camera_operation == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="camera_operation" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Camera Operation</span>
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
                                                id="cab_inside_out"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "cab_inside_out"
                                                {{$editing ? $checkListRigid->cab_inside_out == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="cab_inside_out" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Cab Inside/Out</span>
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
                                                id="side_guards"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "side_guards"
                                                {{$editing ? $checkListRigid->side_guards == true ? 'checked' : '' : ''}}
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
                                                id="book_pack"
                                                class="hidden toggle-checkbox"
                                                type="checkbox"
                                                {{$url_link ? 'disabled' : ''}}
                                                {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                                name = "book_pack"
                                                {{$editing ? $checkListRigid->book_pack == true ? 'checked' : '' : ''}}
                                            />
                                            <label for="book_pack" class="block w-12 h-6 duration-150 ease-out rounded-full toggle-label transition-color"></label>
                                        </div>
                                        <span class="flex flex-col ml-3" id="availability-label" @click="on = !on; $refs.switch.focus()">
                                            <span class="text-sm font-medium text-gray-900">Book Pack</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-3 mt-6 sm:col-span-3">
                        <label for="last_known_product" class="block text-sm font-medium text-gray-700">Last Known Product</label>
                        <input type="text"
                             value = "{{$editing ? $checkListRigid->last_known_product : ''}}"
                             {{$url_link ? 'disabled' : ''}}
                             {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                             name="last_known_product" id="last_known_product" autocomplete="" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="col-span-3 mt-6 sm:col-span-3">
                        <label for="mileage" class="block text-sm font-medium text-gray-700">Mileage</label>
                        <input type="text" name="mileage"
                        value = "{{$editing ? $checkListRigid->mileage : ''}}"
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                        id="mileage" autocomplete="" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>

                    <div class="col-span-3 mt-6 sm:col-span-3">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Vessel Condition</legend>
                        </div>
                        <div class="mt-4 space-y-4">
                            <div class="flex items-center">
                                <input id="Good" value="Good" name="vessel_condition" type="radio"
                                class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                {{$editing ? $checkListRigid->vessel_condition == 'Good' ? 'checked' : '' : 'checked'}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="Good" class="block ml-3 text-sm font-medium text-gray-700">
                                    Good
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="Average" value="Average"
                                    name="vessel_condition" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->vessel_condition == 'Average' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="Average" class="block ml-3 text-sm font-medium text-gray-700">
                                    Average
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="Poor" value="Poor"
                                    name="vessel_condition" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->vessel_condition == 'Poor' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="Poor" class="block ml-3 text-sm font-medium text-gray-700">
                                    Poor
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="unserviceable"
                                    value="Unserviceable"
                                    name="vessel_condition" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->vessel_condition == 'Unserviceable' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="unserviceable" class="block ml-3 text-sm font-medium text-gray-700">
                                    Unserviceable
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-3 mt-6 sm:col-span-3">
                        <div>
                            <legend class="text-base font-medium text-gray-900">Fuel Level</legend>
                        </div>
                        <div class="mt-4 space-y-4">
                            <div class="flex items-center">
                                <input id="Empty" value="Empty" name="fuel_level" type="radio"
                                class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                {{$editing ? $checkListRigid->fuel_level == 'Empty' ? 'checked' : '' : 'checked'}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="Empty" class="block ml-3 text-sm font-medium text-gray-700">
                                    Empty
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="1/4" value="1/4"
                                    name="fuel_level" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->fuel_level == '1/4' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="1/4" class="block ml-3 text-sm font-medium text-gray-700">
                                    1/4
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="1/2" value="1/2"
                                    name="fuel_level" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->fuel_level == '1/2' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="1/2" class="block ml-3 text-sm font-medium text-gray-700">
                                    1/2
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="3/4"
                                    value="3/4"
                                    name="fuel_level" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->fuel_level == '3/4' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="3/4" class="block ml-3 text-sm font-medium text-gray-700">
                                    3/4
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="Full"
                                    value="Full"
                                    name="fuel_level" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                    {{$editing ? $checkListRigid->fuel_level == 'Full' ? 'checked' : '' : ''}}
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                >
                                <label for="Full" class="block ml-3 text-sm font-medium text-gray-700">
                                    Full
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                        <div class="">
                            <label for="notes" class="block text-sm font-medium text-gray-700">
                                    Notes
                            </label>
                            <div class="mt-1">
                            <textarea
                                id="notes"
                                name="notes"
                        {{$url_link ? 'disabled' : ''}}
                        {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                                rows="3"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{$editing ? $checkListRigid->notes : ''}}</textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Note any damage in items checked above.</p>
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
                    {{-- Column 1 33.3% --}}
                    <script>
                        var int_video_source = "{{ old('int_Video', ($editing ? $checkListRigid->int_video : '')) }}";
                        var ext_video_source = "{{ old('ext_Video', ($editing ? $checkListRigid->ext_video : '')) }}";
                    </script>

                    <div class="col-span-6 align-top sm:col-span-3" style="height : 210px">
                        <video-tag id="internal-video-tag" ></video-tag>
                    </div>
                    {{-- <input
                    {{$url_link ? 'disabled' : ''}}
                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                    name = "int_video" id = "int_video_form"  value = "{{ old('int_video', ($editing ? $checkListRigid->int_video : '')) }}" hidden> --}}
                    <input name = "int_video" id = "int_video_form"  value = "{{ old('int_video', ($editing ? $checkListRigid->int_video : '')) }}" hidden>

                    {{-- Column 2 33.3%--}}
                    <div class="col-span-6 sm:col-span-3"  style="height : 210px">
                        <video-tag id="external-video-tag"></video-tag>
                    </div>
                    {{-- <input
                    {{$url_link ? 'disabled' : ''}}
                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
                     name = "ext_video" id = "ext_video_form" value = "{{ old('ext_video', ($editing ? '/storage/'.$checkListPetrol->ext_video : '')) }}" hidden> --}}
                    <input name = "ext_video" id = "ext_video_form" value = "{{ old('ext_video', ($editing ? '/storage/'.$checkListPetrol->ext_video : '')) }}" hidden>
                    <!-- {{-- Column 3 33.3%--}}
                    <div class="col-span-4 sm:col-span-2" style="visibility:hidden">
                        <img class="mx-auto" src="/img/vid.jpg" alt="">
                    </div> -->
                    {{-- Column 4 100%--}}
                    <div class="col-span-6 sm:col-span-6">
                        <p class="mt-2 text-sm text-gray-500">Tap the video icon to open the video recorder, click the record button to start/stop recording.</p>
                        <p class="mt-2 text-sm text-gray-500">Each video can be up-to X minutes/seconds long.</p>
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
                                src="{{old('cleaning_status', $editing ? ($checkListRigid->cleaning_status && str_contains($checkListRigid->cleaning_status, '/')) ? asset($checkListRigid->cleaning_status) : '/img/camera_icon.png' : '/img/camera_icon.png')}}" alt="cleaning_status_image">
                            <input type="file" id="cleaning_status_image_form" name = 'cleaning_status' hidden
                            value = "{{old('cleaning_status', $editing ? $checkListRigid->cleaning_status : '/img/tanker.jpg')}}" accept="image/*"/>
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
                                    {{$editing ? $checkListRigid->cleaning_check == true ? 'checked' : '' : ''}}
                                    {{$url_link ? 'disabled' : ''}}
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : '' }}
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

                    <fieldset>
                    <div class="mt-1 -space-y-px bg-white rounded-md shadow-sm">
                        {{-- <div>
                        <label for="card-number" class="sr-only">Card number</label>
                        <input type="text" name="card-number" id="card-number" class="relative block w-full bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-t-md focus:z-10 sm:text-sm" placeholder="Card number">
                        </div> --}}
                        <div class="flex -space-x-px">
                        <div class="relative flex-1 block w-full min-w-0 text-center">
                            <span type="text" class="relative block w-full bg-transparent border-gray-300 rounded-none rounded-tl-md rounded-tr-md focus:z-10 sm:text-sm">
                                Tyres
                            </span>
                        </div>
                        </div>
                        <div class="flex -space-x-px">
                        <div class="flex-1 w-1/4 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_1_1"
                                    value="{{ old('tyres_1_1', ($editing ? $checkListRigid->tyres_1_1 : '')) }}"
                                    maxlength="255"
                                    disabled
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_1_1"
                                    value="{{ old('tyres_1_1', ($editing ? $checkListRigid->tyres_1_1 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <input type="text" name="" id="" class="relative block w-full bg-gray-100 border-gray-300 rounded-none focus:z-10 sm:text-sm" disabled>
                        </div>
                        <div class="flex-1 min-w-0">
                            <input type="text" name="" id="" class="relative block w-full bg-gray-100 border-gray-300 rounded-none focus:z-10 sm:text-sm" disabled>
                        </div>
                        <div class="flex-1 min-w-0">
                            <!-- <input type="text" name="tyres_1_4" id="tyres_1_4" class="relative block w-full bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="mm"> -->
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_4_1"
                                    value="{{ old('tyres_4_1', ($editing ? $checkListRigid->tyres_4_1 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_4_1"
                                    value="{{ old('tyres_4_1', ($editing ? $checkListRigid->tyres_4_1 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        </div>
                        <div class="flex -space-x-px">
                        <div class="flex-1 w-1/4 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_1_2"
                                    value="{{ old('tyres_1_2', ($editing ? $checkListRigid->tyres_1_2 : '')) }}"
                                    maxlength="255"
                                    disabled
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_1_2"
                                    value="{{ old('tyres_1_2', ($editing ? $checkListRigid->tyres_1_2 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_2_1"
                                    value="{{ old('tyres_2_1', ($editing ? $checkListRigid->tyres_2_1 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_2_1"
                                    value="{{ old('tyres_2_1', ($editing ? $checkListRigid->tyres_2_1 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_3_1"
                                    value="{{ old('tyres_3_1', ($editing ? $checkListRigid->tyres_3_1 : '')) }}"
                                    maxlength="255"
                                    disabled
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_3_1"
                                    value="{{ old('tyres_3_1', ($editing ? $checkListRigid->tyres_3_1 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_4_2"
                                    value="{{ old('tyres_4_2', ($editing ? $checkListRigid->tyres_4_2 : '')) }}"
                                    maxlength="255"
                                    disabled
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_4_2"
                                    value="{{ old('tyres_4_2', ($editing ? $checkListRigid->tyres_4_2 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        </div>
                        <div class="flex -space-x-px">
                        <div class="flex-1 w-1/4 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_1_3"
                                    value="{{ old('tyres_1_3', ($editing ? $checkListRigid->tyres_1_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_1_3"
                                    value="{{ old('tyres_1_3', ($editing ? $checkListRigid->tyres_1_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_2_2"
                                    value="{{ old('tyres_2_2', ($editing ? $checkListRigid->tyres_2_2 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_2_2"
                                    value="{{ old('tyres_2_2', ($editing ? $checkListRigid->tyres_2_2 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_3_2"
                                    value="{{ old('tyres_3_2', ($editing ? $checkListRigid->tyres_3_2 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_3_2"
                                    value="{{ old('tyres_3_2', ($editing ? $checkListRigid->tyres_3_2 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_4_3"
                                    value="{{ old('tyres_4_3', ($editing ? $checkListRigid->tyres_4_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_4_3"
                                    value="{{ old('tyres_4_3', ($editing ? $checkListRigid->tyres_4_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        </div>
                        <div class="flex -space-x-px">
                        <div class="flex-1 w-1/4 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_1_4"
                                    value="{{ old('tyres_1_4', ($editing ? $checkListRigid->tyres_1_4 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_1_4"
                                    value="{{ old('tyres_1_4', ($editing ? $checkListRigid->tyres_1_4 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_2_3"
                                    value="{{ old('tyres_2_3', ($editing ? $checkListRigid->tyres_2_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_2_3"
                                    value="{{ old('tyres_2_3', ($editing ? $checkListRigid->tyres_2_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_3_3"
                                    value="{{ old('tyres_3_3', ($editing ? $checkListRigid->tyres_3_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_3_3"
                                    value="{{ old('tyres_3_3', ($editing ? $checkListRigid->tyres_3_3 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
                                ></input>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            @if($url_link)
                                <input
                                    type="text"
                                    name="tyres_4_4"
                                    value="{{ old('tyres_4_4', ($editing ? $checkListRigid->tyres_4_4 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    disabled
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                ></input>
                            @else
                                <input
                                    type="text"
                                    name="tyres_4_4"
                                    value="{{ old('tyres_4_4', ($editing ? $checkListRigid->tyres_4_4 : '')) }}"
                                    maxlength="255"
                                    placeholder="mm"
                                    style="margin-bottom:0px !important"
                                    class="relative block w-full py-2 bg-transparent border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-"
                                    {{ $editing && $checkListRigid->status=='signed' ? 'disabled' : ''}}
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
                    <a id = "left-side" class={{ $editing && $checkListRigid->status=='signed' ? 'disabled-link' : '' }}>
                        <img id="left-side-image"
                            class="mx-auto"
                            src="{{$editing ? asset($checkListRigid->ext_splat_left) : asset($hire->tanker->ext_splat_left)}}" alt="left-side-image">
                    </a>
                    @else
                    <img id="left-side-image"
                            class="mx-auto"
                            src="{{$editing ? asset($checkListRigid->ext_splat_left) : asset($hire->tanker->ext_splat_left)}}" alt="left-side-image">
                    @endif                            
                    <input
                            {{$url_link ? 'disabled' : ''}}
                    id = "left-side-image-form" name = 'ext_splat_left' hidden value = "{{$editing ? $checkListRigid->ext_splat_left : $hire->tanker->ext_splat_left}}"/>
                </div>
            </div>
            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)
                    <a id = "front-side" class={{ $editing && $checkListRigid->status=='signed' ? 'disabled-link' : '' }}>
                        <img id="front-side-image"
                            class="mx-auto"
                            src="{{$editing ? asset($checkListRigid->ext_splat_front) : asset($hire->tanker->ext_splat_front)}}" alt="front-side-image">
                    </a>
                    @else
                    <img id="front-side-image"
                            class="mx-auto"
                            src="{{$editing ? asset($checkListRigid->ext_splat_front) : asset($hire->tanker->ext_splat_front)}}" alt="front-side-image">
                    @endif
                    <input {{$url_link ? 'disabled' : ''}} id = "front-side-image-form" name = 'ext_splat_front' hidden value = "{{$editing ? $checkListRigid->ext_splat_front : $hire->tanker->ext_splat_front}}" />
                </div>
            </div>

            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                    @if(!$url_link)
                    <a id = "back-side" class={{ $editing && $checkListRigid->status=='signed' ? 'disabled-link' : '' }}>
                        <img id="back-side-image"
                            class="mx-auto"
                            src="{{$editing ? asset($checkListRigid->ext_splat_rear) : asset($hire->tanker->ext_splat_rear)}}" alt="back-side-image"></a>
                    @else
                    <img id="back-side-image"
                            class="mx-auto"
                            src="{{$editing ? asset($checkListRigid->ext_splat_rear) : asset($hire->tanker->ext_splat_rear)}}" alt="back-side-image">
                    @endif
                    <input
                            {{$url_link ? 'disabled' : ''}} id = "back-side-image-form" name = 'ext_splat_rear' hidden
                        value = "{{$editing ? $checkListRigid->ext_splat_rear : $hire->tanker->ext_splat_rear}}"
                    />
                </div>
            </div>

            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                        @if(!$url_link)
                        <a id = "right-side" class={{ $editing && $checkListRigid->status=='signed' ? 'disabled-link' : '' }}>
                            <img id="right-side-image"
                                class="mx-auto"
                                src="{{$editing ? asset($checkListRigid->ext_splat_right) : asset($hire->tanker->ext_splat_right)}}"
                                alt="right-side-image">
                        </a>
                        @else
                        <img id="right-side-image"
                                class="mx-auto"
                                src="{{$editing ? asset($checkListRigid->ext_splat_right) : asset($hire->tanker->ext_splat_right)}}"
                                alt="right-side-image">
                        @endif
                    <input
                            {{$url_link ? 'disabled' : ''}} id = "right-side-image-form" name = 'ext_splat_right' hidden
                        value = "{{$editing ? $checkListRigid->ext_splat_right : $hire->tanker->ext_splat_right}}"
                    />
                </div>
            </div>

            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                <div class="box-content border-2 border-gray-300 rounded">
                        @if(!$url_link)
                        <a id = "internal" class={{ $editing && $checkListRigid->status=='signed' ? 'disabled-link' : '' }}>
                            <img id="internal-image"
                                class="mx-auto"
                                src="{{$editing ? asset($checkListRigid->int_splat) : asset($hire->tanker->int_splat)}}" alt="internal-image">
                        </a>
                        @else
                        <img id="internal-image"
                                class="mx-auto"
                                src="{{$editing ? asset($checkListRigid->int_splat) : asset($hire->tanker->int_splat)}}" alt="internal-image">
                        @endif
                    <input
                            {{$url_link ? 'disabled' : ''}} id = "internal-image-form" name = 'int_splat' hidden
                        value = "{{$editing ? $checkListRigid->int_splat : $hire->tanker->int_splat}}"
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
    'data' => $editing ? $checkListRigid : null,
    'contract_editable' => $url_link,
    'checklist_editable' => $editing && $checkListRigid->status == 'signed' ? true : false
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
    var checkListObj = {!! json_encode($editing ? $checkListRigid : null) !!}
    var flg = "rigids";
    var hire = {!! json_encode($hire) !!}
</script>

<script src="{{ asset('js/checklist.js') }}"></script>
<script src="{{ asset('js/signature.js') }}"></script>
