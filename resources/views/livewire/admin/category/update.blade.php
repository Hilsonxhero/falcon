<div>
    <div class="row">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">ویرایش دسته بندی </h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="index.html">داشبورد</a></li>
                    <li><a href="index.html" class="">دسته بندی ها</a></li>
                    <li><a href="index.html" class="text-dark">ویرایش بندی </a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-md-4">
            <div class="card">
                <div class="body">
                    <form wire:submit.prevent="update" enctype="multipart/form-data" role="form">
                        <div class="form-group">
                            <input type="text" name="title"
                                class="form-control @error('category.title') error-alert-ui  @enderror"
                                placeholder="نام دسته بندی" required data-parsley-minlength="8"
                                wire:model.lazy="category.title">

                            @error('category.title')
                                <p class="error-alert-ui">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="text" name="link"
                                class="form-control @error('category.link') error-alert-ui  @enderror"
                                placeholder="لینک دسته" required data-parsley-minlength="8"
                                wire:model.lazy="category.link">
                        </div>
                        @error('category.link')
                            <p class="error-alert-ui">{{ $message }}</p>
                        @enderror



                        <div class="form-group">
                            <ul class="list-group mb-3 tp-setting">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <label class="form-label mb-0">وضعیت دسته</label>
                                    <div class="">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                name="status" wire:model.lazy="category.status">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="form-group file-upload-ui">
                            <label for="file-ip-1">اپلود تصویر</label>
                            <input type="file" name="file" id="file-ip-1" class="form-control" value=""
                                accept="image/*" wire:model.lazy="icon">
                            <div class="preview">
                                @if ($icon)
                                    <img id="file-ip-1-preview" src="{{ $icon->temporaryUrl() }}">
                                @endif

                            </div>
                        </div>


                        {{-- <div class="form-group">
                            <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                            <select class="js-select-ui form-select" name="state">
                                <option value=""> ندارد</option>
                                <option value="">برنامه نویسی</option>
                                <option value="">اندروید</option>
                            </select>
                        </div> --}}


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary-ui">ویرایش</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
