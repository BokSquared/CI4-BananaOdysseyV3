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

            // Fetch only active users (account_status = 1)
            $listOfUser = $model->where('account_status', 1)
                ->orderBy('id', 'ASC')
                ->findAll();
        } catch (\Exception $e) {
            // If DB has an issue, show a message instead
            $listOfUser = "There is an issue with the database.";
        }

        return view('test/user', ['listOfUser' => $listOfUser]);
    }
}
