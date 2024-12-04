<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Perusahaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow">
      <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">Callege - Perusahaan</h1>
        <nav class="space-x-4">
          <a href="#" class="text-gray-600 hover:text-blue-500">Dashboard</a>
          <a href="#" class="text-gray-600 hover:text-blue-500">Logout</a>
        </nav>
      </div>
    </header>

    <!-- Dashboard Content -->
    <section class="py-12">
      <div class="container mx-auto px-6 bg-white shadow-lg rounded-lg p-8">
       <div class="flex flex-row justify-between items-center mb-6">

           <h2 class="text-2xl font-semibold text-gray-800 ">Dashboard Perusahaan</h2>
           <a href="{{ route('tambahlowongan') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Tambah</a>
       </div>

        <!-- Daftar Lowongan -->
        <div class="overflow-x-auto">
          <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead>
              <tr class="bg-gray-100 text-left">
                <th class="px-6 py-4 text-gray-600 font-medium">Nama Pekerjaan</th>
                <th class="px-6 py-4 text-gray-600 font-medium">Lokasi</th>
                <th class="px-6 py-4 text-gray-600 font-medium">Gaji</th>
                <th class="px-6 py-4 text-gray-600 font-medium">Kategori</th>
                <th class="px-6 py-4 text-gray-600 font-medium">Jenis Pekerjaan</th>
                <th class="px-6 py-4 text-gray-600 font-medium text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- Baris 1 -->
              <tr class="border-b border-gray-200">
                <td class="px-6 py-4">Frontend Developer</td>
                <td class="px-6 py-4">Jakarta, Indonesia</td>
                <td class="px-6 py-4">Rp 10.000.000</td>
                <td class="px-6 py-4">IT</td>
                <td class="px-6 py-4">Full-time</td>
                <td class="px-6 py-4 text-center space-x-4">
                  <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                  <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Hapus</button>
                </td>
              </tr>
              <!-- Baris 2 -->
              <tr class="border-b border-gray-200">
                <td class="px-6 py-4">UI/UX Designer</td>
                <td class="px-6 py-4">Bandung, Indonesia</td>
                <td class="px-6 py-4">Rp 8.000.000</td>
                <td class="px-6 py-4">Design</td>
                <td class="px-6 py-4">Part-time</td>
                <td class="px-6 py-4 text-center space-x-4">
                  <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                  <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Hapus</button>
                </td>
              </tr>
              <!-- Baris 3 -->
              <tr class="border-b border-gray-200">
                <td class="px-6 py-4">Data Analyst</td>
                <td class="px-6 py-4">Yogyakarta, Indonesia</td>
                <td class="px-6 py-4">Rp 9.000.000</td>
                <td class="px-6 py-4">Data</td>
                <td class="px-6 py-4">Magang</td>
                <td class="px-6 py-4 text-center space-x-4">
                  <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Edit</button>
                  <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
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