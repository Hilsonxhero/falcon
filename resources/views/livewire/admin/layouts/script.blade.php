<div>

    <script src="{{ asset('/panel/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/panel/assets/js/app.bundle.min.js') }}"></script>
    <!-- App Js -->
    <script src="{{ asset('/panel/assets/vendor/select-ui/select-ui.min.js') }}"></script>
    <!-- select Plugin Js -->
    <script src="{{ asset('/panel/assets/bundles/c3.bundle.js') }}"></script>
    <!-- charts Plugin Js -->
    <script src="{{ asset('/panel/assets/vendor/sweetalert/sweetalert2.all.min.js') }}"></script>
    <!-- sweetalert Plugin Js -->
    <script>
    </script>
    <script src="{{ asset('/panel/assets/js/custom.js') }}"></script>
    <!-- Custom Js -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <livewire:scripts />
    <script src="{{ asset('panel/assets/js/turbolinks.js') }}" data-turbolinks-eval="false" data-turbo-eval="false">
    </script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        document.addEventListener('livewire:load', () => {
            Livewire.on('toast', (type, message) => {
                Toast.fire({
                    icon: type,
                    title: message,
                    showClass: {
                        popup: 'animate__animated animate__fadeInUp'
                    },

                    hideClass: {
                        popup: 'animate__animated animate__fadeOut'
                    }
                })
            })
        })
    </script>

</div>
