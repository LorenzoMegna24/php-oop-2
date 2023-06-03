<?php
class Prodotti{
  public $name;
  public $categoria;
  public $tipo;
  public $img;

  function __construct( $_name, $_categoria, $_tipo, $_img){
    $this->name = $_name;
    $this->categoria = $_categoria;
    $this->tipo = $_tipo;
    $this->img = $_img;

  }
}

class Categoria{
  public $animale;
  public $icona; 

   function __construct( $_animale, $_icona){
    $this->animale = $_animale;
    $this->icona = $_icona;

  }
}

$cane = new Categoria('Cane', '<i class="fa-solid fa-dog"></i>');
$gatto  = new Categoria('Gatto', '<i class="fa-solid fa-cat"></i>');



$arrayCane = [
  new Prodotti('cuccia', $cane, 'accessori', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz_im1JIEn9y_cXMiLVMQv6J56v4eBZYUXig&usqp=CAU' ),
  new Prodotti('ciotola', $cane, 'accessori', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRojxU5e-5N0AFXbiOgoqR3OYid0M6lBFJj1w&usqp=CAU' ),
  new Prodotti('croccantini', $cane, 'food', 'https://cdn.maurysonline.it/immagini/5474697_1101920-ultima-dog-croccantini-cane-800-grammi-mini-adult-pollo-main_510.jpeg' ),
  new Prodotti('pallina', $cane, 'giochi', 'https://www.epocaitalpigeon.com/8840-large_default/trixie-snack-ball-palla-per-ricompensa-per-cani-o-7-cm.jpg' ),
  new Prodotti('manicotti', $cane, 'giochi', 'https://www.eurodogs.it/foto/grandi/29595219_1597384887024839_9126139891837467648_n.jpg' ),
];

$arrayGatto = [
  new Prodotti('cuccia', $gatto, 'accessori','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz_im1JIEn9y_cXMiLVMQv6J56v4eBZYUXig&usqp=CAU' ),
  new Prodotti('ciotola', $gatto, 'accessori', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRojxU5e-5N0AFXbiOgoqR3OYid0M6lBFJj1w&usqp=CAU' ),
  new Prodotti('croccantini', $gatto, 'food', 'https://zampettaverde.it/251-large_default/lily-s-kitchen-croccantini-gatto-pollo.jpg' ),
  new Prodotti('pallina', $gatto, 'giochi', 'https://www.epocaitalpigeon.com/8840-large_default/trixie-snack-ball-palla-per-ricompensa-per-cani-o-7-cm.jpg' ),
  new Prodotti('manicotti', $gatto, 'giochi', 'https://www.eurodogs.it/foto/grandi/29595219_1597384887024839_9126139891837467648_n.jpg' ),
];


var_dump($arrayCane);
var_dump($arrayGatto);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prodotti animali php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <?php foreach( $arrayCane as $element ) { ?>
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $element->img  ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $element->name  ?></h5>
          <p class="card-text"><?php echo $element->tipo  ?></p>
          <span><?php echo $element->categoria->cona  ?></span>
        </div>
      </div>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>