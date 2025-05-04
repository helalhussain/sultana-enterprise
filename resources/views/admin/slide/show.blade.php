<x-admin.modal enctype="multipart/form-data" title="Show Slide">
    <div class="cards">
        <div class="card-body">
            <p class="card-titl">{{ $slide->title }}</p>
            <p class="card-titl">{{ $slide->title_bn }}</p>
        </div>
        @if ($slide->image != '')
            <div class="row ">
                <div class="col-xl-12 col-12">
                    <div class="cards">
                        <p class="email-attachment-title ">Image</p>

                        <img class="card-img-top img-fluid" src="{{ uploaded_file($slide->image) }}"
                            alt="Card image cap">
                        </span>

                    </div>
                </div>
            </div>
    </div>
    @endif
    </div>

</x-admin.modal>
