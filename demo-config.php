<?php 
/**
* Demo import configuration file
*
*
*/

//add_filter('adi_demos_data','zigcy_demo_config');

function zigcy_demo_config(){
	
			$git_url 		= 'https://raw.githubusercontent.com/WPaccesskeys/zigcy-demos/master/';
			$data = array(

				'furniture' => array(
					'demo_name'			=> esc_html__('Furniture Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'furniture/furniture.xml',
					'theme_settings' 	=> $git_url . 'furniture/furniture.dat',
					'widgets_file'  	=> $git_url . 'furniture/furniture.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'furniture/furniture.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'furniture/furniture.jpg',
					'rev_slider' 		=> $git_url . 'furniture/furniture.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-one',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),



				'fashion' => array(
					'demo_name'			=> esc_html__('Fashion Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'fashion/fashion.xml',
					'theme_settings' 	=> $git_url . 'fashion/fashion.dat',
					'widgets_file'  	=> $git_url . 'fashion/fashion.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'fashion/fashion.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'fashion/fashion.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-two',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blogs',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
						),
					),
				),


				'electronics' => array(
					'demo_name'			=> esc_html__('Electronics Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'electronics/electronics.xml',
					'theme_settings' 	=> $git_url . 'electronics/electronics.dat',
					'widgets_file'  	=> $git_url . 'electronics/electronics.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'electronics/electronics.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'electronics/electronics.jpg',
					'rev_slider' 		=> $git_url . 'electronics/electronics.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-three',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),
				
				'organic' => array(
					'demo_name'			=> esc_html__('Organic Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'organic/organic.xml',
					'theme_settings' 	=> $git_url . 'organic/organic.dat',
					'widgets_file'  	=> $git_url . 'organic/organic.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'organic/organic.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'organic/organic.jpg',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-four',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blogs',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
						),
					),
				),


				'watches' => array(
					'demo_name'			=> esc_html__('Watches Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'watches/watches.xml',
					'widgets_file'  	=> $git_url . 'watches/watches.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'watches/watches.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'watches/watches.jpg',
					'rev_slider' 		=> $git_url . 'watches/watches.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-five',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary menu',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),



				'cosmetics' => array(
					'demo_name'			=> esc_html__('Cosmetics Demo','access-demo-importer'),
					'xml_file'     		=> $git_url . 'cosmetics/cosmetics.xml',
					'widgets_file'  	=> $git_url . 'cosmetics/cosmetics.wie',
					'import_redux'		=> array(
											'file_url'		=> $git_url .'cosmetics/cosmetics.json',
											'option_name' 	=> 'zigcy_options',
										),
					'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
					'rev_slider' 		=> $git_url . 'cosmetics/cosmetics.zip',
					'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
					'is_shop'			=> true,
					'home_title'  		=> 'Home',
					'blog_title'  		=> 'Blog',
					'posts_to_show'  	=> '10',
					'menus'				=> array(
											'menu-1' => 'primary',
											),
					'required_plugins'  => array(
						'free' => array(
							array(
								'slug'  	=> 'woocommerce',
								'init'  	=> 'woocommerce/woocommerce.php',
								'name'  	=> 'WooCommerce',
							),
							array(
								'slug'  	=> 'contact-form-7',
								'init'  	=> 'contact-form-7/wp-contact-form-7.php',
								'name'  	=> 'Contact Form 7',
							),
							array(
								'slug'  	=> 'yith-woocommerce-compare',
								'init'  	=> 'yith-woocommerce-compare/init.php',
								'name'  	=> 'YITH WooCommerce Compare',
							),
							array(
								'slug'  	=> 'yith-woocommerce-quick-view',
								'init'  	=> 'yith-woocommerce-quick-view/init.php',
								'name'  	=> 'YITH WooCommerce Quick View',
							),
							array(
								'slug'  	=> 'yith-woocommerce-wishlist',
								'init'  	=> 'yith-woocommerce-wishlist/init.php',
								'name'  	=> 'YITH WooCommerce Wishlist',
							),
							
						),
						'premium' => array(
							array(
								'slug' 		=> 'js_composer',
								'init'  	=> 'js_composer/js_composer.php',
								'name' 		=> 'Visual Composer',
								'class'		=> 'Vc_Manager',
							),
							array(
								'slug' 		=> 'vc-mega-addons',
								'init'  	=> 'vc-mega-addons/vc-mega-addons.php',
								'name' 		=> 'Zigcy Companion',
								'class'		=> 'VcMegaAddons',
							),
							array(
								'slug' 		=> 'ultimate-form-builder',
								'init'  	=> 'ultimate-form-builder/ultimate-form-builder.php',
								'name' 		=> 'Ultimate Form Builder',
								'class'		=> 'UFB_Class',
							),
							array(
								'slug' 		=> 'revslider',
								'init'  	=> 'revslider/revslider.php',
								'name' 		=> 'Slider Revolution',
								'class'		=> 'RevSlider',
							),
						),
					),
				),

			/*	'premium_demos' => array(

						array(
							'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
							'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
							'upgrade_url'		=> 'https://accesspressthemes.com/',
							'demo_name'			=> 'Groshory Shop',
						),
						array(
							'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
							'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
							'upgrade_url'		=> 'https://accesspressthemes.com/',
							'demo_name'			=> 'Food Shop',
						),
						array(
							'screen'			=> $git_url . 'cosmetics/cosmetics.jpg',
							'preview_url'		=> 'https://demo.accesspressthemes.com/zigcy/demo-six',
							'upgrade_url'		=> 'https://accesspressthemes.com/',
							'demo_name'			=> 'Watches Shop',
						),
				),*/


			);
	return $data;
}