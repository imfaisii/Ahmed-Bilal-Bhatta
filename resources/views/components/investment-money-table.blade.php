<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Details of Investments</h4>
            <button type="button" class="btn btn-primary mb-2 openNewInvestmentModal">+
                New
                Investment</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display min-w850">
                    <thead>
                        <tr>
                            <th width="20%">Invested By</th>
                            <th width="15%">Received By</th>
                            <th width="15%">Amount</th>
                            <th width="20%">Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investments as $investment)
                            <tr>
                                <td>{{ $investment->investor->name }}</td>
                                <td>{{ $investment->receiver->name }}</td>
                                <td>{{ $investment->amount }}</td>
                                <td><a href="javascript:void(0)"
                                        class="btn btn-primary text-nowrap btn-sm light">Completed</a></td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-primary shadow btn-xs sharp mr-1"
                                            onclick="openEditModal('{{ route('investment.edit', [$investment->id]) }}','{{ $investment->id }}')"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger shadow btn-xs sharp"
                                        onclick="deleteById({{ $investment->id }},'{{ route('investment.destroy') }}','example','Investor')"><i
                                                class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="20%">Invested By</th>
                            <th width="15%">Received By</th>
                            <th width="15%">Amount</th>
                            <th width="20%">Status</th>
                            <th width="15%">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
