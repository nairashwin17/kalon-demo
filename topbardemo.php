<div class="header content"><span class="toggle-menu icon-burger"></span>
    <a class="logo" href="https://www.messika.com/en/" title="Messika | Paris">
        <img src="https://messika.cdn-tech.io/media/logo/websites/1/logo-messika-paris.jpg" alt="Messika | Paris" width="189" height="64">
    </a>

<div class="panel wrapper"><div class="panel header"><ul class="header links"><li><a href="https://www.messika.com/en/customer/account/" class="icon-user"></a></li><li class="link wishlist" data-bind="scope: 'wishlist'">
    <a class="icon-heart" href="https://www.messika.com/en/wishlist/">
        <span data-bind="text: wishlist().counterInt" class="counter qty"></span>
        <span></span>
    </a>
</li>

<li class="link contact">
    <a href="https://www.messika.com/en/contact/">
        <img src="https://messika.cdn-tech.io/static/version1563958141/frontend/Ultranoir/Messika/en_GB/Ultranoir_MessikaContact/images/icon_phone.svg" alt="telephone icon">
        <span>+33 1 78 42 12 32</span>
    </a>
</li>
<li class="item link compare" data-bind="scope: 'compareProducts'" data-role="compare-products-link">
    <a class="action compare no-display" title="Compare Products" data-bind="attr: {'href': compareProducts().listUrl}, css: {'no-display': !compareProducts().count}">
        Compare Products        <span class="counter qty" data-bind="text: compareProducts().countCaption"></span>
    </a>
</li>

        <li class="greet welcome" data-bind="scope: 'customer'">
            <!-- ko if: customer().fullname  --><!-- /ko -->
            <!-- ko ifnot: customer().fullname  -->
            <span data-bind="html:'Welcome'">Welcome</span>
            <!-- /ko -->
        </li>
        
    

<li data-block="minicart" class="minicart-wrapper multistores">
    <div class="overlay"></div>
    <a class="action showcart" href="https://www.messika.com/en/checkout/cart/" data-bind="scope: 'minicart_content'">
        <span class="counter qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
            <span class="counter-number"><!-- ko text: getCartParam('summary_count') -->0<!-- /ko --></span>
            <span class="counter-label">
            <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
            </span>
        </span>
        <div class="icon-shopping-bag"></div>
    </a>
            
        <script>
        window.checkout = {"shoppingCartUrl":"https:\/\/www.messika.com\/en\/checkout\/cart\/","checkoutUrl":"https:\/\/www.messika.com\/en\/checkout\/","updateItemQtyUrl":"https:\/\/www.messika.com\/en\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"https:\/\/www.messika.com\/en\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image","baseUrl":"https:\/\/www.messika.com\/en\/","minicartMaxItemsVisible":5,"websiteId":"1","maxItemsToDisplay":10,"customerLoginUrl":"https:\/\/www.messika.com\/en\/customer\/account\/login\/referer\/aHR0cHM6Ly93d3cubWVzc2lrYS5jb20vZW4vamV3ZWxyeQ%2C%2C\/","isRedirectRequired":false,"autocomplete":"off","captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"https:\/\/www.messika.com\/en\/captcha\/refresh\/","isRequired":false},"guest_checkout":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"https:\/\/www.messika.com\/en\/captcha\/refresh\/","isRequired":false}}};
    </script>
    
<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-1" style="display: none;"><div class="block block-minicart empty ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-1" style="display: block;">
            <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                <!-- ko template: getTemplate() -->

<div class="minicart-container">
    <div class="block-header">
        <div class="back" data-bind="click: closeAside()">
            <span class="icon-arrow-left"></span><span><!-- ko i18n: 'Back' --><span>Back</span><!-- /ko --></span>
        </div>
        <span class="qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false },
                       attr: { title: $t('Items in Cart') }" title="Items in Cart">
            <i class="icon-shopping-bag"></i><!-- ko text: getCartParam('summary_count') -->0<!-- /ko -->&nbsp;<!-- ko i18n: 'items' --><span>items</span><!-- /ko -->
        </span>
    </div>

    <div class="block-title">
        <strong>
            <span class="text"><!-- ko i18n: 'My Cart' --><span>My Cart</span><!-- /ko --></span>
        </strong>
    </div>

    <div class="block-content">
        <!-- ko if: getCartParam('summary_count') --><!-- /ko -->

        <!-- ko ifnot: getCartParam('summary_count') -->
            <strong class="subtitle empty" data-bind="visible: closeSidebar()">
                <!-- ko i18n: 'You have no items in your shopping cart.' --><span>You have no items in your shopping cart.</span><!-- /ko -->
            </strong>
            <!-- ko if: getCartParam('cart_empty_message') --><!-- /ko -->
        <!-- /ko -->
    </div>
    <!-- ko foreach: getRegion('sign-in-popup') --><!-- /ko -->
</div>

<div class="bottom-wrapper">
    <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
</div>
<!-- /ko -->
            </div>
                    </div></div><div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-4" style="display: none;"><div class="block block-minicart empty ui-dialog-content ui-widget-content" data-role="dropdownDialog" id="ui-id-4" style="display: block;">
            <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                <!-- ko template: getTemplate() -->

<div class="minicart-container">
    <div class="block-header">
        <div class="back" data-bind="click: closeAside()">
            <span class="icon-arrow-left"></span><span><!-- ko i18n: 'Back' --><span>Back</span><!-- /ko --></span>
        </div>
        <span class="qty empty" data-bind="css: { empty: !!getCartParam('summary_count') == false },
                       attr: { title: $t('Items in Cart') }" title="Items in Cart">
            <i class="icon-shopping-bag"></i><!-- ko text: getCartParam('summary_count') -->0<!-- /ko -->&nbsp;<!-- ko i18n: 'items' --><span>items</span><!-- /ko -->
        </span>
    </div>

    <div class="block-title">
        <strong>
            <span class="text"><!-- ko i18n: 'My Cart' --><span>My Cart</span><!-- /ko --></span>
        </strong>
    </div>

    <div class="block-content">
        <!-- ko if: getCartParam('summary_count') --><!-- /ko -->

        <!-- ko ifnot: getCartParam('summary_count') -->
            <strong class="subtitle empty" data-bind="visible: closeSidebar()">
                <!-- ko i18n: 'You have no items in your shopping cart.' --><span>You have no items in your shopping cart.</span><!-- /ko -->
            </strong>
            <!-- ko if: getCartParam('cart_empty_message') --><!-- /ko -->
        <!-- /ko -->
    </div>
    <!-- ko foreach: getRegion('sign-in-popup') --><!-- /ko -->
</div>

<div class="bottom-wrapper">
    <!-- ko if: getCartParam('summary_count') --><!-- /ko -->
</div>
<!-- /ko -->
            </div>
                    </div></div></li>

</ul><a class="action skip contentarea" href="#contentarea"><span>Skip to Content</span></a>

<div class="switcher language switcher-language" data-ui-id="language-switcher" id="switcher-language">
    <div class="actions dropdown options switcher-options">
        <div class="action toggle switcher-trigger" id="switcher-language-trigger">
            <strong class="view-en">
                <span>En</span>
            </strong>
        </div>
        
    <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-front mage-dropdown-dialog" tabindex="-1" role="dialog" aria-describedby="ui-id-2" style="display: none;"><ul class="dropdown switcher-dropdown ui-dialog-content ui-widget-content" id="ui-id-2" style="display: block;">
                                                <li class="view-fr switcher-option">
                        <a href="https://www.messika.com/fr/joaillerie">
                            Fr                        </a>
                    </li>
                                                                </ul></div></div>
</div>
</div></div><div class="search-wrapper"><div class="block block-search">
    <div class="block block-title"><strong>Search</strong></div>
    <div class="block block-content">
        <form class="form minisearch" id="search_mini_form" action="https://www.messika.com/en/catalogsearch/result/" method="get">
            <div class="field search">
                <label class="label" for="search" data-role="minisearch-label">
                    <span>Search</span>
                </label>
                                <input type="hidden" id="locale" value="en_GB">
                <div class="control">
                    <input id="search" type="text" name="q" value="" placeholder="Search..." class="input-text" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off">
                    <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                    <div class="nested">
    <a class="action advanced" href="https://www.messika.com/en/catalogsearch/advanced/" data-action="advanced-search">
        Advanced Search    </a>
</div>
                </div>
            </div>
            <div class="actions">
                <button type="submit" title="Search" class="action search icon-search" disabled="">
                    <span>Search</span>
                </button>
            </div>
        </form>
    </div>
    <div class="close icon-cross"></div>
</div>
</div></div>