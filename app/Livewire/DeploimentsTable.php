<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Deploiment;

class DeploimentsTable extends Component
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
        if ($checked && !in_array($value, array_column($this->checkedDeploiments, 'idDeploiment'))) {
            $this->checkedDeploiments[] = [
                'idDeploiment' => $value,
                'timestamp' => Carbon::now()->timestamp,
            ];
        } elseif (!$checked) {
            $this->checkedDeploiments = array_filter($this->checkedDeploiments, function ($Deploiment) use ($value) {
                return $Deploiment['idDeploiment'] !== $value;
            });
        }
        usort($this->checkedDeploiments, function ($a, $b) {
            return $a['timestamp'] - $b['timestamp'];
        });
        $this->render();
    }

    public function compactChekedDeploiments (){
        return redirect()->route('deploiment.index')
            ->with('chekedDeploiments',$this->checkedDeploiments);
    }

    public function render()
    {
        
        $deploiments = Deploiment::where('descr', 'like', '%' . $this->searchTerm . '%')
            ->paginate($this->perPage);
        return view('livewire.deploiments-table', [
            'deploiments' => $deploiments,
        ]);
    }
}