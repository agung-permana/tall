@section('title', 'Verify your email address')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Verifikasi E-mail Anda
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            @if (session('resent'))
                <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" role="alert">
                    <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>

                    <p>Tautan verifikasi baru telah dikirim ke alamat email Anda.</p>
                </div>
            @endif

            <div class="text-sm text-gray-700">
                <p>Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.</p>

                <p class="mt-3">
                    jika Anda tidak menerima email, <a wire:click="resend" class="text-indigo-700 cursor-pointer hover:text-indigo-600 focus:outline-none focus:underline transition ease-in-out duration-150">klik di sini untuk meminta yang lain</a>.
                </p>
            </div>
        </div>
    </div>
</div>
