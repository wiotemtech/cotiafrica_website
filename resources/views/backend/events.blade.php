@extends('backend.layouts.app')

@section('content')
<div class="w3-white w3-round w3-border">
    <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight:500">Events</header>
    <div class="w3-padding-large">
        <p class="w3-text-grey">Add event details, registration links, and recordings. Publish when ready for the public events page.</p>

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
            <summary class="w3-button bg-app w3-text-white"><i class="fa fa-plus"></i> Add event</summary>
            <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" class="w3-padding-large w3-border w3-margin-top">
                @csrf
                <div class="w3-row-padding">
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-title">Event title</label>
                        <input id="new-title" name="title" class="w3-input w3-border" maxlength="255" value="{{ old('title') }}" required>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                        <label for="new-date">Date</label>
                        <input id="new-date" type="date" name="event_date" class="w3-input w3-border" value="{{ old('event_date') }}" required>
                    </div>
                    <div class="w3-quarter w3-margin-bottom">
                        <label for="new-time">Start time</label>
                        <input id="new-time" type="time" name="start_time" class="w3-input w3-border" value="{{ old('start_time') }}">
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-location">Location or platform</label>
                        <input id="new-location" name="location" class="w3-input w3-border" maxlength="255" value="{{ old('location') }}" placeholder="Venue or Online" required>
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-image">Event image (optional)</label>
                        <input id="new-image" type="file" name="image" class="w3-input w3-border" accept="image/jpeg,image/png,image/webp">
                    </div>
                </div>
                <div class="w3-margin-bottom">
                    <label for="new-description">Description</label>
                    <textarea id="new-description" name="description" class="w3-input w3-border" rows="4" maxlength="5000" required>{{ old('description') }}</textarea>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-join-url">Registration / join link</label>
                        <input id="new-join-url" type="url" name="join_url" class="w3-input w3-border" maxlength="2048" value="{{ old('join_url') }}">
                    </div>
                    <div class="w3-half w3-margin-bottom">
                        <label for="new-recording-url">Recording / event recap link</label>
                        <input id="new-recording-url" type="url" name="recording_url" class="w3-input w3-border" maxlength="2048" value="{{ old('recording_url') }}">
                    </div>
                </div>
                <label class="w3-margin-bottom"><input type="checkbox" name="published" value="1"> Publish publicly</label>
                <button type="submit" class="w3-button bg-app w3-text-white">Save event</button>
            </form>
        </details>

        <div class="w3-responsive">
            <table class="w3-table w3-bordered w3-border">
                <thead><tr><th>Event</th><th>Date</th><th>Location</th><th>Visibility</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->event_date->format('M j, Y') }}{{ $event->start_time ? ' · ' . substr($event->start_time, 0, 5) : '' }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->published ? 'Published' : 'Draft' }}</td>
                            <td>
                                <details>
                                    <summary class="w3-button w3-small">Edit</summary>
                                    <form action="{{ route('events.update', $event) }}" method="POST" enctype="multipart/form-data" class="w3-padding w3-border">
                                        @csrf
                                        @method('PUT')
                                        <label>Title<input name="title" class="w3-input w3-border" maxlength="255" value="{{ $event->title }}" required></label>
                                        <label>Date<input type="date" name="event_date" class="w3-input w3-border" value="{{ $event->event_date->format('Y-m-d') }}" required></label>
                                        <label>Start time<input type="time" name="start_time" class="w3-input w3-border" value="{{ $event->start_time ? substr($event->start_time, 0, 5) : '' }}"></label>
                                        <label>Location or platform<input name="location" class="w3-input w3-border" maxlength="255" value="{{ $event->location }}" required></label>
                                        <label>Description<textarea name="description" class="w3-input w3-border" rows="4" maxlength="5000" required>{{ $event->description }}</textarea></label>
                                        <label>Registration / join link<input type="url" name="join_url" class="w3-input w3-border" maxlength="2048" value="{{ $event->join_url }}"></label>
                                        <label>Recording / event recap link<input type="url" name="recording_url" class="w3-input w3-border" maxlength="2048" value="{{ $event->recording_url }}"></label>
                                        <label>Replace image<input type="file" name="image" class="w3-input w3-border" accept="image/jpeg,image/png,image/webp"></label>
                                        <label><input type="checkbox" name="published" value="1" @checked($event->published)> Publish publicly</label>
                                        <button type="submit" class="w3-button bg-app w3-text-white w3-margin-top">Update</button>
                                    </form>
                                </details>
                                <form action="{{ route('events.destroy', $event) }}" method="POST" class="w3-margin-top" onsubmit="return confirm('Delete this event?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w3-button w3-small w3-red">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="w3-center w3-text-grey">No events have been added yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection