<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTables extends Component
{
    use WithPagination;

    public $active = true;
    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $querySearch = ['search', 'active', 'sortAsc', 'sortField'];

    function sortBy($field)
    {
        if ($this->sortField = $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // public function paginationView()
    // {
    //     return 'custom-pagination';
    // }

    public function render()
    {
        return view('livewire.data-tables', [
            'users' => User::where(function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%');
            })
                ->where('active', $this->active)
                ->when($this->sortField, function ($q) {
                    $q->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->paginate(10),
        ]);
    }
}
