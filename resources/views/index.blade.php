@extends('layout')
 
@section('content')

    <div class="row">
        <div class="col-lg-12" >
            <div class="pull-left">
                <h3>Index Page</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ajax.create') }}">Add a new record</a>
            </div>
        </div>
    </div>

    {{-- <div class="table-responsive m-t-20">
        <div class="dataTables_wrapper no-footer" id="table1_wrapper"> --}}
            <table class="table table-bordered table-hover dataTable" id="table1" role="grid">
                <thead>
                    <tr role="row">
                        <th>ID</th>
                        <th>Student</th>
                        <th>Fav Color</th>
                        <th >Actions</th>

                    </tr>
                </thead>
                <tbody>

                </tbody>
           


        </table>

    </div>

    
    <script>
$(document).ready(function() {

    var BASE = "{{url('/')}}/";

   var testtable = $('#table1').DataTable( {
        "ajax": "{!! route('ajax.indexpagetable') !!}",
        columns: [
                
                {data: 'id', name: 'id'},
                {data: 'std_name', name: 'std_name'},
                {data: 'std_color', name: 'std_color'},
                {data: 'action', name: 'action'},

                
            ]
    


    } );
    $('#table1').on('click','#delete',function(){
// alert('clicked');
var value = $(this).closest('tr').find('#hiddenID').val();
alert('Now you are about to see something new 🕴');

var params = {
     id:$(this).closest('tr').find('#hiddenID').val(),
    _token:$(this).data("token"),
  
};
$.ajax({
    url: BASE+'remove/'+value,
    type: 'delete',
    dataType: 'Json',
    data: $.param(params),
    success:function(response){
        alert(response.message);

                  
    }
   
});

testtable
        .row( $(this).parents('tr') )
        .remove()
        .draw();

});
});




    </script>
                <script>
                    // $(document).ready(function() {
                        
                    //     $('#table1').on( 'click', '#delete', function () {
                    //         var value = $(this).closest('tr').find('#hiddenID').val();
                    //         //    console.log(value);
                    //      alert(value);
                            
                    //         var params = {
                    //             id: $(this).closest('tr').find('#hiddenID').val(),
                                
                    //         };
                    //         $.ajax({
                    //             url: '/ajax/'+value,
                    //             type: 'DELETE',
                    //             dataType: 'JSON',
                    //             data: $.param(params),
                    //             success: function (response) {
                    //                 alert(response.message);
                    //                 window.location.reload();
                    //             }
                    //         });
            
                    //     });
                        
                    // });
                </script>
   

   

  
   
      
@endsection