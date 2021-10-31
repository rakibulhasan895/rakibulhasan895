<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ ('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('pdf.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href=" {{asset('css/css.css')}}" rel="stylesheet">
</head>
<body>
<div class="invoice" id="invoice">
            <div class="header" style="line-height:10px;">
                    <h4>{{ __('বিসমিল্লাহির  রাহমানির  রাহীম')}}</h4>
                    <a href="{{ url('/') }}">
                        <h2> {{ __('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র,দাপুনিয়া বাজার,পাবনা।') }} </h2>
                    </a>
                    <h3>{{ __('সমিতি ভিত্তিক মাসিক ঋণ আদায় বিবরণী ') }}</h3>
            </div>     
            <div class="grid-container">
  <div class="item1"><li> ">
  <h5>Back</h5><i class="fas fa-backward "></li>
    </a></li></div>
  <div class="item2"><a class="" href="{{ url('dashboard') }}" title="back">{{__('Back')}} </a></div>
  <div class="item3">{{ __('সমিতি:শনিবার') }}</div>
  <div class="item4">{{ __('মাস:') }}</div>
  <div class="item5">{{ __('সাল :') }}</div>
</div>

<table class="styled-table">
    <thead>
        <tr>
            <th>NO:</th>
            <th>সদস্যের নাম</th>
            <th>পিতা/স্বামীর নাম</th>
            <th>ঋণের ধরণ</th>
            <th>বিতরণ তারিখ</th>
            <th>ঋণের পরিমাণ</th>
            <th>অগ্রিম আদায়</th>
            <th>বিগত মাসের স্থিতি</th>
            <th>কিস্তির পরিমান</th>
            <th colspan="5" rowspan="1"> মাসের কিস্তি আদায়</th>
            <th>মাসে মোট আদায়</th>
            <th>মাস শেষে স্থিতি</th>
        </tr>
         <tr>
            <th colspan="9"></th>
            <th>Name</th>
            <th>Points</th>
            <th>Name</th>
            <th>Points</th>
            <th>Name</th>
	    <th></th>
	    <th></th>
        </tr>
        <tr>
    </thead>
    <tbody>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
            <td>Dom</td>
            <td>6000</td>
        </tr>
    </tbody>
</table>
<div>
 <button class="" onclick="download" id="download">pdf</button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="{{ asset('pdf.js') }}" defer></script>
</body>
</html>




     <table class="table table-hover table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">

         <tr>
             <td>১ম সপ্তাহ</td>
             <td>২য় সপ্তাহ</td>
             <td>৩য় সপ্তাহ</td>
             <td>৪র্থ সপ্তাহ</td>
             <td>৫ম সপ্তাহ</td>
         </tr>
        <div style="display: none">
            {{ $total = 0 }}
            {{ $total2 = 0 }}
            {{ $total3 = 0 }}
            {{ $total4 = 0 }}
            {{ $total5 = 0 }}

        <tr>
         @foreach ($users as $user)
             <?php $monthNum1 = $user->month;
             $dateObj = DateTime::createFromFormat('!m', $monthNum1);
             $monthName1 = $dateObj->format('F');
             ?>
             <td>{{ $user->year}}-{{ $monthName1 }}={{ $total = $user->total_amount }}</td>
         @endforeach
         </tr>
             @foreach ($users2 as $user2)
             <?php $monthNum = $user2->month;
             $dateObj = DateTime::createFromFormat('!m', $monthNum);
             $monthName2 = $dateObj->format('F');?>
             
         @endforeach
            @foreach ($users3 as $user3)
             <?php $monthNum = $user3->month;
             $dateObj = DateTime::createFromFormat('!m', $monthNum);
             $monthName3 = $dateObj->format('F');?>
             
         @endforeach
         @foreach ($users4 as $user4)
             <?php $monthNum = $user4->month;
             $dateObj = DateTime::createFromFormat('!m', $monthNum);
             $monthName4 = $dateObj->format('F');?>
             
         @endforeach
         @foreach ($users5 as $user5)
             <?php $monthNum = $user5->month;
             $dateObj = DateTime::createFromFormat('!m', $monthNum);
             $monthName5 = $dateObj->format('F');?>
             
         @endforeach
                 </div>
     </table>