<?php
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