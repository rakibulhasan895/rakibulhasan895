@extends('admin.dashboard.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header" style="text-align: center;">
                    <h2>{{ __('পণ্য তালিকা') }}</h2>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="form-group">
                                <strong>সদস্যের নাম:</strong>
                                {{ $employee->name }}
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12 ">
                            <img class="col img" src="{{ Storage::url($employee->image) }}" alt="image">
                        </div>
                        <div class="col-md-12 ">
                            <p class="col-md-8" style="text-align: center;">{{ $employee->name }}</p>
                            <p class="col-md-8" style="text-align: center;">{{ $employee->gname}}</p>
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

