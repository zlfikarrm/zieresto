<div class="modal fade" id="formMenuModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="menu">
                        @csrf
                        <div id="method"></div>
                        <div class="card-body">
                            <div class="form-group form-group-outline my-3">
                                <label for="exampleInputMenu">Id Jenis</label>
                                <select name="jenis_id" id="jenis_id" class="form-select"
                                                        id="basicSelect">
                                                        <option value="" selected disabled>Pilih Nama Jenis</option>
                                                        @foreach ($jenis as $j)
                                                        <option value="{{ $j->id }}">
                                                            {{ $j->nama_jenis }} </option>
                                                        @endforeach
                                                    </select>
                                <label for="exampleInputMenu">Nama Menu</label>
                                <input type="text" class="form-control" id="nama_menu" value="" name="nama_menu">
                                <label for="exampleInputMenu">Harga</label>
                                <input type="number" class="form-control" id="harga" value="" name="harga">
                                <label for="exampleInputMenu">Image</label>
                                <input type="text" class="form-control" id="image" value="" name="image">
                                <label for="exampleInputMenu">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" value="" name="deskripsi">
                                
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
</div>
