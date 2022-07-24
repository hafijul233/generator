@extends('generator::layout.generator')

@section('title', 'Create')

@push('style')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <h4 class="card-header bg-success text-white font-weight-bold text-center">CRUD Generator</h4>
            <div class="card-body">
                {!! Form::open(['route' => 'generators.create', 'method' => 'post']) !!}
                @include('generator::generator.partials.form')
                {!! form::close() !!}
            </div>
        </div>
    </div>
@endsection

@push('style')
    <script>

    </script>
@endpush
