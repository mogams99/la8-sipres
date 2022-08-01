<x-templates.default>
    <x-slot name="title">Histori Pengguna</x-slot>
    <div class="row mt-3">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h3 class="card-title">Data User</h3> -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>
                                        No.
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Waktu Masuk
                                    </th>
                                    <th>
                                        Waktu Keluar
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
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
            var url = "{!! route('presence.index') !!}";
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
                        data: 'users.name',
                        name: 'name'
                    },
                    {
                        data: 'users.email',
                        name: 'email'
                    },
                    {
                        data: 'time_in',
                        name: 'time_in'
                    },
                    {
                        data: 'time_out',
                        name: 'time_out'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                ]
            });
        });
    </script>
    @endpush
</x-templates.default>