<div class="row mb-3">
    <div class="col-12">
        <div class="d-flex justify-content-center">

            @include('admin.service.add_service_option')

        </div>
    </div>
</div>

<div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
        <thead>
            <tr class="text-center">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Option Title
                </th>
                <th class="text-secondary opacity-7"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($serviceoption as $option)
                <tr class="text-center">
                    <td>
                        <p class="text-xs font-weight-bold mb-0">
                            {!! $option->option !!}
                        </p>
                    </td>
                    <td class="align-middle">
                        <a href="{{ url('admin/delete_serviceoption', $option->id) }}"
                            class="text-danger font-weight-bold text-xs" data-toggle="tooltip"
                            data-original-title="Edit service"
                            onclick="return confirm('Are you sure you want to delete this option?')">
                            Delete
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="16">
                        <p class="text-xs text-center text-danger font-weight-bold mb-0">
                            No Data !
                        </p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $serviceoption->render('admin.pagination') }}
</div>
