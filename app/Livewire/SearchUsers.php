<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;


class SearchUsers extends Component
{   

    public $users = [];
    public $search;

    public function mount() {

        $this->search = "Inserisci la tua ricerca qui";



    }

    public function render()
    {   
        /* if ($this->search == "") {

            $this->users = User::all();

        } else { */

            $this->users = User::where("name", "like", "%" . $this->search . "%")->get();

        //}

        
        
        return view('livewire.search-users');

    }
}
