<table class="table table-compact table-stripped" id="data-menu">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Jenis Id</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Image</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($menu as $m)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $m->jenis->nama_jenis }}</td>
                <td>{{ $m->nama_menu }}</td>
                <td>{{ $m->harga }}</td>
                <td>{{ $m->image }}</td>
                <td>{{ $m->deskripsi }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formMenuModal" data-mode="edit"
                        data-id="{{ $m->id }}" data-nama_menu="{{ $m->nama_menu }}"
                        data-harga="{{ $m->harga }}" data-deskripsi="{{ $m->deskripsi }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="menu/{{ $m->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_menu="{{ $m->nama_menu }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
