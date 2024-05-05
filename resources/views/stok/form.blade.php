<div class="modal fade" id="formStokModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Stok</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="stok">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputStok">Menu Id</label>
                                <select name="menu_id" id="menu_id" class="form-select"
                                                        id="basicSelect">
                                                        <option value="" selected disabled>Pilih Nama Menu</option>
                                                        @foreach ($menu as $m)
                                                        <option value="{{ $m->id }}">
                                                            {{ $m->nama_menu }} </option>
                                                        @endforeach
                                                    </select>
                                             <label for="exampleInputStok">Jumlah Stok</label>
                                <input type="text" class="form-control" id="jumlah" value="" name="jumlah">
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
