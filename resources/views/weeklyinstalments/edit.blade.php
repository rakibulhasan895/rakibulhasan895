@extends('admin.dashboard.index')
@section('content')
<div class="row">
    <div class="">
        <label>মাসিক </label>
        <form action={{ route('weeklyinstalments.update',$weeklyinstalment->id)}}" Method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="customer_id" value="">
            <input type="number" class="form-control" name="month" value="{{$weeklyinstalment->month}}">
            <button type="submit">Update </button>
        </form>
    </div>
</div>
@endsection

