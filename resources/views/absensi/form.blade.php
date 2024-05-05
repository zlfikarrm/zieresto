<div class="modal fade" id="formAbsensiModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Absensi Karyawan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="absensi">
                        @csrf
                        <div id="method"></div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputAbsensi">Nama Karyawan</label>
                                <input type="text" class="form-control" id="nama_karyawan" value="" name="nama_karyawan">
                                <label for="exampleInputAbsensi">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="tanggal_masuk" value=""
                                    name="tanggal_masuk">
                                <label for="exampleInputAbsensi">Waktu Masuk</label>
                                <input type="time" class="form-control" id="waktu_masuk" value="" name="waktu_masuk">
                                <label for="exampleInputAbsensi">Status</label>
                                <select name="status" id="status" class="form-select"
                                                        id="basicSelect">
                                                        <option value="" selected disabled>Pilih Status Meja</option>
                                                        <option value="masuk" >Masuk</option>
                                                        <option value="sakit" >Sakit</option>
                                                        <option value="cuti" >Cuti</option>

                                                        
                                                    </select>
                                <label for="exampleInputAbsensi">Waktu Selesai Kerja</label>
                                <input type="time" class="form-control" id="waktu_selesai_kerja" value="" name="waktu_selesai_kerja">
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
