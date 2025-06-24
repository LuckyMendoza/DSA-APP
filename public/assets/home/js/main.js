// Handle contact form submission
$('#contactForm').on('submit', function(e) {
    e.preventDefault();
    
    let form = $(this);
    let submitBtn = form.find('button[type="submit"]');
    let originalBtnText = submitBtn.text();
    
    // Disable submit button and show loading state
    submitBtn.prop('disabled', true).text('Sending...');
    
    $.ajax({
        url: form.attr('action'),
        method: 'POST',
        data: form.serialize(),
        success: function(response) {
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: response.message
            });
            
            // Reset form
            form[0].reset();
        },
        error: function(xhr) {
            // Show error message
            let message = xhr.responseJSON?.message || 'Something went wrong. Please try again.';
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: message
            });
        },
        complete: function() {
            // Re-enable submit button
            submitBtn.prop('disabled', false).text(originalBtnText);
        }
    });
});