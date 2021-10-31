@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('customers') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('ones.update',$one->id) }}" Method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" class="form-control" name="customer_id"> 
    <input type="number" class="form-control" name="one">
    <input type="submit" value="Submit">
</form>

@endsection
