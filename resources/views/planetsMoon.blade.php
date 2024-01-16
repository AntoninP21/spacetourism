@extends('layouts.destination')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>CHOISISSEZ VOTRE DESTINATION
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src=../images/moon.png alt=lune>
      </div>
   </div>
        <div class=text_planet>           
            <div class=navigation_planets>
                <!-- Navigation Links -->
                <a href='{{route("moon")}}'>
                    <div class=box_nav_planet_selected>
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
                    <div class=box_nav_planet>
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
                  LUNE
               </div>
               <div class=corps_planet>
               Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.
               </div>     
               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  DISTANCE
                  <div class=info_planet>384 000 KM</div>
               </div>
               <div class=titre_info_planet>
                  DURÉE
                  <div class=info_planet>3 JOURS</div>
               </div>
            </div>
         </div>
</main>
@stop