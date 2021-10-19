<h2>Bricks done record of {{ $name }}</h2>
<script>
    document.title = 'Bricks done by ' + @json($name)
</script>
<table id="example" class="display">
    <thead>
        <tr>
            <th width="10%"></th>
            <th width="10%">Total Bricks Done</th>
            <th width="15%">Rate At which bricks are done</th>
            <th width="10%">Season</th>
            <th width="10%">Circle ( Gair )</th>
            <th width="25%">Date Received</th>
            <th width="20%">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($workers as $worker)
            <tr>
                <td><img class="rounded-circle" width="35" src="{{ asset('images/profile/small/pic1.jpg') }}"
                        alt="Worker Image">
                </td>
                <td>{{ $worker->total_bricks }}</td>
                <td>{{ $worker->rate }}</td>
                <td>{{ $worker->season }}</td>
                <td>{{ $worker->round_number }}</td>
                <td>{{ $worker->created_at }}</td>
                <td><a href="javascript:void(0)" class="btn btn-primary text-nowrap btn-sm light">Completed</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
