<?php

namespace vphoenix;

use Illuminate\Database\Eloquent\Model;

/**
 * vphoenix\VCard
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
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereFamilyName($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereGivenName($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereCountryName($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereExtendedAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereLocality($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereStreetAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereKindId($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereUpdatedAt($value)
 * @property string $tel
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\VCard whereTel($value)
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
