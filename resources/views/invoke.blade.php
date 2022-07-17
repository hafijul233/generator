<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Generator</title>
</head>
<body>
<div class="container-fluid">
    <div class="card mt-3">
        <h4 class="card-header bg-success text-white font-weight-bold text-center">CRUD Generator</h4>
        <div class="card-body">
            <nav class="mb-3">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                       aria-controls="nav-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                       aria-controls="nav-profile" aria-selected="false">Profile</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                       aria-controls="nav-contact" aria-selected="false">Contact</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-md-4">
                            {!! \Form::nText('name', 'Full Namespace Path', null, true,
                            ['placeholder' => 'Exclude Root namespace',
                             'title' => 'use slash for directory separator']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! \Form::nSelect('type', 'Resource Type',
                            config('generator.resource_types.options'),
                             config('generator.resource_types.default'),
                              true) !!}
                        </div>
                        <div class="col-md-4">
                            {!! \Form::nCheckbox('options', 'Model Option(s)', config('generator.model_options'), config('generator.model_defaults'), true)  !!}
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
                                        <td>{!! \Form::iSelect("type[{$i}]", "Type", config('generator.field_types'),'text', true, null, null, ["placeholder" => 'Field Type']) !!}</td>
                                        <td>{!! \Form::iText("length[{$i}]", "Length", null, true, null, null, ["placeholder" => 'Field Length']) !!}</td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>

