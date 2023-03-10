@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>{{ __('header.edit') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('permissions.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit( __('header.save') , ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('permissions.index') }}" class="btn btn-default">{{ __('header.Cancel') }}</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
