@extends('layouts.head')
@section('content')
<div class="container">
<div>
<h1 style="text-align:center;"> কর্মচারীর আদায়</h2>
</div>
<br>
 <div style="background-color:#bababa; font-size:35px;">
<h1 style="text-align:center;">{{__('রাজনু')}}</h1>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('satforrajnu') }}">{{_('শনিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('sunforrajnu') }}">{{_('রবিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monforrajnu') }}">{{_('সোমবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('tueforrajnu') }}">{{_('মঙ্গলবার')}}</a> </div>
</div>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('wedforrajnu') }}">{{_('বুধবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('thusforrajnu') }}">{{_('বৃহস্পতিবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monthforrajnu') }}">{{_('মাসিক')}}</a> </div>
</div>
</div>

 <div style="background-color:#ffc2b3; font-size:35px;">
<h1 style="text-align:center;">{{__('হেনা')}}</h1>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('satforhena') }}">{{_('শনিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('sunforhena') }}">{{_('রবিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monforhena') }}">{{_('সোমবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('tueforhena') }}">{{_('মঙ্গলবার')}}</a> </div>
</div>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('wedforhena') }}">{{_('বুধবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('thusforhena') }}">{{_('বৃহস্পতিবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monthforhena') }}">{{_('মাসিক')}}</a> </div>
</div>
</div>

 <div style="background-color:#826787; font-size:35px;">
<h1 style="text-align:center;">{{__('শামীমা')}}</h1>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('satforshamima') }}">{{_('শনিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('sunforshamima') }}">{{_('রবিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monforshamima') }}">{{_('সোমবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('tueforshamima') }}">{{_('মঙ্গলবার')}}</a> </div>
</div>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('wedforshamima') }}">{{_('বুধবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('thusforshamima') }}">{{_('বৃহস্পতিবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monthforshamima') }}">{{_('মাসিক')}}</a> </div>
</div>
</div>
 <div style="background-color:#ccffff; font-size:35px;">
<h1 style="text-align:center;">{{__('নিলা')}}</h1>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('satfornila') }}">{{_('শনিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('sunfornila') }}">{{_('রবিবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monfornila') }}">{{_('সোমবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('tuefornila') }}">{{_('মঙ্গলবার')}}</a> </div>
</div>
<div class="row">
  <div class="col-sm-3"><a href="{{ url('wedfornila') }}">{{_('বুধবার ')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('thusfornila') }}">{{_('বৃহস্পতিবার')}}</a> </div>
  <div class="col-sm-3"><a href="{{ url('monthfornila') }}">{{_('মাসিক')}}</a> </div>
</div>
</div>



</div>
@endsection