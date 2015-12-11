<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entity
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
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereFamilyName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereGivenName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereCountryName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereExtendedAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereLocality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereStreetAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereKindId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereUpdatedAt($value)
 * @property string $tel
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereTel($value)
 * @property string $org
 * @method static \Illuminate\Database\Query\Builder|\App\Entity whereOrg($value)
 */
class Entity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'entities';

    /**
     * An Entity can have a kind
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function kind() {
        return $this->hasOne('App\Kind');
    }
}
