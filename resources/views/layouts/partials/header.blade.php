<header>
    <h1>Free Knowledge</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
            
            <li><a href="{{route('courses.index')}}" class="{{request()->routeIs('courses.*') ? 'active' : ''}}">Courses</a></li>
            
            <li><a href="{{route('aboutus')}}" class="{{request()->routeIs('aboutus') ? 'active' : ''}}">About us</a></li>

            <li><a href="{{route('contactus.index')}}" class="{{request()->routeIs('contactus.index') ? 'active' : ''}}">Contact us</a></li>
            
        </ul>
    </nav>
</header>