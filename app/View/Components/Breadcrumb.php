<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * The breadcrumb links.
     *
     * @var array
     */
    public array $crumbs;

    /**
     * URL for the Home link (default to route('home')).
     *
     * @var string
     */
    public string $homeUrl;

    /**
     * Create a new component instance.
     *
     * @param  array  $crumbs
     * @param  string|null  $homeUrl
     * @return void
     */
    public function __construct(array $crumbs = [], ?string $homeUrl = null)
    {
        $this->crumbs = $crumbs;
        $this->homeUrl = $homeUrl ?: route('admin.dashboard');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // Returns resources/views/components/breadcrumb.blade.php
        return view('components.bread-crumb');
    }
}
