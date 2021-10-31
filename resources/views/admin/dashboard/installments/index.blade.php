@extends('layouts.head')
@section('content')
<div id="app">
    <div id="tblCustomers">
        <div class="container-fluid">
            <div class="col-md-7 pl-1 heading">
                <label>
                    <h6>{{ __('বিসমিল্লাহির রাহমানির রাহীম') }}</h6>
                </label>
            </div>
            <div class="col-md-9 pl-1 heading">
                <label>
                    <a href="{{ url('/') }}">
                        <h2> {{ __('পদ্মা পণ্য বিক্রয় ও বিপণন কেন্দ্র,দাপুনিয়া বাজার,পাবনা।') }} </h2>
                    </a>
                </label>
            </div>
            <div class="col-md-8 pl-1 heading">
                <label>
                    <h4>{{ __('সমিতি ভিত্তিক মাসিক ঋণ আদায় বিবরণী ') }}</h4>
                </label>
            </div>
            <div class="row">
                <div class="col-md-2 pr-1 heading">
                    <label>
                        <a class="btn" href="{{ url('dashboard') }}" title="back">
                            <h5>Back</h5><i class="fas fa-backward "></i>
                        </a>
                    <a class="btn" href="{{ url('customers/create')}}">
                    <h5 class="btn-primary"> {{ __('নিবন্ধন') }}</h5>
                    </a>
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
        <table class="table table-hover table-bordered table-responsive  ">
            <thead>
                <tr>
                    <col>
                    <colgroup span="1"></colgroup>
                    <th colspan="1" >No:</th>
                    <th colspan="1" >{{ __('সদস্যের নাম') }}</th>
                    <th colspan="1">{{ __('পিতা/স্বামীর নাম') }}</th>
                    <th colspan="1">{{ __('গ্রুপ') }}</th>
                    <th colspan="1">{{ __('ঋণের ধরণ') }}</th>
                    <th colspan="1">{{ __('বিতরণ তারিখ ') }}</th>
                    <th colspan="1">{{ __('ঋণের পরিমাণ') }}</th>
                    <th colspan="1">{{ __('অগ্রিম আদায়') }}</th>
                    <th colspan="1">{{ __('বিগত মাসের স্থিতি') }}</th>
                    <th colspan="1">{{ __('কিস্তির পরিমান') }}</th>
                    <th colspan="6">{{ $month }}{{ __(' মাসের কিস্তি আদায়') }}</th>
                    <th colspan="1">{{ __('মাসে মোট আদায় ') }}</th>
                    <th colspan="1">{{ __('মাস শেষে স্থিতি') }}</th>
                </tr>
                <tr>
                    <th>১</th>
                    <th>২</th>
                    <th>৩</th>
                    <th>৪</th>
                    <th>৫</th>
                    <th>৬</th>
                    <th>৭</th>
                    <th>৮</th>
                    <th>৯</th>
                    <th>১০</th>
                    <th colspan="1">১ম সপ্তাহ</th>
                    <th colspan="1">২য় সপ্তাহ</th>
                    <th colspan="1">৩য় সপ্তাহ</th>
                    <th colspan="1">৪র্থ সপ্তাহ</th>
                    <th colspan="1">৫ম সপ্তাহ</th>
                    <th colspan="1" >মাসিক</th>
                    <th colspan="1">১৭</th>
                    <th colspan="1">১৮</th>
                </tr>
            </thead>
            <tbody>
                @foreach($searches as $search)
                 
                <div style="display: none">
                {{ $total = 0 }}
                {{ $total2 = 0 }}{{ $total3 = 0 }}{{ $total4 = 0 }}{{ $total5 = 0 }}{{ $total5 = 0 }}{{$totalm = 0}}
                {{ $sum = 0 }}{{ $sum2 = 0 }}{{ $sum3 = 0 }}{{ $sum4 = 0 }}{{ $sum5 = 0 }} {{$summ=0}}
                {{ $week1 = 0 }}{{ $week2 = 0 }}{{ $week3 = 0 }}{{ $week4 = 0 }}{{ $week5 = 0 }}{{$weekm = 0}}
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
                            @foreach($search->instalments as $key => $instalment)
                            @if($loop->last)
                            @if( \Carbon\Carbon::parse($instalment->created_at)->format('F') != $now->format('F'))
                            {{$weekm =0}}
                            @else
                             {{$weekm =$instalment->month}}
                            @endif
                            @endif
                            @if ($loop->last)
                            <div style="display: none">{{$totalm = $instalment->month}}</div>
                            @endif
                            <div style="display: none">{{$summ += $instalment->month}}</div>
                            @endforeach
                        </div>
                        <tr>
                            <th scope="row">{{$searches->firstItem()+$loop->index }}</th>
                            <td><a href="{{ route('customers.show', $search->id) }}">
                                    {{ $search->name }}
                                </a></td>
                            <td>{{ $search->gname }}</td>
                            <td>{{ $search->group }}</td>
                            <td>{{ $search->loantypes }}</td>
                            <td>{{ $search->date}}</td>
                            <td>{{ $search->loanamount }}</td>
                            <td>{{ ($search->advanced) + $sum+$sum2+$sum3+$sum4+$sum5}}</td>
                            <td>{{ ($search->Status)- ($sum+$sum2+$sum3+$sum4+$sum5)}}</td>
                            <td>{{ $search->installment }}</td>
                            <div class="container">
                                <td>
                                    {{ $week1 }}
                                </td>
                                <td>
                                    {{ $week2 }}
                                </td>
                                <td>
                                    {{ $week3 }}
                                </td>
                                <td>
                                    {{ $week4}}
                                </td>
                                <td>
                                    {{ $week5 }}
                                </td>
                                 <td>
                                    {{ $weekm }}
                                </td>
                                 <td>
                                    {{ $week1+$week2+$week3+$week4+$week5+$weekm }}
                                </td>
                                
                                <td>
                                    {{ ($search->Status)- ($sum+$sum2+$sum3+$sum4+$sum5+$summ)}}
                                </td>
                                <td style="display:none;">
                                {{ $month = ($search->Status)- ($sum+$sum2+$sum3+$sum4+$sum5+$summ) }}
                                </td>
                            </div>
                        </tr>
                        @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        {{ $searches->links('pagination::bootstrap-4') }}
    </div>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function() {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function(canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data
                            , width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("{{$month}}.pdf");
                }
            });
        });

    </script>
</div>
@endsection

