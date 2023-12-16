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
                            <h6>Edit </h6>
                        </div>

                        <div class="card-body px-auto pt-0 pb-2">
                            <form action="{{ url('/admin/update_partner_confirm', $partner->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 row">
                                    <div class="col-12 col-sm-12">
                                        <div class="mb-3">
                                            {{-- <label for="exampleInputPassword1" class="form-label">Logo</label> --}}
                                            <img src="/partner/{{ $partner->logo }}" class="d-block m-auto" width="300px" alt="">
                                            <div class="col-12 col-sm-6 mx-auto">
                                                <div class="mt-4">
                                                    <input name="logo" class="form-control" id="" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn mt-3 btn-dark ">Submit</button>
                                </div>
                             </form>
                    </div>
                </div>
            </div>
            @include('admin.footer')
        </div>
    </main>

    @include('admin.script')

</body>

</html>
