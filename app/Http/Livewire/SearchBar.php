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


        return view('livewire.search-bar', [
            'productos' =>
            productos::Where('name', 'like', '%' . $this->search . '%')
                ->get(),
        ]);
    }

}