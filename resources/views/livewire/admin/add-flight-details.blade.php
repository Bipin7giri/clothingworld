<div>

    <script src="https://cdn.tailwindcss.com"></script>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('List of SportCenter') }}
            </h2>
        </div>
    </x-slot>
    <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
        <div class="max-w-none mx-auto sm:px-6 lg:px-8 mt-5">
            <div>
                <main>
                      
                                          <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                                                    <div class="md:grid md:grid-cols-3 md:gap-6">
                                                                <div class="md:col-span-1 flex justify-between">
                                                                                <div class="px-4 sm:px-0">
                                                                                         <h3 class="text-lg font-medium text-gray-900">SportCenter</h3>
                                                                                            <p class="mt-1 text-sm text-gray-600">              Add Details of your Sport Center
                                                                                           </p>
                                                                                    </div>
                                                                                 </div>
        
                                               <div class="mt-5 md:mt-0 md:col-span-2">
                                                  <form wire:submit.prevent="save">
        
                                                                   <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="hidden"  wire:model="hiddenId">
                                                             <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                                                                  <div class="grid grid-cols-6 gap-6">
                                                                       <div class="col-span-6 sm:col-span-4">
                                                                          <h3 class="inline-block mb-2 text-lg font-medium text-gray-900">Administrator Information</h3>
                                                                <div class="col-span-6 sm:col-span-4">
                                                                
                                                                         @if($this->hiddenId)
                                                                          <h3 class=" inline-block mb-2 text-lg font-medium text-gray-900">Editing Area: {{$flight_name}}</h3>
                                                                     @else
                                                                          <h3 class=" inline-block mb-2 text-lg font-medium text-gray-900">Enter SportCenter Details</h3>
                                                                      @endif
                                                                         <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="text"  placeholder="Name of Sportcenter" wire:model="flight_name">
                                                                                  @error('name')
                                                                                         <span class="text-rose-600">{{ $message }}</span>
                                                                                    @enderror           
                                                                       </div>

                                                         <div class="col-span-6 sm:col-span-4">
                                                                 <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="text" placeholder="Location"  wire:model="flight_id">
                                                             </div>
                                                             <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="date" placeholder="Location"  wire:model="arrival_date">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="date" placeholder="Location"  wire:model="departure_date">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="time" placeholder="Location"  wire:model="arrival_time">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="time" placeholder="Location"  wire:model="departure_time">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="text" placeholder="Location"  wire:model="to">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="text" placeholder="Location"  wire:model="from">
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="text" placeholder="Location"  wire:model="seats">
                                                            </div>
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"  type="file" placeholder="Location"  wire:model="images">
                                                            </div>

                                                         
                                                             


                                                 <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow   sm:rounded-bl-md sm:rounded-br-md">
                                                             <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                                             Add</button>
                                                    </div>
                        </form>
                 </div>
        </div>
        
      </div>
                </main>


                </div>

                <div class="sm:px-6 w-full">
                    <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                        <div class="mt-7 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead>
                                    <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    SN
                                                </p>

                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    SportCenter
                                                </p>

                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    Area
                                                </p>

                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-right text-gray-700 mr-2">
                                                    Logo
                                                </p>

                                            </div>
                                        </th>
                                               <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    Location
                                                </p>

                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    short_description
                                                </p>

                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                    Category
                                                </p>

                                            </div>
                                        </th>
                                        <th>
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                 Edit
                                                </p>

                                            </div>
                                        </th>
                                    <tr>
                                </thead>
                                @foreach ($flightDetails as $flightDetail)
                                    <tbody>
                                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">

                                            <td class="">
                                                <div class="flex items-center pl-5">
                                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">
                                                        {{ $flightDetail->flight_id }}
                                                    </p>

                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->flight_name }}
                                                    </p>
                                                </div>
                                            </td>
                                            
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->arrival_date }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">  
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->arrival_time}}
                                                    </p>
                                                </div>
                                            </td>
                                             <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->departure_date }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->departure_time }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->to }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                        {{ $flightDetail->from }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                      </svg>
                                                    <p class="text-sm leading-none text-gray-600 ml-2">
                                                     
                                                        {{ $flightDetail->seats}}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                <img src="{{ asset('storage/' . $flightDetail->images) }}" alt="" class="object-scale-down h-48 w-96" alt="">
                                                </div>
                                            </td>


                                            <td>
                                                <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" wire:click="editflight({{$flightDetail->id}})">Edit</button>
                                            </td>
                                        </tr>


                                    </tbody>
                                @endforeach
                            </table>
                            {{-- <div class="mt-10 ">{{$sportCenters->links()}}</div> --}}

                        </div>
                        <div class="p-2">
                            <button type="button"
                                class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"><a
                                    href="javascript:void(0)" wire:click="addFlightDetails()">Add new Sport Center</a></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
