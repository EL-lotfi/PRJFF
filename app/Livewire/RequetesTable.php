<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requete;
use Carbon\Carbon;
use Log;

class RequetesTable extends Component
{
    use WithPagination;

    public $searchTerm = '';
    public $perPage = 10;
    public $selectAll = false; 
    public $checkedRequetes = [];
    public $displayedRequetes = [];
    protected $queryString = ['searchTerm'];

    public function mount()
    {
        $this->render();
    }

    public function submitSearch()
    {
        $this->render();
    }

    public function updatedCheckedRequetes()
    {
        $this->SelectAll = count($this->checkedRequetes) === Requete::where('requetesSql', 'like', '%' . $this->searchTerm . '%')->count();
    }

    public function updatedCheckedAll($value)
    {
        if ($value) {
            $this->checkedRequetes = Requete::where('requetesSql', 'like', '%' . $this->searchTerm . '%')
                ->get()
                ->map(function ($requete) {
                    return [
                        'idRequete' => $requete->idRequete,
                        'timestamp' => now()->timestamp,
                    ];
                })
                ->toArray();
        } else {
            $this->checkedRequetes = [];
        }
    }

    public function handleCheckboxChange($value, $checked)
    {
        if ($checked && !in_array($value, array_column($this->checkedRequetes, 'idRequete'))) {
            $this->checkedRequetes[] = [
                'idRequete' => $value,
                'timestamp' => Carbon::now()->timestamp,
            ];
        } elseif (!$checked) {
            $this->checkedRequetes = array_filter($this->checkedRequetes, function ($requete) use ($value) {
                return $requete['idRequete'] !== $value;
            });
        }
        usort($this->checkedRequetes, function ($a, $b) {
            return $a['timestamp'] - $b['timestamp'];
        });
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
        $this->displayedRequetes = $requetes->items();

        return view('livewire.requetes-table', [
            'requetes' => $requetes,
        ]);
    }
}
