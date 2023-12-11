<section>
    <head>
       
        <style>
            #file-drag {
 width: 200px;
 height: 200px;
}

#file-input {
 display: none;
}

#file-preview {
 width: 200px;
 height: 200px;
 background-color: #ffffff;
 border: 2px dashed #aaaaaa;
 display: inline-block;
 margin-top: 10px;
}

#start {
 margin-top: 10px;
}

#file-image {
 max-width: 200px;
 max-height: 200px;
}

.hidden {
 display: none;
}
        </style>
    </head>
    <section class="section-2">
    <header>
        <h3 class="heading">Profiel foto veranderen</h3>
    </header>

    <form action="{{ route('profile.imageUploadPost') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
            geef deze styling aan een input file in html en css


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

</section>