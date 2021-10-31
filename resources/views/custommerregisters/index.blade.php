@extends('layouts.head')
@section('content')
<div id="app">
           <div class="container">
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
                       </label>
                   </div>
                   <div class="col-md-3 pr-1 heading">
                       <label>
                           <h5>{{ __('সমিতির নাম :') }} </h5>
                       </label>
                   </div>
                   <div class="col-md-3 px-1 heading">
                       <label>
                           <h5>{{ __('মাস:') }} </h5>
                       </label>
                   </div>
                   <div class="col-md-3 pl-1 heading">
                       <label>
                           <h5>{{ __('সাল :') }} </h5>
                       </label>
                   </div>
               </div>
           </div>


    <table class="table table-hover table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl" id="reportPrinting">
        <thead>
            <tr>
                <colgroup span="1"></colgroup>
                <th colspan="1">{{ __('No:') }}</th>
                <th colspan="1">{{ __('সদস্যের নাম') }}</th>
                <th colspan="1">{{ __('পিতা/স্বামীর নাম') }}</th>
                <th colspan="1">{{ __('মোবাইল নম্বর') }}</th>
                <th colspan="1">{{ __('গ্রুপ') }}</th>
                <th colspan="1">{{ __('গ্রাম') }}</th>
                <th colspan="1">{{ __('ইউনিয়ন') }}</th>
                <th colspan="1">{{ __('জেলা') }}</th>
                <th colspan="1">{{ __('ঋণের ধরণ') }}</th>
                <th colspan="1">{{ __('বিতরণ তারিখ ') }}</th>
                <th colspan="1">{{ __('ঋণের পরিমাণ') }}</th>
                <th colspan="1">{{ __('অগ্রিম আদায়') }}</th>
                <th colspan="1">{{ __('বিগত মাসের স্থিতি') }}</th>
                <th colspan="1">{{ __('কিস্তির পরিমান') }}</th>
                <th colspan="1">{{ __('দেখানো') }}</th>
                <th colspan="1">{{ __('হালনাগাদ') }}</th>

            </tr>
        </thead>
        <tbody>
        @if(isset($registers))  
            @foreach($registers as $register)
            <tr>
                <th scope="row">{{ $register->id}}</th>
                <td>{{ $register->name }}</td>
                <td>{{ $register->gname }}</td>
                <td>{{ $register->number }}</td>
                <td>{{ $register->group }}</td>
                <td>{{ $register->village }}</td>
                <td>{{ $register->union }}</td>
                <td>{{ $register->zela }}</td>
                <td>{{ $register->loantypes }}</td>
                <td>{{ $register->date}}</td>
                <td>{{ $register->loanamount }}</td>
                <td>{{ $register->advanced }}</td>
                <td>{{ $register->Status }}</td>
                <td>{{ $register->installment }}</td>

                <td> <button type="button" class="btn "><a href="{{ route('custommerregisters.show', $register->id) }}" title="show">
                            {{ __('show') }}
                        </a></button>
                </td>
                <td> <button type="button" class="btn"><a href="{{ route('custommerregisters.edit', $register->id) }}" title="show">
                            {{ __('Edit') }}
                        </a></button>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <form>
            <input type="button" value="Print" onClick="printReport()">
        </form>
        </div>
        <script type="text/javascript">
            function printReport() {
                var prtContent = document.getElementById("reportPrinting");
                var WinPrint = window.open();
                WinPrint.document.write(prtContent.innerHTML);
                WinPrint.document.close();
                WinPrint.focus();
                WinPrint.print();
                WinPrint.close();
            }
        </script>
        <div>
        {!! $registers->links() !!}
        </div>
</div>
</div>
    @endsection
