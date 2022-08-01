<x-templates.default>
    <x-slot name="title">Master Pengguna</x-slot>
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h3 class="card-title">Data User</h3> -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-bold">
                                        No.
                                    </th>
                                    <th class="text-bold">
                                        Nama
                                    </th>
                                    <th class="text-bold">
                                        Email
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-blur fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center mt-3">
                        <strong>Delete User,</strong>
                        <p class="mt-1">Are you sure?</p>
                    </div>
                    <div class="modal-footer mr-auto ml-auto">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" data-id="" id="confirmDelete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('extra-styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
    <style>
        .dataTables_info,
        .dataTables_length {
            display: none;
        }
    </style>
    @endpush

    @push('extra-scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

    <script>
        $(function() {
            var url = "{!! route('users.index') !!}";
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: url,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });
        });

        $('#dataTable').on('click', 'a#delete', function(e) {
            e.preventDefault()
            var id = $(this).data('id')
            $('#confirmDelete').attr('data-id', id)
            $('#deleteModal').modal('show')
        })

        $('#confirmDelete').click(function(e) {
            e.preventDefault()
            var id = $(this).data('id')
            $.ajax({
                type: 'DELETE',
                url: 'users/' + id,
                data: {
                    '_token': "{{ csrf_token() }}"
                },
                success: function(response) {
                    // console.log(response.success)
                    if (response.success) {
                        window.location.href = ''
                    }
                },
            });
        })
    </script>
    @endpush
</x-templates.default>