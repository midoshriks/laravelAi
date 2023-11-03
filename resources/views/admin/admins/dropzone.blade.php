<div class="card-body">
    <div class="dropzone bg-light rounded-lg" id="tinydash-dropzone">
        {{-- style="background-image: url({{$admin->getMedia('photo_user')->last()? $admin->getMedia('photo_user')->last()->getUrl('mobile'): $admin->photo_user}})" --}}
        <div class="dz-message needsclick">
            <input type="file" class="dropzone bg-light rounded-lg" id="tinydash-dropzone" name="avatar" required>
            <div class="circle circle-lg bg-primary">
                <i class="fe fe-upload fe-24 text-white"></i>
            </div>
            <h5 class="text-muted mt-4">Drop files here or click to upload</h5>
        </div>
    </div>

    <!-- Preview -->
    <!-- <div class="dropzone-previews mt-3" id="file-previews"></div> -->
    <!-- file preview template -->

    <div class="d-none" id="uploadPreviewTemplate">
        <div class="card mt-1 mb-0 shadow-none border">
            <div class="p-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                    </div>
                    <div class="col pl-0">
                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                        <p class="mb-0" data-dz-size></p>
                    </div>
                    <div class="col-auto">
                        <!-- Button -->
                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                            <i class="dripicons-cross"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .card-body -->
