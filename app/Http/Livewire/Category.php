<?php

namespace App\Http\Livewire;
use App\Models\Category as CategoryModel;

use Livewire\Component;


class Category extends Component
{
    public $nama_kat;
    protected $rules=[
        'nama_kat'=>'required|min:3'
    ];

public function simpan()
{
    $validate= $this->validate();
    CategoryModel::create($validate);
    session()->flash('berhasil','Data berhasil di tambah');
}

    
    public function render()
    {
        $dataCat=CategoryModel::all();
        return view('livewire.category',['dataCat'=>$dataCat]);
    }
}
