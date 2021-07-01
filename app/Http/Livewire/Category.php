<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Cat;

class Category extends Component
{
    public $category_name;
    public $page_title="Add New Category";
    public $cat_id=null;

    protected $rules = [
        'category_name' => 'required|unique:cats',
    ];
    public function updated(){
        $this->validate();
    }
    public function saveCategory(){

        

        if($this->cat_id==null){
            $this->validate();
            $c=new Cat();
            $c->category_name=$this->category_name;
            $c->save();
            session()->flash('msg', "The new category has been created.");
            $this->category_name="";

        }else{
            $c=Cat::whereId($this->cat_id)->first();
            $c->category_name=$this->category_name;
            $c->update();
            session()->flash('msg', "The selected category has been updated.");
            $this->category_name="";
            $this->cat_id=null;
            $this->page_title="Add New Category";
        }

       
    }
    public function deleteCat($id){
        $cat=Cat::whereId($id)->firstOrFail();
        $cat->delete();
        session()->flash('msg', 'The selected category has been deleted.');
    }
    public function editCat($c){
        $this->page_title="Edit Category";
        $this->cat_id=$c['id'];
        $this->category_name=$c['category_name'];

    }
    public function render()
    {
        $cats=Cat::get();
        return view('livewire.category')->with(['cats'=>$cats]);
    }
}
