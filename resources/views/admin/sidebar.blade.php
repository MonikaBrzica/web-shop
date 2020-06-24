<ul class="sidebar-nav">
    <li class="sidebar-brand">
        <a href="#">
            Hello {{ Auth::user()->name }}
        </a>
    </li>
    <li>
        <a href="#">Dashboard</a>
    </li>
    <li>
        <a href="#">Mailbox</a>
    </li>
    <li>
        <a href="{{ route('categories') }}">Categories</a>
    </li>
    <li>
        <a href="{{ route('articles') }}">Articles</a>
    </li>
    <li>
        <a href="#">Orders</a>
    </li>
</ul>