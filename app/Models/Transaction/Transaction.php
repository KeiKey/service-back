<?php

namespace App\Models\Transaction;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 *
 * @property int id
 */
class Transaction extends Model
{
    use AttributesTrait,
        RelationshipTrait,
        ScopesTrait,
        SoftDeletes,
        HasUUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that will not be included in the serialized representation of the model.
     *
     * @var array
     */
    protected $guarded = ['id'];
}
