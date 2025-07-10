@if($cartCount > 0)
<div class="w-10 h-10 flex items-center justify-center rounded-lg hover:bg-neutral transition">
    <x-navigation.link :href="route('cart')" aria-label="View cart">
        <div class="relative">
            <x-ri-shopping-bag-4-fill class="size-6" />

                <span class="absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 bg-red-600 text-white rounded-full text-[10px] font-semibold w-5 h-5 flex items-center justify-center select-none pointer-events-none leading-none">
                    {{ $cartCount > 99 ? '99+' : $cartCount }}
                </span>
        </div>
    </x-navigation.link>
</div>
@endif
