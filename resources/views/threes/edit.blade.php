@extends('admin.dashboard.index')
@section('content')
<div class="row">
<div class="">
    <label>৩য় সপ্তাহ</label>
    <form action="{{ route('threes.update',$three->id) }}" Method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" class="form-control" name="customer_id" value="">
        <input type="number" class="form-control" name="three" value="{{$three->three}}">
        <input type="submit" value="Update">
    </form>
</div>
</div>
@endsection
