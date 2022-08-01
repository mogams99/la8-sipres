@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session()->has('info'))
<div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
  <strong>{{ session('info') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
  <strong>{{ session('danger') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif