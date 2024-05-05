<div class="modal fade" id="formKategoriModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="kategori">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputKategori">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" value="" name="nama_kategori">
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
