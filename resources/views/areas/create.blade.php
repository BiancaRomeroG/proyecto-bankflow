<x-app-layout>
    <h1>Crear Areas</h1>

    <form method="POST" action="{{ route('areas.store') }}">
        @csrf
        <div>
            <x-jet-label for="nombre_area" value="{{ __('Nombre area') }}"/>
            <x-jet-input id="nombre_area" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"></x-jet-input>

            <x-jet-label for="decripcion" value="{{ __('Descripcion') }}"/>
            <x-jet-input id="decripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('decripcion')"></x-jet-input>

            <x-jet-button>Registrar</x-jet-button>
        </div>
    </form>
</x-app-layout>