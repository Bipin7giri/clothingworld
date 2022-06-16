<main>
    <div class="max-w-7xi mx-auto py-6 sm:px-6 lg:px-8">
        <script src="https://cdn.tailwindcss.com"></script>
        <div class="md:grid md:grid-cols-3 md:gap-6 px-6">
            <h1 class="text-2xl	 font-bold text-gray-900">Receiver  Information</h1>
            
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="w-full">
                    @if (session()->has('message'))
                    <div class="text-emerald-600">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                        <div class="grid grid-cols-2 gap-4 ">
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="name">Name</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                     type="text"  wire:model="name"
                                    autocomplete="name">@error('name') <span class="text-red-600">{{ $message
                                    }}</span> @enderror
                            </div>
                       
                         
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Email</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                     type="email" name="email" wire:model="email"
                                    autocomplete="name">
                                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block font-bold text-lg text-gray-600" for="pasword">Contact Number</label>
                                <input
                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                     type="number" name="phone_number" wire:model="phone_number"
                                    />
                                @error('phone_number') <span class="text-red-600">{{ $message }}</span> @enderror
                            </div>
                         
                        
                    </div>
                    <div
                    class=" justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-b1-md sm:rounded-br-md">
                    <button type="submit"
                        class=" inline-block font-bold px-6 py-2.5 bg-purple-900 text-white  text-md leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                        wire:click="save()">
                        Save
                    </button>
                </div>
                </div>
               
            </div>

            <!-- <form wire:submit.prevent="save">
            <label class="block font-bold text-lg text-gray-600" for="name">Name</label>
                
                <input type="text" wire:model="name" id="name" required>

                <label class="block font-bold text-lg text-gray-600" for="email">Email</label>
                
                <input type="email" wire:model="email" id="email" required>
                <label class="block font-bold text-lg text-gray-600" for="contact" >Contact</label>
                <input type="number" wire:model="phone_number" id="contact" required>

                <button type="submit">Save Contact</button>

            </form> -->
        </div>
           
</main>
</div>