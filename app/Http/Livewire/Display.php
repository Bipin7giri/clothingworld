<?php

namespace App\Http\Livewire;

use App\Models\receiver;
use App\Models\senderinfo;
use App\Models\Receiverinfo;
use Livewire\Component;


class Display extends Component
{
    public function render()
    {
        $receiver = receiver::all();
        $senderinfo = senderinfo::all();
        return view('livewire.display',[
            "senderinfo" => $senderinfo,
            "receiver" => $receiver
        ]);
    }
}
