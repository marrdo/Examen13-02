<x-app-layout>
  <x-slot name="header">
    @if($message = Session::get('success'))
      <p class="text-green-600">{{$message}}</p>
    @endif
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Monuments list') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <pre>{{ json_encode($monumentos,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) }}</pre>
          <div>
            <ul>
              @forelse($monumentos as $monumento)
                {{-- @dd($monumento) --}}
                {{-- @foreach($monumento->phone as $phone) --}}
                {{-- @dd($monumento->phone->numero); --}}
                  <li>{{$monumento->nombre}} -- Tlfn contacto: {{$monumento->phone->numero}}</li>
                {{-- @endforeach --}}
              @empty
                <h2>No hay datos.</h2>
              @endforelse
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>