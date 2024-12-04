document.addEventListener('DOMContentLoaded', function () {
    const favoriteForms = document.querySelectorAll('form[action*="/favorite"]');

    favoriteForms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const url = this.action;
            const csrfToken = this.querySelector('input[name="_token"]').value;
            const button = this.querySelector('button');

            console.log('Submitting favorite request to:', url);

            fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({})
            })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('HTTP error! status: ' + response.status);
                })
                .then(data => {
                    console.log('Response received:', data);

                    if (data.status === 'removed') {
                        button.classList.remove('btn-danger');
                        button.classList.add('btn-outline-secondary');
                        button.innerHTML = '<i class="fas fa-heart"></i> Favorite';
                    } else if (data.status === 'added') {
                        button.classList.remove('btn-outline-secondary');
                        button.classList.add('btn-danger');
                        button.innerHTML = '<i class="fas fa-heart"></i> Unfavorite';
                    }
                })
                .catch(error => {
                    console.error('Error:', error.message, 'URL:', url);
                });
        });
    });
});
