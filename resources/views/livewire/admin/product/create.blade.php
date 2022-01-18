<div>
    @section('style')
        {{-- <style>
            :root {
                --ck-color-base-background: hsl(300, 1%, 22%);


                /* Overrides the border radius setting in the theme. */
                --ck-border-radius: 4px;

                /* Overrides the default font size in the theme. */
                --ck-font-size-base: 14px;

                /* Helper variables to avoid duplication in the colors. */
                --ck-custom-background: hsl(270, 1%, 29%);
                --ck-custom-foreground: hsl(255, 3%, 18%);
                --ck-custom-border: hsl(300, 1%, 22%);
                --ck-custom-white: hsl(0, 0%, 100%);


                /* -- Overrides generic colors. ------------------------------------------------------------- */

                --ck-color-base-foreground: var(--ck-custom-background);
                --ck-color-focus-border: hsl(208, 90%, 62%);
                --ck-color-text: hsl(0, 0%, 98%);
                --ck-color-shadow-drop: hsla(0, 0%, 0%, 0.2);
                --ck-color-shadow-inner: hsla(0, 0%, 0%, 0.1);

                /* -- Overrides the default .ck-button class colors. ---------------------------------------- */

                --ck-color-button-default-background: var(--ck-custom-background);
                --ck-color-button-default-hover-background: hsl(270, 1%, 22%);
                --ck-color-button-default-active-background: hsl(270, 2%, 20%);
                --ck-color-button-default-active-shadow: hsl(270, 2%, 23%);
                --ck-color-button-default-disabled-background: var(--ck-custom-background);

                --ck-color-button-on-background: var(--ck-custom-foreground);
                --ck-color-button-on-hover-background: hsl(255, 4%, 16%);
                --ck-color-button-on-active-background: hsl(255, 4%, 14%);
                --ck-color-button-on-active-shadow: hsl(240, 3%, 19%);
                --ck-color-button-on-disabled-background: var(--ck-custom-foreground);

                --ck-color-button-action-background: hsl(168, 76%, 42%);
                --ck-color-button-action-hover-background: hsl(168, 76%, 38%);
                --ck-color-button-action-active-background: hsl(168, 76%, 36%);
                --ck-color-button-action-active-shadow: hsl(168, 75%, 34%);
                --ck-color-button-action-disabled-background: hsl(168, 76%, 42%);
                --ck-color-button-action-text: var(--ck-custom-white);

                --ck-color-button-save: hsl(120, 100%, 46%);
                --ck-color-button-cancel: hsl(15, 100%, 56%);

                /* -- Overrides the default .ck-dropdown class colors. -------------------------------------- */

                --ck-color-dropdown-panel-background: var(--ck-custom-background);
                --ck-color-dropdown-panel-border: var(--ck-custom-foreground);

                /* -- Overrides the default .ck-splitbutton class colors. ----------------------------------- */

                --ck-color-split-button-hover-background: var(--ck-color-button-default-hover-background);
                --ck-color-split-button-hover-border: var(--ck-custom-foreground);

                /* -- Overrides the default .ck-input class colors. ----------------------------------------- */

                --ck-color-input-background: var(--ck-custom-background);
                --ck-color-input-border: hsl(257, 3%, 43%);
                --ck-color-input-text: hsl(0, 0%, 98%);
                --ck-color-input-disabled-background: hsl(255, 4%, 21%);
                --ck-color-input-disabled-border: hsl(250, 3%, 38%);
                --ck-color-input-disabled-text: hsl(0, 0%, 78%);

                /* -- Overrides the default .ck-labeled-field-view class colors. ---------------------------- */

                --ck-color-labeled-field-label-background: var(--ck-custom-background);

                /* -- Overrides the default .ck-list class colors. ------------------------------------------ */

                --ck-color-list-background: var(--ck-custom-background);
                --ck-color-list-button-hover-background: var(--ck-color-base-foreground);
                --ck-color-list-button-on-background: var(--ck-color-base-active);
                --ck-color-list-button-on-background-focus: var(--ck-color-base-active-focus);
                --ck-color-list-button-on-text: var(--ck-color-base-background);

                /* -- Overrides the default .ck-balloon-panel class colors. --------------------------------- */

                --ck-color-panel-background: var(--ck-custom-background);
                --ck-color-panel-border: var(--ck-custom-border);

                /* -- Overrides the default .ck-toolbar class colors. --------------------------------------- */

                --ck-color-toolbar-background: var(--ck-custom-background);
                --ck-color-toolbar-border: var(--ck-custom-border);

                /* -- Overrides the default .ck-tooltip class colors. --------------------------------------- */

                --ck-color-tooltip-background: hsl(252, 7%, 14%);
                --ck-color-tooltip-text: hsl(0, 0%, 93%);

                /* -- Overrides the default colors used by the ckeditor5-image package. --------------------- */

                --ck-color-image-caption-background: hsl(0, 0%, 97%);
                --ck-color-image-caption-text: hsl(0, 0%, 20%);

                /* -- Overrides the default colors used by the ckeditor5-widget package. -------------------- */

                --ck-color-widget-blurred-border: hsl(0, 0%, 87%);
                --ck-color-widget-hover-border: hsl(43, 100%, 68%);
                --ck-color-widget-editable-focus-background: var(--ck-custom-white);

                /* -- Overrides the default colors used by the ckeditor5-link package. ---------------------- */

                --ck-color-link-default: hsl(190, 100%, 75%);

            }

            .ck.ck-editor__main>.ck-editor__editable {
                background: var(--ck-color-base-background);
                color: var(--ck-custom-white);
                border-radius: 0;
            }

        </style> --}}

        <style>
            .ck.ck-editor__main>.ck-editor__editable {
                height: 250px;
                border-radius: 0.475rem;
            }

            /* .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
                                                                                                                                                                                                                                                                                                                                                                border-radius: 0 0 0.475rem 0.475rem;
                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                            .ck.ck-editor .ck-editor__top .ck-sticky-panel .ck-toolbar {
                                                                                                                                                                                                                                                                                                                                                                border-radius: 0.475rem 0.475rem 0 0;
                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                            .ck.ck-editor__main>.ck-editor__editable {
                                                                                                                                                                                                                                                                                                                                                                background-color: #f5f8fa;
                                                                                                                                                                                                                                                                                                                                                                border: unset !important;
                                                                                                                                                                                                                                                                                                                                                                border-radius: 0.475rem;
                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                            .ck.ck-editor .ck-editor__top .ck-sticky-panel .ck-toolbar {
                                                                                                                                                                                                                                                                                                                                                                border: unset !important;
                                                                                                                                                                                                                                                                                                                                                                background-color: #f5f8fa;
                                                                                                                                                                                                                                                                                                                                                            } */

        </style>

    @endsection
    <div class="row">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">ایجاد دوره</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="index.html" title="پیشخوان">پیشخوان</a></li>
                    <li><a href="index.html" title="پیشخوان">دوره ها</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="body">
                    <form wire:submit.prevent="store" id="form" method="post">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="عنوان دوره"
                                        wire:model.lazy="product.title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="نام انگلیسی دوره"
                                        wire:model.lazy="product.title_en">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="قیمت "
                                        wire:model.lazy="product.price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="درصد تخفیف"
                                        wire:model.lazy="product.discount">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="تعداد در انبار"
                                        wire:model.lazy="product.count">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="وزن"
                                        wire:model.lazy="product.weight">
                                </div>
                            </div>
                        </div>






                        <div class="row">
                            <div class="col-md-3" wire:key="UNIQUE_KEY">
                                <div class="form-group" wire:ignore>
                                    <select class="js-select-ui form-select" wire:model="product.category"
                                        data-bind="product.category" id="category">
                                        <option value="">انتخاب دسته بندی </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                                {{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group" wire:ignore>
                                    <select class="js-select-ui form-select" wire:model.lazy="product.guarantee"
                                        data-bind="product.guarantee">
                                        <option value="">گارانتی محصول</option>
                                        @foreach ($guarantees as $guarantee)
                                            <option value="{{ $guarantee->id }}">{{ $guarantee->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group" wire:ignore>
                                    <select class="js-select-ui form-select" wire:model.lazy="product.brand"
                                        data-bind="product.brand">
                                        <option value="">برند محصول</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group" wire:ignore>
                                    <select class="js-select-ui form-select" wire:model.lazy="product.shipment"
                                        data-bind="product.shipment">
                                        <option value="">روش ارسال</option>
                                        @foreach ($shipments as $shipment)
                                            <option value="{{ $shipment->id }}">{{ $shipment->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <ul class="list-group mb-3 tp-setting">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <label class="form-label mb-0">اصل بودن محصول</label>
                                            <div class="">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        wire:model.lazy="product.original" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <ul class="list-group mb-3 tp-setting">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <label class="form-label mb-0">وضعیت محصول</label>
                                            <div class="">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        wire:model.lazy="product.status" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <ul class="list-group mb-3 tp-setting">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <label class="form-label mb-0">وضعیت شگفت انگیز</label>
                                            <div class="">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        wire:model.lazy="product.special" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckDefault"></label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" wire:model.lazy="product.order_count"
                                        placeholder="محدودیت خرید در هر سفارش ">
                                </div>
                            </div>




                            <div class="col-12">
                                <ul class="tags ps-0">
                                    <li class="tagAdd taglist">
                                        <input type="text" class="" id="search-field"
                                            wire:model.lazy="product.tags" value="">
                                    </li>
                                </ul>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group file-upload-ui">
                                    <label for="file-ip-1">اپلود تصویر</label>
                                    <input type="file" id="file-ip-1" wire:model.lazy="banner" class="form-control"
                                        value="" accept="image/*">
                                    <div class="preview d-none">
                                        <img id="file-ip-1-preview">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <textarea class="form-control" wire:model.lazy="product.description"></textarea>
                        </div>


                        <div class="form-group" wire:ignore>
                            <div class="toolbar-container bg-white"></div>
                            <textarea class="form-control editor" style="height: 200px" wire:model="body" name="body"
                                id="body"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary-ui">ایجاد</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('script')

        <script src="{{ asset('panel/assets/js/ckeditor.js') }}"></script>
        <!-- ckeditor Plugin Js -->
        <script>
            ClassicEditor
                .create(document.querySelector('#body'), {

                    licenseKey: '',
                    language: 'fa',


                })
                .then(editor => {
                    window.editor = editor;


                    editor.model.document.on('change:data', () => {
                        @this.set('product.body', editor.getData());
                    })



                })
                .catch(error => {
                    console.error('Oops, something went wrong!');
                    console.error(
                        'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                    );
                    console.warn('Build id: kyym5to7fv5h-1gl6pd4a95xm');
                    console.error(error);
                });


            $(document).ready(function() {

                // $('#category').on('change', function(e) {
                //     var data = $('#category').select2("val");
                //     @this.set('product.category', data);
                // });


                $('.js-select-ui').on('change', function(e) {
                    let bind = $(this).data("bind");
                    console.log(bind);
                    var data = $(this).select2("val");
                    console.log(`data : ${data}  bind : ${bind}`);
                    @this.set(bind, data);
                });



            });
        </script>


    @endsection
</div>
