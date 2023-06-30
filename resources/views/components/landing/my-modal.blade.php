<div x-show="isOpen" class="fixed z-10 inset-0 overflow-y-auto bg-gray-500/50 transform  transition-all  duration-700">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white w-1/2 rounded overflow-hidden pb-6 transition-all  duration-700" @click.away="isOpen = false" >
            <header class="modal-header bg-blue-700 p-5 flex flex-row  justify-between">
                <h5 class="modal-title text-white text-xl font-bold">
                    {{ $title }}
                </h5>
                <button type="button" class="text-blue-200 font-bold hover:text-white" @click="isOpen = false">
                    X
                </button>
            </header>
            <div class="px-5">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
