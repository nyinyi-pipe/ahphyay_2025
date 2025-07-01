<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FlashMessage extends Component
{
    public ?string $message;
    public string $type;

    /**
     * Create a new component instance.
     *
     * @param string|null $message
     * @param string      $type
     */
    public function __construct(string $message = null, string $type = 'success')
    {
        $this->message = $message;
        $allowed = ['success', 'error', 'info', 'warning'];
        $this->type = in_array($type, $allowed) ? $type : 'success';
    }

    public function render()
    {
        return view('components.flash-message');
    }
}
