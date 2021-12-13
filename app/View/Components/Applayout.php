<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Applayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'SISATU';
    }

    public function render()
    {
        return view('layouts.app');
    }
}
