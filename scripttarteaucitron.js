
        tarteaucitron.init({
            "privacyUrl": "",
            /* URL de la page de la politique de vie privée */

            "hashtag": "#tarteaucitron",
            /* Ouvrir le panneau contenant ce hashtag */
            "cookieName": "tarteaucitron",
            /* Nom du Cookie */

            "orientation": "middle",
            /* Position de la bannière (top - bottom) */
            "showAlertSmall": false,
            /* Voir la bannière réduite en bas à droite */
            "cookieslist": false,
            /* Voir la liste des cookies */

            "adblocker": false,
            /* Voir une alerte si un bloqueur de publicités est détecté */
            "AcceptAllCta": true,
            /* Voir le bouton accepter tout (quand highPrivacy est à true) */
            "highPrivacy": true,
            /* Désactiver le consentement automatique */
            "handleBrowserDNTRequest": false,
            /* Si la protection du suivi du navigateur est activée, tout interdire */

            "removeCredit": true,
            /* Retirer le lien vers tarteaucitron.js */
            "moreInfoLink": false,
            /* Afficher le lien "voir plus d'infos" */
            "useExternalCss": false,
            /* Si false, tarteaucitron.css sera chargé */

            //"cookieDomain": ".my-multisite-domaine.fr", /* Cookie multisite */

            "readmoreLink": "/cookiespolicy" /* Lien vers la page "Lire plus" */
        });

        tarteaucitron.user.gtagUa = 'G-C7H5YYSF35%22%3E';
        tarteaucitron.user.gtagMore = function() {
            /* add here your optionnal gtag() */
        };
        (tarteaucitron.job = tarteaucitron.job || []).push('gtag');
    