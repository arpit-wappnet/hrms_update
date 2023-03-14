<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{
    public function getAllUser();
    public function createPost($request);
    // public function getPostById($postId);
    // public function updatePost($request, $postId);
    // public function deletePost($postId);
}
