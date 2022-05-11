@section('title', 'Editar roles')
<x-app-layout>
    <div>
        <h1>Editar roles</h1>
        <br>
        <h4>Como por ejmplo la descripcion o el nombre</h4>
    </div>
    <div>
        <form method="POST" action="{{ route('roles.update', $rol) }}">
            @csrf
            @method('PUT')
            <x-jet-label value="{{ __('Nombre') }}"/><br>
            <x-jet-input value="{{ $rol->nombre }}" name="nombre"/><br>
            <x-jet-label value="{{ __('Descripcion') }}"/><br>
            <x-jet-input value="{{ $rol->descripcion }}" name="descripcion"/><br>
            <x-jet-button>Guardar cambios</x-jet-button>
        </form>
    </div>
</x-app-layout>