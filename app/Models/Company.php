<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['slug', 'name', 'email', 'logo', 'website', 'summary', 'description'];

    public function scopeFilter($query, array $filters)
    {

        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(fn ($query) =>
                $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('summary', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
            )
        );
        
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
