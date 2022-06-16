<?php

namespace App\Http\Livewire;

use App\Models\senderinfo;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        
         
        return view('livewire.home',[
            'donner' => senderinfo::all()
        ]);
    }
}
