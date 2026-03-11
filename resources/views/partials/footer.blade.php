<footer class="site-footer">

    <div class="container footer-container">

        <div class="footer-left">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>

        <div class="footer-right">
            <a href="/privacy">Privacy</a>
            <a href="/terms">Terms</a>
            <a href="/contact">Contact</a>
        </div>

    </div>

</footer>

<!-- Optional Page Scripts -->
@stack('scripts')
