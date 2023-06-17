<?php

namespace App\Models;

use CodeIgniter\Model;

class AvatarModel extends Model
{
    protected $table = 'avatares';
    protected $primaryKey = 'id_avatares';
    protected $allowedFields = ['id_avatares', 'id_perfiles', 'avatar_url'];
}
