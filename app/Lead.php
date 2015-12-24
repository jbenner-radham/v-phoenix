<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lead
 *
 * @property integer $id
 * @property string $description
 * @property boolean $email_opt_out
 * @property boolean $include_packing
 * @property integer $lead_sources_id
 * @property integer $lead_statuses_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereEmailOptOut($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereIncludePacking($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereLeadSourcesId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereLeadStatusesId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lead whereUpdatedAt($value)
 * @property integer $entity_id
 * @property-read \App\Entity $entity
 * @property-read \App\LeadSource $source
 * @property-read \App\LeadStatus $status
 */
class Lead extends Model
{
    /**
     * A lead is/has an entity record
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function entity()
    {
        return $this->hasOne('App\Entity', 'id', 'entity_id');
    }

    /**
     * A lead has a source
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function source()
    {
        return $this->hasOne('App\LeadSource', 'id', 'lead_sources_id');
    }

    /**
     * A lead has a status
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne('App\LeadStatus', 'id', 'lead_statuses_id');
    }
}
