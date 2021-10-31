@extends('layouts.head')
@section('content')
<div class="container">
<div id="tblCustomers">
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
        <div class="col-md-12">
            <div class="card">
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
                            <h2>{{ __('কিস্তি') }} </h2>
                        </label>
                    </div>
                    <div class="col-md-3 px-1 heading">
                        <label>
                            <h5>{{ __('মাস :') }} {{ $month }} </h5>
                        </label>
                    </div>
                    <div class="col-md-3 pl-1 heading">
                        <label>
                            <h5>{{ __('সাল :') }}{{ $year }} </h5>
                        </label>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>সদস্যের নাম : </strong>
                            <a href="{{ route('customers.edit', $customer->id) }}">
                            {{ $customer->name }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>পিতা/স্বামীর নাম: </strong>
                            {{ $customer->gname }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>মোবাইল নম্বর: </strong>
                            {{ $customer->number }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>গ্রুপ: </strong>
                            {{ $customer->group }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>কর্মচারী: </strong>
                            {{ $customer->employee }}
                        </div>
                        </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>গ্রাম: </strong>
                            {{ $customer->village }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>
                                ইউনিয়ন: </strong>
                            {{ $customer->union }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>জেলাঃ </strong>
                            {{ $customer->zela }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>বিতরণ তারিখ: </strong>
                            {{ $customer->date }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong> ঋণের ধরণ:</strong>
                            {{ $customer->loantypes }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>ঋণের পরিমাণ: </strong>
                            {{ $customer->loanamount }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>অগ্রিম আদায়: </strong>
                            {{ $customer->advanced }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>কিস্তির পরিমান: </strong>
                            {{ $customer->installment }}
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <strong>কিস্তি : </strong>
                            {{ $customer->paymentmethod }}
                        </div>
                    </div>
                     <div class="col-md-4 ">
                        <div class="form-group">
                        <form action="{{ route('customers.update',$customer->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    
                                     <select data-trigger="" name="paymentmethod" class="form-control" value="{{ $customer->paymentmethod }}">
                                        <option required>unpaid</option>
                                        <option >paid</option>
                                    </select>
                                    <div class="s-12 l-2"><button type="submit" value="submit">Payment</button></div>
                                </div>
                                

                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                
                <div class="row">
<table class="table table-hover table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
    <thead>
        <th colspan="1">১ম সপ্তাহ </th>
        <th colspan="1">২য় সপ্তাহ</th>
        <th colspan="1">৩য় সপ্তাহ</th>
        <th colspan="1">৪র্থ সপ্তাহ</th>
        <th colspan="1">৫ম সপ্তাহ </th>
        <th colspan="1">মাসিক</th>
        <th colspan="1">মোট</th>
        <th colspan="1">মোট আদায়</th>
         <th colspan="1">স্থিতি</th>
    </thead>
    <tr>
        <div style="display: none">
            {{ $total = 0 }}
            {{ $total2 = 0 }}
            {{ $total3 = 0 }}
            {{ $total4 = 0 }}
            {{ $total5 = 0 }}
            {{ $totalm = 0 }}
        </div>
        <td>
         @foreach($customer->instalmentones as $instalment)
            <div class="form-group">
                {{ $instalment->created_at->format('d-m-Y')}} = ৳
                <a href="{{ route('ones.edit', $instalment->id) }}">
                    {{ $instalment->one }}
                </a>
                <div style="display: none">{{$total += $instalment->one}}</div>
            </div>
            @endforeach 
            </td>
        <td> 
        @foreach($customer->instalmenttwos as $instalment)
            <div class="form-group">
                {{ $instalment->created_at->format('d-m-Y')}} = ৳
                <a href="{{ route('twos.edit', $instalment->id) }}">
                    {{ $instalment->two }}
                </a>
                <div style="display: none">{{$total2 += $instalment->two}}</div>
            </div>
            @endforeach
            </td>
        <td>
         @foreach($customer->instalmentthrees as $instalment)
            <div class="form-group">
                {{ $instalment->created_at->format('d-m-Y')}} = ৳
                <a href="{{ route('threes.edit', $instalment->id) }}">
                    {{ $instalment->three }}
                </a>
                <div style="display: none">{{$total3 += $instalment->three}}</div>
            </div>
            @endforeach
            </td>
        <td>
         @foreach($customer->instalmentfours as $instalment)
            <div class="form-group">
                {{ $instalment->created_at->format('d-m-Y')}} = ৳
                <a href="{{ route('fours.edit', $instalment->id) }}">
                    {{ $instalment->four }}
                </a>
             <div style="display: none">{{$total4 += $instalment->four}}</div>
            </div>
            @endforeach
        </td>
        <td> 
        @foreach($customer->instalmentfives as $instalment)
            <div class="form-group">
                {{ $instalment->created_at->format('d-m-Y')}} = ৳
                <a href="{{ route('five.edit', $instalment->id) }}">
                    {{ $instalment->five }}
                </a>
             <div style="display: none">{{$total5 += $instalment->five}}</div>
            </div>
         @endforeach
         </td>
         <td>
        @foreach($customer->instalments as $instalment)
            <div class="form-group">
                {{ $instalment->created_at->format('d-m-Y')}} = ৳
                <a href="{{ route('weeklyinstalments.edit', $instalment->id) }}">
                    {{ $instalment->month }}
                </a>
             <div style="display: none">{{$totalm += $instalment->month}}</div>
            </div>
         @endforeach
        </td><td> 
        </td>
        <td> 
            <div class="form-group">
             অগ্রিম = {{ $customer->advanced }}
            </div>
        </td>
    </tr>
    
    <tr> 
            <div class="form-group">
                <th>{{$total}} টাকা</th>
                <th>{{$total2}} টাকা</th>
                <th>{{$total3}} টাকা</th>
                <th>{{$total4}} টাকা</th>
                <th>{{$total5}} টাকা</th>
                <th>{{$totalm}} টাকা</th>
                <th>{{$total+$total2+$total3+$total4+$total5+$totalm}} টাকা</th>
                <th>{{$customer->advanced + $total+$total2+$total3+$total4+$total5+$totalm}} টাকা</th>
                <th>{{ ($customer->Status)- ($total+$total2+$total3+$total4+$total5+$totalm)}}  টাকা</th>
            </div>
    </tr>
</table>
</div>



      <div class="d-flex justify-content-left">
             <form>
              <input type="button" id="btnExport" value="pdf" onClick="printReport()">
               <input type="button" id="btnExport" value="print" onClick="window.print()">
                </form>
       </div>
</div>
                <div class="row">
                    <table class="table table-hover table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
                        <thead>
                            <th colspan="1">১ম সপ্তাহ </th>
                            <th colspan="1">২য় সপ্তাহ</th>
                            <th colspan="1">৩য় সপ্তাহ</th>
                            <th colspan="1">৪র্থ সপ্তাহ</th>
                            <th colspan="1">৫ম সপ্তাহ</th>
                           <th colspan="1"> মাসিক</th>
                        </thead>
                        <tr>
                            <td>
                            <form action="{{ route('installmentone.add') }}" Method="POST">
                                @csrf
                                        <input type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                        <input type="hidden" class="form-control" name="group" value="{{ $customer->group }}">
                                          
                                        <input type="hidden" class="form-control" name="employee_name" value="{{ $customer->employee }}">
                                        <input type="number" class="form-control" name="one" value="{{ $customer->installment  }}">
                                        <input type="submit" value="জমা">
                            </form>
                            </td>
                            <td>
                             <form  action="{{ route('installmenttwo.add') }}" Method="POST">
                                 @csrf
                                         <input type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                        <input type="hidden" class="form-control" name="group" value="{{ $customer->group }}">
                                       
                                        <input type="hidden" class="form-control" name="employee_name" value="{{ $customer->employee }}">
                                         <input type="number" class="form-control" name="two" value="{{ $customer->installment  }}">
                                         <input type="submit" value="জমা">
                             </form>
                            </td>
                            <td>
                            <form action="{{ route('installmentthree.add') }}" Method="POST">
                                @csrf
                                        <input type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                        <input type="hidden" class="form-control" name="group" value="{{ $customer->group }}">
                                        <input type="hidden" class="form-control" name="employee_name" value="{{ $customer->employee }}">
                                        <input type="number" class="form-control" name="three" value="{{ $customer->installment  }}">
                                        <input type="submit" value="জমা">
                            </form>
                            </td>
                            <td>
                            <form action="{{ route('installmentfour.add') }}" Method="POST">
                                @csrf
                                        <input type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                        
                                        <input type="hidden" class="form-control" name="group" value="{{ $customer->group }}">
                                       
                                        <input type="hidden" class="form-control" name="employee_name" value="{{ $customer->employee }}">
                                        <input type="number" class="form-control" name="four" value="{{ $customer->installment  }}">
                                        <input type="submit" value="জমা">
                            </form>
                            </td>
                            <td>
                            <form  action="{{ route('installmentfive.add') }}" Method="POST">
                                @csrf
                                <input type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                
                                
                                        <input type="hidden" class="form-control" name="group" value="{{ $customer->group }}">
                                
                                        <input type="hidden" class="form-control" name="employee_name" value="{{ $customer->employee }}">
                                        
                                <input type="number" class="form-control" name="five" value="{{ $customer->installment  }}">
                                <input type="submit" value="জমা">
                            </form>
                            </td>
                            <td>
                            <form  action="{{ route('installment.add') }}" Method="POST">
                                @csrf
                                <input type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                        <input type="hidden" class="form-control" name="group" value="{{ $customer->group }}">
                                        <input type="hidden" class="form-control" name="employee_name" value="{{ $customer->employee }}">
                                        <input type="number" class="form-control" name="month" value="{{ $customer->installment  }}">
                                        <input type="submit" value="জমা">
                            </form>
                            </td>
                        </tr>
                    </table>
                </div>                           
                    </div>
                </div>
            </div>
        </div>
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
                    pdfMake.createPdf(docDefinition).download( "{{$customer->number}}.pdf");
                }
            });
        });
    </script>
</div>
@endsection
