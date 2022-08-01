<x-templates.default>
    <x-slot name="title">Beranda</x-slot>

    @role('admin')
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                        <div>
                            <p class="mb-2 text-md-center text-lg-left">Total Terlambat</p>
                            <h1 class="mb-0">{{ $T }}</h1>
                        </div>
                        <i class="mdi mdi-calendar-remove icon-xl text-secondary"></i>
                    </div>
                    <canvas id="expense-chart" height="80"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                        <div>
                            <p class="mb-2 text-md-center text-lg-left">Total Pulang Cepat</p>
                            <h1 class="mb-0">{{ $pL }}</h1>
                        </div>
                        <i class="mdi mdi-calendar-clock icon-xl text-secondary"></i>
                    </div>
                    <canvas id="budget-chart" height="80"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                        <div>
                            <p class="mb-2 text-md-center text-lg-left">Total Masuk Pagi</p>
                            <h1 class="mb-0">{{ $mP }}</h1>
                        </div>
                        <i class="mdi mdi-calendar-check icon-xl text-secondary"></i>
                    </div>
                    <canvas id="balance-chart" height="80"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                        <div>
                            <p class="mb-2 text-md-center text-lg-left">Total Lembur</p>
                            <h1 class="mb-0">{{ $L }}</h1>
                        </div>
                        <i class="mdi mdi-calendar-multiple icon-xl text-secondary"></i>
                    </div>
                    <canvas id="balance-chart" height="80"></canvas>
                </div>
            </div>
        </div>
    </div>
    @endrole

    @role('user')
        <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap">
                        <div>
                            <h5 class="mb-2 text-md-center text-lg-left">Selamat bekerja, <strong>Kak {{ Auth::user()->name }}</strong>!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endrole
    
</x-templates.default>