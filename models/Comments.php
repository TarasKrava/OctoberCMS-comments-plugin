<?php namespace Taras\Comments\Models;

use Model;

/**
 * Model
 */
class Comments extends Model
{
    use \October\Rain\Database\Traits\Validation;

    const STATUS = ['1' => 'Approved', '2' => 'Pending', '3' => 'Spam'];

    /*
     * Validation
     */
    public $rules = [
            'author' => 'alpha|min:2|max:25',
            'email' => 'email',
            'content' => 'required|min:2|max:500'
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
//    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'taras_comments_posts';


   public $belongsTo = [
       'user' => ['RainLab\User\Models\User']
   ];

    public function getStatusOptions($keyValue = null)
    {
        return self::STATUS;
    }

    
    public function getStatusAdminAttribute()
    {
        return self::STATUS[$this->status];
    }

    public function getAvatarAttribute()
    {
        return "<img src='http://www.gravatar.com/avatar/" . md5($this->author) . "/?d=wavatar&r=pg'/>";
    }

    public function getNameAttribute()
    {
        if($this->author != ""){
            return $this->author;
        } elseif ($this->user) {
            return $this->user->name;
        }    
    }
}