<x-templates.default>
    <x-slot name="title">MyPresence</x-slot>
    <div class="row mt-3">
        <!-- form input -->
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold">Form Presence</h4>
                    <form action="{{ route('presence.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="text" class="form-control form-control-sm" value="{{ date('d-m-Y') }}" name="" disabled>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Waktu</label>
                                    <input type="text" class="form-control form-control-sm" value="{{ date('H:i') }}" name="" disabled>
                                </div>
                            </div>
                            <div class="col-md-5 mt-4">
                                <button type="submit" class="btn btn-md btn-success" name="BtnIn" value="in">Presensi Masuk</button>
                                <button type="submit" class="btn btn-md btn-danger" name="BtnOut" value="out">Presensi Keluar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-templates.default>