@extends('layouts.welcome')
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
                            <img class="col img" src="{{ Storage::url($post->image) }}" alt="image">
                            <p class="col-md-8" style="text-align: center;">{{ $post->title }}</p>
                            <p class="col-md-8" style="text-align: center;">{{ $post->price}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
                <section>
                    <h2 style="color:blue;text-align: center;">{{ __('যোগাযোগ করুন')}}</h2>
                    <div class="line">
                        <div class="col-md-4 ">
                            <img class="img" style="text-align: center;" src="img/avatar.png" alt="image">
                        </div>
                        <h4 style="color:purple;text-align: center;">{{ __('প্রো:মো: রেজাউল করিম(রাজনু)') }}</h4>
                        <h5 style="color:red;text-align: center;">{{ __('মোবা:01761529010, 01718625475') }}
                            <h5>
                                <p style="color:green;text-align: center;"> {{ __('দাপুনিয়া বাজার,পাবনা-পাকশি রোড,পাবনা।') }}</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
@endsection

