<button type="button" class="btn btn-dark mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="me-2 fs-6 bi bi-plus-lg"></i>
    Add Description
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Description
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/add_description') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Project ID
                            </label>
                            <input type="number" name="project_id" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">
                                Project Name English
                            </label>
                            <input type="text" name="project_nameen" class="form-control" required>
                        </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Project Name Arabic
                        </label>
                        <input type="text" name="project_namear" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Title English
                        </label>
                        <input type="text" name="titleen" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Title Arabic
                        </label>
                        <input type="text" name="titlear" class="form-control" required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text English
                        </label>
                        <textarea type="text" name="texten" class="form-control" cols="30" rows="20" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            Text Arabic
                        </label>
                        <textarea type="text" name="textar" class="form-control" cols="30" rows="20" required></textarea>
                    </div>



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
