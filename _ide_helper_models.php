<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $salutation
 * @property string $first_name
 * @property string|null $last_name
 * @property string $street
 * @property string $house_number
 * @property string $postcode
 * @property string $city
 * @property string $country
 * @property string|null $email
 * @property string|null $telephone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereSalutation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $salutation
 * @property string $first_name
 * @property string|null $last_name
 * @property string $street
 * @property string $house_number
 * @property string $postcode
 * @property string $city
 * @property string $country
 * @property string $reason
 * @property array $options
 * @property string $status 
 *             1 -> done, 
 *             2 -> not send yet,
 *             3 -> on the way, 
 *             4 -> should be arrived, 
 *             5 -> postal return, 
 *             6 -> message from customer
 * @property int $user_id short letter created by (user)_id
 * @property int $customer_id short letter belongs to (customer)_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ShortLetterFeed> $feed
 * @property-read int|null $feed_count
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereHouseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereSalutation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetter whereUserId($value)
 */
	class ShortLetter extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $short_letter_id associated short letter
 * @property int|null $user_id created by user
 * @property int|null $new_status
 * @property string $title
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereNewStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereShortLetterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShortLetterFeed whereUserId($value)
 */
	class ShortLetterFeed extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\UserSetting|null $settings
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
 * 
 *
 * @property int $id
 * @property string $theme
 * @property array|null $misc e. g. last visited page of pagination settings etc.
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereMisc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserSetting whereUserId($value)
 */
	class UserSetting extends \Eloquent {}
}

