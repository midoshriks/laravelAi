<!-- Button trigger modal -->
<button type="button" class="btn mb-2 btn-outline-success" data-toggle="modal"
    data-target="#verticalModal">{{ display('Add Admin') }}</button>
<!-- Modal -->
<div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="verticalModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" action="{{ route('dashboard.admins.store') }}" method="POST"
                enctype="multipart/form-data" novalidate>
                @csrf
                {{-- ID Insert type  --}}
                <input type="text" value="{{ $type->id }}" hidden>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom3">name</label>
                                <input type="text" class="form-control" id="validationCustom3" value="Mark"
                                    name="name" required>
                                <div class="valid-feedback"> Looks good! </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom4">Last name</label>
                                <input type="text" class="form-control" id="validationCustom4" value="Otto"
                                    required>
                                <div class="valid-feedback"> Looks good! </div>
                            </div>
                        </div> <!-- /.form-row -->
                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <label for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" name="email"
                                    aria-describedby="emailHelp1" required>
                                <div class="invalid-feedback"> Please use a valid email </div>
                                <small id="emailHelp1" class="form-text text-muted">We'll never
                                    share your email with anyone else.</small>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="custom-phone">Telephone</label>
                                <input class="form-control input-phoneus" id="custom-phone" name="phone" required>
                                <div class="invalid-feedback"> Please enter a correct phone </div>
                            </div>
                        </div> <!-- /.form-row -->

                        <div class="form-row mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="date-input1">Date Picker</label>
                                <div class="input-group">
                                    <input type="text" class="form-control drgpicker" id="date-input1"
                                        name="dob_date" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <div class="input-group-text" id="button-addon-date"><span
                                                class="fe fe-calendar fe-16 mx-2"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                {{-- <div class="form-group col-md-4"> --}}
                                <label for="inputState5">Gender Admin</label>
                                <select id="inputState5" class="form-control" name="gender">
                                    <option valye="">Select country...</option>
                                    <option value="Male">Male</option>
                                    <option value="Famale">Famale</option>
                                </select>
                                {{-- </div> --}}
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg">
                                @include('admin.admins.tabs')
                            </div>
                        </div>

                        {{-- <div class="form-row">
                            <div class="col-lg">
                                <div class="container">
                                    <input type="file" class="dropzone" id="my-dropzone" name="avatar" required>
                                    <div class="dz-message needsclick">
                                        <div class="circle circle-lg bg-primary">
                                            <i class="fe fe-upload fe-24 text-white"></i>
                                        </div>
                                        <h5 class="text-muted mt-4">Drop files here or click to upload</h5>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        @include('admin.admins.dropzone')

                        {{-- <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation16"
                                required="">
                            <label class="custom-control-label" for="customControlValidation16">
                                Agree to terms and conditions</label>
                            <div class="invalid-feedback"> You must agree before submitting. </div>
                        </div> --}}



                    </div> <!-- /.card-body -->
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn mb-2 btn-primary">{{ display('Add') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>



@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.js"></script>
    <script>
        Dropzone.options.myDropzone = {
            paramName: "file", // Name of the uploaded file parameter in the form data
            maxFilesize: 2, // Maximum file size in MB
            acceptedFiles: ".jpg,.png,.gif", // Allowed file types
            dictDefaultMessage: "Drag and drop files here or click to upload",
            init: function() {
                this.on("success", function(file, response) {
                    // Handle successful upload
                });
            }
        };
    </script>
@endpush
