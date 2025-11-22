<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $id;
    public $placeholder;
    public $value;
    public $required;
    public $class;
    public $label;
    public $error;
    public $containerClass;
    public $labelClass;
    public $inputClass;
    public $errorClass;
    public $icon;
    public $iconPosition;
    
    public function __construct(
        $type = 'text',
        $name = '',
        $id = null,
        $placeholder = '',
        $value = '',
        $required = false,
        $class = '',
        $label = null,
        $error = null,
        $containerClass = 'mb-4',
        $labelClass = 'block mb-2 text-sm font-medium text-gray-300',
        $inputClass = 'block w-full px-4 py-3 border border-gray-600 bg-gray-700 text-white rounded-lg focus:ring focus:ring-blue-500 focus:outline-none placeholder-gray-400',
        $errorClass = 'mt-1 text-sm text-red-400',
        $icon = null,
        $iconPosition = 'left'
    ) {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
        $this->label = $label;
        $this->error = $error;
        $this->containerClass = $containerClass;
        $this->labelClass = $labelClass;
        $this->inputClass = $inputClass;
        $this->errorClass = $errorClass;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
    }

    public function render()
    {
        return view('components.input');
    }
}