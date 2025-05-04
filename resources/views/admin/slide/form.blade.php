<x-admin.modal
    enctype="multipart/form-data"
    :title="isset($slide) ? 'Update Slide' : 'Add New Slide'"
    :action="isset($slide) ? route('admin.slide.update', $slide->id) : route('admin.slide.store')"
    :button="isset($slide) ? 'Update' : 'Submit'"
>
    @isset($slide)
        @method('PUT')
    @endisset

    <x-admin.form-group label="title" placeholder="Enter slide title" :value="$slide->title ?? ''" />
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="" class="form-label">শিরোনাম<span class="text-danger">*</span></label>
                    <input type="text" name="title_bn" value="@isset($slide){{ $slide->title_bn}}  @endisset" class="form-control"  placeholder="ইন্টার শিরোনাম">
                    <span class="text-danger"></span>
                </div>
            </div>
        <x-admin.form-group
        label="image"
        type="file"
        accept=""
    />

</x-admin.modal>


