@foreach($district as $dis)
    <option  value="{{$dis->id}}" {{old('city_id') == $dis->id ? 'selected' : ''}}>{{$dis->name}}</option>
@endforeach