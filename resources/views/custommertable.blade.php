@extends('layouts.head')
@section('content')
<div id="app">
    <table class="table table-hover table-bordered table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
        <thead>
            <tr>
                <col>
                <colgroup span="1"></colgroup>
                <th colspan="1">No:</th>
                <th colspan="1">{{ __('সদস্যের নাম') }}</th>
                <th colspan="1">{{ __('পিতা/স্বামীর নাম') }}</th>
                <th colspan="1">{{ __('মোবাইল নম্বর') }}</th>
                <th colspan="1">{{ __('ঋণের ধরণ') }}</th>
                <th colspan="1">{{ __('বিতরণ তারিখ ') }}</th>
                <th colspan="1">{{ __('ঋণের পরিমাণ') }}</th>
                <th colspan="1">{{ __('অগ্রিম আদায়') }}</th>
                <th colspan="1">{{ __('বিগত মাসের স্থিতি') }}</th>
                <th colspan="1">{{ __('কিস্তির পরিমান') }}</th>
                <th colspan="5">{{ __('চলতি মাসের কিস্তি আদায় এর তারিখ') }}</th>
                <th colspan="1">{{ __('মাসে মোট আদায় ') }}</th>
                <th colspan="1">{{ __('মাস শেষে স্থিতি') }}</th>
                <th colspan="1">{{ __('paid') }}</th>
            </tr>

            <tr>
                <th colspan="10" scope="col"></th>
                <th colspan="1">5</th>
                <th colspan="1">12</th>
                <th colspan="1">18</th>
                <th colspan="1">25</th>
                <th colspan="1">31</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">01</th>
                <td>Md Rakibul Hasan</td>
                <td>Mossarof hossain</td>
                <td>01759256864</td>
                <td>phone</td>
                <td>20/09/2020</td>
                <td>10000</td>
                <td>6000</td>
                <td>4000</td>
                <td>300</td>
                <td>200</td>
                <td></td>
                <td>100</td>
                <td>500</td>
                <td>0000</td>
                <td>800</td>
                <td>3200</td>
            </tr>

            <tr>
                <th scope="row">02</th>
                <td>Md Rakibul Hasan</td>
                <td>Mossarof hossain</td>
                <td>01759256864</td>
                <td>phone</td>
                <td>20/09/2020</td>
                <td>10000</td>
                <td>6000</td>
                <td>4000</td>
                <td>300</td>
                <div class="container">
                <td> 
                <button type="button" class="btn" data-toggle="modal" data-target="#form">
                    <input type="text" class="form-control" id="bumber">
                </button>
                </td>
                <td> <button type="button" class="btn" data-toggle="modal" data-target="#form">
                    <input type="text" class="form-control" id="bumber" >
                </button> 
                </td>
                <td> <button type="button" class="btn" data-toggle="modal" data-target="#form">
                    <input type="text" class="form-control" id="bumber">
                    </button> 
                </td>
                <td> <button type="butt on" class="btn" data-toggle="modal" data-target="#form">
                    <input type="text" class="form-control" id="bumber">
                    </button> 
                </td>
                <td> <button type="button" class="btn" data-toggle="modal" data-target="#form">
                    <input type="text" class="form-control" id="bumber">
                    </button> 
                </td>
                </div>
                <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <h5 class="modal-title" id="exampleModalLabel">Please input here</h5>

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body">
                                <div class="container-fluid">
                                 <div class="row">
                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label>{{ __('5') }}</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                </div>
                            <div class="col-md-2 pr-1">
                            <div class="form-group">
                            <label>{{ __('12 ') }}</label>
                                <input type="text" class="form-control" name="name">
                                </div>
                              </div>
                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label>{{ __('18') }}</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label>{{ __('25') }}</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label>{{ __('31') }}</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                                </div>
                                <div class="modal-footer border-top-0 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                                <div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                  <td>800</td>
                <td>3200</td>
            </tr>
        </tbody>
    </table>

    @endsection

