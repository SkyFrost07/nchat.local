<?php

namespace Rikkei\Chat\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';
    
    
    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }
    
    public function fanpage(){
        return $this->belongsTo('Rikkei\Chat\Models\Fanpage', 'fanpage_id', 'id');
    }
    
    public function toUser(){
        return $this->belongsTo('\App\User', 'to_user_id', 'id');
    }
    
    public function toFanpage() {
        return $this->belongsTo('Rikkei\Chat\Models\Fanpage', 'to_fanpage_id', 'id');
    }
}
