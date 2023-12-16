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
                            <h6>Home Page Section</h6>
                        </div>

                        <a href="{{ url('/admin/show_landing') }}" class="btn btn-dark w-10 ms-4">
                            <i class="bi bi-arrow-left"></i>
                            Back
                        </a>

                        <div class="card-body px-0 pt-0 pb-2">

                            <form action="{{ url('/admin/update_landing_confirm', $landing->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row text-center m-3">
                                    <div class="col-4">
                                        <label for="">
                                            Url
                                        </label>
                                        <input type="text" name="url" class="form-control"
                                            value="{{ $landing->url }}">
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Title
                                        </label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $landing->title }}" >
                                    </div>
                                    <div class="col-4">
                                        <label for="">
                                            Subtitle
                                        </label>
                                        <input type="text" name="subtitle" class="form-control"
                                            value="{{ $landing->subtitle }}" >
                                    </div>
                                </div>
                                <div class="card-header pb-0">
                                    <h6>Home Page About Section</h6>
                                </div>
                                <div class="row text-center m-3">
                                    <div class="col-6">
                                        <label for="">
                                            About Title
                                        </label>
                                        <input type="text" name="abouttitle" class="form-control"
                                            value="{{ $landing->abouttitle }}" >
                                    </div>
                                    <div class="col-6">
                                        <label for="">
                                            About Text
                                        </label>
                                        <textarea name="abouttext" class="form-control" id="" cols="30" rows="10" >{{ $landing->abouttext }}</textarea>
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
