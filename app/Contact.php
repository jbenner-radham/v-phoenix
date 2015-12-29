<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Contact
 *
 * @property integer $id
 * @property integer $contact_type_id
 * @property integer $entity_id
 * @property string $description
 * @property boolean $do_not_call
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Contact extends Model
{
    //
}
