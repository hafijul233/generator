<div class="row">
    <div class="col-md-4">
        {!! \Form::nText('name', 'Full Namespace Path', null, true,
        ['placeholder' => 'Exclude Root namespace',
         'title' => 'use slash for directory separator']) !!}

        {!! \Form::nSelect('pagination', 'Pagination Length',
$config['pagination']['options'],
 $config['pagination']['default'],
  true) !!}

    </div>
    <div class="col-md-4">
        {!! \Form::nSelect('type', 'Resource Type',
        $config['resource_types']['options'],
         $config['resource_types']['default'],
          true) !!}
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
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            @for($i=1; $i<=10; $i++)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{!! \Form::iText("name[{$i}]", "Name", null, true, null, null, ["placeholder" => 'Field Name']) !!}</td>
                    <td>{!! \Form::iSelect("type[{$i}]", "Type", $config['field_types'],'text', true, null, null, ["placeholder" => 'Field Type']) !!}</td>
                    <td>{!! \Form::iText("length[{$i}]", "Length", null, true, null, null, ["placeholder" => 'Field Length']) !!}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    </div>
</div>
