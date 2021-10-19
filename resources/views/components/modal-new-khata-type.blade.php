<div class="modal fade newkhatatypeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center"></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="NewkhatatypeForm" action={{ route('khata-types.store') }} method="POST"
                    novalidate="novalidate" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" aria-describedby="name"
                                    placeholder="Add khata type shortcut name" name="name" required />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-1">
                                <label class="form-label" for="description">Description</label>
                                <input type="text" class="form-control" aria-describedby="description"
                                    placeholder="Add some description" name="description" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="hidden_id" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary addkhatatype">Save khatatype Type</button>
                <button type="button" class="btn btn-primary editkhatatype"
                    data-id="{{ route('khata-types.update') }}">Edit
                    khatatype</button>
            </div>
            </form>
        </div>
    </div>
</div>
