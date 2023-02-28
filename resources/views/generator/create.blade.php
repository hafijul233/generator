@extends('generator::layout.generator')

@section('title', 'Create')

@push('style')

@endpush

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <h4 class="card-header bg-success text-white font-weight-bold text-center">CRUD Generator</h4>
            <div class="card-body">
                @include('generator::generator.partials.form')
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" onclick="form_send_backend();">Create</button>
            </div>
        </div>
    </div>
@endsection

