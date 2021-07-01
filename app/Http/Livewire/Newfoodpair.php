<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Foodpair;
use Storage;
use App\Cat;

class Newfoodpair extends Component
{
    use WithFileUploads;
    public $first_food_name,
    // $first_food_image,
        $second_food_name,
      //$second_food_image,
      // $happen,
        $cat_id;

    protected $rules=[
        'first_food_name'=>'required',
        'second_food_name'=>'required',
        //'first_food_image'=>'required|mimes:jpg,png,gif,jpeg|max:1024',
        //'second_food_image'=>'required|mimes:jpg,png,gif,jpeg|max:1024',
        //'happen'=>'required'
        'cat_id'=>'required'
    ];

    public function updated(){
        $this->validate();
    }

    public function saveFood(){
           $this->validate();
           /*
            $first_food_file_name=date("dmyhis").".".$this->first_food_image->getClientOriginalExtension();
            $this->first_food_image->storeAs('/',$first_food_file_name , $disk = 'first_food_image');

            $second_food_file_name=date("dmyhis").".".$this->second_food_image->getClientOriginalExtension();
            $this->second_food_image->storeAs('/',$second_food_file_name , $disk = 'second_food_image');
            */

            $nf=new Foodpair();
            $nf->first_food_name=$this->first_food_name;
            $nf->second_food_name=$this->second_food_name;
            $nf->cat_id=$this->cat_id;
           // $nf->first_food_image=$first_food_file_name;
           // $nf->second_food_image=$second_food_file_name;
           // $nf->happen=$this->happen;
            $nf->save();

            session()->flash("msg", 'The new food pair has been created.');

            $this->first_food_name="";
            $this->second_food_name="";
           // $this->first_food_image="";
           // $this->second_food_image="";
            //$this->happen="";
            $this->cat_id="";

    }

    public function render()
    {
        $cats=Cat::get();
        return view('livewire.newfoodpair')->with(['cats'=>$cats]);
    }
}
