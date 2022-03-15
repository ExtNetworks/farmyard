<div class="shadow-md bg-yellow-300 rounded p-6 m-2">
    <div class="text-2x1 text-center font-bold border-b">Horses</div>
    <div class="w-16 h-16 mx-auto my-4">

   

    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 109.03" style="enable-background:new 0 0 122.88 109.03" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><g><path class="st0" d="M21.2,72.04c4.63,1.68,11.49-2.09,22-14.74c3.98,1.47,7.1,4.73,8.46,11.72c2.58,13.31-1.52,21.83-7.22,33.54 c-1.06,2.17-2.12,4.32-3.15,6.48h81.29l-0.25-0.2c5.55-39.24-31.98-58.51-4.56-46.4c-11.78-28.52-48.09-37.8-22.47-34.84 C82.12,15.55,65.5,8.89,41.87,13.1C36.85,5.77,24.84-9.86,28.52,8.86L22.5,3.49l-0.33,18.89C15.01,27.84,11.1,46.03,5.56,57.86 c-4.74,4.7-6.56,10.32-5.05,19.06C7.89,86.43,19.54,84.07,21.2,72.04L21.2,72.04z"/></g></svg>
    
    <!-- Icon from https://uxwing.com/horse-head-icon/ -->
    </div>
    <div class="text-3xl text-green-600 text-center mt-4">{{ $horse->amount }} (${{ $horse->amount * $horse->price}})</div>
    <div class="flex justify-around">
        <button wire:click="increment" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'">
            {{ __('Add Horse') }}
        </button>
        <button wire:click="decrement" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150'">
            {{ __('Remove Horse') }}
        </button>
    </div>
</div>
