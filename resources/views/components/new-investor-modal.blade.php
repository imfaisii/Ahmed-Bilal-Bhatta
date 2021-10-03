<div class="modal fade newInvestorModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Add a new Investor</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="NewInvestorForm" action={{ route('investor.store') }} method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-black font-w500">Investor Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Investor Name" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Investor Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Some Address.." required>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Investor Phone No</label>
                        <input type="number" class="form-control" name="phone" placeholder="03XXXXXXXXX"
                            maxlength="11" minlength="11" required>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Investor CNIC</label>
                        <input type="number" class="form-control" name="cnic" placeholder="3xxxxxxxxxxxx"
                            maxlength="13" minlength="13" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profile_image">
                            <label class="custom-file-label">Select profile photo</label>
                        </div>
                    </div>
                    <input type="hidden" name="hidden_id" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addInvestor">Save Investor</button>
                <button type="button" class="btn btn-primary editInvestor"
                    data-id="{{ route('investor.update') }}">Edit
                    Investor</button>
            </div>
        </div>
    </div>
</div>
