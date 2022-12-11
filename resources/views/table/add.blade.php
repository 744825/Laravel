<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">{{$tableName}}</h2>
      <p class="mb-4 font-bold">Please add your entry below</p>
    </header>
@php
$formendpoint = "$endpoint" . "/add"
@endphp
    <form method="POST" action="{{url ($formendpoint)}}">
      @csrf
@foreach ($colName as $col)
<div class="mb-6">
        <label for="{{$col}}" class="inline-block text-lg mb-2">{{$col}}</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="{{$col}}" value="{{old($col)}}" />

        @error($col)
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
@endforeach


      <div class="mb-6">
        <button type="submit" class="bg-lavarel text-white rounded py-2 px-4 hover:bg-black">
         submit
        </button>
      </div>
    </form>
  </x-card>
</x-layout>






