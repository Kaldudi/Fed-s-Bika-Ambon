<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Hero Slider Section -->
<section class="relative bg-brand-dark">
    <!-- Swiper -->
    <div class="swiper mySwiper h-[60vh] md:h-[70vh] w-full">
        <div class="swiper-wrapper">
            <?php foreach(array_slice($foods, 0, 5) as $food): // Tampilkan 5 menu pertama di slider ?>
            <div class="swiper-slide relative">
                <img src="/uploads/<?= esc($food['image']) ?>" alt="<?= esc($food['name']) ?>" class="w-full h-full object-cover opacity-70" onerror="this.src='https://placehold.co/1200x600/0F172A/FDBA74?text=Bika+Ambon'">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/50 to-transparent flex flex-col justify-end pb-20 px-8 md:px-20">
                    <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-4 drop-shadow-lg"><?= esc($food['name']) ?></h2>
                    <p class="text-lg md:text-2xl text-gray-200 max-w-3xl mb-8 drop-shadow-md"><?= esc($food['description']) ?></p>
                    <div>
                        <a href="/food/<?= $food['id'] ?>" class="inline-block bg-brand-orange text-brand-dark px-8 py-3 rounded-full font-bold hover:bg-yellow-400 transition-colors shadow-lg text-lg">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            }
        });
    });
</script>

<!-- Menu Section -->
<section id="menu" class="py-24 px-4 relative overflow-hidden bg-brand-light">
    <!-- Decorative background elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none z-0">
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-brand-teal/5 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-0 -right-32 w-[30rem] h-[30rem] bg-brand-orange/10 rounded-full blur-[120px]"></div>
    </div>
    
    <div class="container mx-auto relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 border-b border-gray-200/60 pb-8">
            <div>
                <span class="text-brand-orange font-extrabold tracking-widest uppercase text-sm mb-3 block">Our Masterpieces</span>
                <h2 class="text-4xl md:text-5xl font-black text-brand-dark tracking-tight">Menu Pilihan Kami</h2>
            </div>
            
            <!-- Search and Sorting (Phase 3) -->
            <form action="/" method="GET" class="flex gap-4 w-full md:w-auto">
                <input type="text" name="search" value="<?= esc($search ?? '') ?>" placeholder="Cari variasi rasa..." class="w-full md:w-72 px-5 py-3 rounded-2xl border border-gray-200 bg-white/80 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-brand-teal shadow-sm transition-all text-sm font-medium">
                <select name="sort" onchange="this.form.submit()" class="px-5 py-3 rounded-2xl border border-gray-200 bg-white/80 backdrop-blur-sm focus:outline-none focus:ring-2 focus:ring-brand-teal shadow-sm transition-all text-sm font-medium cursor-pointer">
                    <option value="">Urutkan</option>
                    <option value="price_asc" <?= ($sort ?? '') == 'price_asc' ? 'selected' : '' ?>>Termurah</option>
                    <option value="price_desc" <?= ($sort ?? '') == 'price_desc' ? 'selected' : '' ?>>Termahal</option>
                </select>
                <button type="submit" class="hidden">Cari</button>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
            <?php foreach($foods as $food): ?>
            <div class="bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 border border-gray-100 group translate-y-0 hover:-translate-y-2">
                <div class="relative h-64 bg-gray-100 overflow-hidden">
                    <img src="/uploads/<?= esc($food['image']) ?>" alt="<?= esc($food['name']) ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out fallback-image" onerror="this.src='https://placehold.co/400x300/0F172A/FDBA74?text=Bika+Ambon'">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-black text-brand-dark mb-3 group-hover:text-brand-teal transition-colors"><?= esc($food['name']) ?></h3>
                    <p class="text-gray-500 text-sm mb-8 line-clamp-2 leading-relaxed"><?= esc($food['description']) ?></p>
                    <div class="flex justify-between items-center pt-5 border-t border-gray-100/80">
                        <span class="text-xl font-extrabold text-brand-dark">Rp <?= number_format($food['price'], 0, ',', '.') ?></span>
                        <a href="/food/<?= $food['id'] ?>" class="bg-brand-orange text-brand-dark p-3.5 rounded-2xl hover:bg-yellow-400 hover:rotate-12 hover:scale-110 transition-all shadow-md group/btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
