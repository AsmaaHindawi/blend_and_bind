document.addEventListener('DOMContentLoaded', function () {
    const searchBarInput = document.querySelector('.search-bar-input');
    const searchResultsContainer = document.querySelector('#searchResults');

    if (!searchBarInput || !searchResultsContainer) {
        console.error('Search bar or results container not found.');
        return;
    }

    let debounceTimeout;

    searchBarInput.addEventListener('input', function () {
        const query = searchBarInput.value.trim();

        clearTimeout(debounceTimeout);

        if (query.length > 0) {
            searchResultsContainer.style.visibility = 'visible';
            searchResultsContainer.style.opacity = '1';

            debounceTimeout = setTimeout(() => {
                if (query.length > 2) {
                    fetch(`${window.location.origin}/api/search?query=${encodeURIComponent(query)}`)
                        .then((response) => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then((data) => {
                            searchResultsContainer.innerHTML = '';
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
            }, 300);
        } else {
            y
            searchResultsContainer.style.visibility = 'hidden';
            searchResultsContainer.style.opacity = '0';
        }
    });
});
