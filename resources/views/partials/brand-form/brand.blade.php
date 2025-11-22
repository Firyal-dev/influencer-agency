<section class="w-full px-8 bg-gray-900 xl:px-8 min-h-screen py-12">
    <div class="max-w-4xl mx-auto">

        <!-- Progress Indicator -->
        <div class="mb-8">
            <div class="flex items-center justify-center space-x-4">
                <div class="flex items-center">
                    <div
                        class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold">
                        1
                    </div>
                    <span class="ml-2 text-white font-[poppins] font-medium">Brand Info</span>
                </div>
                <div class="w-16 h-1 bg-gray-700"></div>
                <div class="flex items-center">
                    <div
                        class="w-10 h-10 bg-gray-700 rounded-full flex items-center justify-center text-gray-400 font-bold">
                        2
                    </div>
                    <span class="ml-2 text-gray-400 font-[poppins]">Campaign Details</span>
                </div>
            </div>
        </div>

        <!-- Form Card -->
        <div class="bg-gray-800 border border-gray-700 rounded-2xl shadow-2xl p-8 md:p-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-white font-[poppins] mb-2">
                    Buat Brand Baru
                </h2>
                <p class="text-gray-400 font-[inter]">
                    Lengkapi informasi brand Anda untuk memulai campaign
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500 rounded-lg">
                    <p class="text-red-400 text-sm font-[inter]">{{ $errors->first() }}</p>
                </div>
            @endif

            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data" id="brandForm">
                @csrf

                <div class="space-y-6">
                    <x-input type="text" name="nama_brand" label="Nama Brand" placeholder="Masukkan nama brand"
                        icon="heroicon-o-building-storefront" :value="old('nama_brand', session('brand_data.nama_brand'))" required />

                    <x-input type="textarea" name="deskripsi_brand" label="Deskripsi Brand"
                        placeholder="Ceritakan tentang brand Anda..." :value="old('deskripsi_brand', session('brand_data.deskripsi_brand'))" />


                    @php
                        $industries = [
                            'beauty & skincare' => 'Beauty & Skincare',
                            'fashion & apparel' => 'Fashion & Apparel',
                            'food & beverage' => 'Food & Beverage',
                            'tech & electronics' => 'Tech & Electronics',
                            'gaming & entertainment' => 'Gaming & Entertainment',
                            'travel & hospitality' => 'Travel & Hospitality',
                            'health & fitness' => 'Health & Fitness',
                            'finance & banking' => 'Finance & Banking',
                            'education & e-learning' => 'Education & E-Learning',
                            'automotive' => 'Automotive',
                            'home & living' => 'Home & Living',
                            'e-commerce / retail' => 'E-commerce / Retail',
                            'telecommunication' => 'Telecommunication',
                            'nonprofit / ngo / social' => 'Nonprofit / NGO / Social',
                            'real estate / property' => 'Real Estate / Property',
                            'luxury / lifestyle' => 'Luxury / Lifestyle',
                        ];

                        $selectedIndustry = old('industri', session('brand_data.industri'));
                    @endphp

                    <label class="block mb-2 text-sm font-medium text-gray-300 font-[inter]">
                        Industri Brand
                    </label>
                    <select name="industri" id="industri"
                        class="w-full bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 p-3 font-[inter]">
                    <option value="" disabled {{ $selectedIndustry ? '' : 'selected' }}>
                        Brand anda bergerak di bidang apa?
                    </option>
                    <option value="" disabled selected>Brand anda bergerak di bidang apa?</option>

                    @foreach ($industries as $value => $label)
                        <option value="{{ $value }}" {{ $selectedIndustry === $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                    </select>


                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-300 font-[inter]">
                            Logo Brand
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="path_img"
                                class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-600 border-dashed rounded-lg cursor-pointer bg-gray-700 hover:bg-gray-600 transition-colors">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                        </path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-400 font-[inter]">
                                        <span class="font-semibold">Click to upload</span> or drag and drop
                                    </p>
                                    <p class="text-xs text-gray-500 font-[inter]">PNG, JPG or JPEG (MAX. 2MB)</p>
                                </div>
                                <input id="path_img" name="path_img" type="file" class="hidden" accept="image/*" />
                            </label>
                        </div>
                        <div id="imagePreview" class="mt-4 hidden">
                            <img src="" alt="Preview" class="w-32 h-32 object-cover rounded-lg mx-auto">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-700">
                    <a href="{{ route('home') }}"
                        class="px-6 py-3 text-gray-400 hover:text-white transition-colors font-[inter]">
                        Batal
                    </a>
                    <button type="submit"
                        class="px-8 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-lg transition-colors shadow-lg hover:shadow-xl font-[poppins]">
                        Lanjut ke Campaign
                        <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        // Image preview
        document.getElementById('path_img').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('imagePreview');
                    preview.querySelector('img').src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush
