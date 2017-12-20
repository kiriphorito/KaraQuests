@extends('layouts.app')

@section('content')
 
<div class="container">
 
<div class="row">
 
<div class="panel panel-default">
 
<div class="panel-heading">
 
<h3>Songs</h3>
 
</div>
 
<div class="panel-body">
 
<div class="form-group">
 
<input type="text" class="form-controller" id="search" name="search"></input>
 
</div>
 
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
 
</div>
 
</div>
 
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