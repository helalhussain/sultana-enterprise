@props([
    'item_name'=>null,
    'item' =>null,
   ])

<div class="row">
    <div class="col-sm-4">
        <h6 class="mb-0">{{ $item_name }}</h6>
    </div>
    <div class="col-sm-8 text-secondary">
        {{  $item }}
    </div>
</div>
<hr>
