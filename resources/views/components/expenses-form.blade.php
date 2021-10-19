<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add your expenses here !</h4>
            <small>You can add multiple expenses by clicking on the Add button</small>
        </div>
        <div class="card-body">
            <!-- Repeater Html Start -->
            <form action="{{ route('expenses.store') }}" class="khata-repeater" id="AddExpenseForm" method="POST"
                novalidate="novalidate">
                @csrf
                <div data-repeater-list="khatas">
                    <div data-repeater-item>
                        <div class="row d-flex align-items-end content-mine">

                            <div class="col-md-2 col-12">
                                <div class="mb-1">
                                    <label class="form-label">Type</label>
                                    <select class="form-control khataTypeChange" style="color: black" required>
                                        @foreach ($khataTypes as $khataType)
                                            <option value="{{ $khataType->id }}">{{ $khataType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control description"
                                        value="{{ $khataTypes[0]->description }}"
                                        placeholder="{{ $khataTypes[0]->description }}" name="description" required
                                        readonly />
                                </div>
                            </div>

                            <div class="col-md-3 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="comments">Comments</label>
                                    <input type="text" class="form-control" aria-describedby="comments"
                                        placeholder="Add some comments" name="comments" />
                                </div>
                            </div>

                            <div class="col-md-2 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="amount">Amount</label>
                                    <input type="number" class="form-control" aria-describedby="amount"
                                        placeholder="1000" name="amount" required />
                                </div>
                            </div>

                            <div class="col-md-2 col-12 mb-50">
                                <div class="mb-1">
                                    <button class="btn btn-danger" style="width: 100%;" data-repeater-delete
                                        type="button">
                                        <i data-feather="x" class="me-25"></i>
                                        <span>Delete</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-icon btn-info" type="button" data-repeater-create>
                            <i data-feather="plus" class="me-25"></i>
                            <span>Add New</span>
                        </button>
                        <button class="btn btn-icon btn-primary" type="submit">
                            <i data-feather="plus" class="me-25"></i>
                            <span>Save Expense(s)</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('extended_scripts')
    <script src="{{ asset('js/vuexy/another.js') }}"></script>
    <script src="{{ asset('js/vuexy/form-repeater.min.js') }}"></script>
    <script>
        let khataTypeData = @json($khataTypes);
    </script>
    <script src="{{ asset('js/expenses/khataType.js') }}"></script>
@endpush
