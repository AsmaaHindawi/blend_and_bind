<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Content; // Assuming you have a 'Content' model for search results

class SiteSearch extends Component
{
    use WithPagination;

    public $searchTerm = '';
    protected $queryString = ['searchTerm'];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchResults = Content::where('title', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('body', 'like', '%' . $this->searchTerm . '%')
            ->paginate(10);

        return view('livewire.site-search', [
            'results' => $searchResults,
        ]);
    }
}
