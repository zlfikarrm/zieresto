<table class="table table-compact table-stripped" id="data-jenis">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama Menu</th>
            <th>Jumlah Stok</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($stok as $s)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $s->menu->nama_menu }}</td>
                <td>{{ $s->jumlah }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formStokModal" data-mode="edit"
                        data-id="{{ $s->id }}" data-nama_menu="{{ $s->menu->nama_menu }}"
                        data-harga="{{ $s->harga }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="stok/{{ $s->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-jumlah="{{ $s->jumlah }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
