<section class="section-2">
    <header>
        <h3 class="heading">Profiel foto veranderen</h3>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </header>

    <form action="{{ route('profile.imageUploadPost') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-9">
                    <label for="file-upload" class="custom-file-upload">
                    <i style="padding-bottom: 10px"  class="fa fa-user"></i> Drop image
                    </label>
                    <input type="file" id="file-upload" name="image" @error('image') is-invalid @enderror id="selectImage">
                </div>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;"/>
            </div>

            <div class="flex items-center gap-4">
                <x-primary-button class="button">{{ __('opslaan') }}</x-primary-button>
            </div>
        </form>
</section>
