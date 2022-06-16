<div class="flex flex-col py-12">
    
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-4 inline-block min-w-full sm:px-2 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-center">
            <thead class="border-b bg-gray-800">
              <tr>
                <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                  S.N
                </th>
                <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                  Name
                </th>
                <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                  Address
                </th>
                <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                  Email
                </th>
                <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                  Clothes Size
                </th>
                <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                    Clothes Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                     Number
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                    Clothes Quantity
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                    Image
                  </th>
                  <th scope="col" class="text-sm font-medium text-white px-3 py-4">
                    Message
                  </th>
                  
              </tr>
            </thead class="border-b">
            @foreach ($Sender as $item)
            <tbody>
              <tr class="bg-white border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$item->id}}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">  {{$item->name}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                 {{$item->address}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{$item->email}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                  {{$item->c_size}}
                </td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->c_name}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->phone_number}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->c_quantity}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                    {{$item->message}}
                  </td>
                  <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                   <img src="{{asset('storage/'.$item->image)}}" width="70px" height="70px"  alt="image">
                  </td>
                
                  <td>
                    <a href="{{route('shiping.edit',$item->id) }}"class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
                  </td>
                </tbody>
            @endforeach
            
          </table>
          
        </div>
      </div>
    </div>
    
  