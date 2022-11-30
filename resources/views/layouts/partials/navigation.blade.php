<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
<div class="bg-gray-800" x-data="{open: false }">
	<div class="flex justify-between flex-col md:flex-row">
		<div class="flex w-full justify-between px-4 py-4 border-b border-gray-600 md:border-0">
			<div>
				<a href="#" class="text-white font-semibold text-lg">
					{{ config('app.name') }}
				</a>
			</div>

			<div class="block md:hidden">
				<button @click="open = !open" class="text-white">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
						<path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
		</div>

		<div x-bind:class="{'hidden': !open}" class="leading-loose md:flex md:items-center py-1 md:flex justify-between">
			<div class="flex flex-col md:flex-row md:items-center">
				<a href="{{ route('settings') }}" class="block text-gray-400 hover:text-white px-4 md:py-4">Settings</a>
			</div>


			<div class="flex flex-col md:flex-row md:items-center">
				@if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block text-gray-400 hover:text-white px-4 md:py-4"
                        >
                            Keluar         
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="block text-gray-400 hover:text-white px-4 md:py-4">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block text-gray-400 hover:text-white px-4 md:py-4">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
			</div>
		</div>
	</div>
</div>