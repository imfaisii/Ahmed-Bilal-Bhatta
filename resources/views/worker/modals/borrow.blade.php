<div class="modal fade borrowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center"></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="borrowNreturnForm">
                    <div class="form-group">
                        <label class="text-black font-w500">Amount ( Rs )</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rs</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                            <input type="number" class="form-control" name="amount" placeholder="Amount taken...."
                                required>
                        </div>
                        @error('amount')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="hidden" class="form-control" name="user_id" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary saveBR">Save changes</button>
            </div>
        </div>
    </div>
</div>
