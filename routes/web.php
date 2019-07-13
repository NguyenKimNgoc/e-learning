<?php

Auth::routes();
Route::group([ 'namespace' => 'Frontend', 'middleware' => 'web'], function () {
    Route::get('/', 'HomePageController@HomePage')->name('trang-chu');
    Route::get('blog', 'BlogController@index')->name('blog');
    Route::get('blog/detail/{id}/{slug_blog}','BlogController@detail')->name('blog-detail');
    Route::get('contacts', 'ContactsControllers@index')->name('contacts');
    Route::post('contacts', 'ContactsControllers@store')->name('contacts');
    Route::get('product/detail/{id}/{slug_course}', 'ProductController@detail')->name('product-detail');
    Route::get('product/course/list/', 'ProductController@index')->name('course-list-all');
    Route::get('product/course/list/news', 'ProductController@courseNews')->name('course-list-news');
    Route::get('product/course/list/sales', 'ProductController@courseSales')->name('course-list-sales');
    Route::get('product/course/list/{slug_cate_group}', 'ProductController@course_list')->name('courses');
    Route::get('product/cate/{slug_cate_group}/{slug_cate}', 'ProductController@courseCateList')->name('courses-cate-list');
    Route::get('cart/list', 'CartController@index')->name('cart-list');
    Route::get('cart/delete/{id}', 'CartController@destroy')->name('cart-delete');
    Route::get('thanh-toan', 'CheckoutController@index')->name('check-out')->middleware('l_customers');
    Route::post('thanh-toan', 'CheckoutController@postCheckout')->name('check-out');

    Route::post('change-district', 'CheckoutController@changeDistrict')->name('changeDistrict');
    //    register mail to website
    Route::post('register/mail', 'HomePageController@registerMail')->name('register-mail');
    //    new in course
    Route::get('product/news/detail/{id}/{slug_news}', 'ProductController@newsInCOurse')->name('news-in-course');
    //   active account
    Route::get('active-account/{id}', 'LoginController@activeAccount')->name('activeAccount');


    //    profile author
    Route::get('profile/author/{id}/{slug_customer}','ProfileController@profileAuthor')->name('profileAuthor');

    //    profile customers
    Route::get('profile/{id}/{slug_customer}','ProfileController@index')->name('profile');
    Route::get('profile/edit/{id}/{slug_customer}','ProfileController@edit')->name('editProfile');
    Route::post('profile/edit/{id}/{slug_customer}','ProfileController@update');


    //    register and login
    Route::get('account/register', 'LoginController@register')->name('registerFrontend');
    Route::post('account/register', 'LoginController@postRegister');
    Route::get('account/login', 'LoginController@loginFrontend')->name('loginFrontend');
    Route::post('account/login', 'LoginController@postLogin');
    Route::get('account/logout', 'LoginController@logoutFrontend')->name('logoutFrontend');

//    list history orders for customer
    Route::get('history/orders/{slug_customer}','ProductController@listHistory')->name('list-history');
    //    Add To Cart
    Route::post('/add/cart', 'CartController@addToCart')->name('addToCart')->middleware('l_customers');
    Route::post('/add/cart/now', 'CartController@paymentNow')->name('paymentNow')->middleware('l_customers');

//    Search Course
    Route::any('/search','HomePageController@search')->name('search-frontend');

//    search history orders
    Route::any('/search/history/orders','ProductController@searchHistory')->name('searchHistory');

    //Comment Course
    Route::post('course/comment','ProductController@postCommentCourse')->name('postCommentCourse')->middleware('l_customers');

//    hidden comment
    Route::post('course/comment/hidden/{id}','ProductController@hiddenComment')->name('hiddenComment');
// Quản Trị Admin
});
Route::group(['prefix' => 'admin', 'namespace' => 'Auth', 'middleware' => 'web'], function () {
    Route::get('/login', 'LoginController@login')->name('login');
    Route::post('/login', 'LoginController@postLogin');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Backend','middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('admin');
//    Quản trị users
    Route::get('/users/list', 'UsersController@index')->name('admin-users-list');
    Route::get('/user/add', 'UsersController@create')->name('user-add');
    Route::post('/user/add', 'UsersController@store');
    Route::get('/user/edit/{id}/{slug_user}', 'UsersController@edit')->name('user-edit');
    Route::post('/user/edit/{id}/{slug_user}', 'UsersController@update');
    Route::get('/user/view/{id}/{slug_user}', 'UsersController@show')->name('user-show');
    Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user-delete');
    Route::any('/user/search','UsersController@search')->name('search-users');
//    Đăng ký tài khoản
    Route::get('/register', 'RegisterController@index')->name('admin-register');
//    Quản trị khóa học
    Route::get('/courses', 'CoursesController@index')->name('course-list');
    Route::get('/course/add', 'CoursesController@create')->name('course-add');
    Route::post('/course/add', 'CoursesController@store');
    Route::get('/course/show/{id}/{slug_course}', 'CoursesController@show')->name('course-show');
    Route::post('/course/status/{id}', 'CoursesController@changeSatus')->name('change-status');
    Route::get('/course/edit/{id}/{c_author_id}/{slug_course}', 'CoursesController@edit')->name('course-edit');
    Route::post('/course/edit/{id}/{c_author_id}/{slug_course}', 'CoursesController@update');
    Route::get('/course/delete/{id}', 'CoursesController@destroy')->name('course-delete');
    Route::post('change-cate-group', 'CoursesController@changeCate')->name('changeCate');
    Route::any('/course/search','CoursesController@search')->name('search-course');
//    Quản trị quảng cáo
    Route::get('/banner', 'BannerController@index')->name('banner-list');
    Route::get('/banner/add', 'BannerController@create')->name('banner-add');
    Route::post('/banner/add', 'BannerController@store');
    Route::get('/banner/delete/{id}', 'BannerController@destroy')->name('banner-delete');
//    Quản trị bài viết
    Route::get('/news', 'NewsController@index')->name('news-list');
    Route::get('/news/add', 'NewsController@create')->name('news-add');
    Route::post('/news/add', 'NewsController@store');
    Route::post('/news/staus/{id}', 'NewsController@changeSatusNews')->name('change-status-news');
    Route::get('/news/show/{id}/{slug_news}', 'NewsController@show')->name('news-show');
    Route::get('/news/edit/{id}/{slug_news}', 'NewsController@edit')->name('news-edit');
    Route::post('/news/edit/{id}/{slug_news}', 'NewsController@update');
    Route::get('/news/delete/{id}', 'NewsController@destroy')->name('news-delete');
    Route::any('news/search','NewsController@searchNews')->name('search-news');
    Route::post('news/change/Cousres','NewsController@onChangeCourseNews')->name('onChangeCourseNews');

//    Quản trị danh mục
    Route::get('/categories', 'CategoryController@index')->name('category-list');
    Route::get('/category/add', 'CategoryController@create')->name('category-add');
    Route::post('/category/add', 'CategoryController@store');
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category-delete');
    Route::get('/categories/group', 'CategoriesGroupController@index')->name('categoryGroup-list');
    Route::get('/category/group/add', 'CategoriesGroupController@create')->name('categoryGroup-add');
    Route::post('/category/group/add', 'CategoriesGroupController@store');
    Route::get('/category/group/delete/{id}', 'CategoriesGroupController@destroy')->name('categoryGroup-delete');

//    Quản trị liên hệ
    Route::get('/contacts/list', 'ContactsController@index')->name('contacts-list');
    Route::post('/contacts', 'ContactsController@sendMailContacts')->name('send-mail-contacts');

    //    Quản trị Dữ liệu liên hệ
    Route::get('/contacts-config', 'ContactsController@contactsConfig')->name('contacts-config');
    Route::get('/contacts-config/update/{id}', 'ContactsController@edit')->name('contacts-config-edit');
    Route::post('/contacts-config/update/{id}', 'ContactsController@update');

//    send mail all customer notifile course
    Route::get('/send-mail-to-customers/{id}','CoursesController@sendMailToCustomers')->name('send-mail-to-customer');
    //    send mail all register mail notifile course
    Route::get('/send-mail-to-register/{id}','CoursesController@sendMailToRegister')->name('send-mail-to-register');
    //    orders
    Route::get('orders/list','OrdersController@index')->name('orders-list');
    Route::post('orders/change-status','OrdersController@changeStatusOrders')->name('orders-change');
    Route::any('orders/search','OrdersController@searchOrders')->name('search-order');
    Route::post('orders/excel/download','OrdersController@export')->name('export');
    Route::get('orders/show/{id}','OrdersController@show')->name('orders-show');
    Route::get('orders/show/downloadPDF/{id}','OrdersController@downloadPDF')->name('pdf');

//    quản trị tin tức
    Route::get('blog/list','BlogsController@index')->name('blog-list');
    Route::get('blog/add','BlogsController@create')->name('blog-add');
    Route::post('blog/add','BlogsController@store');
    Route::get('blog/edit/{id}/{slug_blog}','BlogsController@edit')->name('blog-edit');
    Route::post('blog/edit/{id}/{slug_blog}','BlogsController@update');
    Route::get('/blog/delete/{id}', 'BlogsController@destroy')->name('blog-delete');
    Route::post('search/blog','BlogsController@seachBlog')->name('search-blog');

});
