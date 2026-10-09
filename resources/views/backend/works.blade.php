@extends('backend.layouts.app')

@section('content')
<div class="w3-white w3-round w3-border">
    <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight:500">Work &amp; Contracts</header>

    <div class="w3-padding-large">
        <p class="w3-text-grey">Only publish project and contract details that the client has approved for public sharing.</p>

        @if ($errors->any())
            <div class="w3-panel w3-pale-red w3-border w3-border-red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <details class="w3-margin-bottom">
            <summary class="w3-button bg-app w3-text-white"><i class="fa fa-plus"></i> Add work entry</summary>
            <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data" class="w3-padding-large w3-border w3-margin-top">
                @csrf
                <div class="w3-row-padding">
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-title">Project or contract title</label>
                        <input id="new-title" name="title" class="w3-input w3-border" maxlength="255" value="{{ old('title') }}" required>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-client">Client or partner</label>
                        <input id="new-client" name="client_name" class="w3-input w3-border" maxlength="255" value="{{ old('client_name') }}" required>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <label for="new-type">Entry type</label>
                        <select id="new-type" name="type" class="w3-select w3-border" required>
                            <option value="Project">Project</option>
                            <option value="Contract">Contract</option>
                            <option value="Partnership">Partnership</option>
                            <option value="Training">Training</option>
                        </select>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <label for="new-status">Status</label>
                        <select id="new-status" name="status" class="w3-select w3-border" required>
                            <option value="Planned">Planned</option>
                            <option value="In progress">In progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <label for="new-image">Cover image (optional)</label>
                        <input id="new-image" type="file" name="image" class="w3-input w3-border" accept="image/jpeg,image/png,image/webp">
                    </div>
                </div>
                <div class="w3-margin-bottom">
                    <label for="new-description">Public summary</label>
                    <textarea id="new-description" name="description" class="w3-input w3-border" rows="4" maxlength="5000" required>{{ old('description') }}</textarea>
                </div>
                <div class="w3-margin-bottom">
                    <label for="new-url">Public project link (optional)</label>
                    <input id="new-url" type="url" name="public_url" class="w3-input w3-border" maxlength="2048" value="{{ old('public_url') }}">
                </div>
                <label class="w3-margin-bottom"><input type="checkbox" name="published" value="1"> Publish publicly</label>
                <button type="submit" class="w3-button bg-app w3-text-white">Save entry</button>
            </form>
        </details>

        <div class="w3-responsive">
            <table class="w3-table w3-bordered w3-border">
                <thead>
                    <tr><th>Title</th><th>Client</th><th>Type / Status</th><th>Visibility</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    @forelse ($works as $work)
                        <tr>
                            <td>{{ $work->title }}</td>
                            <td>{{ $work->client_name }}</td>
                            <td>{{ $work->type }} / {{ $work->status }}</td>
                            <td>{{ $work->published ? 'Published' : 'Draft' }}</td>
                            <td>
                                <details>
                                    <summary class="w3-button w3-small">Edit</summary>
                                    <form action="{{ route('works.update', $work) }}" method="POST" enctype="multipart/form-data" class="w3-padding w3-border">
                                        @csrf
                                        @method('PUT')
                                        <label>Title<input name="title" class="w3-input w3-border" maxlength="255" value="{{ $work->title }}" required></label>
                                        <label>Client<input name="client_name" class="w3-input w3-border" maxlength="255" value="{{ $work->client_name }}" required></label>
                                        <label>Type
                                            <select name="type" class="w3-select w3-border">
                                                @foreach (['Project', 'Contract', 'Partnership', 'Training'] as $type)
                                                    <option value="{{ $type }}" @selected($work->type === $type)>{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                        <label>Status
                                            <select name="status" class="w3-select w3-border">
                                                @foreach (['Planned', 'In progress', 'Completed'] as $status)
                                                    <option value="{{ $status }}" @selected($work->status === $status)>{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                        <label>Public summary<textarea name="description" class="w3-input w3-border" rows="4" maxlength="5000" required>{{ $work->description }}</textarea></label>
                                        <label>Public project link<input type="url" name="public_url" class="w3-input w3-border" maxlength="2048" value="{{ $work->public_url }}"></label>
                                        <label>Replace cover image<input type="file" name="image" class="w3-input w3-border" accept="image/jpeg,image/png,image/webp"></label>
                                        <label><input type="checkbox" name="published" value="1" @checked($work->published)> Publish publicly</label>
                                        <button type="submit" class="w3-button bg-app w3-text-white w3-margin-top">Update</button>
                                    </form>
                                </details>
                                <form action="{{ route('works.destroy', $work) }}" method="POST" class="w3-margin-top" onsubmit="return confirm('Delete this work entry?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w3-button w3-small w3-red">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="w3-center w3-text-grey">No work entries yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection