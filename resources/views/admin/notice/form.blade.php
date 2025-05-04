<x-admin.modal
    enctype="multipart/form-data"
    :title="isset($notice) ? 'Update Notice' : 'Add New Notice'"
    :action="isset($notice) ? route('admin.notice.update', $notice->id) : route('admin.notice.store')"
    :button="isset($notice) ? 'Update' : 'Submit'"
>
    @isset($notice)
        @method('PUT')
    @endisset

    <x-admin.form-group label="title" placeholder="Enter notice title" :value="$notice->title ?? ''" required/>
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="" class="form-label">শিরোনাম<span class="text-danger">*</span></label>
                    <input type="text" name="title_bn" value="@isset($notice){{ $notice->title_bn}}  @endisset" class="form-control"  placeholder="ইন্টার শিরোনাম" required>
                    <span class="text-danger"></span>
                </div>
            </div>
        <x-admin.form-group
        label="file"
        type="file"
        accept=""
    />

</x-admin.modal>


