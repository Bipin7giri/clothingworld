<?php

namespace App\Http\Livewire;

use App\Models\receiver;
use Livewire\Component;

class Receiverinfo extends Component
{
    public function render()
    {

        return view('livewire.receiverinfo',[
            'donner' => receiver::all()
        ]);
    }
}
