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
                            <h6>Edit {{ $service->title }}</h6>
                        </div>

                        <div class="card-body px-auto pt-0 pb-2">
                            <form action="{{ url('/admin/update_service_confirm', $service->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mt-4 row">
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Title</label>
                                            <input type="text" name="title" value="{{ $service->title }}"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Subtitle</label>
                                            <textarea name="subtitle" class="form-control" id="" cols="30" rows="2" required>{{ $service->subtitle }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Text</label>
                                            <textarea name="text" class="form-control" id="" cols="30" rows="2" required>{{ $service->text }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Detailed Text</label>
                                            <textarea name="detailtext" class="form-control" id="" cols="30" rows="2">{{ $service->detailtext }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Service Option
                                                Status</label>
                                            <select class="form-select" name="have_option">
                                                <option value="0"
                                                    {{ $service->have_option == '0' ? 'selected' : '' }}>
                                                    No Options
                                                </option>
                                                <option value="1"
                                                    {{ $service->have_option == '1' ? 'selected' : '' }}>
                                                    With Options
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Option Title</label>
                                            <input type="text" name="title_option"
                                                value="{{ $service->title_option }}" class="form-control"
                                                {{ $service->have_option == 0 ? 'disabled' : '' }} >
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn mt-3 btn-dark ">Submit</button>
                                </div>
                            </form>

                            @if ($service->have_option == 1)
                                @include('admin.service.show_service_option')
                            @endif
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
