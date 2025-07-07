<?php

class BaseController
{

    public function handleLogin($data) {
        $username = $data['username'] ?? '';
        echo "Logging in user: $username";
    }

    public function handleRegister($data) {
        $username = $data['username'] ?? '';
        echo "Registering user: $username";
    }

    public function showHome() {
        require 'views/landing_page.php';
    }

    public function showDashboard() {
        // Example data, replace with DB queries as needed
        $users = [
            ['username' => 'alice', 'email' => 'alice@example.com'],
            ['username' => 'bob', 'email' => 'bob@example.com'],
        ];

        // Make $users available in the view
//        require 'views/dashboard.php';
        require __DIR__ . '/../view/dashboard.php';

    }

    public function handleUpdate($data) {
        // Validate, then update based on $data['user_id']
        echo "User updated!";
    }

    public function handleDelete($data) {
        $userId = intval($data['user_id'] ?? 0);

        if ($userId) {
            // Perform deletion
            // e.g., $this->userModel->deleteUserById($userId);
            echo "User with ID $userId deleted.";
        } else {
            echo "No valid user ID provided.";
        }
    }

    public function dashBoard() {
        require 'view/landing_page.php';
    }
    public function  library_display() {
//        require get_required_files('../view/library.php');
        require '/view/landing_page.php';

    }

//    public function load_index_page(){
//        require_once ('index.php');
//    }
}
