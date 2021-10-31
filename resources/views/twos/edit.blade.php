@extends('admin.dashboard.index')
@section('content')
<div class="row">
<div class="">
    <label>২য় সপ্তাহ</label>
    <form action="{{ route('twos.update',$two->id) }}" Method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" class="form-control" name="customer_id" value="">
        <input type="number" class="form-control" name="two" value="{{$two->two}}">
        <input type="submit" value="Update">
    </form>
</div>
</div>
@endsection
