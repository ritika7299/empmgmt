<?php
namespace App\Controllers;
use App\Models\AuthModel;
class AuthController extends BaseController
{    

    //  public function __construct()
    // {
    //     $this->updateLastActivity(); // Call last activity update on every controller load
    // }

    // private function updateLastActivity()
    // {
    //     $session = session();
    //     if ($session->get('logged_in')) {
    //         $model = new AuthModel();
    //         $model->update($session->get('user_id'), [
    //             'last_activity' => date('Y-m-d H:i:s')
    //         ]);
    //     }
    // }
    private function updateLastActivity()
    {
    $session = session();
    $userId = $session->get('user_id');
    if (!empty($userId) && $session->get('logged_in')) {
        $model = new AuthModel();
        $model->update($userId, [
            'last_activity' => date('Y-m-d H:i:s')
        ]);
    }
}

public function index()
{
    //   echo "Login page is loading!";
    return view('auth/login');
    
}
public function login()
{
    $session = session();
    $model = new \App\Models\AuthModel();

    $validation = \Config\Services::validation();
    $validation->setRules([
        'username' => 'required',
        'password' => 'required',
    ]);
    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('error', 'Username and password required.');
    }
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $user = $model->where('username', $username)->first();
    // 30 minute session timeout
    $timeout = 30 * 60;
    $now = time();
    $lastActivity = isset($user['last_activity']) ? strtotime($user['last_activity']) : 0;

    if (!$user || $user['password'] !== $password) {
        return redirect()->back()->with('error', 'Invalid credentials.');
    }
    if (!empty($user['session_token']) && ($now - $lastActivity) < $timeout) {
        return redirect()->back()->with('error', 'User already logged in on another device.');
    }
    // Success login
    $token = bin2hex(random_bytes(32));
    $session->set([
        'logged_in'     => true,
        'user_id'       => $user['id'],
        'username'      => $user['username'],
        'session_token' => $token,
        'last_activity' => $now,
    ]);
    $model->update($user['id'], [
        'session_token' => $token,
        'last_activity' => date('Y-m-d H:i:s', $now)
    ]);
    return redirect()->to('/dashboard');
}
public function logout()
{
    $session = session();
    $userId = $session->get('user_id');

    if ($userId) {
        $model = new AuthModel();
        $model->update($userId, ['session_token' => null]);
    }

    $session->destroy();
    return redirect()->to('/');
}


}
