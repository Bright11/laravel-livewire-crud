<?php

namespace App\Http\Livewire;

use App\Models\Livewirestudent;

use Livewire\WithFileUploads;

use Livewire\Component;

class Form extends Component
{
    use WithFileUploads;
    public $form="God is good";
    public $name="Bright God";
    public function resetname($name){
        $this->name=$name;
    }
    //

    public $getstudent;

    public $firstname;
    public $lastname;
    public $email;
    public $image;
    public $class;
    public $agree=false;
// update
    public $updateid;
    public $imageupdate;
    public $update=false;
    public function render()
    {
        return view('livewire.form');
    }

    public function savedata(){

        $data=new Livewirestudent;
        $data->firstname=$this->firstname;
        $data->lastname=$this->lastname;
        $data->email=$this->email;
        $data->class=$this->class;
      if($this->image){
        $imagename=$this->image->store("photos","public");
        $data->image=$imagename;
      }
        $data->save();
        // $this->reset(['firstname',"lastname",'email']);
        $this->resetdata();
        $this->mount();
    }
    public function resetdata(){
        $this->reset(['firstname',"lastname",'email']);
    }



    public function mount()
    {
        $this->getstudent=Livewirestudent::all();
    }

    public function deletedata($id){
        $data=Livewirestudent::find($id);
        $data->delete();

        $this->mount();
    }

    public function updateitem($id)
    {
        $update=Livewirestudent::find($id);
        $this->updateid=$update->id;

        $this->firstname=$update->firstname;
        $this->lastname=$update->lastname;
        $this->email=$update->email;
        $this->class=$update->class;
       // $this->image=$update->image;

        $this->update=true;
    }

    public function updateitems(){
        $updatedata=Livewirestudent::find($this->updateid);
        $updatedata->firstname=$this->firstname;
        $updatedata->lastname=$this->lastname;
        $updatedata->email=$this->email;
        $updatedata->class=$this->class;
        if($this->imageupdate){
            $imagename=$this->imageupdate->store("photos","public");
        $updatedata->image=$imagename;
        }
      $updatedata->update();
      $this->imageupdate="";
      $this->image="";
      $this->resetdata();
      $this->mount();

      $this->update=false;
    }
}
