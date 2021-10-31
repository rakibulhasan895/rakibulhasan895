@extends('layouts.head')
@section('content')
    <div class="container">
        <div class="col-md-7 pl-1 heading">
             <label>
                  <a class="" href="{{ url('dashboard') }}" title="back">
                     <h4 style="margin:10px;">Back</h4>
                  </a>
               </label>
              <label>
                <h2 style="margin-left:20px;">{{ __('মাসিক') }}</h2>
            </label>
             <label>
                <h2 style="margin-left:20px;">{{ __('রাজনু') }}</h2>
            </label>
        </div>
     <hr>
            <div style="display: none">
            {{ $total = 0 }}
        </div>
        <div class="container-fluid">
  <div class="row">
    <div class="col-sm">
      <h3>মাসিক</h3>
       @foreach ($users as $user)
      <td>{{ $user->months }}={{ $total = $user->total_amount }}</td>
      <br>
     @endforeach     
    </div>
    </div>
</div>
@endsection