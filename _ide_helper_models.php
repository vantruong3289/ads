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
 * App\Models\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property $sex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\AdminFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Ads
 *
 * @property int $id
 * @property int|null $brand_id
 * @property int|null $design_id
 * @property string|null $name
 * @property bool $active
 * @property int|null $seconds
 * @property string|null $currency
 * @property float|null $money
 * @property bool $allow
 * @property array|null $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Design|null $design
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Watch> $watchs
 * @property-read int|null $watchs_count
 * @method static \Database\Factories\AdsFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Ads newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ads newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ads query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereAllow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereDesignId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereSeconds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ads whereUpdatedAt($value)
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
 * @property $sex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ads> $adss
 * @property-read int|null $adss_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Bill> $bills
 * @property-read int|null $bills_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Brand> $brands
 * @property-read int|null $brands_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\AdvertiserFactory factory($count = null, $state = [])
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
 * @property int|null $brand_id
 * @property int|null $consumer_id
 * @property string|null $currency
 * @property float|null $money
 * @property int $view
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Consumer|null $consumer
 * @method static \Database\Factories\AssetFactory factory($count = null, $state = [])
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
 * @method static \Illuminate\Database\Eloquent\Builder|Asset whereView($value)
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
 * @property float|null $budget
 * @property float|null $money
 * @property \Illuminate\Support\Carbon|null $time
 * @property $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Advertiser $advertiser
 * @method static \Database\Factories\BillFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereAdvertiserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bill whereBudget($value)
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ads> $adss
 * @property-read int|null $adss_count
 * @property-read \App\Models\Advertiser $advertiser
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\BrandFactory factory($count = null, $state = [])
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
 * @property $sex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Asset> $assets
 * @property-read int|null $assets_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Watch> $watchs
 * @property-read int|null $watchs_count
 * @method static \Database\Factories\ConsumerFactory factory($count = null, $state = [])
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
 * @property string|null $name
 * @property string|null $code
 * @property |null $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Ads> $ads
 * @property-read int|null $ads_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Spatie\Tags\Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\DesignFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Design newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Design newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Design query()
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Design withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Design withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Design withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Design withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Design withoutTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 */
	class Design extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Invite
 *
 * @property int $id
 * @property int|null $consumer_id
 * @property string|null $email
 * @property |null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Consumer|null $consumer
 * @method static \Illuminate\Database\Eloquent\Builder|Invite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invite whereConsumerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invite whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invite whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invite whereUpdatedAt($value)
 */
	class Invite extends \Eloquent {}
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
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Ads|null $ads
 * @property-read \App\Models\Brand|null $brand
 * @property-read \App\Models\Consumer|null $consumer
 * @method static \Database\Factories\WatchFactory factory($count = null, $state = [])
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
 * @method static \Illuminate\Database\Eloquent\Builder|Watch whereUpdatedAt($value)
 */
	class Watch extends \Eloquent {}
}

