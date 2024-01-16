@extends('layouts.destination')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>CHOISISSEZ VOTRE DESTINATION
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src=../images/Europa.png alt=lune>
      </div>
   </div>
        <div class=text_planet>           
            <div class=navigation_planets>
                <!-- Navigation Links -->
                <a href='{{route("moon")}}'>
                    <div class=box_nav_planet>
                       LUNE
                    </div>               
                </a>  
                 <!-- Lien pour la création d'une tâche -->
                    <a href='{{route("mars")}}'>
                    <div class=box_nav_planet>
                        MARS
                    </div>    
                    </a>
                    <!-- Lien pour la liste des tâches -->
                <a href='{{route("europa")}}'>
                    <div class=box_nav_planet_selected>
                        EUROPE
                    </div>    
                </a>       
                <a href='{{route("titan")}}'>
                    <div class=box_nav_planet>    
                        TITAN
                    </div>    
                </a>      
            </div>                
               <div class=titre_planet>
                  EUROPE
               </div>
               <div class=corps_planet>
               La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.               </div>     
               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  DISTANCE
                  <div class=info_planet>628 GM</div>
               </div>
               <div class=titre_info_planet>
                  DURÉE
                  <div class=info_planet>3 ANS</div>
               </div>
            </div>
         </div>
</main>
@stop