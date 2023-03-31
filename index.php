
<?php

//1.classe Prodotto
class Prodotto {
    private $nome;
    private $categoria;
    private $prezzo;
    private $tipo;
  

    //-COSTRUTTORE
    public function __construct($nome, $prezzo, $categoria, $descrizione) {
      $this->nome = $nome;
      $this->categoria = $prezzo;
      $this->prezzo = $categoria;
      $this->tipo = $descrizione;
    }
  

    

    //ELENCO GET
    public function getNome() {
        return $this->nome;
      }
    
      public function getPrezzo() {
        return $this->prezzo;
      }
    
      public function getCategoria() {
        return $this->categoria;
      }
    
      public function getDescrizione() {
        return $this->Descrizione;
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


//5. tipi di prodotti "Giochino per gatti" - "Cuccetta per cani" - "Croccantini per gatti sterilizzati''


//6. shop

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

  <div class="container">

  <!-- 7.CARD IN FOREACH -->

  </div>
    
</body>
</html>