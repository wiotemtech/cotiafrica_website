@extends('backend.layouts.app')

@section('content')

@if(Auth::check())
<h3>Events</h3>
<div class="w3-white w3-round w3-margin-bottom w3-border">
    <header class="w3-padding-large w3-large w3-border-bottom" style="font-weight: 500">Events Posts
    </header>

    <div class="w3-padding-large">
        <input type="search" class="" name="searchInput" id="searchInput" onkeyup="searchTable()" placeholder="Search">


        <!-- Add Button with Modal Trigger -->
        <a href="javascript:void(0);" onclick="document.getElementById('addModal').style.display='block'"
            class="w3-button w3-right bg-app w3-primary w3-text-white w3-margin-bottom">
            <i class="fa fa-plus"></i> Add New
        </a>

        <!-- add new team Modal -->
        <div id="addModal" class="w3-modal">
            <div class="w3-modal-content w3-animate-opacity w3-card-4">
                <header class="w3-container bg-app">
                    <span onclick="document.getElementById('addModal').style.display='none'"
                        class="w3-button w3-text-white w3-display-topright">&times;</span>
                    <h4 class="w3-text-white">Add New Event</h4>
                </header>
                <div class="w3-container w3-padding-large">
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="w3-margin-bottom">
                            <label for="title" class="w3-label w3-text-teal">Event Title</label>
                            <input type="text" name="title" class="w3-input w3-round w3-border" id="title" value="{{ old('title') }}" required>
                        </div>
                        {{-- <div class="w3-margin-bottom">
                            <label for="meta_description" class="w3-label w3-text-teal">Meta Description</label>
                            <input type="text" name="meta_description" class="w3-input w3-round w3-border" id="meta_description" value="{{ old('meta_description') }}" maxlength="160">
                        </div> --}}
                        <div class="w3-margin-bottom">
                            <label for="image" class="w3-label w3-text-teal">Event Image</label>
                            <input type="file" name="blog_image" class="w3-input w3-round w3-border" id="image">
                        </div>
                        <div class="w3-margin-bottom">
                            <label for="content" class="w3-label w3-text-teal">Event Content</label>
                            <textarea name="content" id="editor" class="w3-input w3-round w3-border" id="content" rows="10" required>{{ old('content') }}</textarea>
                        </div>


                        {{-- <div class="w3-margin-bottom">
                            <label for="published_at" class="w3-label w3-text-teal">Published At</label>
                            <input type="hidden" name="published_at" id="published_at" value="{{ now()->format('Y-m-d') }}">
                            <input type="text" name="published_at_display" class="w3-input w3-round w3-border" id="published_at_display" value="{{ now()->format('F j, Y') }}" readonly>
                        </div> --}}

                        {{-- <div class="w3-margin-bottom">
                            <label for="author" class="w3-label w3-text-teal">Author</label>
                            <input type="text" name="author" class="w3-input w3-round w3-border" id="author" value="{{ Auth::user()->name }}" readonly>
                        </div> --}}



                        <div class="w3-margin-bottom">
                            <button type="submit" class="w3-button bg-app w3-primary w3-text-white w3-round">Add Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <!-- Table with Borders -->
        <table  id="tableData" class="w3-table w3-bordered w3-border">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                 <th scope="col">Title</th>
                <th scope="col">Date Published</th>
                <th scope="col">Action</th>

            </tr>
            <tbody>
                @php
                    $i = 1;
                @endphp

                @foreach ($allevents as $event)
                    <tr>
                        <th scope="row">{{ $i++ }}</td>
                        </th>
                        <td>
                            <img src="{{asset('storage/' . $event->blog_image)}}" width="100" alt="">
                        </td>
                       <td>{{$event->title}}</td>
                       <td>{{ optional($event->created_at)->format('Y-m-d') }}</td>

                        <td>

                                <div >
                                    <a href="javascript:void(0);"
                                        onclick="document.getElementById('viewModal{{ $event->id }}').style.display='block'"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0);"
                                        onclick="document.getElementById('editModal{{ $event->id }}').style.display='block'">
                                        <i class="fa fa-edit w3-text-orange"></i>
                                    </a>

                                    <a href="javascript:void(0);"
                                        onclick="document.getElementById('deleteModal{{ $event->id }}').style.display='block'"><i
                                            class="fa fa-trash w3-text-red"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- view team member Modal -->
                    <div id="viewModal{{ $event->id }}" class="w3-modal">
                        <div class="w3-modal-content w3-animate-opacity w3-card-4">
                            <header class="w3-container bg-app">
                                <span
                                    onclick="document.getElementById('viewModal{{ $event->id }}').style.display='none'"
                                    class="w3-button w3-text-white w3-display-topright">&times;</span>
                                <h4 class="w3-text-white">Event</h4>
                            </header>
                            <div class="w3-container w3-padding-large">
                                <div class="w3-container w3-card-4 w3-light-grey w3-padding-16">
                                    <p><small>Published on {{ optional($event->created_at)->format('Y-m-d') }}</small></p>
                                    {{-- <p>Author: <small>{{$blog->author}}</small></p> --}}
                                    <div class="w3-center">
                                        <h4>{{$event->title}}</h4>
                                        <img src="{{asset('storage/' . $event->blog_image)}}" alt="">

                                    </div>
                                    <h5>Event Content</h5>
                                    <p>{!! $event->content !!}</p>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- edit blog Modal -->
                    <div id="editModal{{ $event->id }}" class="w3-modal">
                        <div class="w3-modal-content w3-animate-opacity w3-card-4">
                            <header class="w3-container bg-app">
                                <span
                                    onclick="document.getElementById('editModal{{ $event->id }}').style.display='none'"
                                    class="w3-button w3-text-white w3-display-topright">&times;</span>
                                <h4 class="w3-text-white">Edit Event</h4>
                            </header>
                            <div class="w3-container w3-padding-large">
                                <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="w3-margin-bottom">
                                        <label for="title" class="w3-label w3-text-teal">Event Title</label>
                                        <input type="text" name="title" class="w3-input w3-round w3-border" id="title" value="{{ old('title', $event->title) }}" required>
                                    </div>

                                    <div class="w3-margin-bottom">
                                        <label for="meta_description" class="w3-label w3-text-teal">Meta Description</label>
                                        <input type="text" name="meta_description" class="w3-input w3-round w3-border" id="meta_description" value="{{ old('meta_description', $event->meta_description) }}" maxlength="160">
                                    </div>

                                    <div class="w3-margin-bottom">
                                        <label for="image" class="w3-label w3-text-teal">Event Image</label>
                                        <input type="file" name="image" class="w3-input w3-round w3-border" id="image">

                                        @if($event->image_path)
                                            <img src="{{ asset($event->image_path) }}" alt="Blog Image" class="w3-image w3-margin-top" style="max-width: 200px;">
                                        @endif
                                    </div>

                                    <div class="w3-margin-bottom">
                                        <label for="content" class="w3-label w3-text-teal">Event Content</label>
                                        <textarea id="editor" name="content" class="w3-input w3-round w3-border"  rows="10" required>{!! old('content', $event->content) !!}</textarea>
                                    </div>

                                    <div class="w3-margin-bottom">
                                        <label for="published_at" class="w3-label w3-text-teal">Published At</label>
                                        <input type="hidden" name="published_at" id="published_at" value="{{ $event->published_at }}">
                                        <input type="text" name="published_at_display" class="w3-input w3-round w3-border" id="published_at_display" value="{{ $event->created_at }}" readonly>
                                    </div>

                                    <div class="w3-margin-bottom">
                                                                                                    
                                        <label for="author" class="w3-label w3-text-teal">Author</label>
                                        <input type="text" name="author" class="w3-input w3-round w3-border" id="author" value="{{ Auth::user()->name }}" readonly>
                                    </div>

                                    <div class="w3-margin-bottom">
                                        <button type="submit" class="w3-button bg-app w3-primary w3-text-white w3-round">Update Event</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    {{-- ----- delete blog Model-- --}}
                    <div id="deleteModal{{ $event->id }}" class="w3-modal">
                        <div class="w3-modal-content w3-animate-opacity w3-card-2">
                            <header class="w3-container bg-app">
                                <span
                                    onclick="document.getElementById('deleteModal{{ $event->id }}').style.display='none'"
                                    class="w3-button w3-text-white w3-display-topright">&times;</span>
                                <h4 class="w3-text-white">Delete Event</h4>
                            </header>
                            <div class="w3-container w3-padding-large">
                                <h3 class="w3-center">Are You Sure, You want to delete this Event?</h3>
                                <form action="{{ route('event.destroy', $event->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <div class="w3-center">


                                        <button type="submit" class="w3-button w3-red w3-round">Delete</button>
                                        <button type="reset"
                                            onclick="document.getElementById('deleteModal{{ $event->id }}').style.display='none'"
                                            class="w3-button w3-gray w3-text-white w3-round">Cancel</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach


            </tbody>


        </table>

    </div>
</div>
@else
<script>
    window.location.href = "{{ route('login') }}";
</script>
@endif

@endsection
