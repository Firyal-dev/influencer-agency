<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public $text;
    public $url;
    public $type;
    public $icon;
    public $target;
    public $style;

    public function __construct($text = null, $url = null, $type = null, $icon = null, $target = null, $style = '')
    {
        $defaultClasses = 'inline-flex items-center justify-center text-base leading-6 whitespace-nowrap rounded-md shadow-sm';

        $this->style = trim($defaultClasses . ' ' . $style);
        $this->text = $text;
        $this->url = $url;
        $this->type = $type;
        $this->icon = $icon;
        $this->target = $target;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link');
    }
}
