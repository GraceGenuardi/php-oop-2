
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
    <title>Zoo E-commerce</title>
</head>
<body>

  <div class="container d-flex gap-3">

  <!-- CARD -->
  <div class="card w-30 mb-3 mt-5">
  <div class="card-body">
  <?php
  // Stampiamo i dettagli dei prodotti
foreach ($shop->getProdotti() as $prodotto) {
    echo "<div>";
    echo "<h3>" . $prodotto->getNome() . "</h3>";
    echo "<p>Prezzo: " . $prodotto->getPrezzo() . " euro</p>";
    echo "<p>Tipo: " . $prodotto->getTipo() . "</p>";
    echo "</div>";
  } ?>
  </div>
</div>

<div class="card w-30 mt-5">
  <div class="card-body">
  <?php
  // Stampiamo i dettagli dei prodotti
foreach ($shop->getProdotti() as $prodotto) {
    echo "<div>";
    echo "<h3>" . $prodotto->getNome() . "</h3>";
    echo "<p>Prezzo: " . $prodotto->getPrezzo() . " euro</p>";
    echo "<p>Tipo: " . $prodotto->getTipo() . "</p>";
    echo "</div>";
  } ?>
  </div>
</div>


<div class="card w-30 mt-5">
  <div class="card-body">
  <?php
  // Stampiamo i dettagli dei prodotti
foreach ($shop->getProdotti() as $prodotto) {
    echo "<div>";
    echo "<h3>" . $prodotto->getNome() . "</h3>";
    echo "<p>Prezzo: " . $prodotto->getPrezzo() . " euro</p>";
    echo "<p>Tipo: " . $prodotto->getTipo() . "</p>";
    echo "</div>";
  } ?>
  </div>
</div>

  </div>
    
</body>
</html>