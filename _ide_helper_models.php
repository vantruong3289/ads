<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Ads
 *
 * @property int $id
 * @property int|null $brand_id
 * @property int|null $design_id
 * @property string|null $title
 * @property string|null $content
 * @property bool $active
 * @property \App\Models\Design|null $design
 * @property int|null $seconds
 * @property string|null $currency
 * @property float|null $money
 * @property float|null $voucher
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\AdsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ads newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ads query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereDesign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereDesignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereVoucher($value)
 */
	class Ads extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Advertiser
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property mixed $sex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ads[] $adss
 * @property-read int|null $adss_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bill[] $bills
 * @property-read int|null $bills_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Brand[] $brands
 * @property-read int|null $brands_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\AdvertiserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser query()
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advertiser whereUpdatedAt($value)
 */
	class Advertiser extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Asset
 *
 * @property int $id
 * @property int|null $consumer_id
 * @property int|null $brand_id
 * @property string|null $currency
 * @property float|null $money
 * @property float|null $voucher
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Consumer|null $consumer
 * @method static \Database\Factories\AssetFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset query()
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereConsumerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereVoucher($value)
 */
	class Asset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bill
 *
 * @property int $id
 * @property int $advertiser_id
 * @property string|null $code
 * @property string $currency
 * @property float|null $money
 * @property \Illuminate\Support\Carbon|null $time
 * @property mixed $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Advertiser $advertiser
 * @method static \Database\Factories\BillFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereAdvertiserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereUpdatedAt($value)
 */
	class Bill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Brand
 *
 * @property int $id
 * @property int $advertiser_id
 * @property string $name
 * @property string|null $address
 * @property string|null $email
 * @property string|null $about
 * @property string|null $website
 * @property string|null $phone
 * @property string|null $map
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Ads[] $adss
 * @property-read int|null $adss_count
 * @property-read \App\Models\Advertiser $advertiser
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\BrandFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereAdvertiserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereWebsite($value)
 */
	class Brand extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Consumer
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property mixed $sex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Asset[] $assets
 * @property-read int|null $assets_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Watch[] $watchs
 * @property-read int|null $watchs_count
 * @method static \Database\Factories\ConsumerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consumer whereUpdatedAt($value)
 */
	class Consumer extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Design
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Design newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Design newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Design query()
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereUpdatedAt($value)
 */
	class Design extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Watch
 *
 * @property int $id
 * @property int|null $consumer_id
 * @property int|null $brand_id
 * @property int|null $ads_id
 * @property string|null $currency
 * @property float|null $money
 * @property float|null $voucher
 * @property mixed $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ads|null $ads
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Consumer|null $consumer
 * @method static \Database\Factories\WatchFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Watch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Watch query()
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereAdsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereConsumerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereVoucher($value)
 */
	class Watch extends \Eloquent {}
}

