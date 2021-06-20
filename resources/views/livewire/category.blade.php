<div class="row">

    <div class="col-md-4">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                    <h3>Tambah Kategory</h3>
                    </div>
                        <div class="card-body">

                            <form wire:submit.prevent="simpan"> 
                            @if(session()->has('berhasil'))
                            <div style="color: green">{{session('berhasil')}}</div>
                            @endif
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" wire:model="nama_kat">
                                </div>        
                                    <button type="submit" class="button btn-primary mt-3">Simpan</button>
                            </form>
                            <div>
                            <h3>{{$nama_kat}}</h3>
                            </div>

                        </div>
                </div>
            </div>
        
        </div>


    <div class="col-md-8">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                <h3>Daftar Kategori</h3>
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                       
                        <th>Nama</th>
                    </thead>
                    <tr>
                    @foreach($dataCat as $dt)
                    
                    <td>{{$dt->nama_kat}}</td>
                    </tr>
                    @endforeach
                   
                </table>

            </div>
        </div>
    
    </div>


    
    
</div>





