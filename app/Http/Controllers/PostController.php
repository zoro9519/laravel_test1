<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Get All Posts
    public function getAllPosts() {
        $posts = Post::with('owner')->get();
    
        // Return the posts as json
        return response()->json($posts);
    }

    // Search Posts
    public function searchPosts(Request $request) {
        $text = request('searchText');
        $isFacebook = request('facebook');
        $isTwitter = request('twitter');
        $isTiktok = request('tiktok');
        $isLinkedin = request('linkedin');
        $startDate = request('startDate');
        $endDate = request('endDate');
        $userList = request('userList');
        $result = Post::with('owner.userlist');

        if ($text) {
            $result = $result->where(function ($query) use ($text) {
                $query->where('title', 'LIKE', "%$text%")->orwhere('content', 'LIKE', "%$text%");
            });
        }

        if ($isFacebook === 'true') {
            $result = $result->where('social', 'facebook');
        }
        if ($isTwitter === 'true') {
            $result = $result->where('social', 'twitter');
        }
        if ($isTiktok === 'true') {
            $result = $result->where('social', 'tiktok');
        }
        if ($isLinkedin === 'true') {  
            $result = $result->where('social', 'linkedin');
        }

        if ($startDate) {
            $result = $result->where('created_at', '>=', $startDate);
        }
        if ($endDate) {
            $result = $result->where('created_at', '<=', $endDate);
        }

        if ($userList) {
            $result = $result->whereHas('owner.userlist', function($query) use ($userList) {
                $query->where('name', $userList);
            });
        }
        
        return response()->json($result->get());
    }
}
