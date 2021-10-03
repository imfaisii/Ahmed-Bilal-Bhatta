<h2>Borrowed Records of User {{ $workers->name }}</h2>
<table id="example" class="display">
    <thead>
        <tr>
            <th width="10%"></th>
            <th width="35%">Borrowed Amount</th>
            <th width="35%">Borrowed ON</th>
            <th width="35%">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($workers->borrowed_amounts as $worker)
            <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}"
                        alt="Worker Image">
                </td>
                <td>{{ $worker->amount }} Rs/-</td>
                <td>{{ $worker->created_at }}</td>
                <td><a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">Completed</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
