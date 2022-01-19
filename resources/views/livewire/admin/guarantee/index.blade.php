<div>
    <div class="row" wire:init="load()">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">گارانتی ها</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="{{ route('admin.dashboard') }}"">داشبورد</a></li>
                    <li><a href=" {{ route('admin.guarantees.index') }}" class="text-dark">گارانتی ها</a></li>
                    <li><a href="" class="text-dark">ایجاد گارانتی</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="body">

                    <div class="header d-flex flex-wrap align-items-center justify-content-between">
                        <div class="t-header-search ms-0">
                            <div class="t-header-searchbox">
                                <input type="text" class="w-250px" wire:model.debounce.1000="search"
                                    placeholder="جستجوی  ..">
                            </div>
                        </div>

                        <div class="mt-3 mt-sm-0">
                            <a href="{{ route('admin.guarantees.store') }}" class="btn btn-light-primary">ایجاد
                                گارانتی
                            </a>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th>عنوان</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($readyToLoad)
                                    @foreach ($guarantees as $guarantee)
                                        <tr>
                                            <td>{{ $guarantee->id }}</td>
                                            <td>{{ $guarantee->title }}</td>
                                            <td>
                                                @switch($guarantee->status)
                                                    @case('1')
                                                        <button type="button" class="badge badge-success"> فعال</button>
                                                    @break

                                                    @case('0')
                                                        <button type="button" class="badge badge-error">غیرفعال</button>
                                                    @break

                                                    @default

                                                @endswitch
                                            </td>


                                            <td>
                                                <button type="button" class="btn btn-sm btn-default ac-btn-ui">
                                                    <i class="ri-eye-fill"></i>
                                                </button>


                                                <a href="{{ route('admin.guarantees.update', $guarantee->id) }}"
                                                    type="button" class="btn btn-sm btn-default ac-btn-ui"><i
                                                        class="ri-edit-2-line"></i></a>

                                                <button wire:click="delete({{ $guarantee->id }})" type="button"
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
                        {{ $guarantees->links() }}
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

    </div>

</div>
