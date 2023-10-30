<?

class Animal
{
    public $weight, $color, $age;

    function info()
    {
        echo 'Weight:' . $this->weight . '<br>' . 'Age:' . $this->age . 'Color:' . $this->color . '<br>';
    }
}



class Lion extends Animal
{
    public $speed;
    function info()
    {
        echo '<span class="color">Speed: </span>' . $this->speed . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}


class Rabbit extends Animal
{
    public $types;
    function info()
    {
        echo '<span class="color">Type: </span>' . $this->types . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}

class Wolf extends Animal
{
    public $habitat;
    function info()
    {
        echo '<span class="color">Habitat: </span>' . $this->habitat . '<br>' . '<span class="color">Weight: </span>' . $this->weight . '<br>' . '<span class="color">Color: </span>' . $this->color . '<br>' . '<span class="color">Age: </span>' . $this->age;
    }
}
$lion = new Lion();
$lion->weight = '200';
$lion->color = 'orange (windy)';
$lion->age = '12';
$lion->speed = '66 m/s';


$rabbit = new Rabbit();
$rabbit->weight = '30';
$rabbit->color = 'brown (eats)';
$rabbit->age = '2';
$rabbit->types = 'Belgyiski flandr';


$wolf = new Wolf();
$wolf->weight = '60';
$wolf->color = 'gray (happy)';
$wolf->age = '0.5';
$wolf->habitat = 'Africa';

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2 class="title">Info about animals</h2>
        <div class="info">

            <div class="info_animal">
                <img src="https://media.tenor.com/kbRMp8KEM60AAAAC/lion-king.gif" alt="" class="img">
                <p class="text">
                    <?
                    $lion->info();
                    ?>
                </p>
            </div>
            <div class="info_animal">
                <img src="https://media.tenor.com/rsIKBdlbxaUAAAAd/bunny-rabbit.gif" alt="" class="img">
                <p class="text">
                    <?
                    $rabbit->info();
                    ?>
                </p>
            </div>
            <div class="info_animal">
                <img src="https://media.tenor.com/Dde3GlJ0fM0AAAAd/%D0%B2%D0%BE%D0%BB%D0%BA-%D0%B2%D0%BE%D0%BB%D0%BA%D0%BA%D1%80%D1%83%D0%B6%D0%B8%D1%82%D1%81%D1%8F.gif" alt="" class="img">
                <p class="text">
                    <?
                    $wolf->info();
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>