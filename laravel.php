@extends('layouts.app') 
@section('title','Employees') 
@section('content') 
@php $e = $employee ?? null; @endphp 
<div class="card mb-3"> 
<div class="card-body d-flex justify-content-between mb-3"> 
<h5>{{ $e ? 'Update Employee' : 'Employees' }}</h5> 
@if(!$e)<a class="btn btn-primary" href="{{ url()->current() }}?create=1">+ 
Add Employee</a>@endif 
</div> 
@if($e || request()->has('create')) 
<form method="POST" action="{{ $e ? route('employee_update',$e->id) : 
route('employee_store') }}">@csrf 
<div class="row g-3 mb-3"> 
<div class="col-md-6"><input name="name" class="form-control" 
placeholder="Name" value="{{ $e->name ?? '' }}" required></div> 
<div class="col-md-6"><input type="email" name="email" class="form
control" placeholder="Email" value="{{ $e->email ?? '' }}" required></div> 
<div class="col-md-6"><input name="phone" class="form-control" 
placeholder="Phone" value="{{ $e->phone ?? '' }}"></div> 
<div class="col-md-6"><input name="position" class="form-control" 
placeholder="Position" value="{{ $e->position ?? '' }}"></div> 
</div> 
<button class="btn btn-primary">{{ $e ? 'Update' : 'Save' }}</button> 
<a href="{{ url()->current() }}" class="btn btn-outline
secondary">Cancel</a> 
</form> 
@endif 
</div> 
<div class="card"> 
<table class="table table-striped mb-0"> 
<thead><tr><th>Id</th><th>Name & 
Email</th><th>Phone</th><th>Position</th><th>Created</th><th>Updated</t
 h><th>Actions</th></tr></thead> 
<tbody> 
@forelse($employees as $emp) 
<tr> 
<td>{{ $emp->id }}</td> 
<td>{{ $emp->name }}<br><small>{{ $emp->email }}</small></td> 
<td>{{ $emp->phone ?: '—' }}</td> 
<td>{{ $emp->position ?: '—' }}</td> 
<td>{{ $emp->created_at->format('d M Y') }}</td> 
<td>{{ $emp->updated_at->format('d M Y') }}</td> 
<td> 
<a href="{{ url()->current() }}?edit={{ $emp->id }}" class="btn btn-sm 
btn-outline-secondary">Edit</a> 
<form action="{{ route('employee_delete') }}" method="POST" 
style="display:inline">@csrf 
<input type="hidden" name="id" value="{{ $emp->id }}"> 
<button class="btn btn-sm btn-outline-danger" onclick="return 
confirm('Delete?')">Del</button> 
</form> 
</td> 
</tr> 
@empty 
<tr><td colspan="7" class="text-center text-muted">No 
employees</td></tr> 
@endforelse 
</tbody> 
</table> 
</div> 
@endsection
