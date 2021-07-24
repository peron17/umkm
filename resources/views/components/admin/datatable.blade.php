<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="{{ $id }}">
                <thead>
                    <tr>
                        <th>No.</th>
                        @foreach ($columns as $key => $column)
                        <th>{{ $column }}</th>
                        @endforeach
                        <th><i class="fa fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

@php
$clmns = "{data: 'id', name: 'id'},";
foreach($columns as $key => $column) {
    $clmns .= "{data: '".$key."', name: '".$key."'},"; 
}
$clmns .= "{data: 'action', name: 'action'},";
$script = "
<script type=\"text/javascript\">
    $('#".$id."').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: \"".$route."\",
            dataSrc: 'data'
        },
        columns: [
            ".$clmns."
        ]
    });
</script>
";
@endphp

@push('script')
    {!! $script !!}
@endpush