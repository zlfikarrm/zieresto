<table class="table table-compact table-stripped" id="data-member">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Nama Pelanggan</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($member as $m)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $m->nama_pelanggan }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ $m->alamat }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formMemberModal" data-mode="edit"
                        data-id="{{ $m->id }}" data-nama_pelanggan="{{ $m->nama_member }}"
                        data-email="{{ $m->email }}" data-alamat="{{ $m->alamat }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="member/{{ $m->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-nama_pelanggan="{{ $m->nama_pelanggan }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
