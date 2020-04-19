<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Publication/Front/sass/icons/_brand-icons.scss */
class __TwigTemplate_e535728f561a0b6eed943c7d57afa370c7a813dc319efb677a42d7f0a766cba9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/icons/_brand-icons.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/icons/_brand-icons.scss"));

        // line 1
        echo "@font-face {
  font-family: 'Brand-Icons';
  src:
    url('../fonts/Brand-Icons.ttf?blcw31') format('truetype'),
    url('../fonts/Brand-Icons.woff?blcw31') format('woff'),
    url('../fonts/Brand-Icons.svg?blcw31#Brand-Icons') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^=\"icon-brand-\"], [class*=\" icon-brand-\"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'Brand-Icons' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-brand-px:before {
  content: \"\\e900\";
}
.icon-brand-accessible-icon:before {
  content: \"\\e901\";
}
.icon-brand-accusoft:before {
  content: \"\\e902\";
}
.icon-brand-adn:before {
  content: \"\\e903\";
}
.icon-brand-adversal:before {
  content: \"\\e904\";
}
.icon-brand-affiliatetheme:before {
  content: \"\\e905\";
}
.icon-brand-algolia:before {
  content: \"\\e906\";
}
.icon-brand-amazon:before {
  content: \"\\e907\";
}
.icon-brand-amazon-pay:before {
  content: \"\\e908\";
}
.icon-brand-amilia:before {
  content: \"\\e909\";
}
.icon-brand-android:before {
  content: \"\\e90a\";
}
.icon-brand-angellist:before {
  content: \"\\e90b\";
}
.icon-brand-angrycreative:before {
  content: \"\\e90c\";
}
.icon-brand-angular:before {
  content: \"\\e90d\";
}
.icon-brand-apper:before {
  content: \"\\e90e\";
}
.icon-brand-apple:before {
  content: \"\\e90f\";
}
.icon-brand-apple-pay:before {
  content: \"\\e910\";
}
.icon-brand-app-store:before {
  content: \"\\e911\";
}
.icon-brand-app-store-ios:before {
  content: \"\\e912\";
}
.icon-brand-asymmetrik:before {
  content: \"\\e913\";
}
.icon-brand-audible:before {
  content: \"\\e914\";
}
.icon-brand-autoprefixer:before {
  content: \"\\e915\";
}
.icon-brand-avianex:before {
  content: \"\\e916\";
}
.icon-brand-aviato:before {
  content: \"\\e917\";
}
.icon-brand-aws:before {
  content: \"\\e918\";
}
.icon-brand-bandcamp:before {
  content: \"\\e919\";
}
.icon-brand-behance:before {
  content: \"\\e91a\";
}
.icon-brand-behance-square:before {
  content: \"\\e91b\";
}
.icon-brand-bimobject:before {
  content: \"\\e91c\";
}
.icon-brand-bitbucket:before {
  content: \"\\e91d\";
}
.icon-brand-bitcoin:before {
  content: \"\\e91e\";
}
.icon-brand-bity:before {
  content: \"\\e91f\";
}
.icon-brand-blackberry:before {
  content: \"\\e920\";
}
.icon-brand-black-tie:before {
  content: \"\\e921\";
}
.icon-brand-blogger:before {
  content: \"\\e922\";
}
.icon-brand-blogger-b:before {
  content: \"\\e923\";
}
.icon-brand-bluetooth:before {
  content: \"\\e924\";
}
.icon-brand-bluetooth-b:before {
  content: \"\\e925\";
}
.icon-brand-btc:before {
  content: \"\\e926\";
}
.icon-brand-buromobelexperte:before {
  content: \"\\e927\";
}
.icon-brand-buysellads:before {
  content: \"\\e928\";
}
.icon-brand-cc-amazon-pay:before {
  content: \"\\e929\";
}
.icon-brand-cc-amex:before {
  content: \"\\e92a\";
}
.icon-brand-cc-apple-pay:before {
  content: \"\\e92b\";
}
.icon-brand-cc-diners-club:before {
  content: \"\\e92c\";
}
.icon-brand-cc-discover:before {
  content: \"\\e92d\";
}
.icon-brand-cc-jcb:before {
  content: \"\\e92e\";
}
.icon-brand-cc-mastercard:before {
  content: \"\\e92f\";
}
.icon-brand-cc-paypal:before {
  content: \"\\e930\";
}
.icon-brand-cc-stripe:before {
  content: \"\\e931\";
}
.icon-brand-cc-visa:before {
  content: \"\\e932\";
}
.icon-brand-centercode:before {
  content: \"\\e933\";
}
.icon-brand-chrome:before {
  content: \"\\e934\";
}
.icon-brand-cloudscale:before {
  content: \"\\e935\";
}
.icon-brand-cloudsmith:before {
  content: \"\\e936\";
}
.icon-brand-cloudversify:before {
  content: \"\\e937\";
}
.icon-brand-codepen:before {
  content: \"\\e938\";
}
.icon-brand-codiepie:before {
  content: \"\\e939\";
}
.icon-brand-connectdevelop:before {
  content: \"\\e93a\";
}
.icon-brand-contao:before {
  content: \"\\e93b\";
}
.icon-brand-cpanel:before {
  content: \"\\e93c\";
}
.icon-brand-creative-commons:before {
  content: \"\\e93d\";
}
.icon-brand-creative-commons-by:before {
  content: \"\\e93e\";
}
.icon-brand-creative-commons-nc:before {
  content: \"\\e93f\";
}
.icon-brand-creative-commons-nc-eu:before {
  content: \"\\e940\";
}
.icon-brand-creative-commons-nc-jp:before {
  content: \"\\e941\";
}
.icon-brand-creative-commons-nd:before {
  content: \"\\e942\";
}
.icon-brand-creative-commons-pd:before {
  content: \"\\e943\";
}
.icon-brand-creative-commons-pd-alt:before {
  content: \"\\e944\";
}
.icon-brand-creative-commons-remix:before {
  content: \"\\e945\";
}
.icon-brand-creative-commons-sa:before {
  content: \"\\e946\";
}
.icon-brand-creative-commons-sampling:before {
  content: \"\\e947\";
}
.icon-brand-creative-commons-sampling-plus:before {
  content: \"\\e948\";
}
.icon-brand-creative-commons-share:before {
  content: \"\\e949\";
}
.icon-brand-css3:before {
  content: \"\\e94a\";
}
.icon-brand-css3-alt:before {
  content: \"\\e94b\";
}
.icon-brand-cuttlefish:before {
  content: \"\\e94c\";
}
.icon-brand-d-and-d:before {
  content: \"\\e94d\";
}
.icon-brand-dashcube:before {
  content: \"\\e94e\";
}
.icon-brand-delicious:before {
  content: \"\\e94f\";
}
.icon-brand-deploydog:before {
  content: \"\\e950\";
}
.icon-brand-deskpro:before {
  content: \"\\e951\";
}
.icon-brand-deviantart:before {
  content: \"\\e952\";
}
.icon-brand-digg:before {
  content: \"\\e953\";
}
.icon-brand-digital-ocean:before {
  content: \"\\e954\";
}
.icon-brand-discord:before {
  content: \"\\e955\";
}
.icon-brand-discourse:before {
  content: \"\\e956\";
}
.icon-brand-dochub:before {
  content: \"\\e957\";
}
.icon-brand-docker:before {
  content: \"\\e958\";
}
.icon-brand-draft2digital:before {
  content: \"\\e959\";
}
.icon-brand-dribbble:before {
  content: \"\\e95a\";
}
.icon-brand-dribbble-square:before {
  content: \"\\e95b\";
}
.icon-brand-dropbox:before {
  content: \"\\e95c\";
}
.icon-brand-drupal:before {
  content: \"\\e95d\";
}
.icon-brand-dyalog:before {
  content: \"\\e95e\";
}
.icon-brand-earlybirds:before {
  content: \"\\e95f\";
}
.icon-brand-ebay:before {
  content: \"\\e960\";
}
.icon-brand-edge:before {
  content: \"\\e961\";
}
.icon-brand-elementor:before {
  content: \"\\e962\";
}
.icon-brand-ember:before {
  content: \"\\e963\";
}
.icon-brand-empire:before {
  content: \"\\e964\";
}
.icon-brand-envira:before {
  content: \"\\e965\";
}
.icon-brand-erlang:before {
  content: \"\\e966\";
}
.icon-brand-ethereum:before {
  content: \"\\e967\";
}
.icon-brand-etsy:before {
  content: \"\\e968\";
}
.icon-brand-expeditedssl:before {
  content: \"\\e969\";
}
.icon-brand-facebook:before {
  content: \"\\e96a\";
}
.icon-brand-facebook-f:before {
  content: \"\\e96b\";
}
.icon-brand-facebook-messenger:before {
  content: \"\\e96c\";
}
.icon-brand-facebook-square:before {
  content: \"\\e96d\";
}
.icon-brand-firefox:before {
  content: \"\\e96e\";
}
.icon-brand-firstdraft:before {
  content: \"\\e96f\";
}
.icon-brand-first-order:before {
  content: \"\\e970\";
}
.icon-brand-first-order-alt:before {
  content: \"\\e971\";
}
.icon-brand-flickr:before {
  content: \"\\e972\";
}
.icon-brand-flipboard:before {
  content: \"\\e973\";
}
.icon-brand-fly:before {
  content: \"\\e974\";
}
.icon-brand-font-awesome:before {
  content: \"\\e975\";
}
.icon-brand-font-awesome-alt:before {
  content: \"\\e976\";
}
.icon-brand-font-awesome-flag:before {
  content: \"\\e977\";
}
.icon-brand-fonticons:before {
  content: \"\\e978\";
}
.icon-brand-fonticons-fi:before {
  content: \"\\e979\";
}
.icon-brand-fort-awesome:before {
  content: \"\\e97a\";
}
.icon-brand-fort-awesome-alt:before {
  content: \"\\e97b\";
}
.icon-brand-forumbee:before {
  content: \"\\e97c\";
}
.icon-brand-foursquare:before {
  content: \"\\e97d\";
}
.icon-brand-freebsd:before {
  content: \"\\e97e\";
}
.icon-brand-free-code-camp:before {
  content: \"\\e97f\";
}
.icon-brand-fulcrum:before {
  content: \"\\e980\";
}
.icon-brand-galactic-republic:before {
  content: \"\\e981\";
}
.icon-brand-galactic-senate:before {
  content: \"\\e982\";
}
.icon-brand-get-pocket:before {
  content: \"\\e983\";
}
.icon-brand-gg:before {
  content: \"\\e984\";
}
.icon-brand-gg-circle:before {
  content: \"\\e985\";
}
.icon-brand-git:before {
  content: \"\\e986\";
}
.icon-brand-github:before {
  content: \"\\e987\";
}
.icon-brand-github-alt:before {
  content: \"\\e988\";
}
.icon-brand-github-square:before {
  content: \"\\e989\";
}
.icon-brand-gitkraken:before {
  content: \"\\e98a\";
}
.icon-brand-gitlab:before {
  content: \"\\e98b\";
}
.icon-brand-git-square:before {
  content: \"\\e98c\";
}
.icon-brand-gitter:before {
  content: \"\\e98d\";
}
.icon-brand-glide:before {
  content: \"\\e98e\";
}
.icon-brand-glide-g:before {
  content: \"\\e98f\";
}
.icon-brand-gofore:before {
  content: \"\\e990\";
}
.icon-brand-goodreads:before {
  content: \"\\e991\";
}
.icon-brand-goodreads-g:before {
  content: \"\\e992\";
}
.icon-brand-google:before {
  content: \"\\e993\";
}
.icon-brand-google-drive:before {
  content: \"\\e994\";
}
.icon-brand-google-play:before {
  content: \"\\e995\";
}
.icon-brand-google-plus:before {
  content: \"\\e996\";
}
.icon-brand-google-plus-g:before {
  content: \"\\e997\";
}
.icon-brand-google-plus-square:before {
  content: \"\\e998\";
}
.icon-brand-google-wallet:before {
  content: \"\\e999\";
}
.icon-brand-gratipay:before {
  content: \"\\e99a\";
}
.icon-brand-grav:before {
  content: \"\\e99b\";
}
.icon-brand-gripfire:before {
  content: \"\\e99c\";
}
.icon-brand-grunt:before {
  content: \"\\e99d\";
}
.icon-brand-gulp:before {
  content: \"\\e99e\";
}
.icon-brand-hacker-news:before {
  content: \"\\e99f\";
}
.icon-brand-hacker-news-square:before {
  content: \"\\e9a0\";
}
.icon-brand-hips:before {
  content: \"\\e9a1\";
}
.icon-brand-hire-a-helper:before {
  content: \"\\e9a2\";
}
.icon-brand-hooli:before {
  content: \"\\e9a3\";
}
.icon-brand-hotjar:before {
  content: \"\\e9a4\";
}
.icon-brand-houzz:before {
  content: \"\\e9a5\";
}
.icon-brand-html5:before {
  content: \"\\e9a6\";
}
.icon-brand-hubspot:before {
  content: \"\\e9a7\";
}
.icon-brand-imdb:before {
  content: \"\\e9a8\";
}
.icon-brand-instagram:before {
  content: \"\\e9a9\";
}
.icon-brand-internet-explorer:before {
  content: \"\\e9aa\";
}
.icon-brand-ioxhost:before {
  content: \"\\e9ab\";
}
.icon-brand-itunes:before {
  content: \"\\e9ac\";
}
.icon-brand-itunes-note:before {
  content: \"\\e9ad\";
}
.icon-brand-java:before {
  content: \"\\e9ae\";
}
.icon-brand-jedi-order:before {
  content: \"\\e9af\";
}
.icon-brand-jenkins:before {
  content: \"\\e9b0\";
}
.icon-brand-joget:before {
  content: \"\\e9b1\";
}
.icon-brand-joomla:before {
  content: \"\\e9b2\";
}
.icon-brand-js:before {
  content: \"\\e9b3\";
}
.icon-brand-jsfiddle:before {
  content: \"\\e9b4\";
}
.icon-brand-js-square:before {
  content: \"\\e9b5\";
}
.icon-brand-keybase:before {
  content: \"\\e9b6\";
}
.icon-brand-keycdn:before {
  content: \"\\e9b7\";
}
.icon-brand-kickstarter:before {
  content: \"\\e9b8\";
}
.icon-brand-kickstarter-k:before {
  content: \"\\e9b9\";
}
.icon-brand-korvue:before {
  content: \"\\e9ba\";
}
.icon-brand-laravel:before {
  content: \"\\e9bb\";
}
.icon-brand-lastfm:before {
  content: \"\\e9bc\";
}
.icon-brand-lastfm-square:before {
  content: \"\\e9bd\";
}
.icon-brand-leanpub:before {
  content: \"\\e9be\";
}
.icon-brand-less:before {
  content: \"\\e9bf\";
}
.icon-brand-line:before {
  content: \"\\e9c0\";
}
.icon-brand-linkedin:before {
  content: \"\\e9c1\";
}
.icon-brand-linkedin-in:before {
  content: \"\\e9c2\";
}
.icon-brand-linode:before {
  content: \"\\e9c3\";
}
.icon-brand-linux:before {
  content: \"\\e9c4\";
}
.icon-brand-lyft:before {
  content: \"\\e9c5\";
}
.icon-brand-magento:before {
  content: \"\\e9c6\";
}
.icon-brand-mandalorian:before {
  content: \"\\e9c7\";
}
.icon-brand-mastodon:before {
  content: \"\\e9c8\";
}
.icon-brand-maxcdn:before {
  content: \"\\e9c9\";
}
.icon-brand-medapps:before {
  content: \"\\e9ca\";
}
.icon-brand-medium:before {
  content: \"\\e9cb\";
}
.icon-brand-medium-m:before {
  content: \"\\e9cc\";
}
.icon-brand-medrt:before {
  content: \"\\e9cd\";
}
.icon-brand-meetup:before {
  content: \"\\e9ce\";
}
.icon-brand-microsoft:before {
  content: \"\\e9cf\";
}
.icon-brand-mix:before {
  content: \"\\e9d0\";
}
.icon-brand-mixcloud:before {
  content: \"\\e9d1\";
}
.icon-brand-mizuni:before {
  content: \"\\e9d2\";
}
.icon-brand-modx:before {
  content: \"\\e9d3\";
}
.icon-brand-monero:before {
  content: \"\\e9d4\";
}
.icon-brand-napster:before {
  content: \"\\e9d5\";
}
.icon-brand-nintendo-switch:before {
  content: \"\\e9d6\";
}
.icon-brand-node:before {
  content: \"\\e9d7\";
}
.icon-brand-node-js:before {
  content: \"\\e9d8\";
}
.icon-brand-npm:before {
  content: \"\\e9d9\";
}
.icon-brand-ns8:before {
  content: \"\\e9da\";
}
.icon-brand-nutritionix:before {
  content: \"\\e9db\";
}
.icon-brand-odnoklassniki:before {
  content: \"\\e9dc\";
}
.icon-brand-odnoklassniki-square:before {
  content: \"\\e9dd\";
}
.icon-brand-old-republic:before {
  content: \"\\e9de\";
}
.icon-brand-opencart:before {
  content: \"\\e9df\";
}
.icon-brand-openid:before {
  content: \"\\e9e0\";
}
.icon-brand-opera:before {
  content: \"\\e9e1\";
}
.icon-brand-optin-monster:before {
  content: \"\\e9e2\";
}
.icon-brand-osi:before {
  content: \"\\e9e3\";
}
.icon-brand-page4:before {
  content: \"\\e9e4\";
}
.icon-brand-pagelines:before {
  content: \"\\e9e5\";
}
.icon-brand-palfed:before {
  content: \"\\e9e6\";
}
.icon-brand-patreon:before {
  content: \"\\e9e7\";
}
.icon-brand-paypal:before {
  content: \"\\e9e8\";
}
.icon-brand-periscope:before {
  content: \"\\e9e9\";
}
.icon-brand-phabricator:before {
  content: \"\\e9ea\";
}
.icon-brand-phoenix-framework:before {
  content: \"\\e9eb\";
}
.icon-brand-phoenix-squadron:before {
  content: \"\\e9ec\";
}
.icon-brand-php:before {
  content: \"\\e9ed\";
}
.icon-brand-pied-piper:before {
  content: \"\\e9ee\";
}
.icon-brand-pied-piper-alt:before {
  content: \"\\e9ef\";
}
.icon-brand-pied-piper-hat:before {
  content: \"\\e9f0\";
}
.icon-brand-pied-piper-pp:before {
  content: \"\\e9f1\";
}
.icon-brand-pinterest:before {
  content: \"\\e9f2\";
}
.icon-brand-pinterest-p:before {
  content: \"\\e9f3\";
}
.icon-brand-pinterest-square:before {
  content: \"\\e9f4\";
}
.icon-brand-playstation:before {
  content: \"\\e9f5\";
}
.icon-brand-product-hunt:before {
  content: \"\\e9f6\";
}
.icon-brand-pushed:before {
  content: \"\\e9f7\";
}
.icon-brand-python:before {
  content: \"\\e9f8\";
}
.icon-brand-qq:before {
  content: \"\\e9f9\";
}
.icon-brand-quinscape:before {
  content: \"\\e9fa\";
}
.icon-brand-quora:before {
  content: \"\\e9fb\";
}
.icon-brand-ravelry:before {
  content: \"\\e9fc\";
}
.icon-brand-react:before {
  content: \"\\e9fd\";
}
.icon-brand-readme:before {
  content: \"\\e9fe\";
}
.icon-brand-rebel:before {
  content: \"\\e9ff\";
}
.icon-brand-reddit:before {
  content: \"\\ea00\";
}
.icon-brand-reddit-alien:before {
  content: \"\\ea01\";
}
.icon-brand-reddit-square:before {
  content: \"\\ea02\";
}
.icon-brand-red-river:before {
  content: \"\\ea03\";
}
.icon-brand-rendact:before {
  content: \"\\ea04\";
}
.icon-brand-renren:before {
  content: \"\\ea05\";
}
.icon-brand-replyd:before {
  content: \"\\ea06\";
}
.icon-brand-researchgate:before {
  content: \"\\ea07\";
}
.icon-brand-resolving:before {
  content: \"\\ea08\";
}
.icon-brand-rocketchat:before {
  content: \"\\ea09\";
}
.icon-brand-rockrms:before {
  content: \"\\ea0a\";
}
.icon-brand-r-project:before {
  content: \"\\ea0b\";
}
.icon-brand-safari:before {
  content: \"\\ea0c\";
}
.icon-brand-sass:before {
  content: \"\\ea0d\";
}
.icon-brand-schlix:before {
  content: \"\\ea0e\";
}
.icon-brand-scribd:before {
  content: \"\\ea0f\";
}
.icon-brand-searchengin:before {
  content: \"\\ea10\";
}
.icon-brand-sellcast:before {
  content: \"\\ea11\";
}
.icon-brand-sellsy:before {
  content: \"\\ea12\";
}
.icon-brand-servicestack:before {
  content: \"\\ea13\";
}
.icon-brand-shirtsinbulk:before {
  content: \"\\ea14\";
}
.icon-brand-simplybuilt:before {
  content: \"\\ea15\";
}
.icon-brand-sistrix:before {
  content: \"\\ea16\";
}
.icon-brand-sith:before {
  content: \"\\ea17\";
}
.icon-brand-skyatlas:before {
  content: \"\\ea18\";
}
.icon-brand-skype:before {
  content: \"\\ea19\";
}
.icon-brand-slack:before {
  content: \"\\ea1a\";
}
.icon-brand-slack-hash:before {
  content: \"\\ea1b\";
}
.icon-brand-slideshare:before {
  content: \"\\ea1c\";
}
.icon-brand-snapchat:before {
  content: \"\\ea1d\";
}
.icon-brand-snapchat-ghost:before {
  content: \"\\ea1e\";
}
.icon-brand-snapchat-square:before {
  content: \"\\ea1f\";
}
.icon-brand-soundcloud:before {
  content: \"\\ea20\";
}
.icon-brand-speakap:before {
  content: \"\\ea21\";
}
.icon-brand-spotify:before {
  content: \"\\ea22\";
}
.icon-brand-stack-exchange:before {
  content: \"\\ea23\";
}
.icon-brand-stack-overflow:before {
  content: \"\\ea24\";
}
.icon-brand-staylinked:before {
  content: \"\\ea25\";
}
.icon-brand-steam:before {
  content: \"\\ea26\";
}
.icon-brand-steam-square:before {
  content: \"\\ea27\";
}
.icon-brand-steam-symbol:before {
  content: \"\\ea28\";
}
.icon-brand-sticker-mule:before {
  content: \"\\ea29\";
}
.icon-brand-strava:before {
  content: \"\\ea2a\";
}
.icon-brand-stripe:before {
  content: \"\\ea2b\";
}
.icon-brand-stripe-s:before {
  content: \"\\ea2c\";
}
.icon-brand-studiovinari:before {
  content: \"\\ea2d\";
}
.icon-brand-stumbleupon:before {
  content: \"\\ea2e\";
}
.icon-brand-stumbleupon-circle:before {
  content: \"\\ea2f\";
}
.icon-brand-superpowers:before {
  content: \"\\ea30\";
}
.icon-brand-supple:before {
  content: \"\\ea31\";
}
.icon-brand-teamspeak:before {
  content: \"\\ea32\";
}
.icon-brand-telegram:before {
  content: \"\\ea33\";
}
.icon-brand-telegram-plane:before {
  content: \"\\ea34\";
}
.icon-brand-tencent-weibo:before {
  content: \"\\ea35\";
}
.icon-brand-themeisle:before {
  content: \"\\ea36\";
}
.icon-brand-trade-federation:before {
  content: \"\\ea37\";
}
.icon-brand-trello:before {
  content: \"\\ea38\";
}
.icon-brand-tripadvisor:before {
  content: \"\\ea39\";
}
.icon-brand-tumblr:before {
  content: \"\\ea3a\";
}
.icon-brand-tumblr-square:before {
  content: \"\\ea3b\";
}
.icon-brand-twitch:before {
  content: \"\\ea3c\";
}
.icon-brand-twitter:before {
  content: \"\\ea3d\";
}
.icon-brand-twitter-square:before {
  content: \"\\ea3e\";
}
.icon-brand-typo3:before {
  content: \"\\ea3f\";
}
.icon-brand-uber:before {
  content: \"\\ea40\";
}
.icon-brand-uikit:before {
  content: \"\\ea41\";
}
.icon-brand-uniregistry:before {
  content: \"\\ea42\";
}
.icon-brand-untappd:before {
  content: \"\\ea43\";
}
.icon-brand-usb:before {
  content: \"\\ea44\";
}
.icon-brand-ussunnah:before {
  content: \"\\ea45\";
}
.icon-brand-vaadin:before {
  content: \"\\ea46\";
}
.icon-brand-viacoin:before {
  content: \"\\ea47\";
}
.icon-brand-viadeo:before {
  content: \"\\ea48\";
}
.icon-brand-viadeo-square:before {
  content: \"\\ea49\";
}
.icon-brand-viber:before {
  content: \"\\ea4a\";
}
.icon-brand-vimeo:before {
  content: \"\\ea4b\";
}
.icon-brand-vimeo-square:before {
  content: \"\\ea4c\";
}
.icon-brand-vimeo-v:before {
  content: \"\\ea4d\";
}
.icon-brand-vine:before {
  content: \"\\ea4e\";
}
.icon-brand-vk:before {
  content: \"\\ea4f\";
}
.icon-brand-vnv:before {
  content: \"\\ea50\";
}
.icon-brand-vuejs:before {
  content: \"\\ea51\";
}
.icon-brand-weibo:before {
  content: \"\\ea52\";
}
.icon-brand-weixin:before {
  content: \"\\ea53\";
}
.icon-brand-whatsapp:before {
  content: \"\\ea54\";
}
.icon-brand-whatsapp-square:before {
  content: \"\\ea55\";
}
.icon-brand-whmcs:before {
  content: \"\\ea56\";
}
.icon-brand-wikipedia-w:before {
  content: \"\\ea57\";
}
.icon-brand-windows:before {
  content: \"\\ea58\";
}
.icon-brand-wolf-pack-battalion:before {
  content: \"\\ea59\";
}
.icon-brand-wordpress:before {
  content: \"\\ea5a\";
}
.icon-brand-wordpress-simple:before {
  content: \"\\ea5b\";
}
.icon-brand-wpbeginner:before {
  content: \"\\ea5c\";
}
.icon-brand-wpexplorer:before {
  content: \"\\ea5d\";
}
.icon-brand-wpforms:before {
  content: \"\\ea5e\";
}
.icon-brand-xbox:before {
  content: \"\\ea5f\";
}
.icon-brand-xing:before {
  content: \"\\ea60\";
}
.icon-brand-xing-square:before {
  content: \"\\ea61\";
}
.icon-brand-yahoo:before {
  content: \"\\ea62\";
}
.icon-brand-yandex:before {
  content: \"\\ea63\";
}
.icon-brand-yandex-international:before {
  content: \"\\ea64\";
}
.icon-brand-y-combinator:before {
  content: \"\\ea65\";
}
.icon-brand-yelp:before {
  content: \"\\ea66\";
}
.icon-brand-yoast:before {
  content: \"\\ea67\";
}
.icon-brand-youtube:before {
  content: \"\\ea68\";
}
.icon-brand-youtube-square:before {
  content: \"\\ea69\";
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/icons/_brand-icons.scss";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("@font-face {
  font-family: 'Brand-Icons';
  src:
    url('../fonts/Brand-Icons.ttf?blcw31') format('truetype'),
    url('../fonts/Brand-Icons.woff?blcw31') format('woff'),
    url('../fonts/Brand-Icons.svg?blcw31#Brand-Icons') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^=\"icon-brand-\"], [class*=\" icon-brand-\"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'Brand-Icons' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icon-brand-px:before {
  content: \"\\e900\";
}
.icon-brand-accessible-icon:before {
  content: \"\\e901\";
}
.icon-brand-accusoft:before {
  content: \"\\e902\";
}
.icon-brand-adn:before {
  content: \"\\e903\";
}
.icon-brand-adversal:before {
  content: \"\\e904\";
}
.icon-brand-affiliatetheme:before {
  content: \"\\e905\";
}
.icon-brand-algolia:before {
  content: \"\\e906\";
}
.icon-brand-amazon:before {
  content: \"\\e907\";
}
.icon-brand-amazon-pay:before {
  content: \"\\e908\";
}
.icon-brand-amilia:before {
  content: \"\\e909\";
}
.icon-brand-android:before {
  content: \"\\e90a\";
}
.icon-brand-angellist:before {
  content: \"\\e90b\";
}
.icon-brand-angrycreative:before {
  content: \"\\e90c\";
}
.icon-brand-angular:before {
  content: \"\\e90d\";
}
.icon-brand-apper:before {
  content: \"\\e90e\";
}
.icon-brand-apple:before {
  content: \"\\e90f\";
}
.icon-brand-apple-pay:before {
  content: \"\\e910\";
}
.icon-brand-app-store:before {
  content: \"\\e911\";
}
.icon-brand-app-store-ios:before {
  content: \"\\e912\";
}
.icon-brand-asymmetrik:before {
  content: \"\\e913\";
}
.icon-brand-audible:before {
  content: \"\\e914\";
}
.icon-brand-autoprefixer:before {
  content: \"\\e915\";
}
.icon-brand-avianex:before {
  content: \"\\e916\";
}
.icon-brand-aviato:before {
  content: \"\\e917\";
}
.icon-brand-aws:before {
  content: \"\\e918\";
}
.icon-brand-bandcamp:before {
  content: \"\\e919\";
}
.icon-brand-behance:before {
  content: \"\\e91a\";
}
.icon-brand-behance-square:before {
  content: \"\\e91b\";
}
.icon-brand-bimobject:before {
  content: \"\\e91c\";
}
.icon-brand-bitbucket:before {
  content: \"\\e91d\";
}
.icon-brand-bitcoin:before {
  content: \"\\e91e\";
}
.icon-brand-bity:before {
  content: \"\\e91f\";
}
.icon-brand-blackberry:before {
  content: \"\\e920\";
}
.icon-brand-black-tie:before {
  content: \"\\e921\";
}
.icon-brand-blogger:before {
  content: \"\\e922\";
}
.icon-brand-blogger-b:before {
  content: \"\\e923\";
}
.icon-brand-bluetooth:before {
  content: \"\\e924\";
}
.icon-brand-bluetooth-b:before {
  content: \"\\e925\";
}
.icon-brand-btc:before {
  content: \"\\e926\";
}
.icon-brand-buromobelexperte:before {
  content: \"\\e927\";
}
.icon-brand-buysellads:before {
  content: \"\\e928\";
}
.icon-brand-cc-amazon-pay:before {
  content: \"\\e929\";
}
.icon-brand-cc-amex:before {
  content: \"\\e92a\";
}
.icon-brand-cc-apple-pay:before {
  content: \"\\e92b\";
}
.icon-brand-cc-diners-club:before {
  content: \"\\e92c\";
}
.icon-brand-cc-discover:before {
  content: \"\\e92d\";
}
.icon-brand-cc-jcb:before {
  content: \"\\e92e\";
}
.icon-brand-cc-mastercard:before {
  content: \"\\e92f\";
}
.icon-brand-cc-paypal:before {
  content: \"\\e930\";
}
.icon-brand-cc-stripe:before {
  content: \"\\e931\";
}
.icon-brand-cc-visa:before {
  content: \"\\e932\";
}
.icon-brand-centercode:before {
  content: \"\\e933\";
}
.icon-brand-chrome:before {
  content: \"\\e934\";
}
.icon-brand-cloudscale:before {
  content: \"\\e935\";
}
.icon-brand-cloudsmith:before {
  content: \"\\e936\";
}
.icon-brand-cloudversify:before {
  content: \"\\e937\";
}
.icon-brand-codepen:before {
  content: \"\\e938\";
}
.icon-brand-codiepie:before {
  content: \"\\e939\";
}
.icon-brand-connectdevelop:before {
  content: \"\\e93a\";
}
.icon-brand-contao:before {
  content: \"\\e93b\";
}
.icon-brand-cpanel:before {
  content: \"\\e93c\";
}
.icon-brand-creative-commons:before {
  content: \"\\e93d\";
}
.icon-brand-creative-commons-by:before {
  content: \"\\e93e\";
}
.icon-brand-creative-commons-nc:before {
  content: \"\\e93f\";
}
.icon-brand-creative-commons-nc-eu:before {
  content: \"\\e940\";
}
.icon-brand-creative-commons-nc-jp:before {
  content: \"\\e941\";
}
.icon-brand-creative-commons-nd:before {
  content: \"\\e942\";
}
.icon-brand-creative-commons-pd:before {
  content: \"\\e943\";
}
.icon-brand-creative-commons-pd-alt:before {
  content: \"\\e944\";
}
.icon-brand-creative-commons-remix:before {
  content: \"\\e945\";
}
.icon-brand-creative-commons-sa:before {
  content: \"\\e946\";
}
.icon-brand-creative-commons-sampling:before {
  content: \"\\e947\";
}
.icon-brand-creative-commons-sampling-plus:before {
  content: \"\\e948\";
}
.icon-brand-creative-commons-share:before {
  content: \"\\e949\";
}
.icon-brand-css3:before {
  content: \"\\e94a\";
}
.icon-brand-css3-alt:before {
  content: \"\\e94b\";
}
.icon-brand-cuttlefish:before {
  content: \"\\e94c\";
}
.icon-brand-d-and-d:before {
  content: \"\\e94d\";
}
.icon-brand-dashcube:before {
  content: \"\\e94e\";
}
.icon-brand-delicious:before {
  content: \"\\e94f\";
}
.icon-brand-deploydog:before {
  content: \"\\e950\";
}
.icon-brand-deskpro:before {
  content: \"\\e951\";
}
.icon-brand-deviantart:before {
  content: \"\\e952\";
}
.icon-brand-digg:before {
  content: \"\\e953\";
}
.icon-brand-digital-ocean:before {
  content: \"\\e954\";
}
.icon-brand-discord:before {
  content: \"\\e955\";
}
.icon-brand-discourse:before {
  content: \"\\e956\";
}
.icon-brand-dochub:before {
  content: \"\\e957\";
}
.icon-brand-docker:before {
  content: \"\\e958\";
}
.icon-brand-draft2digital:before {
  content: \"\\e959\";
}
.icon-brand-dribbble:before {
  content: \"\\e95a\";
}
.icon-brand-dribbble-square:before {
  content: \"\\e95b\";
}
.icon-brand-dropbox:before {
  content: \"\\e95c\";
}
.icon-brand-drupal:before {
  content: \"\\e95d\";
}
.icon-brand-dyalog:before {
  content: \"\\e95e\";
}
.icon-brand-earlybirds:before {
  content: \"\\e95f\";
}
.icon-brand-ebay:before {
  content: \"\\e960\";
}
.icon-brand-edge:before {
  content: \"\\e961\";
}
.icon-brand-elementor:before {
  content: \"\\e962\";
}
.icon-brand-ember:before {
  content: \"\\e963\";
}
.icon-brand-empire:before {
  content: \"\\e964\";
}
.icon-brand-envira:before {
  content: \"\\e965\";
}
.icon-brand-erlang:before {
  content: \"\\e966\";
}
.icon-brand-ethereum:before {
  content: \"\\e967\";
}
.icon-brand-etsy:before {
  content: \"\\e968\";
}
.icon-brand-expeditedssl:before {
  content: \"\\e969\";
}
.icon-brand-facebook:before {
  content: \"\\e96a\";
}
.icon-brand-facebook-f:before {
  content: \"\\e96b\";
}
.icon-brand-facebook-messenger:before {
  content: \"\\e96c\";
}
.icon-brand-facebook-square:before {
  content: \"\\e96d\";
}
.icon-brand-firefox:before {
  content: \"\\e96e\";
}
.icon-brand-firstdraft:before {
  content: \"\\e96f\";
}
.icon-brand-first-order:before {
  content: \"\\e970\";
}
.icon-brand-first-order-alt:before {
  content: \"\\e971\";
}
.icon-brand-flickr:before {
  content: \"\\e972\";
}
.icon-brand-flipboard:before {
  content: \"\\e973\";
}
.icon-brand-fly:before {
  content: \"\\e974\";
}
.icon-brand-font-awesome:before {
  content: \"\\e975\";
}
.icon-brand-font-awesome-alt:before {
  content: \"\\e976\";
}
.icon-brand-font-awesome-flag:before {
  content: \"\\e977\";
}
.icon-brand-fonticons:before {
  content: \"\\e978\";
}
.icon-brand-fonticons-fi:before {
  content: \"\\e979\";
}
.icon-brand-fort-awesome:before {
  content: \"\\e97a\";
}
.icon-brand-fort-awesome-alt:before {
  content: \"\\e97b\";
}
.icon-brand-forumbee:before {
  content: \"\\e97c\";
}
.icon-brand-foursquare:before {
  content: \"\\e97d\";
}
.icon-brand-freebsd:before {
  content: \"\\e97e\";
}
.icon-brand-free-code-camp:before {
  content: \"\\e97f\";
}
.icon-brand-fulcrum:before {
  content: \"\\e980\";
}
.icon-brand-galactic-republic:before {
  content: \"\\e981\";
}
.icon-brand-galactic-senate:before {
  content: \"\\e982\";
}
.icon-brand-get-pocket:before {
  content: \"\\e983\";
}
.icon-brand-gg:before {
  content: \"\\e984\";
}
.icon-brand-gg-circle:before {
  content: \"\\e985\";
}
.icon-brand-git:before {
  content: \"\\e986\";
}
.icon-brand-github:before {
  content: \"\\e987\";
}
.icon-brand-github-alt:before {
  content: \"\\e988\";
}
.icon-brand-github-square:before {
  content: \"\\e989\";
}
.icon-brand-gitkraken:before {
  content: \"\\e98a\";
}
.icon-brand-gitlab:before {
  content: \"\\e98b\";
}
.icon-brand-git-square:before {
  content: \"\\e98c\";
}
.icon-brand-gitter:before {
  content: \"\\e98d\";
}
.icon-brand-glide:before {
  content: \"\\e98e\";
}
.icon-brand-glide-g:before {
  content: \"\\e98f\";
}
.icon-brand-gofore:before {
  content: \"\\e990\";
}
.icon-brand-goodreads:before {
  content: \"\\e991\";
}
.icon-brand-goodreads-g:before {
  content: \"\\e992\";
}
.icon-brand-google:before {
  content: \"\\e993\";
}
.icon-brand-google-drive:before {
  content: \"\\e994\";
}
.icon-brand-google-play:before {
  content: \"\\e995\";
}
.icon-brand-google-plus:before {
  content: \"\\e996\";
}
.icon-brand-google-plus-g:before {
  content: \"\\e997\";
}
.icon-brand-google-plus-square:before {
  content: \"\\e998\";
}
.icon-brand-google-wallet:before {
  content: \"\\e999\";
}
.icon-brand-gratipay:before {
  content: \"\\e99a\";
}
.icon-brand-grav:before {
  content: \"\\e99b\";
}
.icon-brand-gripfire:before {
  content: \"\\e99c\";
}
.icon-brand-grunt:before {
  content: \"\\e99d\";
}
.icon-brand-gulp:before {
  content: \"\\e99e\";
}
.icon-brand-hacker-news:before {
  content: \"\\e99f\";
}
.icon-brand-hacker-news-square:before {
  content: \"\\e9a0\";
}
.icon-brand-hips:before {
  content: \"\\e9a1\";
}
.icon-brand-hire-a-helper:before {
  content: \"\\e9a2\";
}
.icon-brand-hooli:before {
  content: \"\\e9a3\";
}
.icon-brand-hotjar:before {
  content: \"\\e9a4\";
}
.icon-brand-houzz:before {
  content: \"\\e9a5\";
}
.icon-brand-html5:before {
  content: \"\\e9a6\";
}
.icon-brand-hubspot:before {
  content: \"\\e9a7\";
}
.icon-brand-imdb:before {
  content: \"\\e9a8\";
}
.icon-brand-instagram:before {
  content: \"\\e9a9\";
}
.icon-brand-internet-explorer:before {
  content: \"\\e9aa\";
}
.icon-brand-ioxhost:before {
  content: \"\\e9ab\";
}
.icon-brand-itunes:before {
  content: \"\\e9ac\";
}
.icon-brand-itunes-note:before {
  content: \"\\e9ad\";
}
.icon-brand-java:before {
  content: \"\\e9ae\";
}
.icon-brand-jedi-order:before {
  content: \"\\e9af\";
}
.icon-brand-jenkins:before {
  content: \"\\e9b0\";
}
.icon-brand-joget:before {
  content: \"\\e9b1\";
}
.icon-brand-joomla:before {
  content: \"\\e9b2\";
}
.icon-brand-js:before {
  content: \"\\e9b3\";
}
.icon-brand-jsfiddle:before {
  content: \"\\e9b4\";
}
.icon-brand-js-square:before {
  content: \"\\e9b5\";
}
.icon-brand-keybase:before {
  content: \"\\e9b6\";
}
.icon-brand-keycdn:before {
  content: \"\\e9b7\";
}
.icon-brand-kickstarter:before {
  content: \"\\e9b8\";
}
.icon-brand-kickstarter-k:before {
  content: \"\\e9b9\";
}
.icon-brand-korvue:before {
  content: \"\\e9ba\";
}
.icon-brand-laravel:before {
  content: \"\\e9bb\";
}
.icon-brand-lastfm:before {
  content: \"\\e9bc\";
}
.icon-brand-lastfm-square:before {
  content: \"\\e9bd\";
}
.icon-brand-leanpub:before {
  content: \"\\e9be\";
}
.icon-brand-less:before {
  content: \"\\e9bf\";
}
.icon-brand-line:before {
  content: \"\\e9c0\";
}
.icon-brand-linkedin:before {
  content: \"\\e9c1\";
}
.icon-brand-linkedin-in:before {
  content: \"\\e9c2\";
}
.icon-brand-linode:before {
  content: \"\\e9c3\";
}
.icon-brand-linux:before {
  content: \"\\e9c4\";
}
.icon-brand-lyft:before {
  content: \"\\e9c5\";
}
.icon-brand-magento:before {
  content: \"\\e9c6\";
}
.icon-brand-mandalorian:before {
  content: \"\\e9c7\";
}
.icon-brand-mastodon:before {
  content: \"\\e9c8\";
}
.icon-brand-maxcdn:before {
  content: \"\\e9c9\";
}
.icon-brand-medapps:before {
  content: \"\\e9ca\";
}
.icon-brand-medium:before {
  content: \"\\e9cb\";
}
.icon-brand-medium-m:before {
  content: \"\\e9cc\";
}
.icon-brand-medrt:before {
  content: \"\\e9cd\";
}
.icon-brand-meetup:before {
  content: \"\\e9ce\";
}
.icon-brand-microsoft:before {
  content: \"\\e9cf\";
}
.icon-brand-mix:before {
  content: \"\\e9d0\";
}
.icon-brand-mixcloud:before {
  content: \"\\e9d1\";
}
.icon-brand-mizuni:before {
  content: \"\\e9d2\";
}
.icon-brand-modx:before {
  content: \"\\e9d3\";
}
.icon-brand-monero:before {
  content: \"\\e9d4\";
}
.icon-brand-napster:before {
  content: \"\\e9d5\";
}
.icon-brand-nintendo-switch:before {
  content: \"\\e9d6\";
}
.icon-brand-node:before {
  content: \"\\e9d7\";
}
.icon-brand-node-js:before {
  content: \"\\e9d8\";
}
.icon-brand-npm:before {
  content: \"\\e9d9\";
}
.icon-brand-ns8:before {
  content: \"\\e9da\";
}
.icon-brand-nutritionix:before {
  content: \"\\e9db\";
}
.icon-brand-odnoklassniki:before {
  content: \"\\e9dc\";
}
.icon-brand-odnoklassniki-square:before {
  content: \"\\e9dd\";
}
.icon-brand-old-republic:before {
  content: \"\\e9de\";
}
.icon-brand-opencart:before {
  content: \"\\e9df\";
}
.icon-brand-openid:before {
  content: \"\\e9e0\";
}
.icon-brand-opera:before {
  content: \"\\e9e1\";
}
.icon-brand-optin-monster:before {
  content: \"\\e9e2\";
}
.icon-brand-osi:before {
  content: \"\\e9e3\";
}
.icon-brand-page4:before {
  content: \"\\e9e4\";
}
.icon-brand-pagelines:before {
  content: \"\\e9e5\";
}
.icon-brand-palfed:before {
  content: \"\\e9e6\";
}
.icon-brand-patreon:before {
  content: \"\\e9e7\";
}
.icon-brand-paypal:before {
  content: \"\\e9e8\";
}
.icon-brand-periscope:before {
  content: \"\\e9e9\";
}
.icon-brand-phabricator:before {
  content: \"\\e9ea\";
}
.icon-brand-phoenix-framework:before {
  content: \"\\e9eb\";
}
.icon-brand-phoenix-squadron:before {
  content: \"\\e9ec\";
}
.icon-brand-php:before {
  content: \"\\e9ed\";
}
.icon-brand-pied-piper:before {
  content: \"\\e9ee\";
}
.icon-brand-pied-piper-alt:before {
  content: \"\\e9ef\";
}
.icon-brand-pied-piper-hat:before {
  content: \"\\e9f0\";
}
.icon-brand-pied-piper-pp:before {
  content: \"\\e9f1\";
}
.icon-brand-pinterest:before {
  content: \"\\e9f2\";
}
.icon-brand-pinterest-p:before {
  content: \"\\e9f3\";
}
.icon-brand-pinterest-square:before {
  content: \"\\e9f4\";
}
.icon-brand-playstation:before {
  content: \"\\e9f5\";
}
.icon-brand-product-hunt:before {
  content: \"\\e9f6\";
}
.icon-brand-pushed:before {
  content: \"\\e9f7\";
}
.icon-brand-python:before {
  content: \"\\e9f8\";
}
.icon-brand-qq:before {
  content: \"\\e9f9\";
}
.icon-brand-quinscape:before {
  content: \"\\e9fa\";
}
.icon-brand-quora:before {
  content: \"\\e9fb\";
}
.icon-brand-ravelry:before {
  content: \"\\e9fc\";
}
.icon-brand-react:before {
  content: \"\\e9fd\";
}
.icon-brand-readme:before {
  content: \"\\e9fe\";
}
.icon-brand-rebel:before {
  content: \"\\e9ff\";
}
.icon-brand-reddit:before {
  content: \"\\ea00\";
}
.icon-brand-reddit-alien:before {
  content: \"\\ea01\";
}
.icon-brand-reddit-square:before {
  content: \"\\ea02\";
}
.icon-brand-red-river:before {
  content: \"\\ea03\";
}
.icon-brand-rendact:before {
  content: \"\\ea04\";
}
.icon-brand-renren:before {
  content: \"\\ea05\";
}
.icon-brand-replyd:before {
  content: \"\\ea06\";
}
.icon-brand-researchgate:before {
  content: \"\\ea07\";
}
.icon-brand-resolving:before {
  content: \"\\ea08\";
}
.icon-brand-rocketchat:before {
  content: \"\\ea09\";
}
.icon-brand-rockrms:before {
  content: \"\\ea0a\";
}
.icon-brand-r-project:before {
  content: \"\\ea0b\";
}
.icon-brand-safari:before {
  content: \"\\ea0c\";
}
.icon-brand-sass:before {
  content: \"\\ea0d\";
}
.icon-brand-schlix:before {
  content: \"\\ea0e\";
}
.icon-brand-scribd:before {
  content: \"\\ea0f\";
}
.icon-brand-searchengin:before {
  content: \"\\ea10\";
}
.icon-brand-sellcast:before {
  content: \"\\ea11\";
}
.icon-brand-sellsy:before {
  content: \"\\ea12\";
}
.icon-brand-servicestack:before {
  content: \"\\ea13\";
}
.icon-brand-shirtsinbulk:before {
  content: \"\\ea14\";
}
.icon-brand-simplybuilt:before {
  content: \"\\ea15\";
}
.icon-brand-sistrix:before {
  content: \"\\ea16\";
}
.icon-brand-sith:before {
  content: \"\\ea17\";
}
.icon-brand-skyatlas:before {
  content: \"\\ea18\";
}
.icon-brand-skype:before {
  content: \"\\ea19\";
}
.icon-brand-slack:before {
  content: \"\\ea1a\";
}
.icon-brand-slack-hash:before {
  content: \"\\ea1b\";
}
.icon-brand-slideshare:before {
  content: \"\\ea1c\";
}
.icon-brand-snapchat:before {
  content: \"\\ea1d\";
}
.icon-brand-snapchat-ghost:before {
  content: \"\\ea1e\";
}
.icon-brand-snapchat-square:before {
  content: \"\\ea1f\";
}
.icon-brand-soundcloud:before {
  content: \"\\ea20\";
}
.icon-brand-speakap:before {
  content: \"\\ea21\";
}
.icon-brand-spotify:before {
  content: \"\\ea22\";
}
.icon-brand-stack-exchange:before {
  content: \"\\ea23\";
}
.icon-brand-stack-overflow:before {
  content: \"\\ea24\";
}
.icon-brand-staylinked:before {
  content: \"\\ea25\";
}
.icon-brand-steam:before {
  content: \"\\ea26\";
}
.icon-brand-steam-square:before {
  content: \"\\ea27\";
}
.icon-brand-steam-symbol:before {
  content: \"\\ea28\";
}
.icon-brand-sticker-mule:before {
  content: \"\\ea29\";
}
.icon-brand-strava:before {
  content: \"\\ea2a\";
}
.icon-brand-stripe:before {
  content: \"\\ea2b\";
}
.icon-brand-stripe-s:before {
  content: \"\\ea2c\";
}
.icon-brand-studiovinari:before {
  content: \"\\ea2d\";
}
.icon-brand-stumbleupon:before {
  content: \"\\ea2e\";
}
.icon-brand-stumbleupon-circle:before {
  content: \"\\ea2f\";
}
.icon-brand-superpowers:before {
  content: \"\\ea30\";
}
.icon-brand-supple:before {
  content: \"\\ea31\";
}
.icon-brand-teamspeak:before {
  content: \"\\ea32\";
}
.icon-brand-telegram:before {
  content: \"\\ea33\";
}
.icon-brand-telegram-plane:before {
  content: \"\\ea34\";
}
.icon-brand-tencent-weibo:before {
  content: \"\\ea35\";
}
.icon-brand-themeisle:before {
  content: \"\\ea36\";
}
.icon-brand-trade-federation:before {
  content: \"\\ea37\";
}
.icon-brand-trello:before {
  content: \"\\ea38\";
}
.icon-brand-tripadvisor:before {
  content: \"\\ea39\";
}
.icon-brand-tumblr:before {
  content: \"\\ea3a\";
}
.icon-brand-tumblr-square:before {
  content: \"\\ea3b\";
}
.icon-brand-twitch:before {
  content: \"\\ea3c\";
}
.icon-brand-twitter:before {
  content: \"\\ea3d\";
}
.icon-brand-twitter-square:before {
  content: \"\\ea3e\";
}
.icon-brand-typo3:before {
  content: \"\\ea3f\";
}
.icon-brand-uber:before {
  content: \"\\ea40\";
}
.icon-brand-uikit:before {
  content: \"\\ea41\";
}
.icon-brand-uniregistry:before {
  content: \"\\ea42\";
}
.icon-brand-untappd:before {
  content: \"\\ea43\";
}
.icon-brand-usb:before {
  content: \"\\ea44\";
}
.icon-brand-ussunnah:before {
  content: \"\\ea45\";
}
.icon-brand-vaadin:before {
  content: \"\\ea46\";
}
.icon-brand-viacoin:before {
  content: \"\\ea47\";
}
.icon-brand-viadeo:before {
  content: \"\\ea48\";
}
.icon-brand-viadeo-square:before {
  content: \"\\ea49\";
}
.icon-brand-viber:before {
  content: \"\\ea4a\";
}
.icon-brand-vimeo:before {
  content: \"\\ea4b\";
}
.icon-brand-vimeo-square:before {
  content: \"\\ea4c\";
}
.icon-brand-vimeo-v:before {
  content: \"\\ea4d\";
}
.icon-brand-vine:before {
  content: \"\\ea4e\";
}
.icon-brand-vk:before {
  content: \"\\ea4f\";
}
.icon-brand-vnv:before {
  content: \"\\ea50\";
}
.icon-brand-vuejs:before {
  content: \"\\ea51\";
}
.icon-brand-weibo:before {
  content: \"\\ea52\";
}
.icon-brand-weixin:before {
  content: \"\\ea53\";
}
.icon-brand-whatsapp:before {
  content: \"\\ea54\";
}
.icon-brand-whatsapp-square:before {
  content: \"\\ea55\";
}
.icon-brand-whmcs:before {
  content: \"\\ea56\";
}
.icon-brand-wikipedia-w:before {
  content: \"\\ea57\";
}
.icon-brand-windows:before {
  content: \"\\ea58\";
}
.icon-brand-wolf-pack-battalion:before {
  content: \"\\ea59\";
}
.icon-brand-wordpress:before {
  content: \"\\ea5a\";
}
.icon-brand-wordpress-simple:before {
  content: \"\\ea5b\";
}
.icon-brand-wpbeginner:before {
  content: \"\\ea5c\";
}
.icon-brand-wpexplorer:before {
  content: \"\\ea5d\";
}
.icon-brand-wpforms:before {
  content: \"\\ea5e\";
}
.icon-brand-xbox:before {
  content: \"\\ea5f\";
}
.icon-brand-xing:before {
  content: \"\\ea60\";
}
.icon-brand-xing-square:before {
  content: \"\\ea61\";
}
.icon-brand-yahoo:before {
  content: \"\\ea62\";
}
.icon-brand-yandex:before {
  content: \"\\ea63\";
}
.icon-brand-yandex-international:before {
  content: \"\\ea64\";
}
.icon-brand-y-combinator:before {
  content: \"\\ea65\";
}
.icon-brand-yelp:before {
  content: \"\\ea66\";
}
.icon-brand-yoast:before {
  content: \"\\ea67\";
}
.icon-brand-youtube:before {
  content: \"\\ea68\";
}
.icon-brand-youtube-square:before {
  content: \"\\ea69\";
}
", "@Publication/Front/sass/icons/_brand-icons.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\icons\\_brand-icons.scss");
    }
}
