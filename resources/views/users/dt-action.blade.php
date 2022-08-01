<div class="row">
    <div class="col-3">
        <a href="{{ route('users.edit', $model) }}" class="btn btn-info btn-sm">Ubah</a>
    </div>
    <div class="col-3">
        <a href="#" class="btn btn-danger btn-sm" id="delete" data-id="{{ $model->id }}">Hapus</a>
    </div>
</div>