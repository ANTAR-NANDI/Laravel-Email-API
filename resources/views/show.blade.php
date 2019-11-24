<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
	<div class="container">
	<h3>List of Employee</h3>
<table class="table table-striped table-dark" id="myTable">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
       <th scope="col" style="background-color: gray">Name</th>
      
      <th scope="col" style="background-color: #ec5e5e">Price</th>
   
      <th scope="col" style="background-color: #5bc0de">Description</th>
       <th scope="col" style="background-color: #5bc0de">Edit</th>
    </tr>
  </thead>
    <tbody>
    	@foreach($products as $p)
    	<tr>
    	 
            <td>{{ $p->name }}</td>
            <td>{{ $p->price }}</td>
            <td>{{ $p->description }}</td>
           <td>  <button class="btn btn-info"> <a href="{{ URL::to('product/'.$p->id)}}" class="btn btn-info btn-xm">Delete</a> </button></td>
           
                
        </tr>
        @endforeach

    </tbody>


   </table>
</div>
 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
