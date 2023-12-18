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
                            <h6>Project</h6>
                        </div>

                        <a href="{{ url('/admin/show_project') }}" class="btn btn-dark w-10 ms-4">
                            <i class="bi bi-arrow-left"></i>
                            Back
                        </a>

                        <div class="card-body px-0 pt-0 pb-2">

                            <form action="{{ url('/admin/update_project_confirm', $project->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row text-center m-3">
                                    <div class="col-4">
                                        <label for="">
                                            Category Name English
                                        </label>
                                        <input type="text" name="category_nameen" class="form-control"
                                            value="{{ $project->category_nameen }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Category Name Arabic
                                        </label>
                                        <input type="text" name="category_namear" class="form-control"
                                            value="{{ $project->category_namear }}">
                                    </div>



                                    <div class="col-2">
                                        <label for="">
                                            Date English
                                        </label>
                                        <input type="date" name="dateen" class="form-control"
                                            value="{{ $project->dateen }}" >
                                    </div>


                                    <div class="col-2">
                                        <label for="">
                                            Date Arabic
                                        </label>
                                        <input type="date" name="datear" class="form-control"
                                            value="{{ $project->datear }}" >
                                    </div>
                                </div>



                                <div class="row text-center m-3">
                                    <div class="col-4">
                                        <label for="">
                                            Name English
                                        </label>
                                        <input type="text" name="nameen" class="form-control" value="{{ $project->nameen }}" required>

                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Name Arabic
                                        </label>
                                        <input type="text" name="namear" class="form-control" value="{{ $project->namear }}" required>

                                    </div>

                                    <div class="col-2">
                                        <label for="">
                                            Client English
                                        </label>
                                        <input type="text" name="clienten" class="form-control"
                                        value="{{ $project->clienten }}" >

                                    </div>

                                    <div class="col-2">
                                        <label for="">
                                            Client Arabic
                                        </label>
                                        <input type="text" name="clientar" class="form-control"
                                        value="{{ $project->clientar }}" >

                                    </div>





                                <div class="row text-center m-3">
                                    <div class="col-4">
                                        <label for="">
                                            Text English
                                        </label>
                                        <textarea type="text" name="texten" class="form-control" cols="10" rows="3" required>{{ $project->texten }}</textarea>

                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Text Arabic
                                        </label>
                                        <textarea type="text" name="textar" class="form-control" cols="30" rows="20" required>{{ $project->textar }}</textarea>

                                    </div>

                                    <div class="col-4">
                                        <label for="">
                                            Color
                                        </label>
                                        <input type="text" name="color" class="form-control"
                                        value="{{ $project->color }}" >

                                    </div>



                                </div>


                                <div class="row text-center m-3">
                                    <div class="col-12">
                                        <label for="exampleFormControlInput1" class="form-label">
                                            Image
                                        </label>
                                    <div>
                                        <img src="/project/{{ $project->img }}" width="100px" />
                                    </div>

                                        <input type="file" name="img" class="form-control mt-3"  required>
                                    </div>
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
