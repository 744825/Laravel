<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Book Account Master</h2>
      <p class="mb-4 font-bold">Please add your entry below</p>
    </header>

    <form method="POST" action="{{url ('bookaccount/addBookAccount')}}">
      @csrf

      <div class="mb-6">
        <label for="BOOKS_OF_A" class="inline-block text-lg mb-2">BOOKS_OF_A</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="BOOKS_OF_A" value="{{old('BOOKS_OF_A')}}" />

        @error('BOOKS_OF_A')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="SECTION_ID" class="inline-block text-lg mb-2">SECTION_ID</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="SECTION_ID" value="{{old('SECTION_ID')}}" />

        @error('SECTION_ID')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="BOOKS_OF_2" class="inline-block text-lg mb-2">BOOKS_OF_2</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="BOOKS_OF_2" value="{{old(' BOOKS_OF_2')}}" />

        @error('BOOKS_OF_2')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

  <div class="mb-6">
        <label for="INSTITUTE" class="inline-block text-lg mb-2">INSTITUTE</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="INSTITUTE" value="{{old('INSTITUTE')}}" />

        @error('INSTITUTE')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>



  <div class="mb-6">
        <label for=" LOCATION" class="inline-block text-lg mb-2"> LOCATION</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="LOCATION" value="{{old('LOCATION')}}" />

        @error('LOCATION')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
         submit
        </button>
      </div>
    </form>
  </x-card>
</x-layout>






