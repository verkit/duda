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

Route::get('/', function () {
    return view('guest.index');
});
Route::get('/about-us', function () {
    return view('guest.about-us');
});
Route::get('/service-one', function () {
    return view('guest.service-one');
});
Route::get('/service-two', function () {
    return view('guest.service-two');
});
Route::get('/service-three', function () {
    return view('guest.service-three');
});
// Route::get('/news', function () {
//     return view('guest.news');
// });

Route::get('/news', 'NewsController@indexGuest');

// Route::get('/pesan-sekarang', function () {return view('guest.pesan-sekarang');});

Route::get('/has-selected-layanan', 'LayananController@selectedLayanan');
Route::get('/has-selected-category', 'LayananController@selectedCategory');
Route::get('/has-selected-product', 'LayananController@selectedProduct');
Route::get('/pesan-sekarang', 'LayananController@index');
Route::get('/json-kategori', 'LayananController@kategori');
Route::get('/json-produk', 'LayananController@produk');
Route::post('/cek-order', 'LayananController@cek');
Route::get('/refresh_captcha', 'LayananController@refreshCaptcha');
Route::post('/check_captcha', 'LayananController@cekCaptcha');


Route::get('/contact-us', function () {
    return view('guest.contact-us');
});
Route::post('/contact-us', 'MessageController@store');
Route::get('/kebijakan-layanan', function () {
    return view('guest.kebijakan-layanan');
});
Route::get('/privasi-pengguna', function () {
    return view('guest.privasi-pengguna');
});
Route::get('/cek-status-order', function () {
    return view('guest.cek-status-order');
});
Route::get('/konfirmasi-pembayaran', function () {
    return view('guest.konfirmasi-pembayaran');
});
Route::post('/konfirmasi-pembayaran', 'PembayaranController@store');
Route::get('/testimonial', function () {
    return view('guest.testimonial');
});
Route::get('/portfolio-index', function () {
    return view('guest.portfolio');
});

// Route::get('/ajax-pages/{id}', function () {
//     return view('guest.ajax');
// });
Route::get('/ajax-pages/{id}', 'NewsController@showAjax');
Route::get('/notifikasi', 'NotifiyController@index');
Route::get('/test', function () {
    return view('test');
});
Route::post('/cekKupon', 'LayananController@cekKupon');
Route::post('/postPesanSkrg', 'LayananController@postPesanSkrg');
Route::get('/getBank', 'BankController@getData');
// Route::get('/gcekKupon','LayananController@cekKupon');



Auth::routes();
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::get('/bank', 'BankController@index')->name('bank.index');
        Route::get('create/bank', 'BankController@create')->name('bank.create');
        Route::post('/bank', 'BankController@store')->name('bank.store');
        Route::get('/bank/{id}', 'BankController@edit')->name('bank.edit');
        Route::put('/bank/{id}', 'BankController@update')->name('bank.update');
        Route::delete('/bank{id}', 'BankController@delete')->name('bank.destroy');

        Route::prefix('service')->name('service.')->group(function () {
            Route::get('/', 'ServiceController@index')->name('index');
            Route::get('/create', 'ServiceController@create')->name('create');
            Route::post('/', 'ServiceController@store')->name('store');
            Route::get('/{id}', 'ServiceController@edit')->name('edit');
            Route::put('/{id}', 'ServiceController@update')->name('update');
            Route::delete('/{id}', 'ServiceController@destroy')->name('destroy');

            Route::get('/{id}/sc', 'SubServiceController@create')->name('sub.create');
            Route::post('/{id}', 'SubServiceController@store')->name('sub.store');
            Route::get('/{id}/{sub}', 'SubServiceController@edit')->name('sub.edit');
            Route::put('/{id}/{sub}', 'SubServiceController@update')->name('sub.update');
            Route::delete('/{id}/{sub}', 'SubServiceController@destroy')->name('sub.destroy');
        });

        Route::get('/product', 'ProductController@index')->name('product.index');
        Route::get('create/product/', 'ProductController@create')->name('product.create');
        Route::post('/product', 'ProductController@store')->name('product.store');
        Route::get('/product/{id}', 'ProductController@edit')->name('product.edit');
        Route::put('/product/{id}', 'ProductController@update')->name('product.update');
        Route::delete('/product{id}', 'ProductController@delete')->name('product.destroy');

        Route::get('/coupon', 'CouponController@index')->name('coupon.index');
        Route::get('create/coupon', 'CouponController@create')->name('coupon.create');
        Route::post('/coupon', 'CouponController@store')->name('coupon.store');
        Route::get('/coupon/{id}', 'CouponController@edit')->name('coupon.edit');
        Route::put('/coupon/{id}', 'CouponController@update')->name('coupon.update');
        Route::post('/coupon/{id}', 'CouponController@add_product')->name('coupon.product');
        Route::delete('/coupon/{id}', 'CouponController@delete_product')->name('coupon.del.product');


        Route::get('/message', 'MessageController@index')->name('message.index');
        Route::get('/message/{id}', 'MessageController@show')->name('message.show');
        Route::put('/message/r{id}', 'MessageController@responded')->name('message.responded');
        Route::put('/message/{id}', 'MessageController@pending')->name('message.pending');

        Route::get('create/order', 'OrderController@create')->name('order.create');
        Route::get('/order', 'OrderController@index')->name('order.index');
        Route::post('/order/search', 'OrderController@search')->name('order.search');
        Route::post('/order', 'OrderController@store')->name('order.store');
        Route::post('/order/c/', 'OrderController@customstore')->name('customorder.store');
        Route::get('/order/{id}', 'OrderController@edit')->name('order.edit');
        Route::get('/order/c/{id}', 'OrderController@customedit')->name('customorder.edit');
        Route::put('/order/{id}', 'OrderController@update')->name('order.update');
        Route::put('/order/c/{id}', 'OrderController@customupdate')->name('custom.order.update');
        Route::delete('/order/{id}', 'OrderController@delete_product')->name('order.destroy');

        Route::get('/payment', 'PaymentController@index')->name('payment.index');
        Route::get('/payment/{id}', 'PaymentController@show')->name('payment.show');
        Route::post('/payment/i/', 'PaymentController@find')->name('payment.find');
        Route::put('/payment/{id}', 'PaymentController@update')->name('payment.update');

        Route::get('/news', 'NewsController@index')->name('news.index');
        Route::get('/create/news', 'NewsController@create')->name('news.create');
        Route::post('/create/news', 'NewsController@store')->name('news.store');
        Route::get('/news/{id}', 'NewsController@edit')->name('news.edit');
        Route::put('/news/{id}', 'NewsController@update')->name('news.update');
        Route::delete('/news/{id}', 'NewsController@destroy')->name('news.destroy');

        Route::get('/portfolio', 'PortfolioController@index')->name('portfolio.index');
        Route::get('/create/portfolio', 'PortfolioController@create')->name('portfolio.create');
        Route::post('/create/portfolio', 'PortfolioController@store')->name('portfolio.store');
        Route::get('/portfolio/{id}', 'PortfolioController@edit')->name('portfolio.edit');
        Route::put('/portfolio/{id}', 'PortfolioController@update')->name('portfolio.update');
        Route::delete('/portfolio/{id}', 'PortfolioController@destroy')->name('portfolio.destroy');

        Route::get('/user', 'UserController@index')->name('user.index');
        Route::get('/create/user', 'UserController@create')->name('user.create');
        Route::post('/create/user', 'UserController@store')->name('user.store');
        Route::get('/user/{id}', 'UserController@edit')->name('user.edit');
        Route::put('/user/{id}', 'UserController@update')->name('user.update');
        Route::delete('/user/{id}', 'UserController@destroy')->name('user.destroy');

        Route::get('/web', 'WebController@index')->name('web.index');
        Route::get('/create/web', 'WebController@create')->name('web.create');
        Route::post('/create/web', 'WebController@store')->name('web.store');
        Route::get('/web/{id}', 'WebController@edit')->name('web.edit');
        Route::put('/web/{id}', 'WebController@update')->name('web.update');
        Route::delete('/web/{id}', 'WebController@destroy')->name('web.destroy');
    });
});
// Route::get('/home', 'HomeController@index')->name('home');
