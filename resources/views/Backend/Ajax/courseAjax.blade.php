@foreach($listCourse as $courses)
    <option value="{{$courses->id}}" {{$courses->id == old('course_id') ? 'selected' : ''}}>{{$courses->c_title}}</option>
@endforeach