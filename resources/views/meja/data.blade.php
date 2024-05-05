<table class="table table-compact table-stripped" id="data-member">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>No Meja</th>
            <th>Kapasitas</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($meja as $m)
            <tr>
                <td>{{ $i = !isset($i) ? ($i = 1) : ++$i }}</td>
                <td>{{ $m->no_meja }}</td>
                <td>{{ $m->kapasitas }}</td>
                <td>{{ $m->status }}</td>
                <td>
                    <button class="btn" data-toggle="modal" data-target="#formMejaModal" data-mode="edit"
                        data-id="{{ $m->id }}" data-no_meja="{{ $m->no_meja }}"
                        data-kapasitas="{{ $m->kapasitas }}" data-status="{{ $m->status }}">
                        <i class="fas fa-edit"></i>
                    </button>
                    <form method="post" action="meja/{{ $m->id }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn delete-data" data-no_meja="{{ $m->no_meja }}">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
