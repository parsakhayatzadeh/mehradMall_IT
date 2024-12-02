@if (session('alert-section-error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class=" alert-heading">  خطا</div>
        <hr>
        <p class="mb-0">
            {{ session('alert-section-error') }}
        </p>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
            style="right: auto , left:0 !important">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
