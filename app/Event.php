<?php

namespace vphoenix;

use Illuminate\Database\Eloquent\Model;

/**
 * vphoenix\Event
 *
 * @property integer $id
 * @property string $description
 * @property string $end
 * @property string $start
 * @property string $location
 * @property string $summary
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereStart($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereSummary($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereUpdatedAt($value)
 * @property string $url
 * @method static \Illuminate\Database\Query\Builder|\vphoenix\Event whereUrl($value)
 */

// see http://laravel.com/docs/5.1/eloquent#query-scopes
// for reusable query constraints

class Event extends Model
{
    //
}
