<?php

namespace App\Controllers;

use App\Models\Food;

class Admin extends BaseController
{
    protected $foodModel;

    public function __construct()
    {
        $this->foodModel = new Food();
    }

    private function checkAuth()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth');
        }
        return true;
    }

    public function index()
    {
        if ($this->checkAuth() !== true) return $this->checkAuth();
        
        $foods = $this->foodModel->findAll();
        return view('admin/index', ['foods' => $foods]);
    }

    public function create()
    {
        if ($this->checkAuth() !== true) return $this->checkAuth();
        return view('admin/create');
    }

    public function store()
    {
        if ($this->checkAuth() !== true) return $this->checkAuth();

        $image = $this->request->getFile('image');
        $imageName = 'default.jpg';
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads', $imageName);
        }

        $this->foodModel->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName
        ]);

        return redirect()->to('/admin')->with('message', 'Data makanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        if ($this->checkAuth() !== true) return $this->checkAuth();
        
        $food = $this->foodModel->find($id);
        if (!$food) throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        
        return view('admin/edit', ['food' => $food]);
    }

    public function update($id)
    {
        if ($this->checkAuth() !== true) return $this->checkAuth();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads', $imageName);
            $data['image'] = $imageName;
        }

        $this->foodModel->update($id, $data);

        return redirect()->to('/admin')->with('message', 'Data makanan berhasil diperbarui.');
    }

    public function delete($id)
    {
        if ($this->checkAuth() !== true) return $this->checkAuth();

        $this->foodModel->delete($id);
        return redirect()->to('/admin')->with('message', 'Data makanan berhasil dihapus.');
    }
}
