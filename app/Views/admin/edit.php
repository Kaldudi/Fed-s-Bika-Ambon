<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container mx-auto px-4 py-8">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <h1 class="text-3xl font-bold text-brand-dark mb-6">Edit Menu Bika Ambon</h1>

        <form action="/admin/update/<?= $food['id'] ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
            <?= csrf_field() ?>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama Varian</label>
                <input type="text" id="name" name="name" value="<?= esc($food['name']) ?>" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Deskripsi</label>
                <textarea id="description" name="description" rows="4" required 
                          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-teal"><?= esc($food['description']) ?></textarea>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Harga (Rp)</label>
                <input type="number" id="price" name="price" value="<?= esc($food['price']) ?>" required min="0" step="1000"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-teal">
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Upload Gambar Baru (Opsional)</label>
                <input type="file" id="image" name="image" accept="image/*"
                       class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-teal bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-brand-orange file:text-brand-dark hover:file:bg-yellow-400">
                <p class="text-xs text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengubah gambar. Gambar saat ini: <?= esc($food['image']) ?></p>
            </div>

            <div class="flex justify-end gap-4 pt-4 border-t border-gray-100">
                <a href="/admin" class="px-6 py-2 text-gray-600 hover:text-gray-900 font-medium">Batal</a>
                <button type="submit" class="bg-brand-orange text-brand-dark px-6 py-2 rounded-lg font-bold hover:bg-yellow-400 transition-colors">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
