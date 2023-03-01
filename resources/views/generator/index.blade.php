@extends('generator::layout.generator')

@section('title', 'Index')

@push('style')

@endpush

@php


    $field_types = [];
    foreach (config('generator.field_types') as $group) {
        $field_types = array_merge($field_types, $group);
    }
@endphp

@section('content')
    <div class="container-fluid">
        <div class="card mt-3">
            <h4 class="card-header font-weight-bold text-center">CRUD Generator</h4>
            <div class="card-body">
                <div class="row">
                    <a href="{{ route('crud.generators.create')}}"
                       class="mx-3 mb-3 mt-0 btn btn-block btn-primary font-weight-bold">
                        Add New CRUD Resource
                    </a>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Model</th>
                                <th scope="col">Type</th>
                                <th scope="col">Pattern</th>
                                <th scope="col">Pagination</th>
                                <th scope="col">Options</th>
                                <th scope="col">Fields</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($generators as $generator)
                                <tr>
                                    <th scope="row" rowspan="2"
                                        style="align-items: center; vertical-align: middle; text-align: center;">
                                        {{ $loop->iteration }}
                                    </th>
                                    <td width="30%">{{ $generator->model }}</td>
                                    <td>{{ config("generator.resource_types.options.{$generator->type}") }}</td>
                                    <td>{{ config("generator.arc_pattern.options.{$generator->pattern}") }}</td>
                                    <td>{{ config("generator.pagination.options.{$generator->pagination}") }}</td>
                                    <td>
                                        <ul>
                                            @foreach(config('generator.model_options') as $key => $label)
                                                <li>
                                                    {{$label}}
                                                    @if($generator->options[$key])
                                                        ✅
                                                    @else
                                                        ❌
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-primary mt-3">Fields</button>
                                    </td>
                                </tr>
                                <tr id="resource-{{$loop->iteration}}">
                                    <td colspan="6">
                                        <table class="table table-bordered mb-0">
                                            <thead class="thead-light">
                                            <tr>
                                                <td>#</td>
                                                <td>Field Title</td>
                                                <td>Field Name</td>
                                                <td>Field Type</td>
                                                <td>Required</td>
                                                <td>Rules</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($generator->fields as $field)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $field['title'] }}</td>
                                                    <td>{{ $field['name'] }}</td>
                                                    <td>@if(isset($field_types[$field['type']]))
                                                            {{ $field_types[$field['type']] }}
                                                        @else
                                                            N/A
                                                        @endif</td>
                                                    <td>
                                                        @if($field['required'])
                                                            Yes
                                                        @else
                                                            No
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @foreach($field['rules'] as $rule)
                                                            @if($rule != null)
                                                            <button class="btn badge badge-info text-white">
                                                                {{$rule}}
                                                            </button>
                                                            @endif
                                                        @endforeach
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5"> No Field Available</td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Data Available</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <script>

    </script>
@endpush
