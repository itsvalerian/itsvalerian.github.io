<?php

namespace App\Http\Livewire;

use App\Merk;
use App\Product;
use App\News;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'merks' => Merk::all(),
            'news' => News::all()
        ]);
    }
}
