<section class="w-full px-8 bg-gray-900 xl:px-8 min-h-screen py-12">
    <div class="max-w-4xl mx-auto">
        
        <!-- Progress Indicator -->
        <div class="mb-8">
            <div class="flex items-center justify-center space-x-4">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <span class="ml-2 text-white font-[poppins]">Brand Info</span>
                </div>
                <div class="w-16 h-1 bg-indigo-600"></div>
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold">
                        2
                    </div>
                    <span class="ml-2 text-white font-[poppins] font-medium">Campaign Details</span>
                </div>
            </div>
        </div>

        <!-- Brand Summary Card -->
        @if(session('brand_data'))
        <div class="bg-gray-800/50 border border-indigo-500/30 rounded-lg p-6 mb-6">
            <div class="flex items-center space-x-4">
                @if(session('brand_data.path_img_temp'))
                <img src="{{ session('brand_data.path_img_temp') }}" alt="Brand Logo" class="w-16 h-16 rounded-lg object-cover">
                @else
                <div class="w-16 h-16 bg-indigo-500/20 rounded-lg flex items-center justify-center">
                    <svg class="w-8 h-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                @endif
                <div>
                    <h3 class="text-lg font-bold text-white font-[poppins]">{{ session('brand_data.nama_brand') }}</h3>
                    <p class="text-sm text-gray-400 font-[inter]">{{ session('brand_data.industri') }}</p>
                </div>
            </div>
        </div>
        @endif

        <!-- Form Card -->
        <div class="bg-gray-800 border border-gray-700 rounded-2xl shadow-2xl p-8 md:p-12">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-white font-[poppins] mb-2">
                    Detail Campaign
                </h2>
                <p class="text-gray-400 font-[inter]">
                    Atur campaign Anda untuk mencapai target audience yang tepat
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500 rounded-lg">
                    <p class="text-red-400 text-sm font-[inter]">{{ $errors->first() }}</p>
                </div>
            @endif

            <form action="{{ route('campaign.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="space-y-6">
                    <x-input
                        type="text"
                        name="judul"
                        label="Judul Campaign"
                        placeholder="Contoh: Summer Collection Launch 2024"
                        icon="heroicon-o-megaphone"
                        :value="old('judul')"
                        required />

                    <x-input
                        type="textarea"
                        name="deskripsi"
                        label="Deskripsi Campaign"
                        placeholder="Jelaskan tujuan dan strategi campaign Anda..."
                        :value="old('deskripsi')"
                        required />

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-300 font-[inter]">
                            Campaign Banner
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="campaign_img" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-600 border-dashed rounded-lg cursor-pointer bg-gray-700 hover:bg-gray-600 transition-colors">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-400 font-[inter]">
                                        <span class="font-semibold">Click to upload</span> campaign banner
                                    </p>
                                    <p class="text-xs text-gray-500 font-[inter]">PNG, JPG or JPEG (MAX. 2MB)</p>
                                </div>
                                <input id="campaign_img" name="path_img" type="file" class="hidden" accept="image/*" />
                            </label>
                        </div>
                        <div id="campaignImagePreview" class="mt-4 hidden">
                            <img src="" alt="Preview" class="w-full h-48 object-cover rounded-lg">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-700">
                    <a href="{{ route('brand') }}" class="px-6 py-3 text-gray-400 hover:text-white transition-colors font-[inter] flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Kembali
                    </a>
                    <button type="submit" class="px-8 py-3 bg-indigo-600 hover:bg-indigo-500 text-white font-medium rounded-lg transition-colors shadow-lg hover:shadow-xl font-[poppins]">
                        <svg class="inline-block w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Buat Campaign
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Campaign image preview
    document.getElementById('campaign_img').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('campaignImagePreview');
                preview.querySelector('img').src = e.target.result;
                preview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush