<footer class="site-footer bg-black text-white">

    <div class="flex justify-evenly items-center h-20">

        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
{{--            <a href="/privacy">Privacy</a>--}}
        <ul class="flex gap-10">
            <a href="/terms">Terms</a>
            <a href="/custom">Custom</a>
            <a href="/contact">Contact</a>
        </ul>

    </div>

</footer>

<!-- Optional Page Scripts -->
@stack('scripts')
