<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   lang
 * @copyright (C) OXID eSales AG 2003-2016
 * @version OXID eShop CE
 * @translators: ascheider (10), asot (4), compisat (26), cyberkatze (8), ET (10), ilya (968), mantgomery (2), marco (1330), muslimukas (4), Natalia I (244), pianoservis (334), riefi (9), savisko (18), unicum (35), usmaxx (23), vanilla thunder (49), vlad13 (1)
 */

$sLangName  = 'Русский';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
'charset' => 'utf-8',
'HELP_SHOP_THEME_blShowListDisplayType' => 'Decide if the visitor of your store can select the type of the product list in store front. If this options is not activated, your visitors will see the lists displayed like you adjusted in the drop box "Default product list type".',
'HELP_SHOP_THEME_blSliderShowImageCaption' => 'A caption is visible, when the active slide has an assigned product.',
'HELP_SHOP_THEME_blUseGAEcommerceTracking' => 'Please keep in mind that this option needs to be enabled in your Google Analytics account, too. Manual: <a href="https://support.google.com/analytics/answer/1009612?hl=en&ref_topic=1037061" target="_blank">Link</a>',
'HELP_SHOP_THEME_iNewBasketItemMessage' => 'When customer adds products to cart, OXID eShop can behave differently. Set up what shall happen to give proper feedback to customer.',
'HELP_SHOP_THEME_sBackgroundColor' => 'В формате: #D83434',
'HELP_SHOP_THEME_sBackgroundPath' => 'Относительно к пути <code>/out/flow/img/backgrounds/</code>.',
'HELP_SHOP_THEME_sBlogUrl' => 'Например: http://blog.oxid-esales.com',
'HELP_SHOP_THEME_sCatIconsize' => 'In category view, the category pictures of subcategories are displayed in the defined size.',
'HELP_SHOP_THEME_sCatPromotionsize' => 'Category promotion on start page needs special size for category pictures. Define size of those pictures here.',
'HELP_SHOP_THEME_sCatThumbnailsize' => 'In category view, the picture of the selected category is displayed in the defined size.',
'HELP_SHOP_THEME_sDeliveryDaysNotOnStock' => 'The estimated date on which you expect delivery of the order to the customer. If the order contains multiple items, select the latest delivery date. If you message a range of days, please include the later end of the range. (e.g., 7 days if your range is 5-7 days).',
'HELP_SHOP_THEME_sDeliveryDaysOnStock' => 'The estimated date on which you expect delivery of the order to the customer. If the order contains multiple items, select the latest delivery date. If you message a range of days, please include the later end of the range. (e.g., 7 days if your range is 5-7 days).',
'HELP_SHOP_THEME_sEcondaAccountId' => 'Please enter your econda ID.<br>Format: XXXXXXXX-XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX-X.<br>Please keep in mind to activate the econda Webshop Controlling in your shop.',
'HELP_SHOP_THEME_sEcondaRecommendationsAID' => '',
'HELP_SHOP_THEME_sEmailLogo' => 'Относительно к пути <code>/out/flow/img/</code>.',
'HELP_SHOP_THEME_sFacebookUrl' => 'Например: https://www.facebook.com/oxidesales',
'HELP_SHOP_THEME_sFaviconFile' => 'This favicon is meant to be displayed in the browser\'s tab.<br>In general, this is an ico file.<br>This is relative to the path <code>/out/flow/img/favicons/</code>.',
'HELP_SHOP_THEME_sFaviconMSTileColor' => 'Specified as a hexadecimal value.<br>E.g.: #D83434',
'HELP_SHOP_THEME_sGATrackingId' => 'Например: UA-XXXXXXXX-1',
'HELP_SHOP_THEME_sGoogleMapsAddr' => 'Например: XID eSales AG, Bertoldstraße 48, 79098 Freiburg',
'HELP_SHOP_THEME_sGooglePlusUrl' => 'Например: https://plus.google.com/114133952363540971062',
'HELP_SHOP_THEME_sGoogleShoppingAccountId' => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account ID from Google Merchant Center. This value should match the account ID you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a> through Google Merchant center. If you have a MCA account, use the subaccount ID associated with that product feed.',
'HELP_SHOP_THEME_sGoogleVendorId' => 'You can find this ID in your Trusted Stores Merchant Dashboard.',
'HELP_SHOP_THEME_sIconsize' => 'Icons are the smallest pictures of a product. They are used: <br><ul><li>in the shopping cart.</li><li>if products are shown in the right menu (e.g. in <span class="filename_filepath_or_italic">TOP of the Shop</span> and <span class="filename_filepath_or_italic">Bargain</span>).</li></ul>For avoiding design issues caused by too big icons the icons are resized. Enter the maximum size for icons here.',
'HELP_SHOP_THEME_sLogoFile' => 'Зависит от пути к папке <code>/out/flow/img/</code>',
'HELP_SHOP_THEME_sLogoHeight' => 'Укажите размер в пикселях.',
'HELP_SHOP_THEME_sLogoWidth' => 'Укажите размер в пикселях.',
'HELP_SHOP_THEME_sManufacturerIconsize' => 'Manufacturer\'s/brand logo is shown on start page in manufacturer\'s slider.',
'HELP_SHOP_THEME_sPageLanguage' => 'The locale should be in the format of <language>_<country><br><br><Language> is a two-letter language code defined in ISO 639-1, and <country> is a two-letter country code defined in ISO 3166-1 alpha-2. Usually <country> should be all capitalized, and <language> should be in lowercase. e.g. en_US, en_GB, en_AU, fr_FR, de_DE, or ja_JP.',
'HELP_SHOP_THEME_sShippingDaysNotOnStock' => 'The estimated date on which you will ship the order; this is different from the estimated delivery date.<br><br>If the order contains multiple items, select the latest estimated ship date.<br><br>If you message to your customers a range of days, please include the later end of the range. (e.g., 7 days if your shipping range is 5-7 days).<br><br>The date provided here will be provided to the customer via email.<br><br>The customer will receive a post purchase survey after the Estimated Ship Date has passed.',
'HELP_SHOP_THEME_sShippingDaysOnStock' => 'The estimated date on which you will ship the order; this is different from the estimated delivery date.<br><br>If the order contains multiple items, select the latest estimated ship date.<br><br>If you message to your customers a range of days, please include the later end of the range. (e.g., 7 days if your shipping range is 5-7 days).<br><br>The date provided here will be provided to the customer via email.<br><br>The customer will receive a post purchase survey after the Estimated Ship Date has passed.',
'HELP_SHOP_THEME_sShoppingCountry' => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account country from Google Shopping. This value should match the account country you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a>.<br><br>The value of the country parameter should be a <a href="http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2" target="_blank">two-letter ISO 3166 country code</a>.<br><br>For example, values could be US, GB, AU, FR, DE, JP.',
'HELP_SHOP_THEME_sShoppingLanguage' => 'Provide this field only if you submit feeds for Google Shopping.<br><br>Account language from Google Shopping. This value should match the account language you use to submit your <a href="https://support.google.com/merchants/answer/188494#US" target="_blank">product data feed to Google Shopping</a>.<br><br>The value of the language parameter should be a <a href="http://en.wikipedia.org/wiki/ISO_639-1" target="_blank">two-letter ISO 639-1 language code</a>.<br><br>For example, values could be en, fr, de, ja.',
'HELP_SHOP_THEME_sThumbnailsize' => 'Thumbnails are small product pictures. They are used:<br><ul><li>in product lists.</li><li>in promotions displayed in the middle of the front page, e. g. <span class="filename_filepath_or_italic">Just arrived!</span>.</li></ul>For avoiding design issues caused by too big thumbnails the thumbnails are resized. Enter the maximum size for thumbnails here.',
'HELP_SHOP_THEME_sTwitterUrl' => 'Например: https://twitter.com/OXID_eSales',
'HELP_SHOP_THEME_sYouTubeUrl' => 'E.g.: https://www.youtube.com/user/oxidesales',
'SHOP_THEME_aDetailImageSizes' => 'Размер картинки товара (ширина*высота)',
'SHOP_THEME_aNrofCatArticles' => 'Количество товаров в списках (категории, поиск)<br><br>Внимание: большое количество товаров (выше 100) может повлиять на производительность!',
'SHOP_THEME_aNrofCatArticlesInGrid' => 'Решётка: количество товаров в списках (категории, поиск)<br><br>Внимание: большое количество товаров (выше 100) может повлиять на производительность!',
'SHOP_THEME_blBackgroundAttachment' => 'Зафиксировать фон при скороле?',
'SHOP_THEME_blEcondaRecommendationsBasket' => 'Показывать рекомендации econda в корзине',
'SHOP_THEME_blEcondaRecommendationsDetails' => 'Показывать рекомендации econda на странице товаров',
'SHOP_THEME_blEcondaRecommendationsList' => 'Показывать рекомендации econda в списках',
'SHOP_THEME_blEcondaRecommendationsStart' => 'Показывать рекомендации econda на главной',
'SHOP_THEME_blEmailsShowProductPictures' => 'Отправлять изображения товаров в письмах',
'SHOP_THEME_blFooterShowGuestbook' => 'Показывать ссылку на гостевую книгу',
'SHOP_THEME_blFooterShowHelp' => 'Показывать ссылку на Помощь',
'SHOP_THEME_blFooterShowLinks' => 'Показывать ссылку на Ссылки',
'SHOP_THEME_blFooterShowNews' => 'Показывать ссылку на новости',
'SHOP_THEME_blFooterShowNewsletter' => 'Показывать ссылку подписки на новости',
'SHOP_THEME_blFooterShowNewsletterForm' => 'Показывать форму подписки на новости',
'SHOP_THEME_blFullwidthLayout' => 'Включить полноэкранный шаблон',
'SHOP_THEME_blGAAnonymizeIPs' => 'Анонимные IP-адреса',
'SHOP_THEME_blShowBirthdayFields' => 'Отображать поля ввода даты рождения пользователей при регистрации',
'SHOP_THEME_blShowFinalStep' => 'Кнопка подтверждения заказа на последнем шаге его офрмления',
'SHOP_THEME_blShowListDisplayType' => 'Показывать сортировку товаров',
'SHOP_THEME_blSliderShowImageCaption' => 'Активировать титры для слайдера на главной странице',
'SHOP_THEME_blUseBackground' => 'Показать картинку фона',
'SHOP_THEME_blUseGAEcommerceTracking' => 'Использовать Google Analytics Ecommerce Tracking',
'SHOP_THEME_blUseGAPageTracker' => 'Использовать Google Analytics PageTracker',
'SHOP_THEME_blUseGoogleTS' => 'Использовать Google Trusted Stores',
'SHOP_THEME_bl_showCompareList' => 'Использовать сравнения',
'SHOP_THEME_bl_showGiftWrapping' => 'Использовать подарочную упаковку',
'SHOP_THEME_bl_showListmania' => 'Использовать публичные списки',
'SHOP_THEME_bl_showManufacturerSlider' => 'Показывать слайдер иконок производителей на главной',
'SHOP_THEME_bl_showVouchers' => 'Использовать купоны',
'SHOP_THEME_bl_showWishlist' => 'Использовать списки желаний',
'SHOP_THEME_GROUP_background' => 'Фоновое изображение',
'SHOP_THEME_GROUP_contact' => 'Контакты',
'SHOP_THEME_GROUP_display' => 'Дисплей',
'SHOP_THEME_GROUP_econda' => 'econda Web Shop Controlling',
'SHOP_THEME_GROUP_emails' => 'Е-mail адреса',
'SHOP_THEME_GROUP_favicons' => 'Favicons',
'SHOP_THEME_GROUP_features' => 'Функции',
'SHOP_THEME_GROUP_footer' => 'Подвал',
'SHOP_THEME_GROUP_googleanalytics' => 'Google Analytics',
'SHOP_THEME_GROUP_googlets' => 'Google Trusted Stores',
'SHOP_THEME_GROUP_header' => 'Шапка',
'SHOP_THEME_GROUP_images' => 'Изображения',
'SHOP_THEME_GROUP_logo' => 'Логотип',
'SHOP_THEME_iNewBasketItemMessage' => 'Действие при добавлении товара в корзину',
'SHOP_THEME_iNewBasketItemMessage_0' => 'Нет',
'SHOP_THEME_iNewBasketItemMessage_1' => 'Показать сообщение',
'SHOP_THEME_iNewBasketItemMessage_2' => 'Открыть поп-ап',
'SHOP_THEME_iNewBasketItemMessage_3' => 'Открыть корзину',
'SHOP_THEME_iTopNaviCatCount' => 'Количество категорий для меню в шапке',
'SHOP_THEME_sBackgroundColor' => 'Фоновый цвет страниц магазина',
'SHOP_THEME_sBackgroundPath' => 'Файл фонового изображения',
'SHOP_THEME_sBackgroundPosHorizontal' => 'Горизонтальное положение',
'SHOP_THEME_sBackgroundPosHorizontal_center' => 'по центру',
'SHOP_THEME_sBackgroundPosHorizontal_left' => 'слева',
'SHOP_THEME_sBackgroundPosHorizontal_right' => 'справа',
'SHOP_THEME_sBackgroundPosVertical' => 'Вертикальное положение',
'SHOP_THEME_sBackgroundPosVertical_bottom' => 'низ',
'SHOP_THEME_sBackgroundPosVertical_center' => 'центр',
'SHOP_THEME_sBackgroundPosVertical_top' => 'верх',
'SHOP_THEME_sBackgroundRepeat' => 'Повторить фон?',
'SHOP_THEME_sBackgroundRepeat_no-repeat' => 'Нет',
'SHOP_THEME_sBackgroundRepeat_repeat' => 'Да, горизонтально и вертикально',
'SHOP_THEME_sBackgroundRepeat_repeat-x' => 'Да, горизонтально',
'SHOP_THEME_sBackgroundRepeat_repeat-y' => 'Да, вертикально',
'SHOP_THEME_sBackgroundSize' => 'Размер фонового изображения',
'SHOP_THEME_sBackgroundSize_contain' => 'обложка (ширина)',
'SHOP_THEME_sBackgroundSize_cover' => 'обложка (высота)',
'SHOP_THEME_sBackgroundSize_normal' => 'Сохранить исходный размер',
'SHOP_THEME_sBlogUrl' => 'URL блога',
'SHOP_THEME_sCatIconsize' => 'Размер картинки подкатегории (ширина*высота)',
'SHOP_THEME_sCatPromotionsize' => 'Размер картинки категории для баннера на главной (ширина*высота)',
'SHOP_THEME_sCatThumbnailsize' => 'Размер картинки категории (ширина*высота)',
'SHOP_THEME_sDefaultListDisplayType' => 'Типовой вид списков',
'SHOP_THEME_sDefaultListDisplayType_grid' => 'Решётка',
'SHOP_THEME_sDefaultListDisplayType_infogrid' => 'Двойная решётка',
'SHOP_THEME_sDefaultListDisplayType_line' => 'Список',
'SHOP_THEME_sDeliveryDaysNotOnStock' => 'Количество дней доставки товара, которого <b>нет</b> на складе.',
'SHOP_THEME_sDeliveryDaysOnStock' => 'Количество дней доставки товара, который <b>в наличии</b> на складе.',
'SHOP_THEME_sEcondaAccountId' => 'ID сервиса econda',
'SHOP_THEME_sEcondaRecommendationsAID' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsFromBasket' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsFromDetails' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsFromList' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsFromStart' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsToBasket' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsToDetails' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsToList' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaRecommendationsToStart' => 'Сервис рекомендаций Econda (недоступно в России).',
'SHOP_THEME_sEcondaWidgetIdBasket' => 'ID виджета рекомендаций econda для корзины',
'SHOP_THEME_sEcondaWidgetIdDetails' => 'ID виджета рекомендаций econda для страницы товара',
'SHOP_THEME_sEcondaWidgetIdList' => 'ID виджета рекомендаций econda для страницы поиска',
'SHOP_THEME_sEcondaWidgetIdStart' => 'ID виджета рекомендаций econda для главной страницы',
'SHOP_THEME_sEmailLogo' => 'Файл лого для шапки писем',
'SHOP_THEME_sFacebookUrl' => 'Ссылка на страницу в Facebook',
'SHOP_THEME_sFavicon128File' => 'Файл favicon 128*128px',
'SHOP_THEME_sFavicon16File' => 'Файл favicon 16*16px',
'SHOP_THEME_sFavicon32File' => 'Файл favicon 32*32px',
'SHOP_THEME_sFavicon48File' => 'Файл favicon 48*48px',
'SHOP_THEME_sFavicon512File' => 'Файл favicon 512*512px',
'SHOP_THEME_sFavicon64File' => 'Файл favicon 64*64px',
'SHOP_THEME_sFaviconFile' => 'Файл Favicon',
'SHOP_THEME_sFaviconMSTileColor' => 'Цвет плитки для Windows 8/Mobile закладок',
'SHOP_THEME_sGATrackingId' => 'Tracking ID системы Google Analytics',
'SHOP_THEME_sGoogleMapsAddr' => 'Ваш почтовый адрес',
'SHOP_THEME_sGooglePlusUrl' => 'Ссылка на профиль Google+',
'SHOP_THEME_sGoogleShoppingAccountId' => 'ID аккаунта Google Shopping (опционально)',
'SHOP_THEME_sGoogleVendorId' => 'ID магазина в Google Store',
'SHOP_THEME_sIconsize' => 'Размер иконок (ширина*высота)',
'SHOP_THEME_sLogoFile' => 'Файл логотипа',
'SHOP_THEME_sLogoHeight' => 'Высота логотипа в шапке',
'SHOP_THEME_sLogoWidth' => 'Ширина логотипа в шапке',
'SHOP_THEME_sManufacturerIconsize' => 'Размер логотипа производителя',
'SHOP_THEME_sPageLanguage' => 'Язык вашего магазина по системе ISO',
'SHOP_THEME_sShippingDaysNotOnStock' => 'Количество дней до отправки товара, которого <b>нет</b> на складе.',
'SHOP_THEME_sShippingDaysOnStock' => 'Количество дней до отправки товара, который <b>в наличии</b> на складе.',
'SHOP_THEME_sShoppingCountry' => 'Google Shopping-Feed страна (опционально)',
'SHOP_THEME_sShoppingLanguage' => 'Google Shopping-Feed язык (опционально)',
'SHOP_THEME_sStartPageListDisplayType' => 'Вид сортировки товаров на главной странице магазина',
'SHOP_THEME_sStartPageListDisplayType_grid' => 'Сетка',
'SHOP_THEME_sStartPageListDisplayType_infogrid' => 'Двойная сетка',
'SHOP_THEME_sStartPageListDisplayType_line' => 'Список',
'SHOP_THEME_sThumbnailsize' => 'Размер иконок (ширина*высота)',
'SHOP_THEME_sTwitterUrl' => 'Ссылка на профиль в Twitter',
'SHOP_THEME_sYouTubeUrl' => 'Ссылка на YouTube-канал',
'SHOP_THEME_sZoomImageSize' => 'Размер увеличенного изображения (ширина*высота)',
);
