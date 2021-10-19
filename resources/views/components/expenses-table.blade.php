<script>
    document.title = @json(env('APP_NAME')) + ' Expenses ( Kharchy )';
</script>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Details of Expenses</h4>
            <a href="{{ route('expenses.create') }}" class="btn btn-primary mb-2">+
                Add new Expenses</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display min-w850">
                    <thead>
                        <tr>
                            <th width="15%">Expense Name</th>
                            <th width="15%">Description</th>
                            <th width="15%">Comments</th>
                            <th width="15%">Amount</th>
                            <th width="10%">Added by</th>
                            <th width="15%">Date</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr>
                                <td>{{ $expense->khatatypes[0]->name }}</td>
                                <td>{{ $expense->khatatypes[0]->description }}</td>
                                <td>{{ is_null($expense->comments) ? 'Not added' : $expense->comments }}</td>
                                <td>{{ $expense->amount }}</td>
                                <td>{{ $expense->user->name }}</td>
                                <td>{{ $expense->created_at }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-primary shadow btn-xs sharp mr-1"
                                            onclick="openEditModal('{{ route('expenses.edit') }}','{{ $expense->id }}')"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger shadow btn-xs sharp"
                                            onclick="deleteById({{ $expense->id }},'{{ route('expenses.destroy') }}','example','Expense')"><i
                                                class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="15%">Expense Name</th>
                            <th width="15%">Description</th>
                            <th width="15%">Comments</th>
                            <th width="15%">Amount</th>
                            <th width="10%">Added by</th>
                            <th width="15%">Date</th>
                            <th width="15%">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
