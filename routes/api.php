<?php

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs', function () {
    try {
        return Blog::query()
            ->latest()
            ->get()
            ->map(function (Blog $blog) {
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'excerpt' => Str::limit(strip_tags((string) $blog->content), 170),
                    'content' => $blog->content,
                    'blog_image' => $blog->blog_image,
                    'created_at' => optional($blog->created_at)->toDateString(),
                ];
            });
    } catch (\Throwable $e) {
        report($e);

        return response()->json([
            'message' => 'Blog service is temporarily unavailable.',
        ], 503);
    }
});

Route::get('/blogs/{id}', function (int $id) {
    try {
        $blog = Blog::findOrFail($id);

        return [
            'id' => $blog->id,
            'title' => $blog->title,
            'content' => $blog->content,
            'blog_image' => $blog->blog_image,
            'created_at' => optional($blog->created_at)->toDateString(),
        ];
    } catch (ModelNotFoundException $e) {
        return response()->json([
            'message' => 'Blog article not found.',
        ], 404);
    } catch (\Throwable $e) {
        report($e);

        return response()->json([
            'message' => 'Blog article is unavailable right now.',
        ], 503);
    }
});

// Contact form submission
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name'    => ['required', 'string', 'max:100'],
        'email'   => ['required', 'email', 'max:150'],
        'phone'   => ['nullable', 'string', 'max:30'],
        'subject' => ['nullable', 'string', 'max:200'],
        'message' => ['required', 'string', 'min:10', 'max:2000'],
    ]);

    try {
        Contact::create($data);

        return response()->json([
            'message' => 'Message received! We will get back to you shortly.',
        ], 201);
    } catch (\Throwable $e) {
        report($e);

        return response()->json([
            'message' => 'We could not save your message right now. Please email us directly at codetoinnovateafrica256@gmail.com.',
        ], 503);
    }
});
