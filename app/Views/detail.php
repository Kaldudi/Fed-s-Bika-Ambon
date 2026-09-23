<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="container mx-auto px-4 py-12">
    <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row border border-gray-100">
        <!-- Image Section -->
        <div class="w-full md:w-1/2 bg-gray-100 h-96 md:h-auto relative">
            <img src="/uploads/<?= esc($food['image']) ?>" alt="<?= esc($food['name']) ?>" class="absolute inset-0 w-full h-full object-cover" onerror="this.src='https://placehold.co/800x800/0F172A/FDBA74?text=Bika+Ambon'">
        </div>
        
        <!-- Content Section -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <div class="mb-2 text-brand-teal font-semibold tracking-wider uppercase text-sm">Varian Spesial</div>
            <h1 class="text-4xl font-extrabold text-brand-dark mb-4"><?= esc($food['name']) ?></h1>
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                <?= esc($food['description']) ?>
            </p>
            
            <div class="mb-8 border-t border-b border-gray-100 py-6">
                <span class="text-3xl font-extrabold text-brand-orange">Rp <?= number_format($food['price'], 0, ',', '.') ?></span>
                <span class="text-gray-500 ml-2">/ porsi</span>
            </div>
            
            <div class="flex gap-4">
                <a href="/" class="px-8 py-3 rounded-full border-2 border-brand-teal text-brand-teal font-bold hover:bg-brand-teal hover:text-white transition-colors">
                    Kembali ke Menu
                </a>
                <button class="flex-grow bg-brand-teal text-white px-8 py-3 rounded-full font-bold shadow-lg hover:bg-teal-700 hover:shadow-xl transition-all transform hover:-translate-y-1">
                    Pesan Sekarang
                </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
