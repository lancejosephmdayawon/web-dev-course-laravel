<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //Simulation mala javascript object list
    private $posts = [
        [
            'id' => 1,
            'title' => 'Learning Laravel Basics',
            'author' => 'Lance Dayawon',
            'category' => 'Laravel',
            'content' => 'Laravel is a powerful PHP framework for building modern web apps...',
            'created_at' => '2025-11-10'
        ],
        [
            'id' => 2,
            'title' => 'Mastering Blade Templates',
            'author' => 'Jane Smith',
            'category' => 'Laravel',
            'content' => 'Blade makes templating easier by using directives like @extends and @foreach...',
            'created_at' => '2025-11-11'
        ],
        [
            'id' => 3,
            'title' => 'Getting Started with PHP',
            'author' => 'John Doe',
            'category' => 'PHP',
            'content' => 'PHP remains one of the most popular web development languages...',
            'created_at' => '2025-11-12'
        ],
        [
            'id' => 4,
            'title' => 'Intro to Web Security',
            'author' => 'Lance Dayawon',
            'category' => 'Security',
            'content' => 'Web security ensures that your apps and data stay safe from threats...',
            'created_at' => '2025-11-12'
        ],
        [
            'id' => 5,
            'title' => 'Understanding MVC Architecture',
            'author' => 'Mary Lopez',
            'category' => 'Web Development',
            'content' => 'MVC stands for Model-View-Controller, a pattern that separates logic...',
            'created_at' => '2025-11-13'
        ],
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pass all posts to the view using compact()
        $posts = $this->posts;
        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Laravel collect() para magkaron ng helper utils
        $posts = collect($this->posts)->firstWhere('id', $id);

        // Send the single post to the 'show' view
        return view('blog.show', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    // ADDITIONALS FUNCTIONS -----------------------------------------------//

    // filter by category
    public function filterByCategory($category)
    {
        // Get all posts that match the category using collect to get filtering mechanism
        $filteredPosts = collect($this->posts)->where('category', $category);

        // Send both the category and filtered posts to the view
        return view('blog.category', [
            'category' => $category,
            'posts' => $filteredPosts
        ]);
    }

    // Abopuit page
    public function about()
    {
        // Just returns a simple static page
        return view('blog.about');
    }
}
