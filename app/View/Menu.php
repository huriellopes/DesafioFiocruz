<?php

namespace App\View;

use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * @var string
     * @var string|null
     */
    public $name;
    public $route;

    /**
     * MenuComponent constructor.
     * @param string $name
     * @param string|null $route
     */
    public function __construct(string $name, ?string $route)
    {
        $this->name = $name;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
