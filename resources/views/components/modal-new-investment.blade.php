    <div class="modal fade newInvestmentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Add a new Investment</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="NewInvestmentForm" action={{ route('investment.store') }} method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-black font-w500">Investment By</label>
                        {{-- <input type="text" class="form-control" name="name" placeholder="Investor Name" required> --}}
                        <select id="investorNameModal" class="custom-select" aria-label="Default select example"
                            name="investor_id" required>
                            @foreach ($investors as $investor)
                                <option value="{{ $investor->id }}">{{ $investor->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Your Name</label>
                        <input type="text" class="form-control" name="user_id" value="{{ Auth::user()->id }}"
                            placeholder="{{ Auth::user()->name }}" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rs</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                        <input type="number" class="form-control" name="amount" placeholder="Amount taken...."
                            required>
                    </div>
                    <input type="hidden" name="hidden_id" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addInvestment">Save Investment</button>
                <button type="button" class="btn btn-primary editInvestment" data-id="ok">Edit
                    Investment</button>
            </div>
        </div>
    </div>
</div>