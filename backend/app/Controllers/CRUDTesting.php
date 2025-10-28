<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class CRUDTesting extends Controller
{
    public function showUsersPage()
    {
        try {
            $model = new UsersModel();

            $listOfUser = $model->where('account_status', 1)
                ->orderBy('id', 'ASC')
                ->findAll();
        } catch (\Exception $e) {
            $listOfUser = "There is an issue with the database.";
        }

        return view('test/user', ['listOfUser' => $listOfUser]);
    }

    public function createUserPage()
    {
        $session = session();
        $old = $session->getFlashdata('old') ?? [];
        $errors = $session->getFlashdata('errors') ?? [];
        return view('test/user_create', ['old' => $old, 'errors' => $errors]);
    }

    public function storeUser()
    {
        $session = session();
        $request = service('request');

        $validation = \Config\Services::validation();
        $validation->setRule('first_name', 'First Name', 'required');
        $validation->setRule('last_name', 'Last Name', 'required');
        $validation->setRule('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $validation->setRule('password', 'Password', 'required|min_length[6]');

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        $userModel = new \App\Models\UsersModel();

        $data = [
            'first_name' => $post['first_name'],
            'middle_name' => $post['middle_name'] ?? null,
            'last_name' => $post['last_name'],
            'email' => $post['email'],
            'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
            'type' => 'client',
            'account_status' => 1,
            'email_activated' => 0,
        ];

        $userModel->insert($data);

        return redirect()->to('/test/show');
    }

    public function showUpdatePage($id = null)
    {
        if (!$id) {
            $user = "Missing requirements: ID";
            return view('test/user_update', ['user' => $user]);
        }

        $userModel = new \App\Models\UsersModel();

        try {
            $user = $userModel->find($id);
        } catch (\Exception $e) {
            $user = "Server Issue: " . $e->getMessage();
        }

        return view('test/user_update', ['user' => $user]);
    }

    public function updateUser($id = null)
    {
        $request = service('request');
        $post = $request->getPost();
        $session = session();
        $userModel = new \App\Models\UsersModel();
        $validation = \Config\Services::validation();

        // Validation rules
        $validation->setRule('id', 'ID', 'required|min_length[1]');
        $validation->setRule('type', 'User Type', 'required|min_length[1]');

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }

        try {
            $account = $userModel->where('id', $post['id'])->first();
            if (!$account) {
                return $this->response->setStatusCode(404)
                    ->setJSON(['success' => false, 'message' => 'Account not found']);
            }

            $payload = [
                'id' => $post['id'],
                'type' => $post['type'],
                'first_name' => $post['first_name'],
                'last_name' => $post['last_name'],
            ];

            $ok = $userModel->save($payload);

            if ($ok === false) {
                throw new \Exception('Model update failed');
            }

            return $this->response->setStatusCode(200)
                ->setJSON(['success' => true, 'message' => 'Account Updated', 'data' => ['id' => $post['id']]]);
        } catch (\Throwable $e) {
            return $this->response->setStatusCode(500)
                ->setJSON(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
        }
    }
}
