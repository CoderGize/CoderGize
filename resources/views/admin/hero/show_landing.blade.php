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

                        <a href="{{ url('/admin/update_landing', $landing->id) }}" class="btn btn-dark w-10 mx-auto">
                            <i class="bi bi-pencil"></i>
                            Update
                        </a>

                        <div class="card-body px-0 pt-0 mt-4 pb-2">

                            <div class="row text-center my-3">
                                <div class="col-4">
                                    <label for="">
                                        Url
                                    </label>
                                    @if ($landing->url != null)
                                        <p>
                                            <i class="bi bi-check2 text-success fs-3"></i>
                                        </p>
                                    @else
                                        <p>
                                            <i class="bi bi-x-lg text-danger fs-3"></i>
                                        </p>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label for="">
                                        Title
                                    </label>
                                    <p>
                                        {{ $landing->title }}
                                    </p>
                                </div>
                                <div class="col-4">
                                    <label for="">
                                        Subtitle
                                    </label>
                                    <p>
                                        {{ $landing->subtitle }}
                                    </p>
                                </div>
                            </div>
                            <div class="card-header pb-0">
                                <h6>Home Page About Section</h6>
                            </div>
                            <div class="row text-center my-3">
                                <div class="col-6">
                                    <label for="">
                                        About Title
                                    </label>
                                    <p>
                                        {{ $landing->abouttitle }}
                                    </p>
                                </div>
                                <div class="col-6">
                                    <label for="">
                                        About Text
                                    </label>
                                    <p>
                                        {{ $landing->abouttext }}
                                    </p>
                                </div>
                            </div>
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
