<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Details of Khata Types</h4>
            <button type="button" class="btn btn-primary mb-2 openNewkhatatypeModal">+
                New
                Khata Type</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display min-w850">
                    <thead>
                        <tr>
                            <th width="15%">ID</th>
                            <th width="20%">Name</th>
                            <th width="50%">Description</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($khataTypes as $khataType)
                            <tr>
                                <td>{{ $khataType->id }}</td>
                                <td>{{ $khataType->name }}</td>
                                <td>{{ $khataType->description }}</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn btn-primary shadow btn-xs sharp mr-1"
                                            onclick="openEditModal('{{ route('khata-types.edit', [$khataType->id]) }}','{{ $khataType->id }}')"><i
                                                class="fa fa-pencil"></i></button>
                                        <button class="btn btn-danger shadow btn-xs sharp"
                                            onclick="deleteById({{ $khataType->id }},'{{ route('khata-types.destroy') }}','example','ExpenseType')"><i
                                                class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="15%">ID</th>
                            <th width="20%">Name</th>
                            <th width="50%">Description</th>
                            <th width="15%">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
