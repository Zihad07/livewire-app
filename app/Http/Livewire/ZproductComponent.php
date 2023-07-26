<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ZproductComponent extends Component
{
    use WithPagination;

    // for bootstrap pagination.
    protected $paginationTheme = 'bootstrap';

    // public $products;

    public $searchQuery;
    public $searchCategory;
    public $category;

    public function mount()
    {
        // $this->products = Product::all();
        // dd($this->products);
        $this->searchQuery = '';
        $this->searchCategory = '';
        $this->category = ['a', 'b', 'c'];
    }
    public function render()
    {
        // sleep(2);
        $products = Product::when($this->searchQuery != '', function ($query) {
            $query->where('name', 'like', '%' . $this->searchQuery . '%');
        })->when($this->searchCategory != '', function ($query) {
            $query->where('category', $this->searchCategory);
        })
            ->paginate(10);
        return view('livewire.zproduct-component', [
            'products' => $products
        ]);
    }

    public function deleteProduct($productId)
    {
        Product::find($productId)->delete();
    }
}
