<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Requete;
use App\Models\User;

class RequetesTable extends Component
{
    use WithPagination;

    public $selectAll =false;
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

    public function compactChekedRequetes (){
        return redirect()->route('deploiment.index')
            ->with('chekedRequetes',$this->checkedRequetes);
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