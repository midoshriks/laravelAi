<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\MediaLibrary\HasMedia;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements LaratrustUser , HasMedia
{

    // use LaratrustUser;
    use InteractsWithMedia;
    use HasRolesAndPermissions;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public $guarded = [];

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'google_id', facebook_id,
    //     'password',
    // ];

    protected $appends = ['photo_user'];

    public function getPhotoUserAttribute() // get ['PhotoUser '] Attribute
    {
        return asset(($this->getMedia('photo_user')->last() ? $this->getMedia('photo_user')->last()->getUrl() : 'uploads/users/' . $this->avatar));
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('country')->fit('fill', 590, 206);
        $this->addMediaConversion('mobile')->fit('fill', 450, 321);
        $this->addMediaConversion('desktop')->fit('fill', 1351, 206);
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(country::class, 'country_id', 'id');
    }

}
