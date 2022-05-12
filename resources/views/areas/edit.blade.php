<x-app-layout>
    <div>
        <h1>Editar areas</h1>
        <br>
        <h4>Como por ejmplo la descripcion o el nombre</h4>
    </div>
    <div>
        <form method="POST" action="{{ route('areas.update', $area) }}">
            @csrf
            @method('PUT')
            <x-jet-label value="{{ __('Nombre') }}"/><br>
            <x-jet-input value="{{ $area->nombre }}" name="nombre"/><br>
            <x-jet-label value="{{ __('Descripcion') }}"/><br>
            <x-jet-input value="{{ $area->descripcion }}" name="descripcion"/><br>
            <x-jet-button>Guardar cambios</x-jet-button>
        </form>
    </div>
</x-app-layout>