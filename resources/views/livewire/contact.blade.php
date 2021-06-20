<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
            <h3>ini header Kiri</h3>
            </div>
            <div class="card-body">
            <form wire:submit.prevent="simpan"> 
            
            @if (session()->has('sukses'))
            <div style= "color: green"><span>{{session('sukses')}}</span></div>
            @endif
                    <input type="hidden" wire:model="hiddenId">
                    <label>Nama :</label>
                    <input type="text" class ="form-control" wire:model.lazy="nama">
                    @error ('nama')
                    <span style="color:red">{{'Minimal 3 karakter'}}</span>
                    @enderror
                

                <div class="form-group">
                    <label>Alamat :</label>
                    <input type="text" class ="form-control" wire:model.lazy="alamat" >
                    @error ('alamat')
                    <span style="color:red">{{'Minimal 10 karakter'}}</span>
                    @enderror
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>
        <!-- <div class="card">
        <h3>{{$nama}}</h3>
        <h3>{{$alamat}}</h3>
        </div> -->
        
        </div>
    </div>


    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h3>ini header Kanan</h3>
            </div>
            <div class="card-body">
            <h3><a href="javascript:void(0)" wire:click="addForm">Tambah Data</a></h3>
            <table class="table table-bordered table-hover"> 
                <thead>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </thead>
                @foreach ($data as $index=>$dat)
                <tbody>
                <tr>
                <td>{{$index + 1}}</td>
                <td>{{$dat->nama}}</td>
                <td>{{$dat->alamat}}</td>
                <td>
                <a href="javascript:void(0)" wire:click="editForm({{$dat->id}})">Edit</a>
                <a href="javascript:void(0)" wire:click="deleteForm({{$dat->id}})">Hapus</a>
                
                </td>
                </tr>
                </tbody>
                @endforeach
            </table>
            {{$data->links()}}
            </div>
            
        </div>
    </div>



</div>