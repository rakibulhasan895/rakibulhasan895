@extends('admin.dashboard.index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                <div class="row">
                    <h5 class="title"> {{ __('কর্মচারী নিবন্ধন') }}</h5>
                    <div class="col-md-4 pr-1">
                        <a href="{{ url('employees') }}">
                            <h3>{{ __(' কর্মচারী তালিকা') }}</h3>
                        </a>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.update',$employee->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('কর্মচারীর নাম') }}</label>
                                    <input type="text" class="form-control" name="name" value="{{ $employee->name }}" disabled>

                                    @error('name')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>{{ __('পিতা/স্বামীর নাম') }}</label>
                                    <input type="text" class="form-control" name="gname" value="{{ $employee->gname }}" required>
                                    @error('gname')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('মোবাইল নম্বর') }}</label>
                                    <input type="number" class="form-control" name="number" value="{{ $employee->number }}" required>
                                    @error('number')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>{{ __('গ্রাম') }}</label>
                                    <input type="text" class="form-control" name="village" value="{{ $employee->village }}" required>
                                    @error('village')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('ইউনিয়ন ') }}</label>
                                    <input type="text" class="form-control" name="union" value="{{ $employee->union }}" required>
                                    @error('union')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>{{ __('জেলাঃ ') }}</label>
                                    <input type="text" class="form-control" name="zela" value="{{ $employee->zela }}" required>
                                    @error('zela')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>ইমেজ:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="Image">
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
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

