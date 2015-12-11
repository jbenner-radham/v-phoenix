<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Kind
 *
 * @property integer $id
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\App\Kind whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Kind whereName($value)
 */
class Kind extends Model
{
    /**
     * A Kind can have many Entities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entities()
    {
        return $this->hasMany('App\Entity');
    }
}
