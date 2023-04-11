<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;

class DynamicSubcategories extends Component
{
    public $categories;
    public $selectedCategory = null;
    public $selectedSubcategory = null;
    public $subcategories = [];

    protected $rules = [
        'selectedCategory' => 'nullable|exists:categories,id',
        'selectedSubcategory' => 'nullable|exists:subcategories,id',
    ];


    // public function mount()
    // {
    //     // Fetch all categories and assign to $categories property
    //     $this->categories = Category::all();
    // }

    public function mount($selectedCategory = null, $selectedSubcategory = null)
    {
        $this->categories = Category::all();

        if ($selectedCategory) {
            $this->selectedCategory = $selectedCategory;
            $this->subcategories = Subcategory::where('category_id', $selectedCategory)->get();
        }

        if ($selectedSubcategory) {
            $this->selectedSubcategory = $selectedSubcategory;
        }
    }


    public function updatedSelectedCategory($category_id)
    {
        // Fetch subcategories based on selected category and assign to $subcategories property
        $this->subcategories = Subcategory::where('category_id', $category_id)->get();
    }

    public function render()
    {
        // Return the Livewire view for rendering
        return view('livewire.dynamic-subcategories');
    }
}
