
<nav class=header>
    <div class=box_logo>
            <a href='/'>
                <img src="\images\Logo.png" alt="logo"/>
            </a>
    </div>
    <nav role="navigation">
            <div id="menuToggle">
              <!--
              A fake / hidden checkbox is used as click reciever,
              so you can use the :checked selector on it.
              -->
              <input type="checkbox" />
              
              <!--
              Some spans to act as a hamburger.
              
              They are acting like a real hamburger,
              not that McDonalds stuff.
              -->
              <span></span>
              <span></span>
              <span></span>
              
              <!--
              Too bad the menu has to be inside of the button
              but hey, it's pure CSS magic.
              -->
              <ul id="menu">
                <a href="/"><li>00 ACCUEIL</li></a>
                <a href='{{route("moon")}}'><li>01 DESTINATION</li></a>
                <a href='{{route("equipages")}}'><li>02 EQUIPAGE</li></a>
                <a href='{{route("technologie")}}'><li>03 TECHNOLOGIE</li></a>
              </ul>
            </div>
        </nav><!-- Primary Navigation Menu -->
    <div class=decoration_header></div>
    <div class=background_header>
        <div class=container_header>
                <!-- Navigation Links -->
                <a href='/'>
                    <div class=box_nav>
                       <span class=bold>00</span> ACCUEIL
                    </div>               
                </a>  
                 <!-- Lien pour la création d'une tâche -->
                    <a href='{{route("moon")}}''>
                    <div class=box_nav>
                        <span class=bold>01</span> DESTINATION
                    </div>    
                    </a>
                    <!-- Lien pour la liste des tâches -->
                <a href='{{route("equipages")}}'>
                    <div class=box_nav>
                        <span class=bold>02</span> EQUIPAGE
                    </div>    
                </a>       
                <a href='{{route("technologie")}}'>
                    <div class=box_nav>    
                        <span class=bold>03</span> TECHNOLOGIE
                    </div>    
                </a>      
        </div>                
    </div>   
</nav>
