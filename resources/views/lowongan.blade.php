<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <!-- Header -->
    <header class="bg-white shadow">
      <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-xl font-bold text-purple-600">Callege</a>
        <nav class="space-x-4">
          <a href="/" class="text-gray-600 hover:text-blue-500">Home</a>
          <a href={route('lowongans.index')} class="text-gray-600 hover:text-blue-500">Lowongan</a>
          <a href="#" class="text-gray-600 hover:text-blue-500">Tentang</a>
          <a href="#" class="text-gray-600 hover:text-blue-500">Kontak</a>
        </nav>
      </div>
    </header>

    <section class="py-6">
        <div class="container mx-auto px-6 bg-white shadow-lg rounded-lg p-6">
          <h2 class="text-2xl font-semibold text-gray-800 mb-4">Cari Lowongan</h2>
          <form class="space-y-4">
            <!-- Pencarian -->
            <div class="flex items-center space-x-4">
              <input type="text" placeholder="Cari pekerjaan..." class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
              <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Cari</button>
            </div>
            <!-- Filter -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <!-- Filter Kategori -->
              <div>
                <label for="kategori" class="block text-gray-700 font-medium mb-2">Kategori</label>
                <select id="kategori" name="kategori" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                  <option value="">Semua Kategori</option>
                  <option value="IT">IT</option>
                  <option value="Design">Design</option>
                  <option value="Marketing">Marketing</option>
                </select>
              </div>
              <!-- Filter Lokasi -->
              <div>
                <label for="lokasi" class="block text-gray-700 font-medium mb-2">Lokasi</label>
                <select id="lokasi" name="lokasi" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                  <option value="">Semua Lokasi</option>
                  <option value="Jakarta">Jakarta</option>
                  <option value="Bandung">Bandung</option>
                  <option value="Yogyakarta">Yogyakarta</option>
                </select>
              </div>
              <!-- Filter Jenis Pekerjaan -->
              <div>
                <label for="jenis_pekerjaan" class="block text-gray-700 font-medium mb-2">Jenis Pekerjaan</label>
                <select id="jenis_pekerjaan" name="jenis_pekerjaan" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                  <option value="">Semua Jenis</option>
                  <option value="Full-time">Full-time</option>
                  <option value="Part-time">Part-time</option>
                  <option value="Magang">Magang</option>
                </select>
              </div>
            </div>
          </form>
        </div>
      </section>

    <!-- Job Listings -->
    <section class="py-10">
        <div class="container mx-auto px-6">
            <h3 class="text-2xl font-semibold mb-6">Lowongan Terbaru</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($lowongans as $lowonganItem)
            <!-- Job Card -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h4 class="text-lg font-semibold mb-2">{{ $lowonganItem->nama }}</h4>
                <p class="text-gray-600">{{ $lowonganItem->perusahaan ?? 'Perusahaan tidak tersedia' }}</p> <!-- Ensure 'perusahaan' exists in your model -->
                <p class="text-sm text-gray-500 mb-4">{{ $lowonganItem->lokasi }}</p>
                <!-- Link to detail page -->
                <a href="{{ route('lowongans.show', $lowonganItem->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">Detail</a>
            </div>
            @endforeach
            </div>
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