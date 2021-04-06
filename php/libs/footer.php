<footer id="footer" class="relative footer">
            <div class="goldBook">
                <h3 class="goldBook__title">Laissez un avis sur le site, cela nous permettera de l’améliorer</h3>
                <form class="goldBook__form goldBook__form--column" action="accueil.php" method="post">
                    <textarea class="goldBook__content font-normal" name="gold-book__text" cols="70" rows="10" placeholder="Votre avis sur le site..."></textarea>
                    <div class="goldBook__buttons mt-1">
                        <button class="btn btn--cancel font-normal" type="reset" value="cancel">Annuler</button>
                        <button class="btn btn--submit mt-1 font-normal btn-hover__effect" type="submit" value="send">Envoyer      </button>
                    </div>
                </form>
            </div>
            <div class="newsletter">
                <h3 class="newsletter__title  relative">S’inscrire aux <span>newsletter</span> pour rester informé
                    <svg class="newsletter__svg absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M506.955 1.314c-3.119-1.78-6.955-1.75-10.045.078L313.656 109.756c-4.754 2.811-6.329 8.943-3.518 13.697 2.81 4.753 8.942 6.328 13.697 3.518l131.482-77.749-244.906 254.113-121.808-37.266 158.965-94c4.754-2.812 6.329-8.944 3.518-13.698-2.81-4.753-8.943-6.33-13.697-3.518L58.91 260.392c-3.41 2.017-5.309 5.856-4.84 9.791s3.216 7.221 7.004 8.38l145.469 44.504L270.72 439.88c.067.121.136.223.207.314 1.071 1.786 2.676 3.245 4.678 4.087 1.253.527 2.57.784 3.878.784 2.563 0 5.086-.986 6.991-2.849l73.794-72.12 138.806 42.466c.96.293 1.945.438 2.925.438 2.116 0 4.206-.672 5.948-1.961C510.496 409.153 512 406.17 512 403V10c0-3.591-1.926-6.907-5.045-8.686zM271.265 329.23c-1.158 1.673-1.779 3.659-1.779 5.694v61.171l-43.823-79.765 193.921-201.21-148.319 214.11zm18.221 82.079v-62.867l48.99 14.988-48.99 47.879zM492 389.483l-196.499-60.116L492 45.704v343.779z"/><path fill="currentColor" d="M164.423 347.577c-3.906-3.905-10.236-3.905-14.143 0l-93.352 93.352c-3.905 3.905-3.905 10.237 0 14.143C58.882 457.024 61.441 458 64 458s5.118-.976 7.071-2.929l93.352-93.352c3.905-3.904 3.905-10.236 0-14.142zM40.071 471.928c-3.906-3.903-10.236-3.903-14.142.001l-23 23c-3.905 3.905-3.905 10.237 0 14.143C4.882 511.024 7.441 512 10 512s5.118-.977 7.071-2.929l23-23c3.905-3.905 3.905-10.237 0-14.143zM142.649 494.34c-1.859-1.86-4.439-2.93-7.069-2.93-2.641 0-5.21 1.07-7.07 2.93-1.86 1.86-2.93 4.43-2.93 7.07 0 2.63 1.069 5.21 2.93 7.07 1.86 1.86 4.44 2.93 7.07 2.93s5.21-1.07 7.069-2.93c1.86-1.86 2.931-4.44 2.931-7.07 0-2.64-1.07-5.21-2.931-7.07zM217.051 419.935c-3.903-3.905-10.233-3.905-14.142 0l-49.446 49.445c-3.905 3.905-3.905 10.237 0 14.142 1.953 1.953 4.512 2.929 7.071 2.929s5.118-.977 7.071-2.929l49.446-49.445c3.905-3.905 3.905-10.237 0-14.142zM387.704 416.139c-3.906-3.904-10.236-3.904-14.142 0l-49.58 49.58c-3.905 3.905-3.905 10.237 0 14.143 1.953 1.952 4.512 2.929 7.071 2.929s5.118-.977 7.071-2.929l49.58-49.58c3.905-3.905 3.905-10.237 0-14.143zM283.5 136.31c-1.86-1.86-4.44-2.93-7.07-2.93s-5.21 1.07-7.07 2.93c-1.859 1.86-2.93 4.44-2.93 7.08 0 2.63 1.07 5.2 2.93 7.06 1.86 1.87 4.44 2.93 7.07 2.93s5.21-1.06 7.07-2.93c1.859-1.86 2.93-4.43 2.93-7.06 0-2.64-1.07-5.22-2.93-7.08z"/>
                    </svg>
                </h3>
                <p class="newsletter__p ex-mail">Entrez votre e-mail </p>
                <form class="newsletter__form newsletter__form--column" action="/pages/accueil.php" method="post">
                    <div class="newsletter__mail"><input class="font-normal newsletter__mail__input" type="email" placeholder="pierre.durand@gmail.com" required></div>
                    <div class="newsletter__buttons mt-1">
                        <button class="btn btn--cancel font-normal" type="reset" value="cancel">Annuler</button>
                        <button class="btn btn--subscribe mt-1 font-normal btn-hover__effect" type="submit" value="subscribe">S'inscrire</button>
                    </div>
                </form>  
                <div class="social-media">
                    <h4 class="mt-1">Nous suivre sur les réseaux</h4>
                    <a href="https://www.youtube.com/channel/UCDnbDtLrXeVtmkuFRjvf46A" target="_blank"><img width="85" height="60" src="/img/svg/youtube-logo.svg" alt="Logo-youtube"></a>
                    <a href="https://www.facebook.com/pages/category/Nonprofit-Organization/Les-Amis-de-LAru1-104390721107594/" target="_blank"><img class="m-2" width="60" height="60" src="/img/svg/facebook.svg" alt="Logo-facebook"></a>      
                </div>
            </div>  
            <div class="network flex">
                    <h5 class="mt-1">Notre Réseau</h5>
                    <a href="http://www.wallonie-bruxelles-enseignement.be/" target="_blank"><img width="95" height="76" src="/img/logo-federation.jpg" alt="Logo-Federation"></a>
                </div>   
        </footer>