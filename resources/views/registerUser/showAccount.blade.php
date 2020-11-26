<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
#account{
	font-family: sans-serif;
	border: solid black 1px;
	padding: 5px, 5px, 5px, 5px;
}	

#account th{
	border: solid black 1px;
	padding: 2px, 2px, 2px, 2px;
}
#account td{
	border: solid black 1px;
	padding: 2px, 2px, 2px, 2px;
}


</style>
<body>
<table id="account" class="md-col-12">
  <tr>
    <th>ADID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>Action</th>
  </tr>
  @foreach ($user as $user)
  <tr>
    <td> {{$user->ADID}} </td>
    <td> {{$user->full_name}} </td>
    <td> {{$user->email}} </td>
    <td>
    	<a class="fa fa-clone" href=""> VIEW </a>
    	<a class="fa fa-edit" href=""> EDIT </a>
    	
    	<a class="fa fa-trash-o" href=""> DELETE </a>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>

