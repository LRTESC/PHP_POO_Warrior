<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";




    class BattleField extends BaseBattleField
{
        public static function createMyWarrior(){

            $warrior = new MarvelWarrior("laurent");
            $warrior->imageUrl = "https://img.phonandroid.com/2021/12/halo-infinite-cinematique-supprimee.jpg";
            $warriorWeapon = new Weapon(1, 150);
            $warriorWeapon->imageUrl = "https://www.gamosaurus.com/wp-content/uploads/AAA/Microsoft/343-industries/halo-infinite/tier-list-meilleures-armes/fusil-de-combat-br75.png";
            $warrior->weapon = $warriorWeapon;
            $warrior->saveNew();



    }

        public static function createOtherWarrior(){
            $warrior = new PokemonWarrior("julie");
            $warrior->imageUrl = "https://images.theconversation.com/files/333847/original/file-20200510-49565-obuwhm.jpg?ixlib=rb-1.1.0&rect=8%2C2%2C1908%2C1195&q=45&auto=format&w=926&fit=clip";
            $warriorWeapon = new Weapon(2, 125);
            $warriorWeapon->imageUrl = "https://nordactu.fr/wp-content/uploads/2021/05/Lhistoire-fascinante-dAthena-deesse-grecque-de-la-sagesse.jpg";
            $warrior->weapon = $warriorWeapon;
            $warrior->saveNew();

        }

}
