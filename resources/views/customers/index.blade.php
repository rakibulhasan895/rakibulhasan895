@extends('layouts.welcome')
@section('content')
<div id="app">
        <div class="row">
            <div class="col-md-2 pr-1 heading">
                <label>
                    <a class="btn" href="{{ url('dashboard') }}" title="back">
                        <h5 class="btn-primary">Back</h5><i class="fas fa-backward "></i>
                    </a>
                     <a class="btn" href="{{ url('customers/create')}}">
                    <h5 class="btn-primary"> {{ __('নিবন্ধন') }}</h5>
                    </a>
                </label>
            </div>
            <div class="nav navbar-nav navbar-right">
                <form class="form-inline my-2 my-lg-0" type="get" action="{{ route('search') }}">
                    <input class="form-control typeahead" type="search" name="search" placeholder="Search for Installment" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    <table class="table table-hover table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <thead>
            <tr>
                <colgroup span="1"></colgroup>
                <th colspan="1">{{ __('No:') }}</th>
                <th colspan="1">{{ __('সদস্যের নাম') }}</th>
                <th colspan="1">{{ __('পিতা/স্বামীর নাম') }}</th>
                <th colspan="1">{{ __('মোবাইল নম্বর') }}</th>
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
            @foreach($customers as $customer)
            <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->gname }}</td>
                <td>{{ $customer->number }}</td>
                <td>{{ $customer->village }}</td>
                <td>{{ $customer->union }}</td>
                <td>{{ $customer->zela }}</td>
                <td>{{ $customer->loantypes }}</td>
                <td>{{ $customer->date}}</td>
                <td>{{ $customer->loanamount }}</td>
                <td>{{ $customer->advanced }}</td>
                <td>{{ $customer->Status }}</td>
                <td>{{ $customer->installment }}</td>             
                <td> <button type="button" class="btn btn-secondary"><a href="{{ route('customers.show', $customer->id) }}" title="show">
                            {{ __('show') }}
                 </a></button>
                </td>
                <td> <button type="button" class="btn btn-secondary"><a href="{{ route('customers.edit', $customer->id) }}" title="show">
                            {{ __('Edit') }}
                    </a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$customers->links('pagination::bootstrap-4')}}
    </div>
    @endsection

