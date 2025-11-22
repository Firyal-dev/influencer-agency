<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Stats extends Component
{
    public $items;
    public $columns;
    public $variant;
    
    /**
     * Create a new component instance.
     *
     * @param array $items Array of stat items
     * @param string $columns Grid columns (2, 3, 4)
     * @param string $variant Color variant (default, indigo, purple)
     */
    public function __construct($items = null, $columns = '4', $variant = 'indigo')
    {
        $this->items = $items ?? $this->defaultStats();
        $this->columns = $columns;
        $this->variant = $variant;
    }

    /**
     * Get default stats data
     */
    public function defaultStats()
    {
        return [
            [
                'number' => '500+',
                'title' => 'Brand Partner',
                'description' => 'Telah mempercayai kami'
            ],
            [
                'number' => '2,000+',
                'title' => 'Influencer Aktif',
                'description' => 'Dalam database kami'
            ],
            [
                'number' => '95%',
                'title' => 'Success Rate',
                'description' => 'Campaign yang berhasil'
            ],
            [
                'number' => '10M+',
                'title' => 'Total Reach',
                'description' => 'Audience terjangkau'
            ]
        ];
    }
    
    /**
     * Get grid column classes
     */
    public function gridColumns()
    {
        return match($this->columns) {
            '2' => 'sm:grid-cols-2',
            '3' => 'sm:grid-cols-2 lg:grid-cols-3',
            '4' => 'sm:grid-cols-2 lg:grid-cols-4',
            default => 'sm:grid-cols-2 lg:grid-cols-4',
        };
    }
    
    /**
     * Get color variant classes
     */
    public function colorClass()
    {
        return match($this->variant) {
            'indigo' => 'text-indigo-400',
            'purple' => 'text-purple-400',
            'blue' => 'text-blue-400',
            'green' => 'text-green-400',
            'pink' => 'text-pink-400',
            default => 'text-indigo-400',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.stats');
    }
}