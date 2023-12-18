<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add Service
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Service
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_service') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/en.png" width="15px" alt="">

                            Title
                        </label>
                        <input type="text" name="titleen" class="form-control" id="exampleFormControlInput1"
                            name="titleen" placeholder="title..." required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/ar.png" width="15px" alt="">

                            Title
                        </label>
                        <input name="titlear" class="form-control" id="" cols="30" rows="10" required />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/en.png" width="15px" alt="">

                            Text
                        </label>
                        <textarea name="texten" class="form-control" id="" cols="30" rows="3" required>
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <img src="/images/ar.png" width="15px" alt="">

                            Text
                        </label>
                        <textarea name="textar" class="form-control" id="" cols="30" rows="3" required>
                        </textarea>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Icon
                        </label>
                        <input type="file" name="icon" class="form-control" id="" required />
                    </div>

                    {{-- <div class="mb-3">
                        <label for="">Service Option Status</label>
                        <select class="form-select" name="have_option">
                            <option value="0">No Options</option>
                            <option value="1">With Options</option>
                        </select>
                    </div> --}}

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Add
                        <i class="bi bi-plus-lg"></i>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
