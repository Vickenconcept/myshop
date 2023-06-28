<x-app-layout>

    <div class="bg-white py-10 px-3">
        <a href="{{ route('AddProduct') }}" class="text-white bg-blue-700 hover:underline px-4 py-1 box">Add product</a>
    </div>

    <section class="mt-20">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 w-1/5 text-gray-700 ">Name</th>
                    <th class="px-4 py-2 w-1/5 text-gray-700 ">Description</th>
                    <th class="px-4 py-2 w-1/5 text-gray-700 ">Url</th>
                    <th class="px-4 py-2 w-1/5 text-gray-700 ">Price</th>
                    <th class="px-4 py-2 w-1/5 text-gray-700 ">view</th>
                    <th class="px-4 py-2 w-1/5 text-gray-700 ">statues</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @if($product->isEmpty())
                <tr class="bg-white">
                    <td class="px-4 py-5 text-gray-200 text-4xl text-center " colspan="6">
                        <i>No data</i>
                    </td>
                </tr>
                @else
                @foreach($product as $product)
                <tr class="bg-white">
                    <td class="px-4  w-1/5 text-gray-600 text-sm "> {{ $product->name }} </td>
                    <td class="px-4  w-1/5 text-gray-600 text-sm ">{{ $product->description }}</td>
                    <td class="px-4  w-1/5 text-gray-600 text-sm ">${{ $product->price }}</td>
                    <td class="px-4  w-1/5 text-gray-600 text-sm  font-thin">{{ $product->image }}</td>
                    <td class="px-4  w-1/5 text-gray-600 text-sm "><img src="{{ $product->image }}" alt="image" class="w-20 h-20 bg-cover"></td>
                    <td class="px-4  w-1/5 text-gray-600 text-sm  ">
                        <div class="grid grid-cols-2">
                            <form action="{{ route('product.edit', ['product' => $product->id]) }}" method="get" enctype="multipart/form-data">
                                @csrf
                                <button class="text-white bg-blue-700 hover:underline p-2 rounded-full"></button>
                            </form>
                            <form action="{{ route('product.destroy', ['product' => $product]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-white bg-red-700 hover:underline p-2 rounded-full "></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif

                <!-- Add more rows as needed -->
            </tbody>
        </table>

    </section>
</x-app-layout>
