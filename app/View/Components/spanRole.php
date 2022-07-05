<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Spatie\Permission\Models\Permission as ModelsPermission;

class spanRole extends Component
{
    public $permission;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($permission)
    {
        $this->permission = $permission;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.span-role');
    }
}
