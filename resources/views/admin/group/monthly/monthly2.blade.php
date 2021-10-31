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
                        <h5>{{ __('সমিতি:মাসিক') }} </h5>
                    </label>
                </div>
                <div class="col-md-2 pr-1 heading">
                    <label>
                        <h5>{{ __('হেনা') }} </h5>
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
        <table class="table-hover  table-responsive " style="border: 1px solid black;">
            <thead>
                <tr>
                    <col>
                    <colgroup span="1"></colgroup>
                    <th colspan="1" style="border: 1px solid black; width:50px;">No:</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('সদস্যের নাম') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('পিতা/স্বামীর নাম') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('ঋণের ধরণ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('বিতরণ তারিখ ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('ঋণের পরিমাণ') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('অগ্রিম আদায়') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('বিগত মাসের স্থিতি') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ __('কিস্তির পরিমান') }}</th>
                    <th colspan="1" style="border: 1px solid black;">{{ $month }}{{ __(' মাসের কিস্তি আদায়') }}</th>
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
                    <th colspan="1" style="border: 1px solid black; width:180px;">মাসিক</th>
                    <th colspan="1" style="border: 1px solid black; width:100px;">১১</th>
                    <th colspan="1" style="border: 1px solid black; width:100px;">১২</th>
                </tr>
            </thead>
            <tbody>
                @foreach($searches as $search)
                  
                <div style="display: none">
                {{ $total = 0 }}
                {{ $sum = 0 }}
                {{ $week1 = 0 }}
                </div>
                <div style="display: none">
                    @foreach($search->instalments as $key => $instalment)
                    
                    @if($loop->last)
                    @if( \Carbon\Carbon::parse($instalment->created_at)->format('F') != $now->format('F'))
                    {{$week1 =0}}
                    @else
                     {{$week1 =$instalment->month}}
                    @endif
                    @endif
                    @if ($loop->last)
                    <div style="display: none">{{$total = $instalment->month}}</div>
                    @endif
                    <div style="display: none">{{$sum += $instalment->month}}</div>
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
                            <td style="border: 1px solid black;">{{ ($search->advanced) + $sum}}</td>
                            <td style="border: 1px solid black;">{{ ($search->Status)- ($sum)}}</td>
                            <td style="border: 1px solid black;">{{ $search->installment }}</td>
                            <div class="container">
                                <td style="border: 1px solid black;">
                                    {{ $week1 }}
                                </td>
                                <td style="border: 1px solid black;">
                                   {{ $week1 }}
                                </td>
                                
                                <td style="border: 1px solid black;">
                                    {{ ($search->Status)- ($sum)}}
                                </td>
                                <td style="display:none;">
                                {{ $month = ($search->Status)- ($sum) }}
                                </td>
                            </div>
                        </tr>
                        
                        @endforeach
            </tbody>
        </table>
        
            <div style="display:none">
                {{$row1=0}} {{$tot =0}}
            {{$loan= $searches->sum('loanamount') }}
            {{$advanced =$searches->sum('advanced') }}
            
            @foreach($searches as $search)
             @foreach ($search->instalments as  $instalment)
              {{$row1+=($instalment->month)}}
              @if( \Carbon\Carbon::parse($instalment->created_at)->format('F') != $now->format('F'))
                    {{$tot +=0}}
                @else
                {{$tot +=$instalment->month}}
              @endif
              
             @endforeach
            @endforeach
            </div>

        <div class="row">
            <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __('মোট আদায়') }}</label>
                    <input type="text" class="form-control" value="{{ $tot }}">
                </div>
            </div>
           <div class="col-md-2 pr-1">
                <div class="form-group">
                    <label>{{ __(' মোট স্থিতি') }}</label>
                    <input type="text" class="form-control" value="{{$loan - ($advanced+$row1) }} টাকা">
                </div>
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
            {{$u=0}}
            
            @foreach($usersm as $user)
            {{$u = $user->total_amount}}
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
                    <label>{{ __('মোট আদায়') }}</label>
                    <br>
                     {{$u  }}
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

