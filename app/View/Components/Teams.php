<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Teams extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public object $teams,
        public object $setting,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.teams');
    }
}
