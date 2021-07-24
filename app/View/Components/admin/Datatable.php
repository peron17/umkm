<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class Datatable extends Component
{
    public $id;

    public $columns;

    public $route;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $columns, $route)
    {
        $this->id = $id;
        $this->columns = $columns;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.datatable');
    }
}
