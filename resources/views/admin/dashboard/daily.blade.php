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
                <h3 style="margin:10px;">{{ __('দৈনিক আদায় ') }}</h3>
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
    <div class="co l-sm">
      <h3>মাসিক</h3>
       @foreach ($usersm as $userm)
     <?php 
     $monthDay = $userm->day;
     $monthNum = $userm->month;
     $dateObj = DateTime::createFromFormat('!m', $monthNum);
     $monthName = $dateObj->format('F');
     ?>
      <td>{{ $userm->year}}-{{ $userm->month }}-{{$userm->day }}={{ $totalm = $userm->total_amount }}</td><br>
     @endforeach     
    </div>
    <div class="col-sm">
      <h3>১ম সপ্তাহ</h3>
       @foreach ($users as $user)
     <?php $monthNum1 = $user->month;
     $dateObj = DateTime::createFromFormat('!m', $monthNum1);
     $monthName1 = $dateObj->format('F');
     ?>
      <td>{{ $user->year}}-{{ $user->month }}-{{$user->day }}={{ $total = $user->total_amount }}</td><br>
     @endforeach     
    </div>
    <div class="co l-sm">
      <h3>২য় সপ্তাহ</h3>
             @foreach ($users2 as $user2)
             <?php $monthNum2 = $user2->month;
             $dateObj = DateTime::createFromFormat('!m', $monthNum2);
             $monthName2 = $dateObj->format('F');?>
      <td>{{ $user2->year}}-{{ $user2->month }}-{{$user2->day }}={{ $total2 = $user2->total_amount }}</td><br>
     @endforeach     
    </div>
    <div class="col-sm">
      <h3>৩য় সপ্তাহ</h3>
       @foreach ($users3 as $user3)
     <?php $monthNum3 = $user3->month;
     $dateObj = DateTime::createFromFormat('!m', $monthNum3);
     $monthName3 = $dateObj->format('F');
     ?>
      <td>{{ $user3->year}}-{{ $user3->month }}-{{$user3->day }}={{ $total3 = $user3->total_amount }}</td><br>
     @endforeach     
    </div>   
    <div class="col-sm">
      <h3>৪র্থ সপ্তাহ</h3>
       @foreach ($users4 as $user4)
     <?php $monthNum4 = $user4->month;
     $dateObj = DateTime::createFromFormat('!m', $monthNum4);
     $monthName4 = $dateObj->format('F');
     ?>
      <td>{{ $user4->year}}-{{ $user4->month }}-{{$user4->day }}={{ $total4 = $user4->total_amount }}</td><br>
     @endforeach     
    </div>  
    <div class="co l-sm">
      <h3>৫ম সপ্তাহ</h3>
       @foreach ($users5 as $user5)
     <?php $monthNum5 = $user5->month;
     $dateObj = DateTime::createFromFormat('!m', $monthNum1);
     $monthName5 = $dateObj->format('F');
     ?>
      <td>{{ $user5->year}}-{{ $user5->month }}-{{$user5->day }}={{ $total5 = $user5->total_amount }}</td><br>
     @endforeach     
    </div>  
    </div>
</div>
@endsection