<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requete;
use App\Models\User;

class RequetesTable extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $perPage = 10; // Number of items per page

    protected $queryString = ['searchTerm']; // To persist search query in URL

    public function mount()
    {
        $this->render();
    }

    public function submitSearch()
    {
        $this->render();
    }


    public function updatedSearchTerm()
    {
        $this->render();
    }

    public function render()
    {
        
        $requetes = Requete::where('requetesSql', 'like', '%' . $this->searchTerm . '%')
            ->paginate($this->perPage);
        return view('livewire.requetes-table', [
            'requetes' => $requetes,
        ]);
    }
}