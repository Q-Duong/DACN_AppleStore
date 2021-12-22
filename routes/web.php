<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//-------------------------------------------- Frontend --------------------------------------------
Route::get('/','HomeController@indexpage');
Route::get('/home','HomeController@index');
Route::get('/store','HomeController@product');
Route::get('/blog-list','HomeController@blog_list');
Route::post('/search','HomeController@search');
Route::post('/autocomplete-ajax','HomeController@autocomplete_ajax');
Route::get('/wistlist','HomeController@wistlist');

//Danh muc san pham trang chu
Route::get('/product-list/{category_product_slug}','CategoryProductController@show_category_home');
Route::get('/product/{product_slug}','ProductController@details_product');

//Danh muc bai viet
Route::get('/blogs/{post_slug}','PostController@show_category_post_home');
Route::get('/blog/{post_slug}','PostController@show_post_home');


//-------------------------------------------- Backend --------------------------------------------
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

Route::post('/filter-by-date','AdminController@filter_by_date');
Route::post('/dashboard-filter','AdminController@dashboard_filter');
Route::post('/days-order','AdminController@days_order');

//Customer

//Admin
Route::get('/add-customer-admin','CustomerController@add_customer_admin');
Route::get('/list-customer','CustomerController@list_customer');
Route::get('/edit-customer/{customer_id}','CustomerController@edit_customer');
Route::get('/delete-customer/{customer_id}','CustomerController@delete_customer');

Route::post('/save-customer','CustomerController@save_customer');
Route::post('/update-customer/{customer_id}','CustomerController@update_customer');

//Front End
Route::get('/login-checkout','CustomerController@login_checkout');
Route::get('/create-customer','CustomerController@create_customer');
Route::get('/logout-checkout','CustomerController@logout_checkout');
Route::post('/login-customer','CustomerController@login_customer');
Route::post('/add-customer','CustomerController@add_customer');
Route::get('/account-information/{customer_id}','CustomerController@account_information');
Route::get('/account-settings/{customer_id}','CustomerController@account_settings');
Route::get('/delete-avata/{customer_id}','CustomerController@delete_avata');

Route::post('/update-information/{customer_id}','CustomerController@update_information');


//login customer by google
Route::get('/login-customer-google','AdminController@login_customer_google');
Route::get('/customer/google/callback','AdminController@callback_customer_google');

// Producer
Route::get('/add-producer','ProducerController@add_producer');
Route::get('/list-producer','ProducerController@list_producer');
Route::get('/edit-producer/{producer_id}','ProducerController@edit_producer');
Route::get('/delete-producer/{producer_id}','ProducerController@delete_producer');

Route::get('/active-producer/{producer_id}','ProducerController@active_producer');
Route::get('/unactive-producer/{producer_id}','ProducerController@unactive_producer');

Route::post('/save-producer','ProducerController@save_producer');
Route::post('/update-producer/{producer_id}','ProducerController@update_producer');


// Category Product
Route::get('/add-category-product','CategoryProductController@add_category_product');
Route::get('/all-category-product','CategoryProductController@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProductController@delete_category_product');

Route::get('/active-category-product/{category_product_id}','CategoryProductController@active_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProductController@unactive_category_product');

Route::post('/save-category-product','CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProductController@update_category_product');

Route::post('/arrange-category','CategoryProductController@arrange_category');

//Attributes
Route::get('/add-attribute','AttributesController@add_attribute');
Route::get('/list-attribute','AttributesController@list_attribute');
Route::post('/save-attribute','AttributesController@save_attribute');


// Product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');

Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

Route::post('/load-comment','ProductController@load_comment');
Route::post('/send-comment','ProductController@send_comment');
Route::get('/comment','ProductController@list_comment');
Route::post('/allow-comment','ProductController@allow_comment');
Route::post('/reply-comment','ProductController@reply_comment');
Route::post('/insert-rating','ProductController@insert_rating');

//Cart
Route::post('/update-cart','CartController@update_cart');
Route::post('/save-cart','CartController@save_cart');
Route::get('/cart','CartController@gio_hang');
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::get('/del-product/{session_id}','CartController@delete_product');
Route::get('/count-cart-products','CartController@count_cart_products');


//Contact
Route::get('/lien-he','ContactController@contact');
Route::get('/information','ContactController@information' );
Route::post('/save-info','ContactController@save_info' );
Route::post('/update-info/{info_id}','ContactController@update_info' );


//Coupon
Route::post('/check-coupon','CartController@check_coupon');

Route::get('/unset-coupon','CouponController@unset_coupon');
Route::get('/insert-coupon','CouponController@insert_coupon');
Route::get('/delete-coupon/{coupon_id}','CouponController@delete_coupon');
Route::get('/list-coupon','CouponController@list_coupon');
Route::post('/insert-coupon-code','CouponController@insert_coupon_code');
Route::get('/active-coupon/{coupon_id}','CouponController@active_coupon');
Route::get('/unactive-coupon/{coupon_id}','CouponController@unactive_coupon');

//Category Post

Route::get('/add-category-post','CategoryPostController@add_category_post');
Route::get('/list-category-post','CategoryPostController@list_category_post');
Route::get('/edit-category-post/{category_post_id}','CategoryPostController@edit_category_post');
Route::get('/delete-category-post/{category_post_id}','CategoryPostController@delete_category_post');

Route::get('/blogs/{category_post_slug}','CategoryPostController@danh_muc_bai_viet');
Route::get('/active-category-post/{category_post_id}','CategoryPostController@active_category_post');
Route::get('/unactive-category-post/{category_post_id}','CategoryPostController@unactive_category_post');

Route::post('/save-category-post','CategoryPostController@save_category_post');
Route::post('/update-category-post/{category_post_id}','CategoryPostController@update_category_post');


//Post

Route::get('/add-post','PostController@add_post');
Route::get('/list-post','PostController@list_post');
Route::get('/edit-post/{post_id}','PostController@edit_post');
Route::get('/delete-post/{post_id}','PostController@delete_post');

Route::post('/save-post','PostController@save_post');
Route::post('/update-post/{post_id}','PostController@update_post');

Route::get('/active-post/{post_id}','PostController@active_post');
Route::get('/unactive-post/{post_id}','PostController@unactive_post');


//Checkout

Route::post('/order-place','CheckoutController@order_place');

Route::get('/checkout','CheckoutController@checkout');
Route::get('/payment','CheckoutController@payment');
Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');

Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
Route::post('/confirm-order','CheckoutController@confirm_order');

//Order
Route::get('/manage-order','OrderController@manage_order');
Route::get('/view-order/{order_code}','OrderController@view_order');
Route::get('/print-order/{checkout_code}','OrderController@print_order');
Route::get('/delete-order/{order_code}','OrderController@delete_order_code');
Route::post('/update-order-qty','OrderController@update_order_qty');
Route::post('/update-qty','OrderController@update_qty');

//Delivery
Route::get('/delivery','DeliveryController@delivery');
Route::post('/select-delivery','DeliveryController@select_delivery');
Route::post('/insert-delivery','DeliveryController@insert_delivery');
Route::post('/select-feeship','DeliveryController@select_feeship');
Route::post('/update-delivery','DeliveryController@update_delivery');

//Slider
Route::get('/list-slider','SliderController@list_slider');
Route::get('/add-slider','SliderController@add_slider');
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');
Route::get('/edit-slider/{slider_id}','SliderController@edit_slider');

Route::post('/insert-slider','SliderController@insert_slider');
Route::post('/update-slider/{slider_id}','SliderController@update_slider');

Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}','SliderController@active_slider');

//Gallery
Route::get('add-gallery/{product_id}','GalleryController@add_gallery');
Route::post('select-gallery','GalleryController@select_gallery');
Route::post('insert-gallery/{pro_id}','GalleryController@insert_gallery');
Route::post('update-gallery-name','GalleryController@update_gallery_name');
Route::post('delete-gallery','GalleryController@delete_gallery');
Route::post('update-gallery','GalleryController@update_gallery');


//Document
// Route::get('upload_file','DocumentController@upload_file');
// Route::get('upload_image','DocumentController@upload_image');

//Folder
// Route::get('create_folder','DocumentController@create_folder');
// Route::get('rename_folder','DocumentController@rename_folder');
// Route::get('delete_folder','DocumentController@delete_folder');

// Route::get('list_document','DocumentController@list_document');
// Route::get('read_data','DocumentController@read_data');


//Send Mail 
Route::get('/send-coupon-vip/{coupon_time}/{coupon_condition}/{coupon_number}/{coupon_code}','MailController@send_coupon_vip');
Route::get('/send-coupon-regular/{coupon_time}/{coupon_condition}/{coupon_number}/{coupon_code}','MailController@send_coupon_regular');

Route::get('/mail-example','MailController@mail_example');

Route::get('/send-mail','MailController@send_mail');
Route::get('/iforgot','MailController@iforgot');
Route::post('/recover-pass','MailController@recover_pass');
Route::get('/update-new-pass','MailController@update_new_pass');
Route::post('/reset-new-pass','MailController@reset_new_pass');