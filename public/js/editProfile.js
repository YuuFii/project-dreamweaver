document.getElementById('editProfileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    validateProfileForm();
});

function validateProfileForm() {
    var form = document.getElementById('editProfileForm');
    var formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(response => response.json())
    .then(data => {
        clearErrors();
        if (data.errors) {
            displayErrors(data.errors);
        } else {
            // close modal
            $('#editProfileModal').modal('hide');

        }
    })
    .catch(error => console.error('Error:', error));
}

function clearErrors() {
    document.getElementById('editNameError').textContent = '';
    document.getElementById('editUsernameError').textContent = '';
    document.getElementById('editGenderError').textContent = '';
    document.getElementById('editEmailError').textContent = '';
    document.getElementById('editPhoneError').textContent = '';
}

function displayErrors(errors) {
    if (errors.name) {
        document.getElementById('editNameError').textContent = errors.name[0];
    }
    if (errors.username) {
        document.getElementById('editUsernameError').textContent = errors.username[0];
    }
    if (errors.gender) {
        document.getElementById('editGenderError').textContent = errors.gender[0];
    }
    if (errors.email) {
        document.getElementById('editEmailError').textContent = errors.email[0];
    }
    if (errors.phone) {
        document.getElementById('editPhoneError').textContent = errors.phone[0];
    }
}