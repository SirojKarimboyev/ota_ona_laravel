<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\ContactModel;
use App\Models\SendEmailModel;

class BaseController extends Controller
{
    public function index()
    {
        $posts = PostModel::all();
        return view('index',compact('posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        $posts = PostModel::all();
        return view('blog',compact('posts'));
    }

    public function admin()
    {
        $posts = PostModel::all();
        $contacts=ContactModel::all();
        return view('admin',compact('contacts','posts'));
    }

    public function create_post(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'discription' => 'required|string', // Bu yerda 'description' o'rniga 'discription' yozilgan
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $post = new PostModel();
        $post->title = $request->title;
        $post->discription = $request->discription; // Bu ham 'discription' bo'lishi kerak
        $post->image = $request->file('image')->store('images','public'); // Tasvirni saqlash

    
        if ($post->save()) {
            return redirect()->route('admin')->with('success', 'Post muvaffaqiyatli yaratildi.');
        } else {
            return back()->withErrors('Post saqlashda xato.');
        }
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        $contact = new ContactModel();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
    
        if ($contact->save()) {
            return redirect()->route('index')->with('success', 'Xabar muvaffaqiyatli yuborildi.');
        } else {
            return back()->withErrors('Xabar yuborishda xato.');
        }
    }

    public function posts()
{
    // Barcha kontaktlarni olish
    $posts = PostModel::all();

    // Kontaktlarni ko'rsatadigan view ga o'tamiz
    return view('index', compact('posts'));
}

public function details($id)
{
    $post = PostModel::find($id);
    return view('blogDetails',compact('post'));
}

}

