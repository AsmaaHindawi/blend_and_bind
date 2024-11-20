$(document).ready(function() {
    $('#searchTerm').on('input', function() {
        let query = $(this).val();

        if (query.length > 2) { // Only start searching after at least 3 characters
            $.ajax({
                url: '/api/search', // AJAX request to the search route
                method: 'GET',
                data: { query: query },
                success: function(response) {
                    $('#searchResults').empty(); // Clear previous results

                    if (response.length > 0) {
                        response.forEach(function(item) {
                            $('#searchResults').append(
                                `<div class="search-item">
                                    <a href="${item.url}" class="d-block">
                                        <h5>${item.title}</h5>
                                        <p>${item.excerpt}</p>
                                    </a>
                                </div>`
                            );
                        });
                    } else {
                        $('#searchResults').append('<div class="text-muted">No results found.</div>');
                    }
                },
                error: function() {
                    $('#searchResults').html('<div class="text-danger">An error occurred while searching.</div>');
                }
            });
        } else {
            $('#searchResults').empty(); // Clear results when input is less than 3 characters
        }
    });
});
