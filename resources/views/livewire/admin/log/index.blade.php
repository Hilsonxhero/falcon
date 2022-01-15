<div>
    <div class="row" wire:init="load()">
        <div class="col-12">
            <div class="toolbar-ui">
                <h1 class="text-dark fs-5 fw-bold">گزارشات سیستم</h1>
                <ul class="breadcrumb-ui ps-0">
                    <li><a href="index.html">داشبورد</a></li>
                    <li><a href="index.html" class="text-dark">گزارشات</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

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

                                    <th>مسیر</th>
                                    <th>عملیات</th>

                                    <th>کاربر</th>
                                    <th>تاریخ</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($readyToLoad)
                                    @foreach ($logs as $log)
                                        <tr>
                                            <td>{{ $log->id }}</td>
                                            <td>{{ $log->title }}</td>

                                            <td>{{ $log->url }}</td>
                                            <td>
                                                @switch($log->action)
                                                    @case(1)
                                                        <button type="button" class="badge badge-success">ایجاد</button>
                                                    @break

                                                    @case(2)
                                                        <button type="button" class="badge badge-info">ویرایش</button>
                                                    @break

                                                    @case(3)
                                                        <button type="button" class="badge badge-error">حذف</button>
                                                    @break

                                                    @case(4)
                                                        <button type="button" class="badge badge-light">تغییر
                                                            وضعیت</button>
                                                    @break

                                                    @default

                                                @endswitch
                                            </td>
                                            <td>{{ $log->user->name }}</td>

                                            <td>{{ verta($log->created_at)->formatDifference() }}</td>

                                        </tr>

                                    @endforeach

                                @endif


                            </tbody>
                        </table>
                    </div>

                    @if ($readyToLoad)
                        {{ $logs->links() }}
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
