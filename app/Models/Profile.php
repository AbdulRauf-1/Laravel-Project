<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath= ($this->image) ? $this->image : '/profile/H7XwqjElMknhOIYHSmCds8sKvxd78yHZMXAekcUy.avif';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
