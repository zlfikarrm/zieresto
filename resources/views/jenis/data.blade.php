<table class="table table-compact table-stripped" id="data-jenis">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama Jenis</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($jenis as $j)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $j->nama_jenis }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formJenisModal" data-mode="edit"
                        data-id="{{ $j->id }}" data-nama_jenis="{{ $j->nama_jenis }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="jenis/{{ $j->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_jenis="{{ $j->nama_jenis }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
