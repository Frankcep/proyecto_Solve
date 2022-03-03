<nav>
  
    <ul> <!--todo esto es para cuando mandemos a una web si el nombre coicide pues sale en rojo -->
        
        <li class="{{ request()->routeIs('home') ? 'active' : ''}}"><a href="/112/public/">Home</a></li> 
        <li class="{{ request()->routeIs('about') ? 'active' : ''}}"><a href="/112/public/about">about</a></li> 
        <li class="{{ request()->routeIs('project.*') ? 'active' : ''}}"><a href="/112/public/project/datos">Ver fichas</a></li> 
        <li class="{{ request()->routeIs('contacto') ? 'active' : ''}}"><a href="/112/public/contacto">contacto</a></li> 
    </ul>
</nav>