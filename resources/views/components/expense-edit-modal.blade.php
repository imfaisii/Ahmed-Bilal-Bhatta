<div class="modal fade expenseModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center"></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="NewexpenseForm" action={{ route('expenses.store') }} method="POST"
                    enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="form-label">Type</label>
                                <select class="form-control khataTypeChange" name="khataTypeiD" style="color: black" required>
                                    @foreach ($khataTypes as $khataType)
                                        <option value="{{ $khataType->id }}">{{ $khataType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control description"
                                    value="{{ $khataTypes[0]->description }}"
                                    placeholder="{{ $khataTypes[0]->description }}" name="description" required
                                    readonly />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="comments">Comments</label>
                                <input type="text" class="form-control" aria-describedby="comments"
                                    placeholder="Add some comments" name="comments" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="amount">Amount</label>
                                <input type="number" class="form-control" aria-describedby="amount" placeholder="1000"
                                    name="amount" required />
                            </div>
                        </div>
                        <input type="hidden" name="hidden_id" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addexpense">Save expense</button>
                <button type="button" class="btn btn-primary editexpense"
                    data-id="{{ route('expenses.update') }}">Edit
                    expense</button>
            </div>
        </div>
    </div>
</div>
<script>
    let khataTypeData = @json($khataTypes);
</script>
