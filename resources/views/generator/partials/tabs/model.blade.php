<div class="row">
    <div class="col-md-4">
        {!! \Form::nText('model', 'Full Namespace Path', null, true,
        ['placeholder' => 'Exclude Root namespace',
         'title' => 'use slash for directory separator']) !!}

        {!! \Form::nSelect('pagination', 'Pagination Length', $config['pagination']['options'],$config['pagination']['default'], true) !!}

    </div>
    <div class="col-md-4">

        {!! \Form::nSelect('type', 'Resource Type', $config['resource_types']['options'], $config['resource_types']['default'], true) !!}

        {!! \Form::nSelect('pattern', 'Design Pattern', $config['arc_pattern']['options'], $config['arc_pattern']['default']) !!}

    </div>
    <div class="col-md-4">
        {!! \Form::nCheckbox('options', 'Model Option(s)', $config['model_options'], $config['model_defaults'], true)  !!}
    </div>
</div>
<div class="row">
    <div class="col-md-12 table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Field Name</th>
                <th scope="col">Field Type</th>
                <th scope="col">Required</th>
                <th scope="col" width="40">Detail</th>

            </tr>
            </thead>
            <tbody>
            @for($i=1; $i<=10; $i++)
                <tr>
                    <th scope="row" class="align-middle text-center" width="30">{{ $i }}</th>
                    <td>{!! \Form::iText("fields[{$i}][name]", "Name", null, true, null, null, ["placeholder" => 'Field Name']) !!}</td>
                    <td>{!! \Form::iSelect("fields[{$i}][type]", "Type", $config['field_types'],'text', true, null, null, ["placeholder" => 'Field Type']) !!}</td>
                    <td width="50">{!! \Form::iSelect("fields[{$i}][required]", "Required", ['Yes', 'No'], ['No'], false, null, null) !!}</td>
                    <td width="80"><button class="btn btn-outline-primary" onclick="toggleDetails();"> >> </button> </td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
