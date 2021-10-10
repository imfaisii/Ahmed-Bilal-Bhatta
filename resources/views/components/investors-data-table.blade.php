<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Details of Investors</h4>
            <button type="button" class="btn btn-primary mb-2 openNewInvestorModal">+
                New
                Investor</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="display min-w850">
                    <thead>
                        <tr>
                            <th width="10%"></th>
                            <th width="15%">Name</th>
                            <th width="15%">CNIC</th>
                            <th width="15%">Phone</th>
                            <th width="15%">Address</th>
                            <th width="10%">Invested Amount</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investors as $investor)
                            <tr>
                                <td><img class="rounded-circle" width="35" @if ($investor->profile_photo == '')
                                    src="{{ asset('images/profile/small/pic1.jpg') }}"
                                @else
                                    src="{{ asset('images/investors/' . $investor->profile_photo) }}"
                        @endif
                        alt="Worker Image">
                        </td>
                        <td>{{ $investor->name }}</td>
                        <td>{{ $investor->cnic }}</td>
                        <td>{{ $investor->phone }}</td>
                        <td>{{ $investor->address }}</td>
                        <td>
                            @php
                                $total = 0;
                            @endphp

                            @foreach ($investor->investments as $investment2)

                                @php
                                    $total += $investment2->amount;
                                @endphp

                            @endforeach
                            {{ $total }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-primary shadow btn-xs sharp mr-1"
                                    onclick="openEditModal('{{ route('investor.edit') }}','{{ $investor->id }}')"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger shadow btn-xs sharp"
                                    onclick="deleteById({{ $investor->id }},'{{ route('investor.destroy') }}','example','Investor')"><i
                                        class="fa fa-trash"></i></button>
                            </div>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th width="10%"></th>
                            <th width="20%">Name</th>
                            <th width="15%">CNIC</th>
                            <th width="15%">Phone</th>
                            <th width="20%">Address</th>
                            <th width="15%">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
