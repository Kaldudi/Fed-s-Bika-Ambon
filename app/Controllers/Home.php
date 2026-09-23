<?php

namespace App\Controllers;

use App\Models\Food;

class Home extends BaseController
{
    public function index()
    {
        $foodModel = new Food();
        
        $search = $this->request->getGet('search');
        $sort = $this->request->getGet('sort');
        
        if ($search) {
            $foodModel->like('name', $search);
        }
        
        if ($sort == 'price_asc') {
            $foodModel->orderBy('price', 'ASC');
        } elseif ($sort == 'price_desc') {
            $foodModel->orderBy('price', 'DESC');
        } else {
            $foodModel->orderBy('name', 'ASC');
        }
        
        $foods = $foodModel->findAll();

        return view('home', [
            'foods' => $foods,
            'search' => $search,
            'sort' => $sort
        ]);
    }

    public function detail($id)
    {
        $foodModel = new Food();
        $food = $foodModel->find($id);
        
        if (!$food) throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        
        return view('detail', ['food' => $food]);
    }
}
