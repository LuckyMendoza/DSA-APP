// Toast notification configuration
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 4000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

// Function to show success toast
function showSuccessToast(message) {
    Toast.fire({
        icon: "success",
        title: message
    });
}

// Function to show error toast
function showErrorToast(message) {
    Toast.fire({
        icon: "error",
        title: message
    });
}

// Function to show warning toast
function showWarningToast(message) {
    Toast.fire({
        icon: "warning",
        title: message
    });
} 