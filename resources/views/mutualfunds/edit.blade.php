@extends('app')
@section('content')
    <h1>Update Mutual Fund</h1>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
       <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_value', 'Acquired Value:') !!}
        {!! Form::text('acquired_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquisition_date', 'Acquisition Date:') !!}
        {!! Form::text('acquisition_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_value', 'Recent Value:') !!}
        {!! Form::text('recent_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('recent_date', 'Recent Date:') !!}
        {!! Form::text('recent_date',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop
