<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target=".bd-example-modal-lg">Large
    modal</button>
<div class="modal fade bricksDoneModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Details of the Bricks Done by the <p class="worker-name"></p>
                </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="bricksDoneForm" action="">
                    <div class="form-group">
                        <label class="text-black font-w500">Enter Number of bricks done by <p class="worker-name">
                            </p></label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="bricks_done"
                                placeholder="Total Bricks...." required>
                        </div>
                        <label class="text-black font-w500">Enter the rate at which bricks are done by <p
                                class="worker-name"></p></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rs</span>
                                <span class="input-group-text">0.00</span>
                            </div>
                            <input type="text" class="form-control" name="rate"
                                placeholder="Rate of brick making...." required>
                        </div>
                        <label class="text-black font-w500">Enter the round number</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" name="round_number"
                                placeholder="Round Number...." required>
                        </div>
                        <label class="text-black font-w500">Enter the season name/details</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="season" placeholder="Season Details...."
                                required>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary saveBricksReturn">Save changes</button>
            </div>
        </div>
    </div>
</div>
