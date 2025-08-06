<?php

namespace App\Models;
use CodeIgniter\Model;
class AuthModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password', 'is_logged_in','session_token'];
    public function isUsernameTaken($username)
    {
        return $this->where('username', $username)->first() !== null;
    }
    public function isEmailTaken($email)
    {
        return $this->where('email', $email)->first() !== null;
    }
}



