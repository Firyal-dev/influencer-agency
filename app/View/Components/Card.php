<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $icon;
    public $title;
    public $description;
    public $style;

    public function __construct($icon, $title, $description, $style)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
        $this->style = $style;
    }

    public function render()
    {
        return view('components.card');
    }
}
