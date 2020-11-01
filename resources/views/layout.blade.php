<!DOCTYPE html>
<html>
<head>
<title>Learn Ajax and Datatables</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

{{-- DataTables --}}

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.js"></script>

{{-- Base --}}
<script type="text/javascript">

  var BASE = "{{url('/')}}/";
  
  </script>
  <script type="text/javascript">
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
  </script>

</head>
<body>
<div class="jumbotron text-center">
  <h1>Learn Ajax and Datatables</h1>
  <p>By: Chathura Dissanayaka</p> 
</div>
  
<div class="container">
    @yield('content')
</div>


</body>
</html>