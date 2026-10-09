<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::latest()->get();

        return view('backend.works', compact('works'));
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        $data['published'] = $request->boolean('published');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('work_images', 'public');
        }

        Work::create($data);

        return redirect()->route('works.index')->with('success', 'Work entry created successfully.');
    }

    public function update(Request $request, Work $work)
    {
        $data = $this->validatedData($request);
        $data['published'] = $request->boolean('published');

        if ($request->hasFile('image')) {
            if ($work->image) {
                Storage::disk('public')->delete($work->image);
            }
            $data['image'] = $request->file('image')->store('work_images', 'public');
        }

        $work->update($data);

        return redirect()->route('works.index')->with('success', 'Work entry updated successfully.');
    }

    public function destroy(Work $work)
    {
        if ($work->image) {
            Storage::disk('public')->delete($work->image);
        }

        $work->delete();

        return redirect()->route('works.index')->with('success', 'Work entry deleted successfully.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'client_name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:Project,Contract,Partnership,Training'],
            'status' => ['required', 'in:Planned,In progress,Completed'],
            'description' => ['required', 'string', 'max:5000'],
            'public_url' => ['nullable', 'url', 'max:2048'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);
    }
}