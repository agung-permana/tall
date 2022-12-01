<div class="container">
    <div class="flex justify-center">
        <div class="w-1/2">
            <div class="bg-white rounded border border-gray-200 p-5">
                <h1 class="uppercase text-lg">
                    Edit Profil
                </h1>
                
                <form wire:submit.prevent="update" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                    <div class="md-5">
                        <label for="" class="block font-medium mb-1">Nama</label>
                        <input type="text" wire:model="name" id="name" class=" appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3">
                    </div>
                    @error('name')
                        <span class="text-red invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
