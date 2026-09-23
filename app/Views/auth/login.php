<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>
<div class="flex justify-center items-center min-h-[70vh] bg-gray-50">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-extrabold text-brand-dark mb-2">Sign In</h2>
            <p class="text-gray-500">Masuk untuk mengelola Fed's Bika Ambon</p>
        </div>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="bg-red-50 text-red-600 p-4 rounded-lg mb-6 border border-red-200">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="/auth/login" method="POST" class="space-y-6">
            <?= csrf_field() ?>
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                <input type="text" id="username" name="username" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-teal transition-shadow" 
                       placeholder="Masukkan username">
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                <input type="password" id="password" name="password" required 
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brand-teal transition-shadow" 
                       placeholder="Masukkan password">
            </div>

            <button type="submit" 
                    class="w-full bg-brand-teal text-white py-3 rounded-lg font-bold hover:bg-teal-700 transition-colors shadow-md">
                Login
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
