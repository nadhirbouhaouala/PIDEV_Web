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

/* @Publication/Front/sass/icons/_material-icons.scss */
class __TwigTemplate_047d15cd2a36e90356dfb09d3343b13e4a7357f0069c8aba9149950b498d71fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/icons/_material-icons.scss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Publication/Front/sass/icons/_material-icons.scss"));

        // line 1
        echo "
/*!
 * Material Icons (https://material.io/tools/icons/)
 * Apache license version 2.0
 */

@font-face {
  font-family: 'Material-Icons';
  src:
    url('../fonts/Material-Icons.ttf?e8u1sb') format('truetype'),
    url('../fonts/Material-Icons.woff?e8u1sb') format('woff'),
    url('../fonts/Material-Icons.svg?e8u1sb#Material-Icons') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^=\"icon-material-\"], [class*=\" icon-material-\"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'Material-Icons' !important;
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

.icon-material-outline-dashboard:before {
  content: \"\\e997\";
}
.icon-material-outline-arrow-back:before {
  content: \"\\e993\";
}
.icon-material-outline-arrow-forward:before {
  content: \"\\e994\";
}
.icon-material-outline-arrow-right-alt:before {
  content: \"\\e995\";
}
.icon-material-outline-gavel:before {
  content: \"\\e996\";
}
.icon-material-baseline-mail-outline:before {
  content: \"\\e900\";
}
.icon-material-baseline-notifications-none:before {
  content: \"\\e901\";
}
.icon-material-baseline-star-border:before {
  content: \"\\e902\";
}
.icon-material-outline-access-alarm:before {
  content: \"\\e903\";
}
.icon-material-outline-access-time:before {
  content: \"\\e904\";
}
.icon-material-outline-account-balance-wallet:before {
  content: \"\\e905\";
}
.icon-material-outline-account-balance:before {
  content: \"\\e906\";
}
.icon-material-outline-account-circle:before {
  content: \"\\e907\";
}
.icon-material-outline-add-a-photo:before {
  content: \"\\e908\";
}
.icon-material-outline-add-circle-outline:before {
  content: \"\\e909\";
}
.icon-material-outline-add-location:before {
  content: \"\\e90a\";
}
.icon-material-outline-add-photo-alternate:before {
  content: \"\\e90b\";
}
.icon-material-outline-add-shopping-cart:before {
  content: \"\\e90c\";
}
.icon-material-outline-add:before {
  content: \"\\e90d\";
}
.icon-material-outline-alarm-add:before {
  content: \"\\e90e\";
}
.icon-material-outline-alarm-off:before {
  content: \"\\e90f\";
}
.icon-material-outline-alarm-on:before {
  content: \"\\e910\";
}
.icon-material-outline-alarm:before {
  content: \"\\e911\";
}
.icon-material-outline-announcement:before {
  content: \"\\e912\";
}
.icon-material-outline-archive:before {
  content: \"\\e913\";
}
.icon-material-outline-arrow-drop-down:before {
  content: \"\\e914\";
}
.icon-material-outline-arrow-drop-up:before {
  content: \"\\e915\";
}
.icon-material-outline-arrow-left:before {
  content: \"\\e916\";
}
.icon-material-outline-arrow-right:before {
  content: \"\\e917\";
}
.icon-material-outline-assessment:before {
  content: \"\\e918\";
}
.icon-material-outline-assignment:before {
  content: \"\\e919\";
}
.icon-material-outline-attach-file:before {
  content: \"\\e91a\";
}
.icon-material-outline-autorenew:before {
  content: \"\\e91b\";
}
.icon-material-outline-battery-charging-full:before {
  content: \"\\e91c\";
}
.icon-material-outline-beach-access:before {
  content: \"\\e91d\";
}
.icon-material-outline-book:before {
  content: \"\\e91e\";
}
.icon-material-outline-bookmark-border:before {
  content: \"\\e91f\";
}
.icon-material-outline-bookmarks:before {
  content: \"\\e920\";
}
.icon-material-outline-broken-image:before {
  content: \"\\e921\";
}
.icon-material-outline-brush:before {
  content: \"\\e922\";
}
.icon-material-outline-bug-report:before {
  content: \"\\e923\";
}
.icon-material-outline-business-center:before {
  content: \"\\e924\";
}
.icon-material-outline-business:before {
  content: \"\\e925\";
}
.icon-material-outline-cake:before {
  content: \"\\e926\";
}
.icon-material-outline-check-circle:before {
  content: \"\\e927\";
}
.icon-material-outline-check:before {
  content: \"\\e928\";
}
.icon-material-outline-cloud:before {
  content: \"\\e929\";
}
.icon-material-outline-code:before {
  content: \"\\e92a\";
}
.icon-material-outline-compare-arrows:before {
  content: \"\\e92b\";
}
.icon-material-outline-computer:before {
  content: \"\\e92c\";
}
.icon-material-outline-contact-support:before {
  content: \"\\e92d\";
}
.icon-material-outline-credit-card:before {
  content: \"\\e92e\";
}
.icon-material-outline-crop-original:before {
  content: \"\\e92f\";
}
.icon-material-outline-date-range:before {
  content: \"\\e930\";
}
.icon-material-outline-delete:before {
  content: \"\\e931\";
}
.icon-material-outline-description:before {
  content: \"\\e932\";
}
.icon-material-outline-desktop-mac:before {
  content: \"\\e933\";
}
.icon-material-outline-desktop-windows:before {
  content: \"\\e934\";
}
.icon-material-outline-directions-car:before {
  content: \"\\e935\";
}
.icon-material-outline-dns:before {
  content: \"\\e936\";
}
.icon-material-outline-drafts:before {
  content: \"\\e937\";
}
.icon-material-outline-email:before {
  content: \"\\e938\";
}
.icon-material-outline-explore:before {
  content: \"\\e939\";
}
.icon-material-outline-extension:before {
  content: \"\\e93a\";
}
.icon-material-outline-face:before {
  content: \"\\e93b\";
}
.icon-material-outline-favorite-border:before {
  content: \"\\e93c\";
}
.icon-material-outline-favorite:before {
  content: \"\\e93d\";
}
.icon-material-outline-feedback:before {
  content: \"\\e93e\";
}
.icon-material-outline-file-copy:before {
  content: \"\\e93f\";
}
.icon-material-outline-filter-none:before {
  content: \"\\e940\";
}
.icon-material-outline-find-in-page:before {
  content: \"\\e941\";
}
.icon-material-outline-fingerprint:before {
  content: \"\\e942\";
}
.icon-material-outline-flight:before {
  content: \"\\e943\";
}
.icon-material-outline-flip-to-back:before {
  content: \"\\e944\";
}
.icon-material-outline-flip-to-front:before {
  content: \"\\e945\";
}
.icon-material-outline-folder-shared:before {
  content: \"\\e946\";
}
.icon-material-outline-folder:before {
  content: \"\\e947\";
}
.icon-material-outline-format-quote:before {
  content: \"\\e948\";
}
.icon-material-outline-format-shapes:before {
  content: \"\\e949\";
}
.icon-material-outline-forum:before {
  content: \"\\e94a\";
}
.icon-material-outline-free-breakfast:before {
  content: \"\\e94b\";
}
.icon-material-outline-gps-fixed:before {
  content: \"\\e94c\";
}
.icon-material-outline-group:before {
  content: \"\\e94d\";
}
.icon-material-outline-help-outline:before {
  content: \"\\e94e\";
}
.icon-material-outline-highlight-off:before {
  content: \"\\e94f\";
}
.icon-material-outline-history:before {
  content: \"\\e950\";
}
.icon-material-outline-home:before {
  content: \"\\e951\";
}
.icon-material-outline-hotel:before {
  content: \"\\e952\";
}
.icon-material-outline-https:before {
  content: \"\\e953\";
}
.icon-material-outline-info:before {
  content: \"\\e954\";
}
.icon-material-outline-input:before {
  content: \"\\e955\";
}
.icon-material-outline-insert-photo:before {
  content: \"\\e956\";
}
.icon-material-outline-keyboard-arrow-down:before {
  content: \"\\e957\";
}
.icon-material-outline-keyboard-arrow-left:before {
  content: \"\\e958\";
}
.icon-material-outline-keyboard-arrow-right:before {
  content: \"\\e959\";
}
.icon-material-outline-keyboard-arrow-up:before {
  content: \"\\e95a\";
}
.icon-material-outline-language:before {
  content: \"\\e95b\";
}
.icon-material-outline-launch:before {
  content: \"\\e95c\";
}
.icon-material-outline-layers:before {
  content: \"\\e95d\";
}
.icon-material-outline-library-add:before {
  content: \"\\e95e\";
}
.icon-material-outline-library-books:before {
  content: \"\\e95f\";
}
.icon-material-outline-local-atm:before {
  content: \"\\e960\";
}
.icon-material-outline-local-offer:before {
  content: \"\\e961\";
}
.icon-material-outline-location-city:before {
  content: \"\\e962\";
}
.icon-material-outline-location-off:before {
  content: \"\\e963\";
}
.icon-material-outline-location-on:before {
  content: \"\\e964\";
}
.icon-material-outline-lock-open:before {
  content: \"\\e965\";
}
.icon-material-outline-lock:before {
  content: \"\\e966\";
}
.icon-material-outline-loyalty:before {
  content: \"\\e967\";
}
.icon-material-outline-map:before {
  content: \"\\e968\";
}
.icon-material-outline-message:before {
  content: \"\\e969\";
}
.icon-material-outline-monetization-on:before {
  content: \"\\e96a\";
}
.icon-material-outline-money:before {
  content: \"\\e96b\";
}
.icon-material-outline-mouse:before {
  content: \"\\e96c\";
}
.icon-material-outline-movie:before {
  content: \"\\e96d\";
}
.icon-material-outline-my-location:before {
  content: \"\\e96e\";
}
.icon-material-outline-note-add:before {
  content: \"\\e96f\";
}
.icon-material-outline-notifications-active:before {
  content: \"\\e970\";
}
.icon-material-outline-notifications-off:before {
  content: \"\\e971\";
}
.icon-material-outline-notifications:before {
  content: \"\\e972\";
}
.icon-material-outline-outlined-flag:before {
  content: \"\\e973\";
}
.icon-material-outline-person-pin:before {
  content: \"\\e974\";
}
.icon-material-outline-photo-library:before {
  content: \"\\e975\";
}
.icon-material-outline-photo-size-select-actual:before {
  content: \"\\e976\";
}
.icon-material-outline-picture-as-pdf:before {
  content: \"\\e977\";
}
.icon-material-outline-power-settings-new:before {
  content: \"\\e978\";
}
.icon-material-outline-print:before {
  content: \"\\e979\";
}
.icon-material-outline-question-answer:before {
  content: \"\\e97a\";
}
.icon-material-outline-rate-review:before {
  content: \"\\e97b\";
}
.icon-material-outline-redo:before {
  content: \"\\e97c\";
}
.icon-material-outline-reorder:before {
  content: \"\\e97d\";
}
.icon-material-outline-restaurant:before {
  content: \"\\e97e\";
}
.icon-material-outline-room:before {
  content: \"\\e97f\";
}
.icon-material-outline-save-alt:before {
  content: \"\\e980\";
}
.icon-material-outline-school:before {
  content: \"\\e981\";
}
.icon-material-outline-search:before {
  content: \"\\e982\";
}
.icon-material-outline-settings-input-component:before {
  content: \"\\e983\";
}
.icon-material-outline-settings:before {
  content: \"\\e984\";
}
.icon-material-outline-shopping-cart:before {
  content: \"\\e985\";
}
.icon-material-outline-speaker-notes:before {
  content: \"\\e986\";
}
.icon-material-outline-star-border:before {
  content: \"\\e987\";
}
.icon-material-outline-star:before {
  content: \"\\e988\";
}
.icon-material-outline-supervisor-account:before {
  content: \"\\e989\";
}
.icon-material-outline-text-fields:before {
  content: \"\\e98a\";
}
.icon-material-outline-textsms:before {
  content: \"\\e98b\";
}
.icon-material-outline-thumb-down:before {
  content: \"\\e98c\";
}
.icon-material-outline-thumb-up:before {
  content: \"\\e98d\";
}
.icon-material-outline-undo:before {
  content: \"\\e98e\";
}
.icon-material-outline-visibility:before {
  content: \"\\e98f\";
}
.icon-material-outline-watch:before {
  content: \"\\e990\";
}
.icon-material-outline-wb-incandescent:before {
  content: \"\\e991\";
}
.icon-material-outline-where-to-vote:before {
  content: \"\\e992\";
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Publication/Front/sass/icons/_material-icons.scss";
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
        return new Source("
/*!
 * Material Icons (https://material.io/tools/icons/)
 * Apache license version 2.0
 */

@font-face {
  font-family: 'Material-Icons';
  src:
    url('../fonts/Material-Icons.ttf?e8u1sb') format('truetype'),
    url('../fonts/Material-Icons.woff?e8u1sb') format('woff'),
    url('../fonts/Material-Icons.svg?e8u1sb#Material-Icons') format('svg');
  font-weight: normal;
  font-style: normal;
}

[class^=\"icon-material-\"], [class*=\" icon-material-\"] {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'Material-Icons' !important;
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

.icon-material-outline-dashboard:before {
  content: \"\\e997\";
}
.icon-material-outline-arrow-back:before {
  content: \"\\e993\";
}
.icon-material-outline-arrow-forward:before {
  content: \"\\e994\";
}
.icon-material-outline-arrow-right-alt:before {
  content: \"\\e995\";
}
.icon-material-outline-gavel:before {
  content: \"\\e996\";
}
.icon-material-baseline-mail-outline:before {
  content: \"\\e900\";
}
.icon-material-baseline-notifications-none:before {
  content: \"\\e901\";
}
.icon-material-baseline-star-border:before {
  content: \"\\e902\";
}
.icon-material-outline-access-alarm:before {
  content: \"\\e903\";
}
.icon-material-outline-access-time:before {
  content: \"\\e904\";
}
.icon-material-outline-account-balance-wallet:before {
  content: \"\\e905\";
}
.icon-material-outline-account-balance:before {
  content: \"\\e906\";
}
.icon-material-outline-account-circle:before {
  content: \"\\e907\";
}
.icon-material-outline-add-a-photo:before {
  content: \"\\e908\";
}
.icon-material-outline-add-circle-outline:before {
  content: \"\\e909\";
}
.icon-material-outline-add-location:before {
  content: \"\\e90a\";
}
.icon-material-outline-add-photo-alternate:before {
  content: \"\\e90b\";
}
.icon-material-outline-add-shopping-cart:before {
  content: \"\\e90c\";
}
.icon-material-outline-add:before {
  content: \"\\e90d\";
}
.icon-material-outline-alarm-add:before {
  content: \"\\e90e\";
}
.icon-material-outline-alarm-off:before {
  content: \"\\e90f\";
}
.icon-material-outline-alarm-on:before {
  content: \"\\e910\";
}
.icon-material-outline-alarm:before {
  content: \"\\e911\";
}
.icon-material-outline-announcement:before {
  content: \"\\e912\";
}
.icon-material-outline-archive:before {
  content: \"\\e913\";
}
.icon-material-outline-arrow-drop-down:before {
  content: \"\\e914\";
}
.icon-material-outline-arrow-drop-up:before {
  content: \"\\e915\";
}
.icon-material-outline-arrow-left:before {
  content: \"\\e916\";
}
.icon-material-outline-arrow-right:before {
  content: \"\\e917\";
}
.icon-material-outline-assessment:before {
  content: \"\\e918\";
}
.icon-material-outline-assignment:before {
  content: \"\\e919\";
}
.icon-material-outline-attach-file:before {
  content: \"\\e91a\";
}
.icon-material-outline-autorenew:before {
  content: \"\\e91b\";
}
.icon-material-outline-battery-charging-full:before {
  content: \"\\e91c\";
}
.icon-material-outline-beach-access:before {
  content: \"\\e91d\";
}
.icon-material-outline-book:before {
  content: \"\\e91e\";
}
.icon-material-outline-bookmark-border:before {
  content: \"\\e91f\";
}
.icon-material-outline-bookmarks:before {
  content: \"\\e920\";
}
.icon-material-outline-broken-image:before {
  content: \"\\e921\";
}
.icon-material-outline-brush:before {
  content: \"\\e922\";
}
.icon-material-outline-bug-report:before {
  content: \"\\e923\";
}
.icon-material-outline-business-center:before {
  content: \"\\e924\";
}
.icon-material-outline-business:before {
  content: \"\\e925\";
}
.icon-material-outline-cake:before {
  content: \"\\e926\";
}
.icon-material-outline-check-circle:before {
  content: \"\\e927\";
}
.icon-material-outline-check:before {
  content: \"\\e928\";
}
.icon-material-outline-cloud:before {
  content: \"\\e929\";
}
.icon-material-outline-code:before {
  content: \"\\e92a\";
}
.icon-material-outline-compare-arrows:before {
  content: \"\\e92b\";
}
.icon-material-outline-computer:before {
  content: \"\\e92c\";
}
.icon-material-outline-contact-support:before {
  content: \"\\e92d\";
}
.icon-material-outline-credit-card:before {
  content: \"\\e92e\";
}
.icon-material-outline-crop-original:before {
  content: \"\\e92f\";
}
.icon-material-outline-date-range:before {
  content: \"\\e930\";
}
.icon-material-outline-delete:before {
  content: \"\\e931\";
}
.icon-material-outline-description:before {
  content: \"\\e932\";
}
.icon-material-outline-desktop-mac:before {
  content: \"\\e933\";
}
.icon-material-outline-desktop-windows:before {
  content: \"\\e934\";
}
.icon-material-outline-directions-car:before {
  content: \"\\e935\";
}
.icon-material-outline-dns:before {
  content: \"\\e936\";
}
.icon-material-outline-drafts:before {
  content: \"\\e937\";
}
.icon-material-outline-email:before {
  content: \"\\e938\";
}
.icon-material-outline-explore:before {
  content: \"\\e939\";
}
.icon-material-outline-extension:before {
  content: \"\\e93a\";
}
.icon-material-outline-face:before {
  content: \"\\e93b\";
}
.icon-material-outline-favorite-border:before {
  content: \"\\e93c\";
}
.icon-material-outline-favorite:before {
  content: \"\\e93d\";
}
.icon-material-outline-feedback:before {
  content: \"\\e93e\";
}
.icon-material-outline-file-copy:before {
  content: \"\\e93f\";
}
.icon-material-outline-filter-none:before {
  content: \"\\e940\";
}
.icon-material-outline-find-in-page:before {
  content: \"\\e941\";
}
.icon-material-outline-fingerprint:before {
  content: \"\\e942\";
}
.icon-material-outline-flight:before {
  content: \"\\e943\";
}
.icon-material-outline-flip-to-back:before {
  content: \"\\e944\";
}
.icon-material-outline-flip-to-front:before {
  content: \"\\e945\";
}
.icon-material-outline-folder-shared:before {
  content: \"\\e946\";
}
.icon-material-outline-folder:before {
  content: \"\\e947\";
}
.icon-material-outline-format-quote:before {
  content: \"\\e948\";
}
.icon-material-outline-format-shapes:before {
  content: \"\\e949\";
}
.icon-material-outline-forum:before {
  content: \"\\e94a\";
}
.icon-material-outline-free-breakfast:before {
  content: \"\\e94b\";
}
.icon-material-outline-gps-fixed:before {
  content: \"\\e94c\";
}
.icon-material-outline-group:before {
  content: \"\\e94d\";
}
.icon-material-outline-help-outline:before {
  content: \"\\e94e\";
}
.icon-material-outline-highlight-off:before {
  content: \"\\e94f\";
}
.icon-material-outline-history:before {
  content: \"\\e950\";
}
.icon-material-outline-home:before {
  content: \"\\e951\";
}
.icon-material-outline-hotel:before {
  content: \"\\e952\";
}
.icon-material-outline-https:before {
  content: \"\\e953\";
}
.icon-material-outline-info:before {
  content: \"\\e954\";
}
.icon-material-outline-input:before {
  content: \"\\e955\";
}
.icon-material-outline-insert-photo:before {
  content: \"\\e956\";
}
.icon-material-outline-keyboard-arrow-down:before {
  content: \"\\e957\";
}
.icon-material-outline-keyboard-arrow-left:before {
  content: \"\\e958\";
}
.icon-material-outline-keyboard-arrow-right:before {
  content: \"\\e959\";
}
.icon-material-outline-keyboard-arrow-up:before {
  content: \"\\e95a\";
}
.icon-material-outline-language:before {
  content: \"\\e95b\";
}
.icon-material-outline-launch:before {
  content: \"\\e95c\";
}
.icon-material-outline-layers:before {
  content: \"\\e95d\";
}
.icon-material-outline-library-add:before {
  content: \"\\e95e\";
}
.icon-material-outline-library-books:before {
  content: \"\\e95f\";
}
.icon-material-outline-local-atm:before {
  content: \"\\e960\";
}
.icon-material-outline-local-offer:before {
  content: \"\\e961\";
}
.icon-material-outline-location-city:before {
  content: \"\\e962\";
}
.icon-material-outline-location-off:before {
  content: \"\\e963\";
}
.icon-material-outline-location-on:before {
  content: \"\\e964\";
}
.icon-material-outline-lock-open:before {
  content: \"\\e965\";
}
.icon-material-outline-lock:before {
  content: \"\\e966\";
}
.icon-material-outline-loyalty:before {
  content: \"\\e967\";
}
.icon-material-outline-map:before {
  content: \"\\e968\";
}
.icon-material-outline-message:before {
  content: \"\\e969\";
}
.icon-material-outline-monetization-on:before {
  content: \"\\e96a\";
}
.icon-material-outline-money:before {
  content: \"\\e96b\";
}
.icon-material-outline-mouse:before {
  content: \"\\e96c\";
}
.icon-material-outline-movie:before {
  content: \"\\e96d\";
}
.icon-material-outline-my-location:before {
  content: \"\\e96e\";
}
.icon-material-outline-note-add:before {
  content: \"\\e96f\";
}
.icon-material-outline-notifications-active:before {
  content: \"\\e970\";
}
.icon-material-outline-notifications-off:before {
  content: \"\\e971\";
}
.icon-material-outline-notifications:before {
  content: \"\\e972\";
}
.icon-material-outline-outlined-flag:before {
  content: \"\\e973\";
}
.icon-material-outline-person-pin:before {
  content: \"\\e974\";
}
.icon-material-outline-photo-library:before {
  content: \"\\e975\";
}
.icon-material-outline-photo-size-select-actual:before {
  content: \"\\e976\";
}
.icon-material-outline-picture-as-pdf:before {
  content: \"\\e977\";
}
.icon-material-outline-power-settings-new:before {
  content: \"\\e978\";
}
.icon-material-outline-print:before {
  content: \"\\e979\";
}
.icon-material-outline-question-answer:before {
  content: \"\\e97a\";
}
.icon-material-outline-rate-review:before {
  content: \"\\e97b\";
}
.icon-material-outline-redo:before {
  content: \"\\e97c\";
}
.icon-material-outline-reorder:before {
  content: \"\\e97d\";
}
.icon-material-outline-restaurant:before {
  content: \"\\e97e\";
}
.icon-material-outline-room:before {
  content: \"\\e97f\";
}
.icon-material-outline-save-alt:before {
  content: \"\\e980\";
}
.icon-material-outline-school:before {
  content: \"\\e981\";
}
.icon-material-outline-search:before {
  content: \"\\e982\";
}
.icon-material-outline-settings-input-component:before {
  content: \"\\e983\";
}
.icon-material-outline-settings:before {
  content: \"\\e984\";
}
.icon-material-outline-shopping-cart:before {
  content: \"\\e985\";
}
.icon-material-outline-speaker-notes:before {
  content: \"\\e986\";
}
.icon-material-outline-star-border:before {
  content: \"\\e987\";
}
.icon-material-outline-star:before {
  content: \"\\e988\";
}
.icon-material-outline-supervisor-account:before {
  content: \"\\e989\";
}
.icon-material-outline-text-fields:before {
  content: \"\\e98a\";
}
.icon-material-outline-textsms:before {
  content: \"\\e98b\";
}
.icon-material-outline-thumb-down:before {
  content: \"\\e98c\";
}
.icon-material-outline-thumb-up:before {
  content: \"\\e98d\";
}
.icon-material-outline-undo:before {
  content: \"\\e98e\";
}
.icon-material-outline-visibility:before {
  content: \"\\e98f\";
}
.icon-material-outline-watch:before {
  content: \"\\e990\";
}
.icon-material-outline-wb-incandescent:before {
  content: \"\\e991\";
}
.icon-material-outline-where-to-vote:before {
  content: \"\\e992\";
}
", "@Publication/Front/sass/icons/_material-icons.scss", "D:\\xampp\\htdocs\\PIDEV_Web\\Nozelites\\src\\PublicationBundle\\Resources\\views\\Front\\sass\\icons\\_material-icons.scss");
    }
}
