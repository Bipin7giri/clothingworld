<?php

namespace App\Http\Livewire;



use Livewire\Component;
use App\Models\receiver as ModelsItems;
class Receiver extends Component
{
    public $name,$email,$phone_number;
  
    public function save(){

        // $item = new Receiver();
        //  $item->name=$this->name;
        //  $item->email=$this->email;
        //  $item->phone_number=$this->phone_number;
        //  $item->save(); 
        ModelsItems::create([

            'name' => $this->name,
            'email' => $this->email,
            'phone_number'=>$this->phone_number

        ]);
        session()->flash('message', 'Shiping Created Successfully .');
    }
    

    public function render()
    {
        return view('livewire.receiver');
    }
}
