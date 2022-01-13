<div>
    <div class="row" wire:init="load()">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">دسته بندی ها</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="index.html">داشبورد</a></li>
                    <li><a href="index.html" class="text-dark">دسته بندی ها</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">

            <div class="card">
                <div class="body">

                    <div class="d-flex mb-3">
                        <div class="t-header-search ms-0">
                            <div class="t-header-searchbox">
                                <input type="text" class="w-250px" wire:model.debounce.1000="search"
                                    placeholder="جستجوی  ..">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>دسته پدر</th>
                                    <th>نام لاتین</th>
                                    <th>وضعیت</th>
                                    <th>تصویر</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($readyToLoad)
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td><a href="">{{ $category->id }}</a></td>
                                            <td><a href="">{{ $category->title }}</a></td>
                                            <td><a href="">{{ $category->parent->title ?? 'ندارد' }}</a></td>
                                            <td>{{ $category->slug }}</td>

                                            <td>
                                                @if ($category->status == 1)
                                                    <div>
                                                        <button type="button" class="badge badge-success"
                                                            wire:click="chnageStatus(0,{{ $category->id }})">فعال</button>
                                                    </div>
                                                @else
                                                    <button type="button" class="badge badge-error"
                                                        wire:click="chnageStatus(1,{{ $category->id }})">غیر
                                                        فعال</button>
                                                @endif
                                            </td>

                                            <td>{{ $category->icon }}</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-default ac-btn-ui">
                                                    <i class="ri-eye-fill"></i>
                                                </button>


                                                <a href="{{ route('admin.categories.update', $category->id) }}"
                                                    type="button" class="btn btn-sm btn-default ac-btn-ui"><i
                                                        class="ri-edit-2-line"></i></a>

                                                <button wire:click="delete({{ $category->id }})" type="button"
                                                    class="btn btn-sm btn-default ac-btn-ui"><i
                                                        class="ri-delete-bin-line"></i></button>
                                            </td>
                                        </tr>

                                    @endforeach

                                @endif


                            </tbody>
                        </table>
                    </div>

                    @if ($readyToLoad)
                        {{ $categories->links() }}
                    @else
                        <div class="d-flex justify-content-center">
                            <div class="lds-roller">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="body">
                    <form wire:submit.prevent="store" enctype="multipart/form-data" role="form">
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


                        <div class="form-group">
                            <p class="box__title margin-bottom-15">انتخاب دسته پدر</p>
                            <select class=" form-select" wire:model="category.parent_id">
                                <option value=""> ندارد</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach

                            </select>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary-ui">ایجاد</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
