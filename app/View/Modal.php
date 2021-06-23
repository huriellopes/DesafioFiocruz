<?php

namespace App\View;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * @var string
     */
    public $idModal;

    /**
     * Modal constructor.
     * @param string $idModal
     */
    public function __construct(string $idModal)
    {
        $this->idModal = $idModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
