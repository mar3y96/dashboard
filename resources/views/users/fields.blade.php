<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name',__('fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('fields.email').':',['class' => 'required']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<!-- Role Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role', __('fields.role').':') !!}
    <div class="select2-purple">
        {!! Form::select('role_data[]', $roles,null, ['class' => 'select2 form-control select2-purple','multiple'=>'multiple']) !!}
    </div>
</div>
@if(!isset($user))
<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('fields.password').':',['class' => 'required']) !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
@endif
@push('page_scripts')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endpush
