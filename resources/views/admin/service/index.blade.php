
@extends('layouts.admin.app')

@section('admin_content')

<x-admin.page-title dashboard_title="Admin" title="Service" page_name="All Service">
    <a href="{{ route('admin.service.create') }}" class="btn btn-success" >Add service</a>
</x-admin.page-title>
<x-admin.table title="service" :headers="['No', 'name', 'Action']" />

@endsection

@push('js')
    <script>
        var table = $('#datatable').DataTable({
            ajax: '{!! route('admin.service.index') !!}',
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
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    render: function(data, type, row) {
                        return `

                    <a href="${route('admin.service.edit',row.id) }" class="btn btn-outline-secondary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    <a href="${route('admin.service.destroy',row.id) }" class="btn btn-outline-danger btn-sm" id="deleteBtn"><i class="fas fa-trash-alt"></i></a>
                    `;

                    }
                },
            ]
        });
    </script>
@endpush
