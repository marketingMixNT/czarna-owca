<footer class="footer">
    <div class="footer__container">
        <div class="footer__logo-section">
            <div class="footer__logo">
                <img src="{{ asset('assets/logo.png') }}" alt="">
            </div>
            <div class="footer__social">
                @include('partials.socials')
            </div>
        </div>

        <div class="footer__columns">
            <div class="footer__columns-box">
                <h6>Adres:</h6>
                <span>Zwierzyniecka 9</span>
                <span>34-500 Zakopane</span>
            </div>
            <div class="footer__columns-box">
                <h6>Kontakt:</h6>
                <a href="tel:48696770000">+48 696 770 000</a>
                <a href="mailto:hello@owcedwie.pl">hello@owcedwie.pl</a>
            </div>
        </div>
        
    </div>
    <div class="footer__author">
        <span>©<span class="footer__year"></span> Dwie Owce</span>
        <span>Wykonanie <a href="https://marketingmix.pl" target="_blank">MarketingMix</a></span>
    </div>
    </div>
</footer>
