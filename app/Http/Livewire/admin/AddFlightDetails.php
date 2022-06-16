<?php

namespace App\Http\Livewire\Admin;

use App\Models\FlightDetails;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddFlightDetails extends Component
{
    use WithFileUploads;
    public $message, $flight_name,$images, $flight_id, $to, $from, $arrival_date, $departure_date, $arrival_time, $departure_time, $seats, $hiddenId;

    public function save()
    {
        $this->validate([
            "flight_name" => "required", 
            "flight_id"=>"required",
            "arrival_date"=>"required",
            "departure_date"=>"required",
            "arrival_time"=>"required",
            "departure_time"=>"required",
            "from"=>"required",
            "to"=>"required",
            "seats"=>"required",
        ]);
        // DistrictModel::find($this->district_id)->area()->create(
        //     ['name'=>$this->name]
        // );
        if(intval($this->hiddenId)>0){
            $flightDetails = FlightDetails::find($this->hiddenId);
        }else{
            $flightDetails= new FlightDetails();
        }
        $flightDetails->flight_name=$this->flight_name;
        $flightDetails->flight_id=$this->flight_id;
        $flightDetails->departure_date=$this->departure_date;
        $flightDetails->arrival_date=$this->departure_date;
        $flightDetails->arrival_time=$this->arrival_time;
        $flightDetails->departure_time=$this->departure_time;
        $flightDetails->to=$this->to;
        $flightDetails->from=$this->from;
        $flightDetails->seats=$this->seats;
        $flightDetails->images=$this->images->store('images','public');
        $flightDetails->save();
       

    }
    public function editflight($id)
    {
        $singleData= FlightDetails::find($id);
        $this->flight_name= $singleData->flight_name;
        $this->flight_id= $singleData->flight_id;
        $this->departure_date= $singleData->departure_date;
        $this->arrival_time= $singleData->arrival_time;
        $this->arrival_date= $singleData->arrival_date;
        $this->departure_time= $singleData->departure_time;
        $this->to=$singleData->to;
        $this->from=$singleData->from;
        $this->seats= $singleData->seats;
        $this->images=$singleData->images;
        $this->hiddenId=$singleData->id;
    }
  
    public function addFlightDetails()
    {
        $this->flight_name = "";
        $this->hiddenId = null;
        $this->flight_id = "";
        $this->departure_date = "";
        $this->arrival_time = "";
        $this->arrival_date = "";
        $this->departure_time = "";
        $this->seats = "";
        $this->to = "";
        $this->from = "";
        $this->images = "";
    }
    public function render()
    {
        $flightDetails = FlightDetails::all();
        return view('livewire.admin.add-flight-details',['flightDetails'=>$flightDetails]);
    }
}
