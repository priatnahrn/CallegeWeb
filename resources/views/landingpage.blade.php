<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
      <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-purple-600">Callege</h1>
        <nav class="space-x-4">
          <a href="#" class="text-gray-600 hover:text-purple-500">Home</a>
          <a href={{ route('lowongans.index') }} class="text-gray-600 hover:text-purple-500">Lowongan</a>
          <a href="#" class="text-gray-600 hover:text-purple-500">Tentang</a>
          <a href="#" class="text-gray-600 hover:text-purple-500">Kontak</a>
        </nav>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-purple-500 text-white py-12">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-4">Temukan Pekerjaan Impianmu</h2>
        <p class="mb-6">Kami menyediakan berbagai lowongan kerja dan magang yang sesuai dengan kebutuhanmu.</p>
        <div class="flex justify-center mt-6">
          <input type="text" placeholder="Cari pekerjaan..." class="w-2/3 p-3 rounded-l-lg focus:outline-none" />
          <button class="bg-yellow-400 text-gray-800 px-6 py-3 rounded-r-lg hover:bg-yellow-500">Cari</button>
        </div>
      </div>
    </section>

    <!-- Job Listings -->
    <section class="py-10">
        
        <div class="container mx-auto px-6">
            <h3 class="text-2xl font-semibold mb-6">Lowongan Terbaru</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($lowongans as $lowonganItem)
                <!-- Job Card -->
                <div class="bg-white shadow-lg rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-lg font-semibold mb-2">{{ $lowonganItem->nama }}</h4>
                    <p class="text-gray-600">{{ $lowonganItem->perusahaan }}</p>
                    <p class="text-sm text-gray-500 mb-4">{{ $lowonganItem->lokasi }}</p>
                    <a href="{{ route('lowongans.show', $lowonganItem->id) }}" class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600 transition-all">Detail</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
      <div class="container mx-auto px-6 text-center">
        <p>&copy; 2024 Callege. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>