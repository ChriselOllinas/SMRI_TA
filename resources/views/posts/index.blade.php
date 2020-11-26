@extends('layouts.app')
@section('content')
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>  
  @endif
<center>
  <table class="table table-bordered" style="width: 480px;" >
    <tr>
      <th with="20px">No</th>
      <th class="text-center">Title</th>
      <th class="text-center">Body</th>
      <th with="100px" class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->title }}</td>
        <td>{{ $value->body }}</td>
        <td>
          <a class="btn btn-info btn-sm center" href="{{route('posts.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm center" href="{{route('posts.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i></a>
            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
</center>
@endsection