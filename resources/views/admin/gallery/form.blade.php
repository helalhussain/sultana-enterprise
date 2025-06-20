<x-admin.modal
    enctype="multipart/form-data"
    :title="isset($gallery) ? 'Update gallery' : 'Add New gallery'"
    :action="isset($gallery) ? route('admin.gallery.update', $gallery->id) : route('admin.gallery.store')"
    :button="isset($gallery) ? 'Update' : 'Submit'"
>
    @isset($gallery)
        @method('PUT')
    @endisset

    <x-admin.form-group label="title" placeholder="Enter gallery title" :value="$gallery->title ?? ''" required/>
            <div class="col-lg-12">
                {{-- <div class="mb-3">
                    <label for="" class="form-label">শিরোনাম<span class="text-danger">*</span></label>
                    <input type="text" name="title_bn" value="@isset($gallery){{ $gallery->title_bn}}  @endisset" class="form-control"  placeholder="ইন্টার শিরোনাম" required>
                    <span class="text-danger"></span>
                </div> --}}
            </div>
        <x-admin.form-group
        label="file"
        type="file"
        accept=""
    />

</x-admin.modal>


