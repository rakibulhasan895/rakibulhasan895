@extends('admin.dashboard.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="title"> {{ __('কাস্টমার নিবন্ধন') }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('custommerregisters.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('সদস্যের নাম ') }}</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>{{ __('পিতা/স্বামীর নাম') }}</label>
                                    <input type="text" class="form-control" name="gname" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('মোবাইল নম্বর') }}</label>
                                    <input type="number" class="form-control" name="number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('গ্রুপ') }}</label>
                                    <select data-trigger="" class="form-control" name="group">
                                        <option required>{{ __('শনিবার') }}</option>
                                        <option>{{ __('রবিবার') }}</option>
                                        <option>{{ __('সোমবার') }}</option>
                                        <option>{{ __('মঙ্গলবার') }}</option>
                                        <option>{{ __('বুধবার') }}</option>
                                        <option>{{ __('বৃহস্পতিবার') }}</option>
                                        <option>{{ __('মাসিক') }}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>{{ __('গ্রাম') }}</label>
                                    <input type="text" class="form-control" name="village" required>
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ইউনিয়ন ') }}</label>
                                    <input type="text" class="form-control" name="union" required>
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('জেলাঃ ') }}</label>
                                    <input type="text" class="form-control" name="zela" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('ঋণের ধরণ') }}</label>
                                    <input type="text" class="form-control" name="loantypes" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('বিতরণ তারিখ ') }}</label>
                                    <input type="text" id="datepicker" class="form-control" placeholder="Select date" name="date" required>

                                    <script>
                                        $('#datepicker').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });

                                    </script>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ঋণের পরিমাণ') }}</label>
                                    <input type="number" class="form-control" name="loanamount" id="num1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('অগ্রিম আদায়') }}</label>
                                    <input type="number" class="form-control" name="advanced" id="num2" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('বিগত মাসের স্থিতি') }}</label>
                                    <input type="number" class="form-control" name="Status" id="sum"  required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('কিস্তির পরিমান') }}</label>
                                    <input type="number" class="form-control" name="installment" required>
                                </div>
                            </div>
                        </div>
                        <div class="s-12 l-2"><button type="submit" value="submit">Submit</button></div>
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
