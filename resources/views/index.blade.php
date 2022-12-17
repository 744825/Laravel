<x-layout>
  @if (!Auth::check())
    @include('partials._hero')
   
  @endif


  @if (Auth::check())
   <x-tabledropdown>
    </x-tabledropdown>
  @endif

</x-layout>
