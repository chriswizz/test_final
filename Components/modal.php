<div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <img src="https://codefactory.wien/wp-content/themes/hestia/cf-images/big-jpg/2-fullstack.jpg" style="width:100%" alt="">
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="row">
                                <p id="title"></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <p id="description"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-10 m-auto">
                            <select id="select_date" class="md-form mdb-select colorful-select dropdown-primary">
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="update">Save changes</button>
            </div>
        </div>
    </div>
</div>