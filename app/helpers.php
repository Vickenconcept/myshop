<?php

use App\Models\User;
use Cloudinary\Configuration\Configuration;
use Illuminate\Support\Facades\Auth;
use Cloudinary\Asset\Image;

/**
 * @param  null  $key
 * @return User|null
 */
function user($key = null)
{
    $user = Auth::user();

    return $key ? $user->{$key} : $user;
}

/**
 * @param $value
 * @param array $transformation
 * @param bool $bg_auto
 * @return string
 */
function cloudinary_url($value, array $transformation = [], bool $bg_auto = false): string
{
    if (str($value)->startsWith('http')) return  $value;

    if (!is_array($transformation)) {
        $transformation = ['width' => $transformation];
    }

    if ($bg_auto) {
        $transformation = array_merge($transformation, [
            "crop"       => "pad",
            "background" => "auto"
        ]);
    }

    Configuration::instance(config('cloudinary.cloud_url'));

    return (string) Image::fromParams($value, ["transformation" => [$transformation]]);
}

///**
// * Get the cart singleton instance from the service container.
// *
// * @return \App\Support\Cart
// */
//function cart()
//{
//    return app(App\Support\Cart::class);
//}

/**
 * Generates a QR Code image src for the given data.
 */
function qr($data, $width = 120): string
{
    return "https://chart.googleapis.com/chart?cht=qr&chl={$data}&chs={$width}x{$width}&choe=UTF-8&chld=L|0";
}
