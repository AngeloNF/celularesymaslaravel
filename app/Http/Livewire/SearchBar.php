<?php

namespace App\Http\Livewire;

use App\Models\productos;
use Livewire\Component;

class SearchBar extends Component
{

    public $search;

    protected $queryString = [
        'search' => ['except' => '']
    ];
    public $name;
    public function render()
    {

        if (str_contains(request()->header()['referer'][0], "categoria")) {
            return view('livewire.search-bar', [
                'articulos' =>
                productos::
                    whereRelation("Categoria", "name", "Accesorios")
                    ->where('name', 'like', '%' . $this->search . '%')
                    ->get(),
            ]);
        }
        return view('livewire.search-bar', [
            'articulos' => productos::where('name', 'like', '%' . $this->search . '%')->orWhere('precio', 'like', '%' . $this->search . '%')->get(),
        ]);
    }

}