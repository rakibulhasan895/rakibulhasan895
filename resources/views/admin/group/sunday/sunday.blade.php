@extends('layouts.head')
@section('content')
<div id="app">
    <div id="invoice" class="print-page" style="font-family: Verdana, SolaimanLipi; font-size:14px;">
        <div class="container">
            <div class="col-md-7 pl-1 heading" style="line-height:1px;">
                <label>
                    <h5>{{ __('বিসমিল্লাহির  রাহমানির  রাহীম')}}</h5>
                </label>
            </div>
            <div class="col-md-9 pl-1 heading" style="line-height:1px;">
                <label>
                    <a href="{{ url('/') }}" style="color: black;text-decoration: none;">
                        <h3> {{ __('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র,দাপুনিয়া বাজার,পাবনা।') }} </h3>
                    </a>
                </label>
            </div>
            <div class="col-md-8 pl-1 heading" style="line-height:1px;">
                <label>
                    <h4>{{ __('সমিতি ভিত্তিক মাসিক ঋণ আদায় বিবরণী ') }}</h4>
                </label>
            </div>
            <div class="row">
                <div class="col-md-2 pr-1 heading">
                    <label>
                        <a class="" href="{{ url('dashboard') }}" style="color: black;text-decoration: none;" title="back">
                            <h5>Back</h5><i class="fas fa-backward "></i>
                        </a>
                    </label>
                </div>
                <div class="col-md-2 pr-1 heading">
                    <label>
                        <h5>{{ __('সমিতি:রবিবার') }} </h5>
                    </label>
                </div>
                <div class="col-md-3 px-1 heading">
                    <label>
                        <h5>{{ __('মাস:') }} {{ $month }}</h5>
                    </label>
                </div>
                <div class="col-md-3 pl-1 heading">
                    <label>
                        <h5>{{ __('সাল :') }} {{ $year }}</h5>
                    </label>
                </div>
            </div>
        </div>
        <div class="container">
        <table class="table-hover table-responsive" style="border: 1px solid black;">
            <thead >
                <tr>
                    <col>
                    <colgroup span="1"></colgroup>
                    <th colspan="1" style="border: 1px solid black;">No:</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('সদস্যের নাম') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('পিতা/স্বামীর নাম') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('ঋণের ধরণ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('বিতরণ তারিখ ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('ঋণের পরিমাণ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('অগ্রিম আদায়') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('বিগত মাসের স্থিতি') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('কিস্তির পরিমান') }}</th>
                    <th colspan="5" style="border: 1px solid black;" >{{ $month }}{{ __(' মাসের কিস্তি আদায়') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('মাসে মোট আদায় ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('মাস শেষে স্থিতি') }}</th>
                </tr>
                <tr>
                    <th style="border: 1px solid black;">১</th>
                    <th style="border: 1px solid black;">২</th>
                    <th style="border: 1px solid black;">৩</th>
                    <th style="border: 1px solid black;">৪</th>
                    <th style="border: 1px solid black;">৫</th>
                    <th style="border: 1px solid black;">৬</th>
                    <th style="border: 1px solid black;">৭</th>
                    <th style="border: 1px solid black;">৮</th>
                    <th style="border: 1px solid black;">৯</th>
                    <th colspan="1" style="border: 1px solid black; width:60px;">১ম সপ্তাহ</th>
                    <th colspan="1" style="border: 1px solid black; width:60px;">২য় সপ্তাহ</th>
                    <th colspan="1" style="border: 1px solid black; width:60px;">৩য় সপ্তাহ</th>
                    <th colspan="1" style="border: 1px solid black; width:60px;">৪র্থ সপ্তাহ</th>
                    <th colspan="1" style="border: 1px solid black; width:60px;">৫ম সপ্তাহ</th>
                    <th colspan="1" style="border: 1px solid black;">১৫</th>
                    <th colspan="1" style="border: 1px solid black;">১৬</th>
                </tr>
            </thead>
            <tbody>
                @foreach($searches as $search)
                  
                <div style="display: none">
                {{ $total = 0 }}
                {{ $total2 = 0 }}{{ $total3 = 0 }}{{ $total4 = 0 }}{{ $total5 = 0 }}{{ $total5 = 0 }}
                {{ $sum = 0 }}{{ $sum2 = 0 }}{{ $sum3 = 0 }}{{ $sum4 = 0 }}{{ $sum5 = 0 }}
                {{ $week1 = 0 }}{{ $week2 = 0 }}{{ $week3 = 0 }}{{ $week4 = 0 }}{{ $week5 = 0 }}
                </div>
                <div style="display: none">
                    @foreach($search->instalmentones as $key => $instalmentone)
                    
                    @if($loop->last)
                    @if( \Carbon\Carbon::parse($instalmentone->created_at)->format('F') != $now->format('F'))
                    {{$week1 =0}}
                    @else
                     {{$week1 =$instalmentone->one}}
                    @endif
                    @endif
                    @if ($loop->last)
                    <div style="display: none">{{$total = $instalmentone->one}}</div>
                    @endif
                    <div style="display: none">{{$sum += $instalmentone->one}}</div>
                    @endforeach
                    @foreach($search->instalmenttwos as $key => $instalmenttwo)
                    @if($loop->last)
                    @if( \Carbon\Carbon::parse($instalmenttwo->created_at)->format('F') != $now->format('F'))
                    {{$week2 =0}}
                    @else
                     {{$week2 =$instalmenttwo->two}}
                    @endif
                    @endif
                    @if ($loop->last)
                    <div style="display: none">{{$total2 = $instalmenttwo->two}}</div>
                    @endif
                    <div style="display: none">{{$sum2 += $instalmenttwo->two}}</div>
                    @endforeach
                    @foreach($search->instalmentthrees as $key => $instalmentthree)
                    @if($loop->last)
                    @if( \Carbon\Carbon::parse($instalmentthree->created_at)->format('F') != $now->format('F'))
                    {{$week3 =0}}
                    @else
                     {{$week3 =$instalmentthree->three}}
                    @endif
                    @endif
                    @if ($loop->last)
                    <div style="display: none">{{$total3 = $instalmentthree->three}}</div>
                    @endif
                    <div style="display: none">{{$sum3 += $instalmentthree->three}}</div>
                    @endforeach

                    @foreach($search->instalmentfours as $key => $instalmentfour)
                    @if($loop->last)
                    @if( \Carbon\Carbon::parse($instalmentfour->created_at)->format('F') != $now->format('F'))
                    {{$week4 =0}}
                    @else
                     {{$week4 =$instalmentfour->four}}
                    @endif
                    @endif
                            @if ($loop->last)
                            <div style="display: none">{{$total4 = $instalmentfour->four}}</div>
                            @endif
                            <div style="display: none">{{$sum4 += $instalmentfour->four}}</div>
                            @endforeach

                            @foreach($search->instalmentfives as $key => $instalmentfive)
                            @if($loop->last)
                            @if( \Carbon\Carbon::parse($instalmentfive->created_at)->format('F') != $now->format('F'))
                            {{$week5 =0}}
                            @else
                             {{$week5 =$instalmentfive->five}}
                            @endif
                            @endif
                            @if ($loop->last)
                            <div style="display: none">{{$total5 = $instalmentfive->five}}</div>
                            @endif
                            <div style="display: none">{{$sum5 += $instalmentfive->five}}</div>
                            @endforeach
                        </div>
                        <tr>
                            <th scope="row" style="border: 1px solid black;">{{ ++$i }}</th>
                            <td style="border: 1px solid black;"><a href="{{ route('customers.show', $search->id) }}" style="color: black;text-decoration: none;">
                                    {{ $search->name }}
                                </a></td>
                            <td style="border: 1px solid black;">{{ $search->gname }}</td>
                            <td style="border: 1px solid black;">{{ $search->loantypes }}</td>
                            <td style="border: 1px solid black;">{{ $search->date}}</td>
                            <td style="border: 1px solid black;">{{ $search->loanamount }}</td>
                            <td style="border: 1px solid black;">{{ ($search->advanced) + $sum+$sum2+$sum3+$sum4+$sum5}}</td>
                            <td style="border: 1px solid black;">{{ ($search->Status)- ($sum+$sum2+$sum3+$sum4+$sum5)}}</td>
                            <td style="border: 1px solid black;">{{ $search->installment }}</td>
                            <div class="container">
                                <td style="border: 1px solid black;">
                                    {{ $week1 }}
                                </td>
                                <td style="border: 1px solid black;">
                                    {{ $week2 }}
                                </td>
                                <td style="border: 1px solid black;">
                                    {{ $week3 }}
                                </td>
                                <td style="border: 1px solid black;">
                                    {{ $week4}}
                                </td>
                                <td style="border: 1px solid black;">
                                    {{ $week5 }}
                                </td>
                                <td style="border: 1px solid black;">
                                   {{ $week1+$week2+$week3+$week4+$week5 }}
                                </td>
                                <td style="border: 1px solid black;">
                                    {{ ($search->Status)- ($sum+$sum2+$sum3+$sum4+$sum5)}}
                                </td>
                                <td style="display:none;">
                              
                                </td>
                            </div>
                        </tr>
                        
                        @endforeach
            </tbody>
        </table>
        
        <div style="display: none">
            {{ $tot = 0 }}
            {{ $tot2 = 0 }}
            {{ $tot3 = 0 }}
            {{ $tot4 = 0 }}
            {{ $tot5 = 0 }}
            
            <div style="display:none">
                {{$row1=0}} {{$row2=0}} {{$row3=0}} {{$row4=0}} {{$row5=0}}
            {{$loan= $searches->sum('loanamount') }}
            {{$advanced =$searches->sum('advanced') }}
            
            @foreach($searches as $search)
             @foreach ($search->instalmentones as  $instalmentone)
              {{$row1+=($instalmentone->one)}}
              @if( \Carbon\Carbon::parse($instalmentone->created_at)->format('F') != $now->format('F'))
                    {{$tot +=0}}
                @else
                {{$tot +=$instalmentone->one}}
              @endif
              
             @endforeach
             @foreach ($search->instalmenttwos as  $instalmenttwo)
              {{$row2+=($instalmenttwo->two)}}
                @if( \Carbon\Carbon::parse($instalmenttwo->created_at)->format('F') != $now->format('F'))
                    {{$tot2 +=0}}
                @else
                {{$tot2 +=$instalmenttwo->two}}
              @endif
             @endforeach
            @foreach ($search->instalmentthrees as  $instalmentthree)
              {{$row3+=($instalmentthree->three)}}
                @if( \Carbon\Carbon::parse($instalmentthree->created_at)->format('F') != $now->format('F'))
                    {{$tot3 +=0}}
                @else
                {{$tot3 +=$instalmentthree->three}}
              @endif
             @endforeach
             @foreach ($search->instalmentfours as  $instalmentfour)
              {{$row4+=($instalmentfour->four)}}
                @if( \Carbon\Carbon::parse($instalmentfour->created_at)->format('F') != $now->format('F'))
                    {{$tot4 +=0}}
                @else
                {{$tot4 +=$instalmentfour->four}}
              @endif
             @endforeach
             @foreach ($search->instalmentfives as  $instalmentfive)
              {{$row5+=($instalmentfive->five)}}
                @if( \Carbon\Carbon::parse($instalmentfive->created_at)->format('F') != $now->format('F'))
                    {{$tot5 +=0}}
                @else
                {{$tot5 +=$instalmentfive->five}}
              @endif
             @endforeach
            @endforeach
            </div>
                
        </div>
        <div class="row">
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('১ম সপ্তাহ') }}</label>
                    <input type="text" class="form-control" value="{{ $tot }}">
                </div>
            </div>
            <div class="col-md-1 pr-1">
                <div class="form-group">
                    <label>{{ __('২য় সপ্তাহ') }}</label>
                    <input type="text" class="form-control" value="{{ $tot2}}">

                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('৩য় সপ্তাহ') }}</label>
                    <input type="text" class="form-control" value="{{ $tot3}}">
                </div>
            </div>
            <div class="col-md-1 pr-1">
                <div class="form-group">
                    <label>{{ __('৪র্থ সপ্তাহ') }}</label>
                    <input type="text" class="form-control" value="{{ $tot4}}">
                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('৫ম সপ্তাহ') }}</label>
                    <input type="text" class="form-control" value="{{ $tot5}}">
                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('মোট আদায়') }}</label>
                    <input type="text" class="form-control" value="{{ $tot + $tot2 + $tot3+ $tot4 + $tot5 }}">
                </div>
            </div>
           <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __(' মোট স্থিতি') }}</label>
                    <input type="text" class="form-control" value="{{$loan - ($advanced+$row1+$row2+$row3+$row4+$row5) }} টাকা">
                </div>
            </div>
        </div>
        </div>
        <style>
            @media print{
                body *{
                    visibility:hidden;
                }
                .print-page, .print-page *{
                    visibility:visible;
                    line-height:35px;
                }
                .avoid{
                    page-break-inside: avoid;
                }
            }
        </style>

    </div>
                <div style="display:none;">
            {{$u=0}}  {{$u2=0}}  {{$u3=0}}  {{$u4=0}}  {{$u5=0}}
            
            @foreach($users as $user)
            {{$u = $user->total_amount}}
            @endforeach
            @foreach($users2 as $user)
            {{$u2 = $user->total_amount}}
            @endforeach
            @foreach($users3 as $user)
            {{$u3 = $user->total_amount}}
            @endforeach
            @foreach($users4 as $user)
            {{$u4 = $user->total_amount}}
            @endforeach
            @foreach($users5 as $user)
            {{$u5 = $user->total_amount}}
            @endforeach
        </div>

            <div class="container">
                    <div class="row">
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('১ম সপ্তাহের আদায়') }}</label>
                    <br>
                    {{ $u }} {{__('টাকা')}}
                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('২য় সপ্তাহের আদায়') }}</label> 
                    <br>
                    {{ $u2}} {{__('টাকা')}}

                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('৩য় সপ্তাহের আদায়') }}</label>
                        <br>
                    {{ $u3 }} {{__('টাকা')}}
                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('৪র্থ সপ্তাহের আদায়') }}</label>
                        <br>
                    {{ $u4 }} {{__('টাকা')}}
                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('৫ম সপ্তাহের আদায়') }}</label>
                      <br>
                    {{ $u5 }} {{__('টাকা')}}
                </div>
            </div>
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('মোট আদায়') }}</label>
                    <br>
                     {{$u + $u2 + $u3 + $u4 + $u5 }}
                </div>
            </div>
            
        </div> 
        </div>
            <div class="d-flex justify-content-center" >
        {{ $searches->links('pagination::bootstrap-4') }}
        <button class="btn btn-success" onclick="download" id="download">pdf</button>
        <button type="button" class="btn btn-danger" onclick="window.print()">Print</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="{{ asset('pdf.js') }}" defer></script>
</div>
</div>
@endsection

