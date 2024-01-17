@extends('layouts.default')
@section('content')
   <div class=main_technologie>
      <div class=titre_lancement>
         <span class=numero>03</span>LANCEMENT SPATIAL 101
      </div>
      <div class=ensemble_technologie>
         <div class=boutons_technologie>
            <a href='{{route("technologie")}}' class=bouton_techno_selected><div class=numero_boutons>1</div></a>
            <a href='{{route("technologiePage2")}}' class=bouton_techno><div class=numero_boutons>2</div></a>
            <a href='{{route("technologiePage3")}}' class=bouton_techno><div class=numero_boutons>3</div></a>
         </div>
         <div class=texte_technologie>
            <div class=titre_technologie>
               LE LANCEUR
            </div>
            <div class=corps_technologie>
            Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l'espace, habituellement vers l'orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !
            </div>
         </div>
         <div class=image_technologie>
            <img src="../images/Soyuz_TMA-5_launch.jpg" alt="Launch1">
         </div>
      </div>
   </div>
@stop