<div>
    <div class="row" wire:init="load()">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">برند ها</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="index.html">داشبورد</a></li>
                    <li><a href="index.html" class="text-dark">برند ها</a></li>
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
                            <a href="{{ route('admin.brands.store') }}" class="btn btn-light-primary">ایجاد
                                برند
                            </a>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-custom spacing5">
                            <thead>
                                <tr class="title-row">
                                    <th>#</th>
                                    <th>عنوان</th>
                                    {{-- <th>تصویر</th> --}}
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($readyToLoad)
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>{{ $brand->id }}</td>
                                            <td>{{ $brand->title }}</td>
                                            {{-- <td><img width="100" src="{{ asset($brand->banner->thumb()) }}"></td> --}}


                                            <td>
                                                @switch($brand->status)
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


                                                <a href="{{ route('admin.brands.update', $brand->id) }}" type="button"
                                                    class="btn btn-sm btn-default ac-btn-ui"><i
                                                        class="ri-edit-2-line"></i></a>

                                                <button wire:click="delete({{ $brand->id }})" type="button"
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
                        {{ $brands->links() }}
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
