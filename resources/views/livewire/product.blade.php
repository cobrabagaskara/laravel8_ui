<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h2 class="font-weight-bold mb-3">Daftar Produk</h2>
                <table class ="table table-bordered table-hover table-striped">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                    </thead>
                    <tbody>
                        @foreach($products as $index=>$product)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->image}}</td>
                            <td>{{$product->descrption}}</td>
                            <td>{{$product->qty}}</td>
                            <td>{{$product->price}}</td>
                            
                        </tr>

                        @endforeach   
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <h2 class="font-weight-bold mb-3">Tambah Produk</h2>
                <form>
                    <div class="form-group">
                    <label for="">Nama</label>
                    <input wire:model="name" type="text" class="form-control">
                    @error('name') <small class="text-danger">{{message}}</small>@enderror
                    </div>

                    <div class="form-group">
                    <label for="">Gambar</label>
                        <div class="custom-file">
                            <input wire:model="image" type="file" class="custom-file-input" id="customFile">
                            <label for="customFile" class="custom-file-input">Pilih Gambar</label>
                        </div>
                        @error('image') <small class="text-danger">{{message}}</small>@enderror

                    </div>

                    <div class="form-group">
                    <label for="">Keterangan</label>
                    <input wire:model="description" type="text" class="form-control">
                    @error('description') <small class="text-danger">{{message}}</small>@enderror
                    </div>

                    <div class="form-group">
                    <label for="">Jumlah</label>
                    <input wire:model="qty" type="text" class="form-control">
                    @error('qty') <small class="text-danger">{{message}}</small>@enderror
                    </div>

                    <div class="form-group">
                    <label for="">Harga</label>
                    <input wire:model="price" type="text" class="form-control">
                    @error('price') <small class="text-danger">{{message}}</small>@enderror
                    </div>

                </form>
                </div>
            </div>
        </div>

    </div>

</div>
