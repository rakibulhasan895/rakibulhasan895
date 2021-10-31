@extends('admin.dashboard.index')
@section('content')
<div class="row">
<div class="">
    <label>৪র্থ সপ্তাহ</label>
    <form action="{{ route('fours.update',$four->id)}}" Method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" class="form-control" name="customer_id" value="">
        <input type="number" class="form-control" name="four" value="{{$four->four}}">
        <input type="submit" value="Update">
    </form>
</div>
</div>
@endsection
