@foreach($listCate as $cate)
    <option value="{!! $cate->id !!}" {{ $cate->id == old('cate_id') ? "selected" : ""}}>{!! $cate->cate_name !!}</option>
@endforeach