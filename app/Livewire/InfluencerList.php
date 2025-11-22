<?php

namespace App\Livewire;

use App\Models\Influencer;
use Livewire\Component;
use Livewire\WithPagination;

class InfluencerList extends Component
{
    use WithPagination;

    public $perPage = 8;

    public function loadMore()
    {
        $this->perPage += 8;
    }

    public function render()
    {
        $influencers = Influencer::with('socialAkuns')
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.influencer-list', [
            'influencers' => $influencers
        ]);
    }
}