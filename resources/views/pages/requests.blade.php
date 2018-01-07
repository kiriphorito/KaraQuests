@extends('layouts.app')
@extends('layouts.navbar')

@section('header')
    {{--<meta http-equiv="refresh" content="90" >--}}
    <script type="text/javascript">
        $(document).ready(function(){
            refreshTable();
          });
      
          function refreshTable(){
              $('#tableHolder').load('/requests/gettable', function(){
                 setTimeout(refreshTable, 30000);
              });
          }
      
    </script>
@endsection

@section('content')
<div class="container">
    <div id="tableHolder">

    </div>
</div>
@endsection

