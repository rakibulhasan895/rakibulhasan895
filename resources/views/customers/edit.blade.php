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
                    <form action="{{ route('customers.update',$customer->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('সদস্যের নাম ') }}</label>
                                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>{{ __('পিতা/স্বামীর নাম') }}</label>
                                    <input type="text" class="form-control" name="gname" value="{{ $customer->gname }}" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('মোবাইল নম্বর') }}</label>
                                    <input type="number" class="form-control" name="number" value="{{ $customer->number }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('গ্রুপ') }}</label>
                                    <select data-trigger="" class="form-control" name="group" value="{{ $customer->group }}">
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
                                    <input type="text" class="form-control" name="village" value="{{ $customer->village }}">
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ইউনিয়ন ') }}</label>
                                    <input type="text" class="form-control" name="union" value="{{ $customer->union }}" >
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('জেলাঃ ') }}</label>
                                    <input type="text" class="form-control" name="zela" value="{{ $customer->zela }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>{{ __('কর্মী') }}</label>
                                    <select data-trigger="" name="employee" class="form-control" id="meal" onChange="changecat(this.value);">
                                        <option value="রাজনু">রাজনু</option>
                                        <option value="হেনা">হেনা</option>
                                        <option value="শামীমা">শামীমা</option>
                                        <option value="নিলা">নিলা</option>
                                    </select>
                                       <div style="position:relative; display:none;">
                                        <select name="employee_id" id="category" class="form-control">
                                            <option value="" disabled selected>1</option>
                                        </select>
                                        </div>
                                    </div>
                                    <script>
                                        var mealsByCategory = {
                                        রাজনু: ["1"],
                                        হেনা: ["2"],
                                        শামীমা: ["3"],
                                        নিলা: ["4"]
                                        }
                                        function changecat(value) {
                                        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
                                        else {
                                        var catOptions = "";
                                        for (categoryId in mealsByCategory[value]) {
                                        catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
                                        }
                                        document.getElementById("category").innerHTML = catOptions;
                                        }
                                        }
                                    </script>
                                
                            </div>

                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label>{{ __('ঋণের ধরণ') }}</label>
                                    <input type="text" class="form-control" name="loantypes" value="{{ $customer->loantypes }}" required>
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('বিতরণ তারিখ ') }}</label>
                                    <input type="text" id="datepicker" class="form-control" placeholder="Select date" name="date" value="{{ $customer->date }}" required>

                                    <script>
                                        $('#datepicker').datepicker({
                                            uiLibrary: 'bootstrap4'
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="col-md-3 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ঋণের পরিমাণ') }}</label>
                                    <input type="number" class="form-control" name="loanamount" value="{{ $customer->loanamount }}" id="num1" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('অগ্রিম আদায়') }}</label>
                                    <input type="number" class="form-control" name="advanced" value="{{ $customer->advanced }}" id="num2" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('বিগত মাসের স্থিতি') }}</label>
                                    <input type="number" class="form-control" name="Status" value="{{ $customer->Status }}" id="subt" required>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('কিস্তির পরিমান') }}</label>
                                    <input type="number" class="form-control" name="installment" value="{{ $customer->installment }}" required>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="s-12 l-2"><button type="submit" value="submit">Update</button></div>
                </div>
            </div>
            </form>
            <script>
              $(function() {
                $("#num1, #num2").on("keydown keyup", sum);
                function sum() {
                //$("#sum").val(Number($("#num1").val()) + Number($("#num2").val()));
                 $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
                    }
                });
            </script>
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

