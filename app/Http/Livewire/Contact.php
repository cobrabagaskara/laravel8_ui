<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact as ContactModel;
use DB;

class Contact extends Component
{
  use WithPagination;
  public $nama,$alamat,$hiddenId;
  protected $rules = [
    'nama'=>'required|min:3',
    'alamat'=>'required|min:10'
    
    ];

    public function simpan()
    {
      $validateData = $this-> validate ();
      $updateId = $this-> hiddenId;
      if ($updateId>0)
      {
        $updateData = array(
          'nama' => $validateData['nama'],
          'alamat' => $validateData['alamat']
        );
        DB::table('contacts')->where('id',$updateId)->update($updateData);
        session()->flash('sukses','Data berhasil dirubah');
        //update
      } else
      {
        ContactModel::create($validateData);
        session()->flash('sukses','Data berhasil ditambah');
      }
      
    }

    public function addForm()
    {
      $this->hiddenId='';
      $this->nama='';
      $this->alamat='';
    }

    public function editForm($id)
    {
      $SinggelData=ContactModel::find($id);
      $this->hiddenId=$SinggelData->id;
      $this->nama=$SinggelData->nama;
      $this->alamat=$SinggelData->alamat;
     
      
    }

    public function deleteForm($id)
    {
      DB::table('contacts')->where('id',$id)->delete();
      session()->flash('sukses','Data berhasil hapus');
    }
    
    public function render()
    {
       $data=ContactModel::latest()->paginate(3);
        // return view('livewire.contact');
        return view('livewire.contact',['data'=>$data]);
    }
}
