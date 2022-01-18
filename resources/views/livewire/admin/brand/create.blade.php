<div>
    @section('style')


        <style>
            .ck.ck-editor__main>.ck-editor__editable {
                height: 250px;
                border-radius: 0.475rem;
            }

        </style>

    @endsection
    <div class="row">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">ایجاد برند</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="index.html" title="پیشخوان">پیشخوان</a></li>
                    <li><a href="index.html" title="پیشخوان">برند ها</a></li>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="عنوان برند"
                                        wire:model.lazy="brand.title">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" لینک برند"
                                        wire:model.lazy="brand.link">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group" wire:ignore>
                                    <select class="js-select-ui form-select" wire:model="brand.category_id"
                                        data-bind="brand.category_id" id="category_id">
                                        <option value="">انتخاب دسته بندی </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" wire:key="{{ $category->id }}">
                                                {{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" wire:model.lazy="brand.description"></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
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


                        <div class="col-md-3">
                            <div class="form-group">
                                <ul class="list-group mb-3 tp-setting">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <label class="form-label mb-0">وضعیت </label>
                                        <div class="">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    wire:model.lazy="brand.status" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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
                        @this.set('brand.body', editor.getData());
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
                //     @this.set('brand.category', data);
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
