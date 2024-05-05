<table class="table table-compact table-stripped" id="data-kategori">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($kategori as $k)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $k->nama_kategori }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formKategoriModal" data-mode="edit"
                        data-id="{{ $k->id }}" data-nama_kategori="{{ $k->nama_kategori }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="kategori/{{ $k->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_kategori="{{ $k->nama_kategori }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
