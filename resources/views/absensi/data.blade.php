<table class="table table-compact table-stripped" id="data-absensi">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama Karyawan</th>
            <th>Tanggal Masuk</th>
            <th>Waktu Masuk</th>
            <th>Status</th>
            <th>Waktu Selesai Kerja</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($absensi as $a)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $a->nama_karyawan }}</td>
                <td>{{ $a->tanggal_masuk }}</td>
                <td>{{ $a->waktu_masuk }}</td>
                <td>{{ $a->status }}</td>
                <td>{{ $a->waktu_selesai_kerja }}</td>
                


                <td>
                    <button class="btn" data-toggle="modal" data-target="#formAbsensiModal" data-mode="edit"
                        data-id="{{ $a->id }}" data-nama_karyawan="{{ $a->nama_karyawan }}"
                        data-tanggal_masuk="{{ $a->tanggal_masuk }}" data-waktu_masuk="{{ $a->waktu_masuk }}"
                        data-status="{{ $a->status }}" data-waktu_selesai_kerja="{{ $a->waktu_selesai_kerja }}" data-action="{{ $a->action }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="absensi/{{ $a->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_karyawan="{{ $a->nama_karyawan }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
