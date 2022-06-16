<header class="bg-white shadow sm:grid-cols-1">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Donner information</h2>
        <div class="hidden space-x-8 sm:-my-px sm:ml-3 sm:flex">
          <a class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out" href="">Confirmed</a>
        </div>
        {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-3 sm:flex">
          <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="">Dispatched</a>
         </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-3 sm:flex">
          <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="">Cancelled
           <i class="fa fa-info-circle ml-1" data-work="tooltip" title="All cancelled orders without being dispatched" placement="top">
  
          </i>
        </a>
      </div>
      <div class="hidden space-x-8 sm:-my-px sm:ml-3 sm:flex">
        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="">Returned
          <i class="fa fa-info-circle ml-1" data-work="tooltip" title="All cancelled orders without being dispatched" data-placement="top">
  
          </i>
        </a>
      </div> --}}
      <div class="hidden space-x-8 sm:-my-px sm:ml-3 sm:flex">
        <a class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out" href="">Receiver</a>
      </div>
    </div>
    </div>
  </header>
  <div class="max-w-7xl w-full mx-auto sm:px-6 lg:px-8 py-5">
<div class="align-middle sm:rounded-md  inline-block w-full overflow-hidden bg-white shadow p-3">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-5">
    <script src="https://cdn.tailwindcss.com"></script>
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="border-b">
              
                    
             
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  User_ID
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                   Address
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Clothes Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Clothes Size
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Email
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Phone Number
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                      Message
                  </th>
                 
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Clothes Quantity
              </th>
                </tr>
              </thead>
              @foreach ($senderinfo as $item)
              <tbody>
                <tr class="border-b">
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$item->user_id}}</td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->name}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->address}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->c_name}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->c_size}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->email}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->phone_number}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->message}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->c_quantity}}
                  </td>
                  
            
                </tr>
              </tbody>
              @endforeach
            </table>
            <div class="p-5 flex items-center">
          
              <div>
                {{-- <form>
                  <select name="assigned_to" class="py-2 px-8 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="">
                  <option value>Select Delivery</option>
                  <optgroup label="Delivery Agency">
                    <option value="1">NCM</option>
                  </optgroup>
                </select> --}}
                {{-- <button class="bg-green-400 hover:bg-grey text-white text-xs font-bold p-2 rounded inline-flex items-center">
                  <i class="fas fa-download mr-1"></i>
                  <span>Export</span>
                </button>
                </form> --}}
              </div>      
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<br>
<br>
<header class="bg-white shadow sm:grid-cols-1">
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <div class="flex">
          <h1 class="font-semibold text-xl text-gray-800 leading-tight"> Receiver information</h1>
      </div>
</div>
</header><br>
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="border-b">
          <tr>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Name
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
              Phone Number
            </th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
               Email
            </th>
           
          </tr>
        </thead>
        @foreach ($receiver as $item)
        <tbody>
          <tr class="border-b">

            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$item->name}}
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$item->phone_number}}
            </td>
            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$item->email}}
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>       
      </div>
    </div>
</div>
 </div>
  </div>