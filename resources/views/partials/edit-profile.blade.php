<!-- Modal -->
<div id="editProfileModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen px-4">
        <!-- Background overlay -->
        <div class="fixed inset-0 bg-gray-500 opacity-75 transition-opacity" aria-hidden="true"></div>
        <!-- Modal content -->
        <div class="bg-white rounded-lg p-8 w-full max-w-md overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <button onclick="closeEditProfileModal()" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <h3 class="font-bold text-xl text-center">Ubah Profil</h3>
            <!-- Form -->
            <form id="editProfileForm" action="{{ route('profile.update') }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')
                <!-- Nama -->
                <div>
                    <label for="editName" class="block font-medium mb-1">Nama</label>
                    <input id="editName" name="name" type="text" class="form-input mt-1 block w-full" placeholder="Masukkan Nama" value="{{ auth()->user()->name }}">
                </div>
                <!-- Username -->
                <div>
                    <label for="editUsername" class="block font-medium mb-1">Username</label>
                    <input id="editUsername" name="username" type="text" class="form-input mt-1 block w-full" placeholder="Masukkan Username" value="{{ auth()->user()->username }}">
                </div>
                <!-- Jenis Kelamin -->
                <div>
                    <label for="editGender" class="block font-medium mb-1">Jenis Kelamin</label>
                    <select id="editGender" name="gender" class="form-select mt-1 block w-full">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki" {{ auth()->user()->gender == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ auth()->user()->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <!-- Email -->
                <div>
                    <label for="editEmail" class="block font-medium mb-1">Email</label>
                    <input id="editEmail" name="email" type="email" class="form-input mt-1 block w-full" placeholder="Masukkan Email" value="{{ auth()->user()->email }}">
                </div>
                <!-- Nomor Telepon -->
                <div>
                    <label for="editPhone" class="block font-medium mb-1">Nomor Telepon</label>
                    <input id="editPhone" name="phone" type="text" class="form-input mt-1 block w-full" placeholder="Masukkan Nomor Telepon" value="{{ auth()->user()->phone }}">
                </div>
                <!-- Tombol Simpan -->
                <div class="flex justify-end">
                    <button type="submit" class="bg-[#F96D00] text-white px-4 py-2 rounded-lg hover:bg-[#ffa159] transition ease-in-out">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
