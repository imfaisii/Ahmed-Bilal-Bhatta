<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Details of Restrictions</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display min-w850">
                    <thead>
                        <tr>
                            <th width="30%">ID</th>
                            <th width="40%">Name</th>
                            <th width="30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restrictions as $restriction)
                            <tr>
                                <td>{{ $restriction->id }}</td>
                                <td>{{ $restriction->user->name }}</td>
                                <td>
                                    @if ($restriction->access)
                                        <button class="btn btn-danger shadow"
                                            onclick="changeAccess('{{ route('restrictions.update') }}',0,'{{ $restriction->user_id }}','example')"><i
                                                class="fa fa-unlock" aria-hidden="true"></i> User has access, click to
                                            restrict user</button>
                                    @else
                                        <button class="btn btn-success shadow"
                                            onclick="changeAccess('{{ route('restrictions.update') }}',1,'{{ $restriction->user_id }}','example')""><i
                                                class="   fa fa-lock" aria-hidden="true"></i> User does not has
                                            access,
                                            click here to
                                            give him access</button>
                                    @endif
                                    {{-- <div class="d-flex">
                                        <button class="btn btn-primary shadow btn-xs sharp mr-1"
                                            onclick="openEditModal('{{ route('khata-types.edit', [$khataType->id]) }}','{{ $khataType->id }}')"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger shadow btn-xs sharp"
                                            onclick="deleteById({{ $khataType->id }},'{{ route('khata-types.destroy') }}','example','ExpenseType')"><i
                                                class="fa fa-trash"></i></button>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="30%">ID</th>
                            <th width="40%">Name</th>
                            <th width="30%">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
