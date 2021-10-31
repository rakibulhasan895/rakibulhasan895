@extends('admin.dashboard.index')
@section('content')
<div class="row">
<div class="">
<label>১ম সপ্তাহ</label>
<form action="{{ route('ones.update',$one->id) }}" Method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" class="form-control" name="customer_id" value="">
    <input type="number" class="form-control" name="one" value="{{$one->one}}">
    <input type="submit" value="Update">
</form>
</div>
</div>
@endsection

