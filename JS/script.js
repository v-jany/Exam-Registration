// Place your JavaScript code here

document.addEventListener('DOMContentLoaded', function() {
    // Validate login form
    const loginForm = document.querySelector('#loginForm');

    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
            const email = loginForm.elements['email'].value.trim();
            const password = loginForm.elements['password'].value.trim();

            if (email === '' || password === '') {
                alert('Please enter both email and password.');
                event.preventDefault(); // Prevent form submission
            }
        });
    }

    // Validate registration form
    const registrationForm = document.querySelector('#registrationForm');

    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            const candidateName = registrationForm.elements['candidateName'].value.trim();
            const regNo = registrationForm.elements['regNo'].value.trim();
            const dob = registrationForm.elements['dob'].value.trim();

            if (candidateName === '' || regNo === '' || dob === '') {
                alert('Please fill out all required fields.');
                event.preventDefault(); // Prevent form submission
            }
        });
    }

    // Validate view page form (if any)
    const viewForm = document.querySelector('#viewForm');

    if (viewForm) {
        viewForm.addEventListener('submit', function(event) {
            // Add validation logic specific to the view page form (if needed)
        });
    }

    // Additional interactive features (e.g., confirm before delete)
    const deleteButtons = document.querySelectorAll('.btn-delete');

    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            const confirmDelete = confirm('Are you sure you want to delete this record?');

            if (!confirmDelete) {
                event.preventDefault(); // Prevent default action (e.g., delete)
            }
        });
    });
});
          
