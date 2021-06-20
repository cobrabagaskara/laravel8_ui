<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Register;

class Forms extends Component
{
    use WithPagination;
    public $name;
    public $email;
    //public $allData = [];
    protected $rules = [
        'name'=>'required|min:3',
        'email'=>'required|email'
    ];
    public function submit()
    {
        $validateData = $this->validate();
        Register::create($validateData);
        session()->flash('berhasil','Data berhasil di tambah');
    }

    public function render()
    {
        $allData = Register::paginate(5);
        return view('livewire.forms',['allData'=>$allData]);
    }
}
