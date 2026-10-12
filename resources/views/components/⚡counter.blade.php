<?php

use App\Models\Article;

use Livewire\Component;
use App\Models\User;

new class extends Component
{
    public string $search = '';

    public function render()
    {
        return view('livewire.search', [
            'article' => Article::where('designation', 'like', '%' . $this->search . '%')
                ->get()
        ]);
    }
};
?>

<div>
    <input
        type="text"
        wire:model.debounce.300ms="search"
        placeholder="Qelleb 3la user..."
        class="border p-2 rounded w-full"
    >

    <ul class="mt-3">
        @forelse($articles as $articles)
            <li class="p-2 border-b">
                {{ $user->name }}
            </li>
        @empty
            <li class="p-2 text-gray-500">
                Ma kayn ta résultat
            </li>
        @endforelse
    </ul>
</div>
