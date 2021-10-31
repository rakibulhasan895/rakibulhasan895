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
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="file">{{ __('choose Photo') }}</label>
                                    <input type="file" class="form-control" name="file" onchange="previewFile(this)" required>  
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>{{ __('name') }}</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                            <div class="form-group">
                            <label>{{ __('price') }}</label>
                            <input type="number" class="form-control" name="price" required>
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
<script>
function previewFile(input){
    var file=$("input[type=file]").get(0).files[0];
}
if(file){
    var reader =new FileReader();
    reader.onload=function(){
        $('#previwImg').attr("src",reader.result);
    }
    reader.readAsDataURL(file);
}
</script>
</div>
@endsection

