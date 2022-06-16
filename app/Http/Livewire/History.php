<?php

namespace App\Http\Livewire;

use App\Models\receiver;
use App\Models\senderinfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public function render()
    {
        $Sender = Auth::user()->sender()->get();
       //$reciver= Auth::user()->receiver()->get();
  
        return view('livewire.history',[
         'Sender' => $Sender,
         //'receiver' => $reciver,
        ]);
    }
}
