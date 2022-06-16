<?php

namespace App\Http\Livewire;

use App\Models\senderinfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Createshiping extends Component
{
    use WithFileUploads;
    public $name,$email,$c_name,$items_id,$address,$c_size,$phone_number,$image,$message,$c_quantity;
  
     public function mount($items_id = null)
     {
         if (intval($items_id) > 0) {
         $this->items_id = $items_id;
             $senderinfo = senderinfo::find($items_id);
            $this->name = $senderinfo->name;   
            $this->address = $senderinfo->address;
            $this->email = $senderinfo->email;
            $this->c_name = $senderinfo->c_name;
            $this->c_size = $senderinfo->c_size;
            $this->phone_number = $senderinfo->phone_number;
            $this->image = $senderinfo->image;
            $this->message = $senderinfo->message;
            $this->c_quantity = $senderinfo->c_quantity;
           
        }
    }
    public function Save(){
        //   $this->validate([
        //     "name" => "required",
        //    "email" => "required",
        //    "c_name" => "required",
        //    "c_size" => "required",
        //    "phone_number" => "required",
        //    "image" => "required",
        //    "product_type" => "required",
        //    "message" => "required",
        //    "c_quantity" => "required",
        //  ]);
        if ($this->items_id) {
            $sender =senderinfo::find($this->items_id);
            $sender->name = $this->name;
            $sender->email = $this->email;
            $sender->c_name = $this->c_name;
            $sender->image = $this->image;
            $sender->phone_number = $this->phone_number;
            $sender->address = $this->address;
            $sender->message = $this->message;
            $sender->c_quantity = $this->c_quantity;
            $sender->save();
            return redirect('/receiver');
        }else{
        Auth::user()->sender()->create([
         
            'name'=>$this->name,
            'email'=>$this->email,
            'c_name'=>$this->c_name,
            'c_size'=>$this->c_size,
            'image'=>$this->image->store('images', 'public'),
            'phone_number'=>$this->phone_number,
            'address'=>$this->address,
            'message'=>$this->message,
            'c_quantity' =>$this->c_quantity,

          
        ]);
        session()->flash('message', 'Post successfully updated.');
        }
    }
    public function render()
    {
        return view('livewire.createshiping');
    }
}
