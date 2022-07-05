<div>
    @if ($permission->estado == 1)
        <span class='material-icons btn-success'>done</span>
    @else
        <span class='material-icons btn-danger'>close</span> 
    @endif
    {{ $permission->name }}
</div>
