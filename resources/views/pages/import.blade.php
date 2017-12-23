@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <div class="row">
        <div class="box box-primary">
            <h3 class="box-title">Select a file to import</h3>
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
@endsection