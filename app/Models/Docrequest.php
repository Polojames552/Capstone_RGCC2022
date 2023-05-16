<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docrequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'stud_id',
        'Name',
        'Course',
        
        'date',
        'HonDismissal',
        'Special_Order',
        'Diploma',
        'TOR',
        'Form137',
        'GoodMoral',

        'UnitEarned',
        'Graduation',
        'GWA',
        'Grades',

        'Auth_Transcript',
        'Auth_Special_Order',
        'Auth_Diploma',

        'Purpose',
        'Status',
        'cp',
    ];
}
