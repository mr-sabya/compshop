<ul class="menu-content">
    <li class="{{ Route::is('home') ? 'active' : '' }}">
        <a href="{{ route('home') }}" wire:navigate>Home</a>
    </li>
    <li class="{{ Route::is('shop.index') ? 'active' : '' }}">
        <a href="{{ route('shop.index') }}" wire:navigate>Shop</a>
    </li>
    <li><a href="contact.html">Category</a></li>
    <li class="{{ Route::is('blog.index') ? 'active' : '' }}">
        <a href="{{ route('blog.index') }}" wire:navigate>Blog</a>
    </li>
    <li><a href="contact.html">Contact Us</a></li>
</ul>