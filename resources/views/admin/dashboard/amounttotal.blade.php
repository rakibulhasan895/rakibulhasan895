@extends('admin.dashboard.index')
@section('content')
            <div class="justify-content-center">
                       <div style="display:none;">
                {{$row1=0}} {{$row2=0}} {{$row3=0}} {{$row4=0}} {{$row5=0}}{{$rowm=0}} {{$loan=0}} {{$advanced=0}}
                
            {{$loan= $Isearch->sum('loanamount') }}
            {{$advanced =$Isearch->sum('advanced') }}
            {{$row1 =$iOnes->sum('one') }}
            {{$row2 =$iTwos->sum('two') }}
            {{$row3 =$iThrees->sum('three') }}
            {{$row4 =$iFours->sum('four') }}
            {{$row5 =$iFives->sum('five') }}
            {{$rowm =$iMonths->sum('month') }}
            </div>   
            </br>
            </br>
            <h1 style="background:yellow;text-align:center;font-size:70px;">{{__('সর্বমোট  স্থিতি : ')}}  {{$loan - ($advanced+$row1+$row2+$row3+$row4+$row5+$rowm) }} টাকা</h1>
            </div>
@endsection