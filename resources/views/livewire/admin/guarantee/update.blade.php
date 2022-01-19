<div>
    @section('style')

    @endsection
    <div class="row">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">ویرایش گارانتی</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="{{ route('admin.dashboard') }}" title="">پیشخوان</a></li>
                    <li><a href="{{ route('admin.guarantees.index') }}" title="">گاارنتی ها</a></li>
                    <li><a href="" title="">ویرایش گارانتی</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="body">
                    <form wire:submit.prevent="update" id="form" method="post">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="عنوان "
                                        wire:model.lazy="guarantee.title">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" wire:model.lazy="guarantee.description"></textarea>
                        </div>



                        <div class="col-md-3">
                            <div class="form-group">
                                <ul class="list-group mb-3 tp-setting">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <label class="form-label mb-0">وضعیت </label>
                                        <div class="">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    wire:model.lazy="guarantee.status" id="flexSwitchCheckDefault">
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

    @endsection
</div>
