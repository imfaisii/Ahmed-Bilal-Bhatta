<table id="example" class="display">
    <thead>
        <tr>
            <th width="10%"></th>
            <th width="15%">Name</th>
            <th width="15%">Address</th>
            <th width="10%">Phone No</th>
            <th width="15%">CNIC</th>
            <th width="15%">Peshgi</th>
            <th width="10%">Joining Date</th>
            <th width="10%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($workers as $worker)
            <tr>
                <td><img class="rounded-circle" width="35" src="@if ($worker->image !== null) {{ asset('images/profile/' . $worker->image) }}@else
                    {{ asset('images/profile/small/pic1.jpg') }} @endif"
                    alt="Worker Image">
                </td>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->address }}</td>
                <td>{{ $worker->phoneNo }}</td>
                <td>{{ $worker->cnic }}</td>
                <td>{{ $worker->peshgi }} Rs/-</td>
                <td>{{ $worker->created_at }}</td>
                <td>
                    <div class="d-flex">
                        <button class="btn btn-primary shadow btn-xs sharp mr-1"
                            onclick="openEditModal('{{ route('worker.edit') }}','{{ $worker->id }}')"><i
                                class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger shadow btn-xs sharp"
                            onclick="deleteById({{ $worker->id }},'{{ route('worker.destroy') }}','example','Worker')"><i
                                class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
