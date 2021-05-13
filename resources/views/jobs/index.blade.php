@extends('layouts.app')
@section('content')

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add New Job</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Job Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('jobs') }}" method="post">
        @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="job_title">Job title</label>
                <input type="text" name="job_title" class="form-control @error('job_title') is-invalid @enderror" id="job_title" placeholder="+ add title" >
                @error('job_title')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
                </div>
                <div class="form-group col-md-4">
                <label for="company">Company</label>
                <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" id="company" placeholder="Company">
                @error('company')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror
                </div>
                <div class="form-group col-md-4">
                <label for="apply_date">Apply date</label>
                <input type="date" name="apply_date" class="form-control" id="apply_date" placeholder="+ add date">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                <label for="post_url">Post URL</label>
                <input type="url" name="post_url" class="form-control" id="post_url" placeholder="+ add URL">
                </div>
                <div class="form-group col-md-3">
                <label for="salary">Salary</label>
                <input type="text" name="salary" class="form-control" id="salary" placeholder="+ add salary">
                </div>
                <div class="form-group col-md-4">
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" class="form-control" id="deadline" placeholder="+ add date">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" name="city" class="form-control" id="city">
                </div>
                <div class="form-group col-md-4">
                <label for="state">State</label>
                <input type="text" name="state"  class="form-control" id="state">
                </div>
                <div class="form-group col-md-2">
                <label for="zip">Zip</label>
                <input type="text" name="zip" class="form-control" id="zip">
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mt-5">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Applied Jobs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Job title</th>
                            <th>Comapny</th>
                            <th>Apply date</th>
                            <th>URL</th>
                            <th>Salary</th>
                            <th>Deadline</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>state</th>
                            <th>Zip</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($jobs as $job)
                        <tr>
                            <td>{{$job->job_title}}</td>
                            <td>{{$job->company}}</td>
                            <td>{{$job->apply_date}}</td>
                            <td><a href="{{$job->post_url}}">{{$job->post_url}}</a></td>
                            <td>{{$job->salary}}</td>
                            <td>{{$job->deadline}}</td>
                            <td>{{$job->address}}</td>
                            <td>{{$job->city}}</td>
                            <td>{{$job->state}}</td>
                            <td>{{$job->zip}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection