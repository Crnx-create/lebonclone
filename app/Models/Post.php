<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

 
    protected $fillable = ['content'];
    public function index()
{
    $posts = Post::latest()->take(8)->get(); // Get latest 8 posts
    return view('welcome', compact('posts'));
}
public function store( $request)
{
    // Your ad creation logic
    
    return redirect('/')->with('success', 'Votre annonce a été publiée avec succès!');
}
    
}


