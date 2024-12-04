<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Acara | Pelosok Nusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
</head>
<body class="bg-gray-50">
    @if(session('success'))
        <div id="success-modal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <!-- Background -->
            <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center">
                    <!-- Modal -->
                    <div class="relative transform overflow-hidden rounded-lg bg-white text-center shadow-xl transition-all sm:w-full sm:max-w-md">
                        <!-- Modal Content -->
                        <div class="bg-white px-6 py-8">
                            <!-- Icon -->
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                                <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <!-- Title -->
                            <h3 class="mt-4 text-lg font-semibold text-gray-900">Pendaftaran Berhasil</h3>
                            <!-- Description -->
                            <p class="mt-2 text-sm text-gray-500">
                                Terimakasih telah mendaftar acara Pelosok Nusantara. Untuk info selanjutnya akan kita hubungi.
                            </p>
                        </div>
                        <!-- Footer -->
                        <div class="bg-gray-50 px-6 py-4">
                            <button type="button" id="close-button" class="w-full rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 shadow-md">
        <!-- Decorative Gradient Background -->
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Formulir Pendaftaran</h2>
            <p class="mt-2 text-lg text-gray-600">Silakan isi formulir di bawah ini untuk mengikuti acara.</p>
        </div>

        <form action="/" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf <!-- CSRF Token -->

            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <!-- Field: Nama -->
                <div class="sm:col-span-2">
                    <label for="name" class="block text-sm font-semibold text-gray-900">Nama</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda"
                           class="mt-2.5 block w-full rounded-md border-gray-300 bg-white px-3.5 py-2 text-gray-900 placeholder:text-gray-400 shadow-sm focus:ring-indigo-600 focus:border-indigo-600" required>
                </div>

                <!-- Field: Nomor Telepon -->
                <div class="sm:col-span-2">
                    <label for="phone" class="block text-sm font-semibold text-gray-900">Nomor Telepon</label>
                    <input type="text" id="phone" name="phone" placeholder="Contoh: 081234567890"
                           class="mt-2.5 block w-full rounded-md border-gray-300 bg-white px-3.5 py-2 text-gray-900 placeholder:text-gray-400 shadow-sm focus:ring-indigo-600 focus:border-indigo-600" required>
                </div>

                <!-- Field: Instansi -->
                <div class="sm:col-span-2">
                    <label for="institution" class="block text-sm font-semibold text-gray-900">Instansi</label>
                    <input type="text" id="institution" name="institution" placeholder="Contoh: Sekolah Bina Nusantara"
                           class="mt-2.5 block w-full rounded-md border-gray-300 bg-white px-3.5 py-2 text-gray-900 placeholder:text-gray-400 shadow-sm focus:ring-indigo-600 focus:border-indigo-600" required>
                </div>

                <!-- Field: Domisili -->
                <div class="sm:col-span-2">
                    <label for="domicile" class="block text-sm font-semibold text-gray-900">Domisili</label>
                    <input type="text" id="domicile" name="domicile" placeholder="Contoh: Bandung"
                           class="mt-2.5 block w-full rounded-md border-gray-300 bg-white px-3.5 py-2 text-gray-900 placeholder:text-gray-400 shadow-sm focus:ring-indigo-600 focus:border-indigo-600" required>
                </div>

                <!-- Field: Event -->
                <div class="sm:col-span-2">
                    <label for="event" class="block text-sm font-semibold text-gray-900">Pilih Acara</label>
                    <select id="event" name="event"
                            class="mt-2.5 block w-full rounded-md border-gray-300 bg-white px-3 py-2 text-gray-900 shadow-sm focus:ring-indigo-600 focus:border-indigo-600" required>
                        <option value="" disabled selected>Pilih acara</option>
                        <option value="Flower Bouquet | 18 Dec | 13:00 | IDR 25.000">Flower Bouquet | 18 Dec | 13:00 | IDR 25.000</option>
                        <option value="Flower Bouquet | 18 Dec | 14:00 | IDR 25.000">Flower Bouquet | 18 Dec | 14:00 | IDR 25.000</option>
                        <option value="Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000">Lomba Sketsa A4 | 18 Dec | 15:00 | IDR 30.000</option>
                        <option value="Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000">Lomba Poster A3 | 19 Dec | 09:00 | IDR 30.000</option>
                        <option value="Mewarnai A | 19 Dec | 13:00 | IDR 30.000">Mewarnai A | 19 Dec | 13:00 | IDR 30.000</option>
                        <option value="Mewarnai B | 19 Dec | 15:00 | IDR 30.000">Mewarnai B | 19 Dec | 15:00 | IDR 30.000</option>
                        <option value="Painting Ashtray | 20 Dec | 13:00 | IDR 20.000">Painting Ashtray | 20 Dec | 13:00 | IDR 20.000</option>
                        <option value="Lomba Puisi | 20 Dec | 15:00 | IDR 30.000">Lomba Puisi | 20 Dec | 15:00 | IDR 30.000</option>
                        <option value="Mirror Decoration | 20 Dec | 15:00 | IDR 30.000">Mirror Decoration | 20 Dec | 15:00 | IDR 30.000</option>
                    </select>
                </div>
                <div class="sm:col-span-2">
                    <div class="mt-5 py-5">
                        <span>Silahkan Transfer sesuai nominal diatas</span>
                        <p>AHMAD GHAZY DANANJAYA | Bank Mandiri | 1310021695137</p>
                    </div>
                    <label for="image" class="block text-sm font-semibold text-gray-900">Upload Bukti Transfer</label>

                    <!-- Drag and Drop Area -->
                    <div id="drop-area"
                        class="mt-2.5 flex flex-col items-center justify-center w-full rounded-md border-2 border-dashed border-gray-300 bg-white py-6 text-center cursor-pointer hover:bg-gray-50">
                        <p class="text-sm text-gray-500">Drag & Drop atau <span class="font-semibold text-indigo-600">Pilih File</span></p>
                        <input type="file" id="image" name="image" accept="image/*"
                            class="hidden" onchange="handleFileUpload(event)" required>
                    </div>

                    <!-- Preview Image -->
                    <div id="preview-container" class="mt-4 hidden">
                        {{-- <p class="text-sm font-medium text-gray-900">Pratinjau:</p> --}}
                        <img id="preview-image" src="#" alt="Pratinjau Bukti Transfer"
                            class="mt-2 max-w-xs max-h-64 rounded-md border border-gray-300 shadow-sm">
                    </div>
                </div>



            </div>

            <!-- Submit Button -->
            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">Daftar Sekarang</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropArea = document.getElementById('drop-area');
            const fileInput = document.getElementById('image');
            const previewContainer = document.getElementById('preview-container');
            const previewImage = document.getElementById('preview-image');

            // Event untuk klik pada area drag-and-drop
            dropArea.addEventListener('click', () => {
                fileInput.click();
            });

            // Event untuk drag-and-drop
            dropArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropArea.classList.add('bg-gray-100');
            });

            dropArea.addEventListener('dragleave', () => {
                dropArea.classList.remove('bg-gray-100');
            });

            dropArea.addEventListener('drop', (e) => {
                e.preventDefault();
                dropArea.classList.remove('bg-gray-100');
                const file = e.dataTransfer.files[0];
                if (file && file.type.startsWith('image/')) {
                    fileInput.files = e.dataTransfer.files;
                    showPreview(file);
                }
            });

            // Event untuk memilih file melalui input
            fileInput.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    showPreview(file);
                }
            });

            // Fungsi untuk menampilkan pratinjau gambar
            function showPreview(file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        // Fungsi untuk menutup modal
        document.getElementById('close-button').addEventListener('click', function () {
            const modal = document.getElementById('success-modal');
            modal.style.display = 'none'; // Menyembunyikan modal
        });


        document.getElementById('close-button').addEventListener('click', function () {
            const modal = document.getElementById('success-modal');
            modal.style.display = 'none'; // Menyembunyikan modal
        });



    </script>
</body>
</html>
