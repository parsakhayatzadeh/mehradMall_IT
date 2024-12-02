
  @if (session('alert-section-warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <div class=" alert-heading">  خطا</div>
        <hr>
        <p class="mb-0">
            {{ session('alert-section-warning') }}
        </p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
            style="right: auto , left:0 !important">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
