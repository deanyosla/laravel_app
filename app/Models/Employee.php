<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'company_id', 'slug', 'name', 'email', 'image', 'job_title', 'phone', 'address', 'summary', 'description'];

    protected $with = ['company', 'user'];


    public function scopeFilter($query, array $filters)
    {

        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(fn ($query) =>
                $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('job_title', 'like', '%' . $search . '%')
                ->orWhere('summary', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                // or where the company_id of the employee matches the id of a company in the companies table where the name is like the search term
                ->orWhereHas('company', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                })
            )
        );

        $query->when($filters['company'] ?? false, fn ($query, $company) =>
        $query->whereHas('company', fn ($query) =>
        $query->where('slug', $company)));


        $query->when($filters['user'] ?? false, fn ($query, $user) =>
        $query->whereHas('user', fn ($query) =>
        $query->where('name', $user)));
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function testimonials() 
    {
        return $this->hasMany(Testimonial::class);
    }
}
