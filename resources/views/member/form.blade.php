<div class="modal fade" id="formMemberModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Tambah Pelanggan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="member">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputmember">Nama Pelanggan</label>
                                <input type="text" class="form-control" id="nama_pelanggan" value="" name="nama_pelanggan">
                                <label for="exampleInputMember">Email</label>
                                <input type="email" class="form-control" id="email" value=""
                                    name="email">
                                <label for="exampleInputMember">Alamat</label>
                                <input type="text" class="form-control" id="alamat" value="" name="alamat">
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
