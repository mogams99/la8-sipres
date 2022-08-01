<!DOCTYPE html>
<html lang="en">

@include('components.templates.partials.head')

<body>
    <div class="container-scroller">
        <!-- navbar -->
        @include('components.templates.partials.navbar')

        <div class="container-fluid page-body-wrapper">
            <!-- sidebar -->
            @include('components.templates.partials.sidebar')

            <!-- main-content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-7">
                            <div class="d-flex align-items-baseline mt-3">
                                @if($title == 'Master Pengguna' || $title == 'Beranda' || $title == 'Histori Pengguna')
                                <p><a class="text-info" href="{{ route('dashboard') }}">Beranda</a></p>
                                @elseif($title == 'Tambah Pengguna')
                                <p><a class="text-info" href="{{ route('users.index') }}">Master Pengguna</a></p>
                                @elseif($title == 'PresensiKu')
                                <p><a class="text-info" href="{{ route('presence.create') }}">PresensiKu</a></p>
                                @endif
                                <span class="pr-2 pl-2"> > </span>
                                <p style="font-weight: 500;">{{ $title ?? 'Breadcumb Error' }}</p>
                            </div>
                        </div>
                        @if($title == 'Master Pengguna')
                        <div class="col-5 ml-auto">
                            <a class="btn btn-success btn-md float-right" href="{{ route('users.create') }}">Tambah Pengguna</a>
                        </div>
                        @endif
                    </div>
                    <x-forms.alert />
                    {{ $slot }}


                </div>
                <!-- footer -->
                @include('components.templates.partials.footer')
            </div>

            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center mt-3">
                            <strong>Logout,</strong>
                            <p class="mt-1">Are you sure?</p>
                        </div>
                        <div class="modal-footer mr-auto ml-auto">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" id="logout">Logout</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('components.templates.partials.scripts')
</body>

</html>