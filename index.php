
<?php

//1.classe Prodotto
class Prodotto {
    private $nome;
    private $categoria;
    private $prezzo;
    private $tipo;
  

    //-COSTRUTTORE
    public function __construct($nome, $categoria, $prezzo, $tipo) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
        $this->tipo = $tipo;
      }
  

    

    //ELENCO GET
    public function getNome() {
        return $this->nome;
      }
    
      public function getCategoria() {
        return $this->categoria;
      }
    
      public function getPrezzo() {
        return $this->prezzo;
      }
    
      public function getTipo() {
        return $this->tipo;
      }


    }



//2. classe Categoria (uso private)
class Categoria {
    private $nome;
  
    public function __construct($nome) {
      $this->nome = $nome;
    }
  
    public function getNome() {
      return $this->nome;
    }
  }


//3. classe Shop
class Shop {
  private $prodotti = array();

  public function aggiungiProdotto(Prodotto $prodotto) {
    $this->prodotti[] = $prodotto;
  }

  public function getProdotti() {
    return $this->prodotti;
  }


}


//4. Categorie Cani o Gatti
$cani = new Categoria("Cani");
$gatti = new Categoria("Gatti");

//5. tipi di prodotti "Giochino per gatti" - "Cuccetta per cani" - "Croccantini per gatti sterilizzati''
$prodotto1 = new Prodotto("Giochino per cani", $cani, 10, "gioco");
$prodotto2 = new Prodotto("Crocchelle per gatti adulti", $gatti, 5, "cibo");
$prodotto3 = new Prodotto("Cuccetta per cuccioli", $cani, 50, "cuccia");



//6. shop
$shop = new Shop();

   //aggiungi prodotti
$shop->aggiungiProdotto($prodotto1);
$shop->aggiungiProdotto($prodotto2);
$shop->aggiungiProdotto($prodotto3);
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c5d4023dee.js" crossorigin="anonymous"></script>
    <title>Zoo E-commerce</title>
</head>
<body class="bg-warning">


<div class="col-12 d-flex justify-content-center list-unstyled">

<ul class="list-group list-group-flush">
    <li class="list-group-item bg-warning"><h1 class="text-center mt-5 text-primary">Scopri i nostri prodotti!</h1></li>
    <li class="list-group-item mx-5 px-5 bg-warning"><a href="#" class="btn btn-primary mx-5"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"> Il tuo carrello!</i></a></li>
</ul>
  

</div> 


<!-- 7. Stampa prodotti nelle card -->
<div class="container mt-5">

  <div class="row mt-5">

    <?php foreach ($shop->getProdotti() as $prodotto) { ?>

      <div class="col-md-4 mt-5">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prodotto->getNome(); ?></h5>
            <p class="card-text"><?php echo $prodotto->getCategoria()->getNome(); ?></p>
            <p class="card-text"><?php echo $prodotto->getPrezzo(); ?> euro</p>
            <p class="card-text"><?php echo $prodotto->getTipo(); ?></p>
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>


<div class="container mt-5">

  <div class="row mt-5">

    <?php foreach ($shop->getProdotti() as $prodotto) { ?>

      <div class="col-md-4 mt-5">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $prodotto->getNome(); ?></h5>
            <p class="card-text"><?php echo $prodotto->getCategoria()->getNome(); ?></p>
            <p class="card-text"><?php echo $prodotto->getPrezzo(); ?> euro</p>
            <p class="card-text"><?php echo $prodotto->getTipo(); ?></p>
            <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
    
</body>
</html>