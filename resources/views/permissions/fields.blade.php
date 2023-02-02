<!-- Name Field -->
<div class="form-group col-sm-6">
    
    {!! Form::label('name', __('fields.name').':',['class' => 'required']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title',  __('fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Guard Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guard_name', __('fields.guard_name'). ':') !!}
    {!! Form::select('guard_name', ['web' => 'web', 'api' => 'api'], null, ['class' => 'form-control custom-select']) !!}
</div>

<!-- Module Field -->
<div class="form-group col-sm-6">
    {!! Form::label('module',__('fields.module'). ':') !!}
    {!! Form::text('module', null, ['class' => 'form-control']) !!}
</div>


<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description',__('fields.description'). ':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>5]) !!}
</div>
