document.addEventListener('DOMContentLoaded', function () {
    const searchBarInput = document.querySelector('.search-bar-input');
    const searchResultsContainer = document.querySelector('#searchResults');

    if (!searchBarInput || !searchResultsContainer) {
        console.error('Search bar or results container not found.');
        return;
    }

    let debounceTimeout; // Variable for debouncing

    searchBarInput.addEventListener('input', function () {
        const query = searchBarInput.value.trim();

        // Clear debounce timeout
        clearTimeout(debounceTimeout);

        if (query.length > 0) {
            // Show the results box
            searchResultsContainer.style.visibility = 'visible';
            searchResultsContainer.style.opacity = '1';

            // Debounce API call to wait 300ms after the last input
            debounceTimeout = setTimeout(() => {
                if (query.length > 2) { // Trigger search after 3+ characters
                    fetch(`${window.location.origin}/api/search?query=${encodeURIComponent(query)}`)
                        .then((response) => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then((data) => {
                            searchResultsContainer.innerHTML = ''; // Clear previous results

                            if (data.data.length > 0) {
                                data.data.forEach((item) => {
                                    const resultItem = document.createElement('div');
                                    resultItem.classList.add('search-item');
                                    resultItem.innerHTML = `
                                        <a href="${item.url}" class="d-block">
                                            <h5>${item.title}</h5>
                                            <p>${item.excerpt}</p>
                                        </a>
                                    `;
                                    searchResultsContainer.appendChild(resultItem);
                                });
                            } else {
                                searchResultsContainer.innerHTML = '<div class="text-muted">No results found.</div>';
                            }
                        })
                        .catch((error) => {
                            console.error('Error fetching search results:', error);
                            searchResultsContainer.innerHTML = '<div class="text-danger">An error occurred while searching.</div>';
                        });
                }
            }, 300); // 300ms debounce delay
        } else {
            // Hide the results box if the input is empty
            searchResultsContainer.style.visibility = 'hidden';
            searchResultsContainer.style.opacity = '0';
        }
    });
});
