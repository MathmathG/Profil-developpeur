</main>
    <footer class="footer" id ="contact">
        <form action="" class="contact-form">
            <div class="field is-half">
                <label class="field__label" for="name">Nom</label>
                <input class="field__input" id="name" type="text" value="" />
            </div>
            <div class="field is-half">
                <label class="field__label" for="email">E-mail</label>
                <input class="field__input" id="email" type="email" value="" />
            </div>
            <div class="field">
                <label class="field__label" for="message">Message</label>
                <textarea class="field__textarea" name="" id="message"></textarea>
            </div>
            <div class="field">
                <button class="field__button" type="submit">Envoyer</button>
            </div>
        </form>
        <div class="contact-info">
            <div class="contact-info__detail">
                <i class="contact-info__detail__icon fa fa-envelope"></i>
                <h4 class="contact-info__detail__title">Email</h4>
                <div class="contact-info__detail__content">gle.mathieu@gmail.com</div>
            </div>
            <div class="contact-info__detail">
                <i class="contact-info__detail__icon fa fa-phone"></i>
                <h4 class="contact-info__detail__title">T&eacute;l&eacute;phone</h4>
                <div class="contact-info__detail__content">06 61 26 76 42</div>
            </div>
            <div class="contact-info__detail">
                <i class="contact-info__detail__icon fa fa-home"></i>
                <h4 class="contact-info__detail__title">Adresse</h4>
                <span class="contact-info__detail__content">3 rue bisson 14320 St André sur Orne</span>
            </div>
        </div>
       
    </footer>
    <div class="copy"><p>Copyright &copy; ProfilMath - Tous droits réservés - 2019</p><a href="#banner"><i class="fa fa-arrow-circle-up"></i></a></div>
</div>
<div class="menu">
<a href="#" class="ui-button CloseMenu"><i class="fa fa-close"></i></a>
<?php get_template_part( 'template-parts/menu/nav', 'main' ); ?>
<?php get_template_part( 'template-parts/menu/nav', 'social' ); ?>
	</div>
<?php do_action( 'wp_footer' ); ?>
</body>
</html>
