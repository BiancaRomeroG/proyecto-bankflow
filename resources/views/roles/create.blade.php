<x-app-layout>
    <h1>Crear Roles</h1>

    <form method="POST" action="{{ route('roles.store') }}">
        @csrf
        <div>
            <x-jet-label for="nombre_rol" value="{{ __('Nombre rol') }}"/>
            <x-jet-input id="nombre_rol" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')"></x-jet-input>

            <x-jet-label for="decripcion" value="{{ __('Descripcion') }}"/>
            <x-jet-input id="decripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('decripcion')"></x-jet-input>

            <x-jet-button>Registrar</x-jet-button>
        </div>
    </form>
</x-app-layout>