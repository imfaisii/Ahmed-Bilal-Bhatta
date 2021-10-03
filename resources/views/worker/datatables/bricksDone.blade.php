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
            <th width="10%">Add Bricks Done by Him</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($workers as $worker)
            <tr>
                <td><img class="rounded-circle" width="35" src="    @if ($worker->image !==
                    null) {{ asset('images/profile/' . $worker->image) }}@else
                    {{ asset('images/profile/small/pic1.jpg') }} @endif"
                    alt="Worker Image">
                </td>
                <td><a href="{{ route('worker.bricksDone.view', ['id' => $worker->id]) }}">{{ $worker->name }}</a>
                </td>
                <td>{{ $worker->address }}</td>
                <td>{{ $worker->phoneNo }}</td>
                <td>{{ $worker->cnic }}</td>
                <td>{{ $worker->peshgi }} Rs/-</td>
                <td>{{ $worker->created_at }}</td>
                <td class="text-center">
                    <a href="javascript:void(0)"
                        onclick="openBricksDoneModal({{ $worker->id }},'{{ $worker->name }}','{{ route('worker.add.bricksDone') }}')"
                        class="btn btn-primary mr-3">
                        Bricks</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
