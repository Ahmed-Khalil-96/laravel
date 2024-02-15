    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Laravel </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <select class="custom-select" onchange="location = this.value;">
                        <option value="{{ route('users.index') }}" {{ Request::is('users') ? 'selected' : '' }}>Users List</option>
                        <option value="{{ route('users.create') }}" {{ Request::is('users/create') ? 'selected' : '' }}>New User</option>
                    </select>
                </li>
                <li class="nav-item">
                    <select class="custom-select" onchange="location = this.value;">
                        <option value="{{ route('posts.index') }}" {{ Request::is('posts') ? 'selected' : '' }}>All Posts</option>
                        <option value="{{ route('posts.create') }}" {{ Request::is('posts/create') ? 'selected' : '' }}>New Post</option>
                    </select>
                </li>
                </ul>

            </div>
        </div>
    </nav>
<style>
    .custom-select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 8px 12px;
        font-size: 14px;
        cursor: pointer;
        outline: none;
        width: 150px; 
    }

    
    .custom-select option {
        padding: 8px 12px;
    }
</style>
