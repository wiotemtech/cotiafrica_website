<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | C2IA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
+</head>
+<body class="min-h-screen bg-slate-950 font-[Manrope] text-slate-900">
+    <main class="mx-auto flex min-h-screen max-w-7xl items-center px-4 py-10">
+        <div class="grid w-full overflow-hidden rounded-3xl bg-white shadow-2xl md:grid-cols-2">
+            <section class="bg-gradient-to-br from-brand-900 to-accent p-10 text-white">
+                <h1 class="text-3xl font-extrabold">CodeToInnovate Africa</h1>
+                <p class="mt-4 text-cyan-100">Admin access for managing blog content and platform operations.</p>
+            </section>
+            <section class="p-10">
+                <h2 class="text-2xl font-extrabold text-slate-900">Admin Login</h2>
+                <form action="{{ route('login') }}" method="POST" class="mt-6 space-y-4">
+                    @csrf
+                    <div>
+                        <label for="email" class="block text-sm font-semibold text-slate-700">Email</label>
+                        <input type="text" id="email" name="email" required class="mt-2 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-brand-500 focus:outline-none">
+                    </div>
+                    <div>
+                        <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
+                        <input type="password" id="password" name="password" required class="mt-2 w-full rounded-xl border border-slate-300 px-4 py-3 focus:border-brand-500 focus:outline-none">
+                    </div>
+                    <button type="submit" class="w-full rounded-xl bg-brand-600 px-4 py-3 text-sm font-bold text-white hover:bg-brand-700">Login</button>
+                    <a href="{{ route('home') }}" class="inline-flex text-sm font-semibold text-brand-700">Go to Site</a>
+                </form>
+            </section>
+        </div>
+    </main>
+</body>
+</html>
+'@ | Set-Content "resources\views\backend\login.blade.php";
@'
@extends('backend.layouts.app')

@section('content')
<div class="grid gap-6 md:grid-cols-3">
    <div class="rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200">
        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Content</p>
        <p class="mt-2 text-3xl font-extrabold text-slate-900">Blog Dashboard</p>
        <p class="mt-2 text-sm text-slate-600">Manage and publish site updates from one place.</p>
    </div>
    <div class="rounded-2xl bg-white p-6 shadow ring-1 ring-slate-200 md:col-span-2">
        <h1 class="text-2xl font-extrabold text-slate-900">Welcome back, Admin</h1>
        <p class="mt-2 text-slate-600">Use the sidebar to create, edit, and maintain blog content.</p>
    </div>
</div>
@endsection
