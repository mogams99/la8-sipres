<x-templates.default>
    <x-slot name="title">Tambah Pengguna</x-slot>
    <div class="row mt-3">
        <!-- form input -->
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-weight-bold">Form Tambah Pengguna</h4>
                    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name">

                                    @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
                                    
                                    @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password">
                                
                                    @error('password')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="password-confirm">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control form-control-sm @error('password-confirm') is-invalid @enderror" name="password-confirm">
                                
                                    @error('password-confirm')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 col-sm-2 ml-auto">
                                <button type="submit" class="btn btn-md btn-success float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-templates.default>