@extends('admin.dashboard.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="title"> {{ __('কাস্টমার নিবন্ধন') }}</h5>
                </div>
                <div class="col-sm-8 offset-sm-2">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br />
                    @endif
                </div>

                <div class="card-body">
                    <form action="{{ route('custommerregisters.update','$customerRegister->id')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('সদস্যের নাম ') }}</label>
                                    <input type="text" class="form-control" name="name" value="{{ $customerRegister->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>{{ __('পিতা/স্বামীর নাম') }}</label>
                                    <input type="text" class="form-control" name="gname" value="{{ $customerRegister->gname }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('মোবাইল নম্বর') }}</label>
                                    <input type="number" class="form-control" name="number" value="{{ $customerRegister->number }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('গ্রাম') }}</label>
                                    <input type="text" class="form-control" name="village" value="{{ $customerRegister->village }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ইউনিয়ন ') }}</label>
                                    <input type="text" class="form-control" name="union" value="{{ $customerRegister->union }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('জেলাঃ ') }}</label>
                                    <input type="text" class="form-control" name="zela" value="{{ $customerRegister->zela }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('ঋণের ধরণ') }}</label>
                                    <input type="text" class="form-control" name="loantypes" value="{{ $customerRegister->loantypes }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('বিতরণ তারিখ ') }}</label>
                                    <input type="text" class="form-control" name="date" value="{{ $customerRegister->date }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ঋণের পরিমাণ') }}</label>
                                    <input type="text" class="form-control" name="loanamount" value="{{ $customerRegister->loanamount }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('অগ্রিম আদায়') }}</label>
                                    <input type="text" class="form-control" name="advanced" value="{{ $customerRegister->advanced }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('বিগত মাসের স্থিতি') }}</label>
                                    <input type="text" class="form-control" name="Status" value="{{ $customerRegister->Status }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('কিস্তির পরিমান') }}</label>
                                    <input type="text" class="form-control" name="installment" value="{{ $customerRegister->installment }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 pr-1">
                                <div class="form-group">
                                    <label>{{ __('মন্তব্য:') }}</label>
                                    <input type="text" class="form-control" name="comment">
                                </div>
                            </div>
                        </div>
                        <div class="s-12 l-2"><button type="submit" value="submit">Update</button></div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
