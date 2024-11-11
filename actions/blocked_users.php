<?php
// Function to get blocked users from the file
function getBlockedUsers() {
    $file_path = 'blocked_users.json';

    // If the file exists, load and return the blocked users list
    if (file_exists($file_path)) {
        return json_decode(file_get_contents($file_path), true);
    }
    
    // Return an empty array if the file doesn't exist
    return [];
}

// Function to save blocked users to the file
function saveBlockedUsers($blocked_users) {
    $file_path = 'blocked_users.json';

    // Save the blocked users list as a JSON file
    file_put_contents($file_path, json_encode($blocked_users));
}

// Function to block a user by adding their IP or User ID
function blockUser($user_ip, $user_id) {
    // Get the current list of blocked users
    $blocked_users = getBlockedUsers();

    // Add the user's IP and User ID to the blocked list
    if (!in_array($user_ip, $blocked_users)) {
        $blocked_users[] = $user_ip;
    }
    if (!in_array($user_id, $blocked_users)) {
        $blocked_users[] = $user_id;
    }

    // Save the updated list to the file
    saveBlockedUsers($blocked_users);
}

// Function to check if a user is blocked (by IP or User ID)
function isUserBlocked($user_ip, $user_id) {
    // Get the list of blocked users
    $blocked_users = getBlockedUsers();

    // Return true if the user's IP or User ID is in the blocked list
    return in_array($user_ip, $blocked_users) || in_array($user_id, $blocked_users);
}
?>
