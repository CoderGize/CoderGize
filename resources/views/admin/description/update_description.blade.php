<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body class="g-sidenav-show   bg-gray-100">

    @include('admin.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Description</h6>
                        </div>

                        <a href="{{ url('/admin/show_description') }}" class="btn btn-dark w-10 ms-4">
                            <i class="bi bi-arrow-left"></i>
                            Back
                        </a>

                        <div class="card-body px-0 pt-0 pb-2">

                            <form action="{{ url('/admin/update_description_confirm', $description->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row text-center m-3">
                                    <div class="col-4">
                                        <label for="">
                                            Project Name English
                                        </label>
                                        <input type="text" name="project_nameen" class="form-control"
                                            value="{{ $description->project_nameen }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Project Name Arabic
                                        </label>
                                        <input type="text" name="project_namear" class="form-control"
                                            value="{{ $description->project_namear }}">
                                    </div>

                                    <div class="col-2">
                                        <label for="">
                                            Title English
                                        </label>
                                        <input type="text" name="titleen" class="form-control"
                                            value="{{ $description->titleen }}" >
                                    </div>


                                    <div class="col-2">
                                        <label for="">
                                            Title Arabic
                                        </label>
                                        <input type="text" name="titlear" class="form-control"
                                            value="{{ $description->titlear }}" >
                                    </div>
                                </div>

                                <div class="row text-center m-3">
                                    <div class="col-6">
                                        <label for="">
                                            Text English
                                        </label>
                                        <textarea type="text" name="texten" class="form-control" cols="30" rows="20" required>{{ $description->texten }}</textarea>

                                    </div>
                                    <div class="col-6">
                                        <label for="">
                                            Text Arabic
                                        </label>
                                        <textarea type="text" name="textar" class="form-control" cols="30" rows="20" required>{{ $description->textar }}</textarea>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <button class="d-block m-auto btn btn-dark w-10 text-center"
                                            type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>

    @include('admin.script')

</body>

</html>
