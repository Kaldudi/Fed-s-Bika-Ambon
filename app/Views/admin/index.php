<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-brand-dark">Dashboard Admin</h1>
        <a href="/admin/create" class="bg-brand-teal text-white px-4 py-2 rounded-lg font-semibold hover:bg-teal-700 transition-colors">
            + Tambah Menu
        </a>
    </div>

    <?php if(session()->getFlashdata('message')): ?>
        <div class="bg-green-50 text-green-700 p-4 rounded-lg mb-6 border border-green-200">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                    <th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach($foods as $food): ?>
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="/uploads/<?= esc($food['image']) ?>" alt="<?= esc($food['name']) ?>" class="w-16 h-16 object-cover rounded" onerror="this.src='https://placehold.co/100x100/0F172A/FDBA74?text=Bika+Ambon'">
                    </td>
                    <td class="px-6 py-4">
                        <div class="text-sm font-medium text-gray-900"><?= esc($food['name']) ?></div>
                        <div class="text-sm text-gray-500 truncate w-64"><?= esc($food['description']) ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        Rp <?= number_format($food['price'], 0, ',', '.') ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="/admin/edit/<?= $food['id'] ?>" class="text-brand-teal hover:text-teal-900 mr-4">Edit</a>
                        <a href="/admin/delete/<?= $food['id'] ?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
