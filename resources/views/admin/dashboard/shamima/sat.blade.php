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
                <h2 style="margin-left:20px;">{{ __('শনিবার') }}</h2>
            </label>
             <label>
                <h2 style="margin-left:20px;">{{ __('শামীমা') }}</h2>
            </label>
        </div>
     <hr>
            <div style="display: none">
            {{ $totalm = 0 }}
            {{ $total = 0 }}
            {{ $total2 = 0 }}
            {{ $total3 = 0 }}
            {{ $total4 = 0 }}
            {{ $total5 = 0 }}
        </div>
        <div class="container-fluid">
  <div class="row">
    <div class="col-sm">
      <h3>১ম সপ্তাহ</h3>
       @foreach ($users as $user)
      <td>{{ $user->months }}={{ $total = $user->total_amount }}</td>
      <br>
     @endforeach     
    </div>
        <div class="col-sm">
      <h3>২য় সপ্তাহ</h3>
       @foreach ($users2 as $user)
      <td>{{ $user->months }}={{ $total = $user->total_amount }}</td>
      <br>
     @endforeach     
    </div>
        <div class="col-sm">
      <h3>৩য়  সপ্তাহ</h3>
       @foreach ($users3 as $user)
      <td>{{ $user->months }}={{ $total = $user->total_amount }}</td>
      <br>
     @endforeach     
    </div>
        <div class="col-sm">
      <h3>৪র্থ সপ্তাহ</h3>
       @foreach ($users4 as $user)
      <td>{{ $user->months }}={{ $total = $user->total_amount }}</td>
      <br>
     @endforeach     
    </div>
        <div class="col-sm">
      <h3>৫ম সপ্তাহ</h3>
       @foreach ($users5 as $user)
      <td>{{ $user->months }}={{ $total = $user->total_amount }}</td>
      <br>
     @endforeach     
    </div>
    </div>
</div>
@endsection