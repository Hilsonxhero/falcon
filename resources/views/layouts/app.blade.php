<div>
    <!doctype html>
<html lang="fa" dir="rtl">
<head>
    <livewire:admin.layouts.head />

</head>


<body>

<!--begin::sidebar-->
<div>
    <livewire:admin.layouts.sidebar />
</div>
<!--end::sidebar-->

<!--begin::Content-->
<div class="content">

    <!--begin::Header-->
    <livewire:admin.layouts.header />
    <!--end::Header-->

    <!--begin::Theme Setting-->
    <div>
        <livewire:admin.layouts.setting />
    </div>
    <!--end::Theme Setting-->

    <!--begin::Main Content-->
    <div class="main-content">
          {{$slot}}
    </div>
    <!--end::Main Content-->

</div>
<!--end::Content-->

<!--begin::Scripts-->
<livewire:admin.layouts.script />
<!--end::Scripts-->

</body>

</html>

</div>
