<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $icon;
    public $title;
    public $description;
    public $style;
    public $iconSize;
    public $iconWrapper;
    public $titleSize;
    public $titleClass;
    public $descriptionClass;
    public $showHover;
    public $containerClass;
    public $iconColor;
    public $iconBgColor;
    
    public function __construct(
        $icon = null, 
        $title = null, 
        $description = null, 
        $style = 'bg-gray-900 p-8',
        $iconSize = 'w-7 h-7',
        $iconWrapper = 'w-14 h-14',
        $titleSize = 'text-3xl',
        $titleClass = 'text-white font-[poppins] font-bold',
        $descriptionClass = 'text-gray-300 font-[inter] leading-relaxed',
        $showHover = true,
        $containerClass = '',
        $iconColor = 'text-indigo-400',
        $iconBgColor = 'bg-indigo-500/10'
    ) {
        $this->icon = $icon;
        $this->title = $title;
        $this->description = $description;
        $this->style = $style;
        $this->iconSize = $iconSize;
        $this->iconWrapper = $iconWrapper;
        $this->titleSize = $titleSize;
        $this->titleClass = $titleClass;
        $this->descriptionClass = $descriptionClass;
        $this->showHover = $showHover;
        $this->containerClass = $containerClass;
        $this->iconColor = $iconColor;
        $this->iconBgColor = $iconBgColor;
    }

    public function render()
    {
        return view('components.card');
    }
}