<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Foodpair;
use App\Cat;
class Showfoodpair extends Component
{
   public $food_name=null;

   public $first_food_name, $second_food_name, $cat_id, $f_id;

   public function updateFood(){
       $f=Foodpair::whereId($this->f_id)->firstOrFail();
       $f->first_food_name=$this->first_food_name;
       $f->second_food_name=$this->second_food_name;
       $f->cat_id=$this->cat_id;
       $f->update();
       session()->flash('msg', "The selected food has been updated.");
       $this->first_food_name="";
       $this->second_food_name="";
       $this->cat_id="";
       $this->f_id="";
        
   }    

   public function getEdit($f){
        $this->first_food_name=$f['first_food_name'];
        $this->second_food_name=$f['second_food_name'];
        $this->cat_id=$f['cat_id'];
        $this->f_id=$f['id'];
   }

   public function deleteFood($id){
        $f=Foodpair::whereId($id)->firstOrFail();
        $f->delete();
        session()->flash('msg','The selected food pair has been deleted.');
   }
    public function clearSearch(){
        $this->food_name=null;
        $this->first_food_name="";
        $this->second_food_name="";
        $this->cat_id="";
        $this->f_id="";
    }
    public function render()
    {
        if($this->food_name==null){
            $fps=Foodpair::orderBy('id', 'desc')->paginate("10");
        }else{
            $fps=Foodpair::where('first_food_name', 'LIKE', "%$this->food_name%")
            ->orWhere('second_food_name', 'LIKE', "%$this->food_name%")
            ->orderBy('id', 'desc')->paginate("10");
        }
        $cats=Cat::get();
        return view('livewire.showfoodpair')->with(['fps'=>$fps, 'cats'=>$cats]);
    }
}