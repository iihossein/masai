<?php

namespace App\Livewire\Categories;

use Livewire\Component;

class CategorySelectionForm extends Component
{
    public $categories = [];

    public function boot()
    {
        $this->categories = ['TX', 'HW'];
    }

    public function updatedCategories()
    {
        dump($this->categories);
    }

    public function render()
    {
        return view('livewire.categories.category-selection-form')->with([
            'categories' => $this->categories,
        ]);
    }
}
