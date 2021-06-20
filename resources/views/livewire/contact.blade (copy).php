<div class="row">

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
            <h3>ini header Kiri</h3>
            </div>
            <div class="card-body">
            <form wire:submit.prevent="submit">  
                
                    <label>Nama :</label>
                    <input type="text" class ="form-control" wire:model.lazy="nama">
                

                <div class="form-group">
                    <label>Alamat :</label>
                    <input type="text" class ="form-control" wire:model.lazy="alamat" >
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>
        <div class="card">
        <h3>{{$nama}}</h3>
        <h3>{{$alamat}}</h3>
        </div>
        
        </div>
    </div>


    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h3>ini header Kanan</h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-hover"> 
                <thead>
                    <td>Nama</td>
                    <td>Alamat</td>
                </thead>
                @foreach ($data as $dat)
                <tbody>
                <tr>
                <td>{{$dat->nama}}</td>
                <td>{{$dat->alamat}}</td>
                </tr>
                </tbody>
                @endforeach
            </table>
            </div>
            
        </div>
    </div>



</div>