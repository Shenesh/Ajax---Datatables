<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
<form action="{{route('ajax.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="std_name">Student Name</label>
        <input type="text" name="std_name">

    </div>
    <div class="form-group">
        <label for="std_color">Student Name</label>
        <input type="text" name="std_color">

    </div>
    <input type="submit" value="Save" class="btn btn-success">

</form>
</div>