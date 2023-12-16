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

                        <div class="card-header pb-0 ">
                            <a href="{{ url('/admin/show_service') }}" class="btn btn-dark">
                                <i class="bi bi-arrow-left"></i>
                                back
                            </a>
                            {{-- <h6>Edit {{ $service->titleen }}</h6> --}}
                        </div>

                        <div class="card-body px-auto pt-0 pb-2">
                            <form action="{{ url('/admin/update_service_confirm', $service->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 row">
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Title English</label>
                                            <input type="text" name="titleen" value="{{ $service->titleen }}" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Title Arabic</label>
                                            <input name="titlear" class="form-control" id="" cols="30" rows="2" required value="{{ $service->titlear }}" />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Text English</label>
                                            <textarea name="texten" class="form-control" id="" cols="30" rows="2" required>{{ $service->texten }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Text Arabic</label>
                                            <textarea name="textar" class="form-control" id="" cols="30" rows="2">{{ $service->textar }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Current Image</label>
                                            <img src="/service/{{$service->icon}}" class="d-block m-auto" width="200px" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">New Image</label>
                                            <input name="icon" class="form-control" id="" type="file" accept="image/*">
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn mt-3 btn-dark">Submit</button>
                                </div>
                            </form>

                            {{-- @if ($service->have_option == 1)
                                @include('admin.service.show_service_option')
                            @endif --}}
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
