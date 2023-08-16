<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['department_id', 'ticket_type', 'user_id', 'warehouse_id', 'location', 'category', 'sub_category', 'body', 'date_created', 'status'];

    protected $with = ['department', 'reporter'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
