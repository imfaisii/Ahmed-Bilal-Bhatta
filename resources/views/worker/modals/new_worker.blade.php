<div class="modal fade WorkerModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center"></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="NewWorkerForm" action={{ route('worker.store') }} method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="text-black font-w500">Worker Name</label>
                        <input type="text" class="form-control" name="wname" placeholder="Worker Name" required>
                        @error('wname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Worker Address</label>
                        <input type="text" class="form-control" name="waddress" placeholder="Some Address..">
                        @error('waddress')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Worker Phone No</label>
                        <input type="number" class="form-control" name="wphone" placeholder="03XXXXXXXXX" maxlength="11"
                            minlength="11" required>
                        @error('wphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Worker CNIC</label>
                        <input type="number" class="form-control" name="wcnic" placeholder="3xxxxxxxxxxxx"
                            maxlength="13" minlength="13" required>
                        @error('wcnic')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Worker Peshgi</label>
                        <input type="number" class="form-control" name="wpeshgi" placeholder="123..">
                        @error('wpeshgi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="wimage">
                            <label class="custom-file-label">Select profile photo</label>
                        </div>
                        @error('wimage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="hidden" name="hidden_id" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addWorker">Save worker</button>
                <button type="button" class="btn btn-primary editWorker" data-id="{{ route('worker.update') }}">Edit
                    worker</button>
            </div>
        </div>
    </div>
</div>
