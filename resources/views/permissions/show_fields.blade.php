<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $permission->id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('fields.name'). ':') !!}
    <p>{{ $permission->name }}</p>
</div>

<!-- Title Field -->
<div class="col-sm-12">
    {!! Form::label('title', __('fields.title'). ':') !!}
    <p>{{ $permission->title }}</p>
</div>

<!-- Guard Name Field -->
<div class="col-sm-12">
    {!! Form::label('guard_name',  __('fields.guard_name').':') !!}
    <p>{{ $permission->guard_name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __('fields.description'). ':') !!}
    <p>{{ $permission->description }}</p>
</div>

<!-- Module Field -->
<div class="col-sm-12">
    {!! Form::label('module',  __('fields.module').':') !!}
    <p>{{ $permission->module }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $permission->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $permission->updated_at }}</p>
</div>

