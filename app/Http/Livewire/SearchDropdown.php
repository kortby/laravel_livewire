<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{

    public $search;
    public $searchResults = [];

    function updatedSearch($val)
    {
        if (strlen($this->search < 3)) {
            $this->searchResults = [];
            return;
        }

        $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');
        $this->searchResults = $response->json()['results'];

        // dd($this->searchResults);
    }

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
