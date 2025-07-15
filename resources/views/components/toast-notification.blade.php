@if(session('success') || session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                showSuccessToast("{{ session('success') }}");
            @endif
            
            @if(session('error'))
                showErrorToast("{{ session('error') }}");
            @endif
        });
    </script>
@endif 