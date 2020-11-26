<center>
<div class="row" >
  <div class="col-sm-2">
    {!! form::label('title','Name') !!}
  </div>
  <div class="col-sm-7">
    <div class="form-group {{ $errors->has('Name') ? 'has-error' : "" }}">
      {{ Form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Name']) }}
      {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('body','Description') !!}
  </div>
  <div class="col-sm-7">
    <div class="form-group {{ $errors->has('Description') ? 'has-error' : " " }}">
      {{ Form::text('body',NULL, ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Description']) }}
      <p class="help-block">{{ $errors->first('body', ':message') }}</p>
    </div>
  </div>
</div>
<div class="row">
    <div class="col-sm-7">
      <div class="form-group">
        {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
      </div>
    </div>
</div>
</center>