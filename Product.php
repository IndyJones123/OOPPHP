<?php
    class product{

        //variabel product
        private $name;
        private $price;
        private $discount;
    
        public function __construct($name,$price,$discount)
        {
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
        }


        //Getter
        public function getName(){
            return $this->name;
        }
        public function getPrice()
        {
            return $this->price;
        }
        public function getDiscount()
        {
            return $this->discount;
        }
        //Setter
        public function setName($name) : void
        {
            if(!is_string($name)){
                throw new Exception("Nama Wajib String !");
            }
            $this->name = $name;
        }
        public function setDiscount($discount) : void
        {
            $this->discount = $discount;
        }
        public function setPrice($price)
        {
            $this->price = $price;
            
        }

    }

    class CDMusic extends product{
        private $artist;
        private $genre;

        public function __construct($name,$price,$discount,$artist,$genre)
        {
            parent::__construct($name,$price,$discount);
            $this->artist = $artist;
            $this->genre = $genre;
        }

        public function getArtist()
        {
            return $this->artist;
        }
        public function setArtist($artist) : void
        {
            $this->artist = "$artist";
        }
        public function getGenre()
        {
            return $this->genre;
        }
        public function setGenre($genre) : void
        {
            $this->genre = "$genre";
        }
        public function setPrice($price) : void
        {
            $this->price = $price*115/100;
        }


    }

    class CDCabinet extends product{
        public $capacity;
        public $model;
        
        
        public function __construct($name,$price,$discount,$capacity,$model)
        {
            parent::__construct($name,$price,$discount);
            $this->capacity = $capacity;
            $this->model = $model;
        }

        public function getCapacity()
        {
            return $this->capacity;
        }
        public function setCapacity($capacity) : void
        {
            $this->capacity = "$capacity";
        }
        public function getModel()
        {
            return $this->model;
        }
        public function setModel($model) : void
        {
            $this->model = "$model";
            
        }
        public function setPrice($price) : void
        {
            $this->price = $price*110/100;
        }

    }
    
    //Data Object CDMusic
    $CDMusic1 = new CDMusic ("Cukup",100000,0,"Mhytia Batford","Melody");
    $CDMusic1 ->setPrice(100000);
    $price = $CDMusic1->getPrice();
    $CDMusic2 = new CDMusic ("Mantra Hujan",200000,0,"Kobo Kanaeru","Melody");

    //Data Object 
    $CDCabinet1 = new CDCabinet ("Zankyou Sanka",100000,0,100,"Kayu");
    $CDCabinet2 = new CDCabinet ("Jollie Jollie",100000,0,200,"Besi");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP Practice</title>
</head>
<body>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="practice.css">
    <title>PHP OOP Practice</title>
</head>
<body>
    <div class="navbar">
        <ul class="nav-area">
            <li><a href="Home.html">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="Product.php">Product✓</a></li>
        </ul>
    </div>

    <div class="wrapper">
        <div class="item1">
            <h1>Mhytia Batford</h1>
            <img src="Mhytia.png" alt="">
            <ul>
                <li>Name    : <?php echo $CDMusic1 -> getName(); ?></li>
                <li>Price   : <?php echo $CDMusic1 -> getPrice(); ?></li>
                <li>Discount : <?php echo $CDMusic1 -> getDiscount(); ?></li>
                <li>Artist : <?php echo $CDMusic1 -> getArtist(); ?></li>
                <li>Genre : <?php echo $CDMusic1 -> getGenre(); ?></li>
            </ul>
        </div>
        <div class="item1">
            <h1>Kobo Kanaeru</h1>
            <img src="Kobo.png" alt="">
            <ul>
                <li>Name    : <?php echo $CDMusic2 -> getName(); ?></li>
                <li>Price   : <?php echo $CDMusic2 -> getPrice(); ?></li>
                <li>Discount : <?php echo $CDMusic2 -> getDiscount(); ?></li>
                <li>Artist : <?php echo $CDMusic2 -> getArtist(); ?></li>
                <li>Genre : <?php echo $CDMusic2 -> getGenre(); ?></li>
            </ul>
        </div>
        <div class="item2">
            <h1>Vestia Zeta</h1>
            <img src="Zeta.png" alt="">
            <ul>
                <li>Name    : <?php echo $CDCabinet1 -> getName(); ?></li>
                <li>Price   : <?php echo $CDCabinet1 -> getPrice(); ?></li>
                <li>Discount : <?php echo $CDCabinet1 -> getDiscount(); ?></li>
                <li>Model : <?php echo $CDCabinet1 -> getModel(); ?></li>
                <li>Capacity : <?php echo $CDCabinet1 -> getCapacity(); ?></li>
            </ul>
        </div>
        <div class="item2">
            <h1>Kureiji Ollie</h1>
            <img src="Ollie.png" alt="">
            <ul>
                <li>Name    : <?php echo $CDCabinet2 -> getName(); ?></li>
                <li>Price   : <?php echo $CDCabinet2 -> getPrice(); ?></li>
                <li>Discount : <?php echo $CDCabinet2 -> getDiscount(); ?></li>
                <li>Model : <?php echo $CDCabinet2 -> getModel(); ?></li>
                <li>Capacity : <?php echo $CDCabinet2 -> getCapacity(); ?></li>
            </ul>
        </div>
     </div>

</body>
</html>