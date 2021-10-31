@extends('admin.dashboard.index')
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('employees.create') }}">কর্মচারী নিবন্ধন</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>কর্মচারীর নাম</th>
            <th>পিতা/স্বামীর নাম</th>
            <th>মোবাইল নম্বর</th>
            <th>গ্রাম</th>
            <th>ইউনিয়ন</th>
            <th>জেলাঃ</th>
            <th>ইমেজ</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->gname }}</td>
            <td>{{ $employee->number }}</td>
            <td>{{ $employee->village }}</td>
            <td>{{ $employee->union }}</td>
            <td>{{ $employee->zela }}</td>            
            <td><img src="{{ Storage::url($employee->image) }}" height="75" width="75" alt="" /></td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                    <a class="btn btn-danger" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                    @csrf
                    <a class="btn btn-primary" href="{{ route('employees.show', $employee->id) }}" title="show">
                      {{ __('show') }}
                    </a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $employees->links() !!}
    @endsection

