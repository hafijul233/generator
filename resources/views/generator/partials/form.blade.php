<nav class="mb-3">
    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
           aria-controls="nav-home" aria-selected="true">Resource</a>
        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
           aria-controls="nav-profile" aria-selected="false">Stub Files</a>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="model">Namespace Path<span
                            style="color: #dc3545; font-weight:700">*</span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">App\Models\</span>
                        </div>
                        <input class="form-control"
                               required="required"
                               placeholder="User or Setting\Country"
                               title="use slash for directory separator"
                               name="model"
                               type="text"
                               oninput="form_model(this)"
                               id="model">
                    </div>
                    <span id="model-error" class="invalid-feedback"></span>
                </div>
                <div class="form-group">
                    <label for="pagination">Pagination Length<span
                            style="color: #dc3545; font-weight:700">*</span></label>
                    <select class="form-control custom-select"
                            required="required"
                            id="pagination"
                            onchange="form_pagination(this)"
                            name="pagination">
                        @foreach($config['pagination']['options'] as $value => $label)
                            <option value="{{$value}}"
                                    @if($value == $config['pagination']['default']) selected @endif>{{ $label }}</option>
                        @endforeach
                    </select>
                    <span id="pagination-error" class="invalid-feedback"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="type">Resource Type<span
                            style="color: #dc3545; font-weight:700">*</span></label>
                    <select class="form-control custom-select"
                            required="required"
                            onchange="form_type(this)"
                            id="type"
                            name="type">
                        @foreach($config['resource_types']['options'] as $value => $label)
                            <option value="{{$value}}"
                                    @if($value == $config['resource_types']['default']) selected @endif>{{ $label }}</option>
                        @endforeach
                    </select>
                    <span id="type-error" class="invalid-feedback"></span>
                </div>
                <div class="form-group">
                    <label for="pattern">Design Pattern</label>
                    <select class="form-control custom-select"
                            id="pattern"
                            onchange="form_pattern(this)"
                            name="pattern">
                        @foreach($config['arc_pattern']['options'] as $value => $label)
                            <option value="{{$value}}"
                                    @if($value == $config['arc_pattern']['default']) selected @endif>{{ $label }}</option>
                        @endforeach
                    </select>
                    <span id="pattern-error" class="invalid-feedback"></span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p>Model Option(s)<span style="color: #dc3545; font-weight:700">*</span></p>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input " required="required" id="options-checkbox-soft-delete"
                               checked="checked" name="options[]" onchange="form_options('soft_delete', this)"
                               type="checkbox" value="soft-delete">
                        <label for="options-checkbox-soft-delete" class="custom-control-label">Soft Delete Trait</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input " required="required" id="options-checkbox-audit"
                               checked="checked"
                               name="options[]" onchange="form_options('audit', this)" type="checkbox" value="audit">
                        <label for="options-checkbox-audit" class="custom-control-label">Model Change Audits</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input " required="required" id="options-checkbox-migration"
                               checked="checked" name="options[]" onchange="form_options('migration', this)"
                               type="checkbox" value="migration">
                        <label for="options-checkbox-migration" class="custom-control-label">Create Table
                            Migrations</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input " required="required" id="options-checkbox-factory"
                               name="options[]" onchange="form_options('factory', this)"
                               type="checkbox" value="factory">
                        <label for="options-checkbox-factory" class="custom-control-label">Create Faker Factory</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input " required="required" id="options-checkbox-service"
                               name="options[]" onchange="form_options('service', this)"
                               type="checkbox" value="service">
                        <label for="options-checkbox-service" class="custom-control-label">Create a Service
                            layer</label>
                    </div>

                    <span id="options[]-error" class="invalid-feedback"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" width="30">#</th>
                        <th scope="col">Field Name</th>
                        <th scope="col" width="200">Field Type</th>
                        <th scope="col" width="50">Required</th>
                        <th scope="col">Additional Rules</th>
                        <th scope="col" class="align-middle text-center" width="130">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=1; $i<=1; $i++)
                        <tr>
                            <th scope="row" class="align-middle text-center">{{ $i }}</th>
                            <td>
                                <input class="form-control"
                                       required="required"
                                       placeholder="Field Name"
                                       name="fields[1][name]"
                                       type="text">
                            </td>
                            <td>
                                <select class="form-control custom-select" required="required" name="fields[1][type]">
                                    <optgroup label="Text Fields">
                                        <option value="text" selected="selected">Text</option>
                                        <option value="email">Email</option>
                                        <option value="password">Password</option>
                                        <option value="url">Website URL</option>
                                        <option value="textarea">Large Text (Textarea)</option>
                                    </optgroup>
                                    <optgroup label="Checkbox/Radio Fields">
                                        <option value="checkbox">Checkbox</option>
                                        <option value="radio">Radio</option>
                                        <option value="select">Select</option>
                                        <option value="multi-select">Multiple Select</option>
                                    </optgroup>
                                    <optgroup label="Number Fields">
                                        <option value="integer">Integer</option>
                                        <option value="float">float</option>
                                        <option value="money">Money</option>
                                        <option value="mobile">Mobile</option>
                                    </optgroup>
                                    <optgroup label="Date Time Fields">
                                        <option value="date">Only Date</option>
                                        <option value="time">Only Time</option>
                                        <option value="datetime">Date Time</option>
                                        <option value="month">Month Jan(1)-Dec(12)</option>
                                        <option value="year">Year(1971-~)</option>
                                    </optgroup>
                                    <optgroup label="Slider Dropdown Fields">
                                        <option value="range">Range Slider</option>
                                        <option value="range-dropdown">Select Range Dropdown</option>
                                    </optgroup>
                                    <optgroup label="File Fields">
                                        <option value="file">Default file uploader</option>
                                        <option value="image">Image uploader with preview</option>
                                    </optgroup>
                                    <optgroup label="Relation Fields"></optgroup>
                                </select>
                            </td>
                            <td>
                                <select class="form-control custom-select"
                                        name="fields[1][required]">
                                    <option value="yes" selected="selected">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </td>
                            <td>
                                <input class="form-control"
                                       required="required"
                                       placeholder="Field Name"
                                       name="fields[1][name]"
                                       type="text">
                            </td>
                            <td class="align-middle text-center justify-content-between">
                                <button class="btn btn-outline-primary font-weight-bold mr-4"
                                        onclick="toggleDetails();">
                                    &nabla;
                                </button>
                                <button class="btn btn-outline-danger font-weight-bold" data-toggle="modal"
                                        data-target="#remove-confirm-modal">&Chi;
                                </button>
                            </td>
                        </tr>
                    @endfor
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-12 col-md-4">
                                    <button type="button" class="btn btn-block btn-primary font-weight-bold"
                                            id="add-button"
                                            data-toggle="modal"
                                            data-target="#add-field-modal">Add More
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">File Name</th>
                        <th scope="col">Namespace/Path</th>
                    </tr>
                    </thead>
                    <tbody id="file_list_tbody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Field Modal -->
<div class="modal fade" id="add-field-modal" data-backdrop="static" data-keyboard="false"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">New Field Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group row">
                        <label for="field-name" class="form-label col-sm-3 col-form-label">
                            Field Name
                            <span style="color: #dc3545; font-weight:700">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text"
                                   oninput="create_title_from_name(this.value);"
                                   class="form-control"
                                   id="field-name"
                                   placeholder="Value will be used to store data">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="field-title" class="form-label col-sm-3 col-form-label">
                            Field Title
                            <span style="color: #dc3545; font-weight:700">*</span>
                        </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="field-title"
                                   placeholder="Value will be used to display value">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="field-type" class="form-label col-sm-3 col-form-label">
                            Field Type
                        </label>
                        <div class="col-sm-9">
                            <select class="form-control custom-select"
                                    id="field-type">
                                <optgroup label="Text Fields">
                                    <option value="text" selected="selected">Text</option>
                                    <option value="email">Email</option>
                                    <option value="password">Password</option>
                                    <option value="url">Website URL</option>
                                    <option value="textarea">Large Text (Textarea)</option>
                                </optgroup>
                                <optgroup label="Checkbox/Radio Fields">
                                    <option value="checkbox">Checkbox</option>
                                    <option value="radio">Radio</option>
                                    <option value="select">Select</option>
                                    <option value="multi-select">Multiple Select</option>
                                </optgroup>
                                <optgroup label="Number Fields">
                                    <option value="integer">Integer</option>
                                    <option value="float">float</option>
                                    <option value="money">Money</option>
                                    <option value="mobile">Mobile</option>
                                </optgroup>
                                <optgroup label="Date Time Fields">
                                    <option value="date">Only Date</option>
                                    <option value="time">Only Time</option>
                                    <option value="datetime">Date Time</option>
                                    <option value="month">Month Jan(1)-Dec(12)</option>
                                    <option value="year">Year(1971-~)</option>
                                </optgroup>
                                <optgroup label="Slider Dropdown Fields">
                                    <option value="range">Range Slider</option>
                                    <option value="range-dropdown">Select Range Dropdown</option>
                                </optgroup>
                                <optgroup label="File Fields">
                                    <option value="file">Default file uploader</option>
                                    <option value="image">Image uploader with preview</option>
                                </optgroup>
                                <optgroup label="Relation Fields"></optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="field-required" class="form-label col-sm-3 col-form-label">
                            Is Required
                        </label>
                        <div class="col-sm-9">
                            <select class="form-control custom-select"
                                    id="field-required">
                                <option value="yes">Yes</option>
                                <option value="no" selected="selected">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="field-rules" class="form-label col-sm-3 col-form-label">
                            Additional Rules
                        </label>
                        <div class="col-sm-9">
                            <input list="rules" type="text" class="form-control" id="field-rules"
                                   placeholder="Values will be used to create form validation">
                            <p id="rule-badges"></p>
                            <datalist id="rules">
                                <option value="accepted">
                                <option value="accepted_if">
                                <option value="active_url">
                                <option value="after">
                                <option value="after_or_equal">
                                <option value="alpha">
                                <option value="alpha_dash">
                                <option value="alpha_numeric">
                                <option value="array">
                                <option value="ascii">
                                <option value="bail">
                                <option value="before">
                                <option value="before_or_equal">
                                <option value="between">
                                <option value="boolean">
                                <option value="confirmed">
                                <option value="current_password">
                                <option value="date">
                                <option value="date_equals">
                                <option value="date_format">
                                <option value="decimal">
                                <option value="declined">
                                <option value="declined_if">
                                <option value="different">
                                <option value="digits">
                                <option value="digits_between">
                                <option value="dimensions">
                                <option value="distinct">
                                <option value="doesnt_start_with">
                                <option value="doesnt_end_with">
                                <option value="email">
                                <option value="ends_with">
                                <option value="enum">
                                <option value="exclude">
                                <option value="exclude_if">
                                <option value="exclude_unless">
                                <option value="exclude_with">
                                <option value="exclude_without">
                                <option value="exists">
                                <option value="file">
                                <option value="filled">
                                <option value="greater_than">
                                <option value="greater_than_or_equal">
                                <option value="image">
                                <option value="in">
                                <option value="in_array">
                                <option value="integer">
                                <option value="ip_address">
                                <option value="json">
                                <option value="less_than">
                                <option value="less_than_or_equal">
                                <option value="lowercase">
                                <option value="mac_address">
                                <option value="max">
                                <option value="max_digits">
                                <option value="mime_types">
                                <option value="mime_type">
                                <option value="min">
                                <option value="min_digits">
                                <option value="missing">
                                <option value="missing_if">
                                <option value="missing_unless">
                                <option value="missing_with">
                                <option value="missing_with_all">
                                <option value="multiple_of">
                                <option value="not_in">
                                <option value="not_regex">
                                <option value="nullable">
                                <option value="numeric">
                                <option value="password">
                                <option value="present">
                                <option value="prohibited">
                                <option value="prohibited_if">
                                <option value="prohibited_unless">
                                <option value="prohibits">
                                <option value="regular_expression">
                                <option value="required">
                                <option value="required_if">
                                <option value="required_unless">
                                <option value="required_with">
                                <option value="required_with_all">
                                <option value="required_without">
                                <option value="required_without_all">
                                <option value="required_array_keys">
                                <option value="same">
                                <option value="size">
                                <option value="sometimes">
                                <option value="starts_with">
                                <option value="string">
                                <option value="timezone">
                                <option value="unique">
                                <option value="uppercase">
                                <option value="url">
                                <option value="ulid">
                                <option value="uuid">
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button"
                        class="btn btn-primary font-weight-bold"
                        onclick="create_new_field();">Add
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Remove Field Modal -->
<div class="modal fade" id="remove-confirm-modal" data-backdrop="static" data-keyboard="false"
     role="dialog" aria-labelledby="remove-confirm-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="remove-confirm-modal-label">Remove Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure to remove the field from resource.
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger font-weight-bold">Remove</button>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>

        class Field {
            name(name) {
                this.name = name;
            }

            type(type) {
                this.type = type;
            }

            title(title) {
                this.title = title;
            }

            required(required) {
                this.required = (required === 'yes');
            }

            rules(rules) {
                this.rules = rules;
            }
        }

        var FORM = {
            _token : '{{ csrf_token() }}',
            model: null,
            pagination: 'default',
            type: 'web',
            pattern: 'mvc',
            options: {
                soft_delete: false,
                audit: false,
                migration: false,
                factory: false,
                service: false
            },
            fields: []
        }

        function form_model(element) {
            FORM.model = element.value;
        }

        function form_pagination(element) {
            FORM.pagination = element.value;
        }

        function form_type(element) {
            FORM.type = (element).value;
        }

        function form_pattern(element) {
            FORM.pattern = element.value;
        }

        function form_options(key, element) {
            FORM.options[key] = (element.checked === true);
        }

        function create_title_from_name(value) {
            if (value.length > 0) {
                let formatted = value.replaceAll(/([\- \|]+)/igmu, '_').toLowerCase();

                document.getElementById('field-name').value = formatted;

                document.getElementById('field-title').value = (formatted.charAt(0).toUpperCase() + formatted.slice(1))
                    .replaceAll(/_([a-z])/igu, function (match) {
                        return match.replace('_', ' ').toUpperCase();
                    });
            }
        }

        function create_new_field() {

            let field = new Field();

            field.name(document.getElementById('field-name').value);

            field.title(document.getElementById('field-title').value);

            field.type(document.getElementById('field-type').value);

            field.required(document.getElementById('field-required').value === 'yes');

            field.rules(document.getElementById('field-rules').value.split('|')
                .map((match) => match.trim()));

            FORM.fields.push(field);

            console.log(FORM)
        }

        function form_send_backend() {
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", '{{ route('crud.generators.store') }}', true);
            xhttp.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
            xhttp.send(JSON.stringify(FORM));
            xhttp.onload = function () {
                if(xhttp.status === 201) {
                    console.log("Post successfully created!")
                }
            }
        }

        /*function fixSlashIssue(element) {
            return element.toString().match("(/[a-zA-Z]{1})", function (param) {
                console.log("cal", param);
                return param.toUpperCase().replace('/', '\\');
            });
        }*/
    </script>
@endpush
