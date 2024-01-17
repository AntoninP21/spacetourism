@extends('layouts.default')
@section('content')
<main class=main_planet>
   <div class=soustitre_planet>
      <div class=titre_destination>
         <span class=numero>01</span>CHOISISSEZ VOTRE DESTINATION
      </div>   
      <div class=contenu_planet>
         <img class=planet_affiche src="{{ asset('/images/Titan.png ') }}" alt=titan>
      </div>
   </div>
        <div class=text_planet>           
            <div class=navigation_planets>
                <!-- Navigation Links -->
                <a href='{{route("moon",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>
                       LUNE
                    </div>               
                </a>  
                 <!-- Lien pour la création d'une tâche -->
                    <a href='{{route("mars",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>
                        MARS
                    </div>    
                    </a>
                    <!-- Lien pour la liste des tâches -->
                <a href='{{route("europa",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet>
                        EUROPE
                    </div>    
                </a>       
                <a href='{{route("titan",["locale"=>App::getLocale()])}}'>
                    <div class=box_nav_planet_selected>    
                        TITAN
                    </div>    
                </a>      
            </div>                
               <div class=titre_planet>
                  TITAN
               </div>
               <div class=corps_planet>
               La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.               <div class=separateur_planet>

               </div>     
            <div class=infos_planet>
               <div class=titre_info_planet>
                  DISTANCE
                  <div class=info_planet>1.6 TM</div>
               </div>
               <div class=titre_info_planet>
                  DURÉE
                  <div class=info_planet>7 ANS</div>
               </div>
            </div>
         </div>
</main>
@stop