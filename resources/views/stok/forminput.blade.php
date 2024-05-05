<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLable">Import Data Stok</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('import-stok') }}" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="stok">File Excel</label>
                            <input type="file" name="import" id="import">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Submit</button>

            </div>
         </form>
        </div>
    </div>
</div> 