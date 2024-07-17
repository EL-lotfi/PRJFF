<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Serveur;


class ServeursTable extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $perPage = 8; // Number of items per page

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
        $serveurs = Serveur::where('nomServeur', 'like', '%' . $this->searchTerm . '%')
            ->paginate($this->perPage);
        return view('livewire.serveurs-table', [
            'serveurs' => $serveurs,
        ]);
    }
}
