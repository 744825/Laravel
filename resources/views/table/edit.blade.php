<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">{{$tableName}}}</h2>
      <p class="mb-4 font-bold">Please add your entry below</p>
    </header>
@php
$formendpoint = "$endpoint" . "/update"
@endphp
    <form method="POST" action="{{url ($formendpoint)}}">
      @csrf


@foreach ($colName as $col)

@if ($loop->first)
<div class="mb-6">
        <label for="{{$col}}" class="inline-block text-lg mb-2">{{$col}}</label>
        <input type="text" readonly="readonly" class="border border-gray-200 rounded p-2 w-full" name="{{$col}}" value="{{$recordValue[$col]}}" />
        <p class="text-orange-200 text-xs mt-1">Non Editable</p>
        @error($col)
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
@else
<div class="mb-6">
        <label for="{{$col}}" class="inline-block text-lg mb-2">{{$col}}</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="{{$col}}" value="{{$recordValue[$col]}}" />

        @error($col)
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
@endif

@endforeach

      {{-- <div class="mb-6">
        <label for="BOOKS_OF_A" class="inline-block text-lg mb-2">BOOKS_OF_A</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="BOOKS_OF_A" value="{{$BookAcc->BOOKS_OF_A}}" />

        @error('BOOKS_OF_A')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="SECTION_ID" class="inline-block text-lg mb-2">SECTION_ID</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="SECTION_ID" value="{{$BookAcc->SECTION_ID}}" />

        @error('SECTION_ID')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="BOOKS_OF_2" class="inline-block text-lg mb-2">BOOKS_OF_2</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="BOOKS_OF_2" value="{{$BookAcc->BOOKS_OF_2}}" />

        @error('BOOKS_OF_2')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

  <div class="mb-6">
        <label for="INSTITUTE" class="inline-block text-lg mb-2">INSTITUTE</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="INSTITUTE" value="{{$BookAcc->INSTITUTE}}" />

        @error('INSTITUTE')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>



  <div class="mb-6">
        <label for=" LOCATION" class="inline-block text-lg mb-2"> LOCATION</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="LOCATION" value="{{$BookAcc->LOCATION}}" />

        @error('LOCATION')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div> --}}

      <div class="mb-6">
        <button type="submit" style="background-color:blue" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
         submit
        </button>
      </div>
    </form>
  </x-card>
</x-layout>








