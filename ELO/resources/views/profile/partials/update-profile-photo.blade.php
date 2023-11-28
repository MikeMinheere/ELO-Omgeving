<section>

<form action="{{ route('profile.imageUploadPost') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Profile Pic</label>
                            <div class="col-sm-9">
                              <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror id="selectImage">
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;"/>
                        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
