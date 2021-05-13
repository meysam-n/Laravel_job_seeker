@extends('layouts.app')
@section('content')

<form acton="{{  route('jobs') }}" method="post">
@csrf
<div class="form-floating">
    <label for="job_title">Full name</label>
    <input type="text" name="job_title"  class="form-control">
</div>

<div class="form-floating">
    <label for="apply_date">Full name</label>
    <input type="text" name="apply_date"  class="form-control">
</div>

<div class="form-floating">
    <label for="name2">Full name</label>
    <input type="text" name="name2"  class="form-control">
</div>

<div class="form-floating">
    <label for="name2">Full name</label>
    <input type="text" name="name2"  class="form-control">
</div>

<div class="form-floating">
    <label for="name2">Full name</label>
    <input type="text" name="name2"  class="form-control">
</div>
<button type="submit" class="btn btn-primary">Register</button>
</form>

@endsection