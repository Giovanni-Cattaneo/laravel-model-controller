<style>
    footer {
        background-color: black;

        & ul {
            line-height: 2.3rem;
        }
    }
</style>

<footer>
    <div class="container d-flex justify-content-evenly p-5">
        <ul class="list-unstyled">
            <li><a href="{{ route('guest.home') }}" class="text-white text-decoration-none">Contattaci</a></li>
            <li><a href="{{ route('guest.home') }}" class="text-white text-decoration-none">Chi siamo</a></li>
            <li><a href="{{ route('guest.home') }}" class="text-white text-decoration-none">Privacy Policy</a></li>
            <li><a href="{{ route('guest.home') }}" class="text-white text-decoration-none">Termini e condizioni</a></li>
            <li><a href="{{ route('guest.home') }}" class="text-white text-decoration-none">FAQ</a></li>
        </ul>
        <ul class="list-unstyled">
            <li><a href="{{ route('guest.about') }}" class="text-white text-decoration-none">Lavora con noi</a></li>
            <li><a href="{{ route('guest.about') }}" class="text-white text-decoration-none">Blog</a></li>
            <li><a href="{{ route('guest.about') }}" class="text-white text-decoration-none">Assistenza clienti</a></li>
            <li><a href="{{ route('guest.about') }}" class="text-white text-decoration-none">Prodotti</a></li>
            <li><a href="{{ route('guest.about') }}" class="text-white text-decoration-none">Servizi</a></li>
        </ul>
        <ul class="list-unstyled">
            <li><a href="{{ route('guest.contacts') }}" class="text-white text-decoration-none">Feedback</a></li>
            <li><a href="{{ route('guest.contacts') }}" class="text-white text-decoration-none">Eventi</a></li>
            <li><a href="{{ route('guest.contacts') }}" class="text-white text-decoration-none">Partnership</a></li>
            <li><a href="{{ route('guest.contacts') }}" class="text-white text-decoration-none">News</a></li>
            <li><a href="{{ route('guest.contacts') }}" class="text-white text-decoration-none">Assistenza tecnica</a>
            </li>
        </ul>
    </div>
</footer>
