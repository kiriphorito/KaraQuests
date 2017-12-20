@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-sm-3">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Select a file to import</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <form action="{{url('/csv_add')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
              <label for="file">CSV file to upload</label>
              <input type="file" name="file" id="file" class="form-control">
            </div>

            <div class="form-group">
              <button class="btn btn-primary">
                <i class="fa fa-upload"></i> Upload
              </button>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
  </div>
@endsection