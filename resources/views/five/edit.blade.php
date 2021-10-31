@extends('admin.dashboard.index')
@section('content')
<div class="row">
    <div class="">
        <label>৫ম সপ্তাহ</label>
        <form action="{{ route('five.update',$five->id)}}" Method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="customer_id" value="">
            <input type="number" class="form-control" name="five" value="{{$five->five}}">
            <input type="submit" value="Update">
        </form>
    </div>
</div>
@endsection

