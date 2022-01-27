<?php
/*
milkshake Recipe:
Pumpkin - 150g (peeled weight)
Milk - 500 ml
Sugar - 25 g
Star anise - 1 star
Ground cinnamon - 0.5 teaspoon
Vanillin - 0.25 tsp
Cloves (dried buds) - 2 pcs.
*/

function makeMilkShake
(int $pumpkin,
 int $milk,
 int $sugar,
 int $anise,
 int $cinnamon,
 int $vanillin,
 int $cloves,
 string $wishes)
{
	echo 
	"1.Prepare the ingredients. <br>
	 2.Peel the $pumpkin and cut into small cubes with a side of about 3-4 cm. Place the pieces of $pumpkin in a small saucepan or stewpan with a thick bottom <br>
	 3.Add $sugar, $vanillin, $cloves, star $anise and 0.5 teaspoon of $cinnamon. <br>
	 4.Pour in the $milk. Bring to a boil over medium heat. Reduce the heat to low and simmer for about 15 minutes, until the $pumpkin is tender. <br>
	 5.Remove the star $anise and $cloves, they will no longer be needed.
	 Beat the mixture of $milk and $pumpkin with an immersion blender for 2-3 minutes, until the $pumpkin is completely crushed.
	 If desired, the drink can also be filtered. In this case, it should be beaten again after straining to return the appetizing $milk foam. <br>
	 6.Pour hot drink into glasses. <br>
	 7.Sprinkle each serving with the remaining $cinnamon, if desired.
	 <br>
	 $wishes";
	 /*
	 Hot milkshake with pumpkin and spices is ready to serve.
	 Enjoy!
	 */
 }	 
makeMilkShake(150, 500, 25, 1, 05, 2, 3, 1, 'Bon appetit');
/*
    INGREDIENTS FOR BANANA SMOOTHIE WITH MILK AND COCOA:
    1)150 ml milk
    2)80 grams banana
    3)cocoa 1 tablespoon
    4)1 tea spoon ground cinnamon
*/
function makeBananaSmoothie(
    int $milk, 
    int $banana, 
    int $cocoa, 
    int $cinnamon,
    int $chocolate, 
    string $wishes
    )
{
    echo " 
    1)Банан $banana очистите от кожуры и нарежьте мякоть кружочками. <br>
    2)В чаше блендера соедините банан $banana, какао $cocoa и корицу $cinnamon. <br>
    3)Измельчите на высокой скорости примерно 1-2 минуты, до получения гладкого и однородного пюре. <br>
    4)Влейте молоко $milk. <br>
    5)Снова пробейте на высокой скорости блендера примерно 1-2 минуты, до однородности. <br>
    7)Шоколад $chocolate натрите на мелкой тёрке. <br>
    $wishes.
    ";
    /* 
    Peel the banana and cut the flesh into circles.Combine banana, cocoa and 
    cinnamon in a blender bowl.Blend on high speed for about 1-2 minutes until a smooth 
    and uniform puree is obtained.Pour in the milk.Beat again at high speed blender 
    for about 1-2 minutes, until smooth.Grate chocolate on a fine grater.
    Pour the banana smoothie with cocoa into a glass, sprinkle with chocolate and serve.
    Bon Appetit!
    */
}
makeBananaSmoothie(150, 80, 1, 1, 5, "Bon Appetit!");
