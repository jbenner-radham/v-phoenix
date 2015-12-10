<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @property integer $id
 * @property string $description
 * @property string $end
 * @property string $start
 * @property string $location
 * @property string $summary
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereStart($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereSummary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereUpdatedAt($value)
 * @property string $url
 * @method static \Illuminate\Database\Query\Builder|\App\Event whereUrl($value)
 */

// see http://laravel.com/docs/5.1/eloquent#query-scopes
// for reusable query constraints

class Event extends Model
{
    //
}
