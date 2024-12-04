<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Job Posting</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
      <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">PortalJob - Perusahaan</h1>
        <nav class="space-x-4">
          <a href="#" class="text-gray-600 hover:text-blue-500">Dashboard</a>
          <a href="#" class="text-gray-600 hover:text-blue-500">Lowongan</a>
          <a href="#" class="text-gray-600 hover:text-blue-500">Logout</a>
        </nav>
      </div>
    </header>

    <!-- Form Create Job Posting -->
    <section class="py-12">
      <div class="container mx-auto px-6 bg-white shadow-lg rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Buat Lowongan Pekerjaan</h2>
        <form action="{{ route('tambahlowongan.store') }}" method="POST" class="space-y-6">
          @csrf <!-- Token CSRF untuk mengamankan form -->

          <!-- Nama Pekerjaan -->
          <div>
            <label for="nama_pekerjaan" class="block text-gray-700 font-medium mb-2">Nama Pekerjaan</label>
            <input type="text" id="nama_pekerjaan" name="nama_pekerjaan" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Contoh: Frontend Developer" required />
          </div>

          <!-- Lokasi -->
          <div>
            <label for="lokasi" class="block text-gray-700 font-medium mb-2">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Contoh: Jakarta, Indonesia" required />
          </div>

          <!-- Gaji -->
          <div>
            <label for="gaji" class="block text-gray-700 font-medium mb-2">Gaji</label>
            <input type="text" id="gaji" name="gaji" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Contoh: Rp 8.000.000 - Rp 12.000.000" />
          </div>

          <!-- Kategori -->
          <div>
            <label for="kategori" class="block text-gray-700 font-medium mb-2">Kategori</label>
            <select id="kategori" name="kategori" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
              <option value="">Pilih Kategori</option>
              <option value="IT">IT</option>
              <option value="Finance">Finance</option>
              <option value="Marketing">Marketing</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>

          <!-- Jenis Pekerjaan -->
          <div>
            <label for="jenis_pekerjaan" class="block text-gray-700 font-medium mb-2">Jenis Pekerjaan</label>
            <select id="jenis_pekerjaan" name="jenis_pekerjaan" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
              <option value="">Pilih Jenis Pekerjaan</option>
              <option value="Full-time">Full-time</option>
              <option value="Part-time">Part-time</option>
              <option value="Magang">Magang</option>
            </select>
          </div>

          <!-- Syarat dan Ketentuan -->
          <div>
            <label for="syarat" class="block text-gray-700 font-medium mb-2">Syarat dan Ketentuan</label>
            <textarea id="syarat" name="syarat" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" rows="4" placeholder="Tuliskan syarat dan ketentuan pekerjaan ini"></textarea>
          </div>

          <!-- Deskripsi -->
          <div>
            <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" rows="4" placeholder="Tuliskan deskripsi pekerjaan"></textarea>
          </div>

          <!-- Submit Button -->
          <div>
            <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-3 rounded-lg hover:bg-blue-600">Simpan Lowongan</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
      <div class="container mx-auto px-6 text-center">
        <p>&copy; 2024 PortalJob. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
