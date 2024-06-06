<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Recipe;


class CommentController extends Controller
{
    public function store(Request $request, Recipe $recipe)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $recipe->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('message', 'Comment added successfully.');
    }

    public function destroy(Comment $comment)
    {
        if (auth()->id() == $comment->user_id) {
            $comment->delete();
            return redirect()->back()->with('message', 'Comment deleted successfully.');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
    }
}


