<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\VCard
 *
 * @property integer $id
 * @property string $email
 * @property string $family_name
 * @property string $given_name
 * @property string $title
 * @property string $country_name
 * @property string $extended_address
 * @property string $locality
 * @property string $postal_code
 * @property string $region
 * @property string $street_address
 * @property integer $kind_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereFamilyName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereGivenName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereCountryName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereExtendedAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereLocality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereStreetAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereKindId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereUpdatedAt($value)
 * @property string $tel
 * @method static \Illuminate\Database\Query\Builder|\App\VCard whereTel($value)
 */
class VCard extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vcards';
}
