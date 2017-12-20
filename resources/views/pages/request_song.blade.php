@extends('layouts.app')
@extends('layouts.navbar')

@section('content')
    <div class="row">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Search</span>
            <input type="text" class="form-control" id="search" name="search" placeholder="Song, artist or origin" aria-describedby="basic-addon1"></input>
        </div>
        <br>
        <table class="table table-bordered table-hover">                       
            <thead>                  
                <tr>
                    <th>Song ID</th>
                    <th>Song Name</th>
                    <th>Artist</th>
                    <th>Origin</th>
                    <th>Add</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                    $('tbody').html(data);
                }
            });
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
 @endsection