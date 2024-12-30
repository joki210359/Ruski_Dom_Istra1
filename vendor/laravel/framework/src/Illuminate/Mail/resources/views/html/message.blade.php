<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <x-mail::header :url="config('app.url')">
            <!--{{ config('app.name') }}-->

            <img src="{{ asset('assets/Ruski dom Istra logo.png') }}" alt="Русский Дом Истрия" height="100" width="500">

        </x-mail::header>
    </x-slot:header>

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
    <x-slot:subcopy>
        <x-mail::subcopy>
            {{ $subcopy }}
        </x-mail::subcopy>
    </x-slot:subcopy>
    @endisset

    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} Русский Дом Истрия. {{ __('Все права защищены.') }}
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>
