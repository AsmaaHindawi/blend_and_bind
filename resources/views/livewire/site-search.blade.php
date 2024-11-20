<div>
    <input type="text" wire:model="searchTerm" placeholder="Search site content..." class="form-control my-4 search-bar-input">
    
    @if($results->isNotEmpty())
        <ul class="list-group mt-3">
            @foreach($results as $result)
                <li class="list-group-item">{{ $result->title }}</li>
            @endforeach
        </ul>
    @else
        <p class="mt-3 text-white">No results found.</p>
    @endif
</div>
