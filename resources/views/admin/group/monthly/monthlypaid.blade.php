@extends('layouts.head')
@section('content')
<div id="app">
    <div id="invoice" style="font-family: Verdana, SolaimanLipi; font-size:14px;">
        <div class="container">
            <div class="col-md-7 pl-1 heading" style="line-height:1px;">
                <label>
                    <h5>{{ __('বিসমিল্লাহির  রাহমানির  রাহীম')}}</h5>
                </label>
            </div>
            <div class="col-md-9 pl-1 heading" style="line-height:1px;">
                <label>
                    <a href="{{ url('/') }}">
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
                        <a class="" href="{{ url('dashboard') }}" title="back">
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
                        <h5>{{ __('পরিশোধ') }} </h5>
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
        <table class="table table-hover table-bordered table-responsive  ">
            <thead>
                <tr>
                    <col>
                    <colgroup span="1"></colgroup>
                    <th colspan="1" style="width:100px;">No:</th>
                    <th colspan="1" >{{ __('সদস্যের নাম') }}</th>
                    <th colspan="1">{{ __('পিতা/স্বামীর নাম') }}</th>
                    <th colspan="1">{{ __('কর্মী') }}</th>
                    <th colspan="1">{{ __('ঋণের ধরণ') }}</th>
                    <th colspan="1">{{ __('বিতরণ তারিখ ') }}</th>
                    <th colspan="1">{{ __('ঋণের পরিমাণ') }}</th>
                    <th colspan="1">{{ __('অগ্রিম আদায়') }}</th>
                    <th colspan="1">{{ __('বিগত মাসের স্থিতি') }}</th>
                    <th colspan="1">{{ __('কিস্তির পরিমান') }}</th>
                    <th colspan="1">{{ $month }}{{ __(' মাসের কিস্তি আদায়') }}</th>
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
                    <th colspan="1" style="width:150px;">মাসিক</th>
                    <th colspan="1" style="width:100px;">১২</th>
                    <th colspan="1" style="width:100px;">১৩</th>
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
                            <th scope="row">{{ ++$i }}</th>
                            <td><a href="{{ route('customers.show', $search->id) }}">
                                    {{ $search->name }}
                                </a></td>
                            <td>{{ $search->gname }}</td>
                             <td>{{ $search->employee }}</td>
                            <td>{{ $search->loantypes }}</td>
                            <td>{{ $search->date}}</td>
                            <td>{{ $search->loanamount }}</td>
                            <td>{{ ($search->advanced) + $sum}}</td>
                            <td>{{ ($search->Status)- ($sum)}}</td>
                            <td>{{ $search->installment }}</td>
                            <div class="container">
                                <td>
                                    {{ $week1 }}
                                </td>
                                <td>
                                   {{ $week1 }}
                                </td>
                                
                                <td>
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
        
        </div>

    </div>
            <div class="d-flex justify-content-center">
        {{ $searches->links('pagination::bootstrap-4') }}
    </div>
</div>
</div>
@endsection

