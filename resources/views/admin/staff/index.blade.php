
@extends('layouts.admin.app')

@section('admin_content')

<x-admin.page-title dashboard_title="Admin" title="Staff" page_name="All staff">
    <a href="{{ route('admin.staff.create') }}" class="btn btn-success" id="">Add staff</a>
</x-admin.page-title>
<x-admin.table title="staff" :headers="['No', 'name','designation',  'Action']" />

@endsection

@push('js')
    <script>
        var table = $('#datatable').DataTable({
            ajax: '{!! route('admin.staff.index') !!}',
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'id',
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'designation',
                    name: 'designation'
                },

                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                        <a href="${route('admin.staff.show',row.id) }" class="btn btn-outline-success btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="${route('admin.staff.edit',row.id) }" class="btn btn-outline-secondary btn-sm" id="editBt"><i class="fas fa-pencil-alt"></i></a>
                    <a href="${route('admin.staff.destroy',row.id) }" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
                    `;

                    }
                },
            ]
        });
    </script>
@endpush
