<table id="example" class="display">
    <thead>
        <tr>
            <th width="5%"></th>
            <th width="10%">Name</th>
            <th width="5%">Phone No</th>
            <th width="10%">CNIC</th>
            <th width="10%">Peshgi</th>
            <td width="10%">Borrowed Amount</td>
            <td width="10%">Returned Amount</td>
            <td width="10%">Overall</td>
            <th width="10%">Joining Date</th>
            <th width="10%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($workers as $worker)
            <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}"
                        alt="Worker Image">
                </td>
                <td><a href="{{ route('worker.history', ['id' => $worker->id]) }}">{{ $worker->name }}</a></td>
                <td>{{ $worker->phoneNo }}</td>
                <td>{{ $worker->cnic }}</td>
                <td>{{ $worker->peshgi }}</td>
                <td>{{ $worker->borrowed_amounts_amount_sum }} Rs/-</td>
                <td>{{ $worker->returned_amounts_amount_sum }} Rs/-</td>
                <td>{{ $worker->returned_amounts_amount_sum - $worker->borrowed_amounts_amount_sum }} Rs/-</td>
                <td>{{ $worker->created_at }}</td>
                <td>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary borrowBtn"
                            onclick="openBorrowModal('{{ $worker->id }}','{{ $worker->name }}','{{ route('worker.borrow') }}','Borrowed')">Borrow</button>
                        <button class="btn btn-danger"
                            onclick="openBorrowModal('{{ $worker->id }}','{{ $worker->name }}','{{ route('worker.return') }}','Returned')">Return</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
