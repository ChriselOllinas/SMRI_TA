<html>
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
    <th>NAME</th>
    <th>VIEW URL</th>
    <th>PROJECT NAME</th>
   
  </tr>
  @foreach ($tbl as $tbl)
  <tr>
    <td> {{$tbl->name}} </td>
    <td> {{$tbl->view_url}} </td>
    <td> {{$tbl->project_name}} </td>
    
  </tr>
  @endforeach
</table>
</body>
</html>

