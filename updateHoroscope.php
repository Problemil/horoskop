<?php
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
if ($_SERVER['REQUEST_METHOD'] == 'PUT'){ 
    $month = substr($_PUT['birthDate'], 2, 2);
    $day = substr($_PUT['birthDate'], 4, 2);
  
    $horoscopes = array(
        "ariesFM"       => 3,   "ariesLM"         => 4,  "ariesFD"         => 21, "ariesLD"        => 20,
        "taurusFM"      => 4,   "taurusLM"        => 5,  "taurusFD"        => 21, "taurusLD"       => 21,
        "geminiFM"      => 5,   "geminiLM"        => 6,  "geminiFD"        => 22, "geminiLD"       => 21,
        "cancerFM"      => 6,   "cancerLM"        => 7,  "cancerFD"        => 22, "cancerLD"       => 22,
        "leoFM"         => 7,   "leoLM"           => 8,  "leoFD"           => 23, "leoLD"          => 23,
        "virgoFM"       => 8,   "virgoLM"         => 9,  "virgoFD"         => 24, "virgoLD"        => 22,
        "libraFM"       => 9,   "libraLM"         => 10, "libraFD"         => 23, "libraLD"        => 23,
        "scorpioFM"     => 10,  "scorpioLM"       => 11, "scorpioFD"       => 24, "scorpioLD"      => 22,
        "sagittariusFM" => 11,  "sagittariusLM"   => 12, "sagittariusFD"   => 23, "sagittariusLD"  => 21,
        "capricornFM"   => 12,  "capricornLM"     => 1,  "capricornFD"     => 22, "capricornLD"    => 20,
        "aquariusFM"    => 1,   "aquariusLM"      => 2,  "aquariusFD"      => 21, "aquariusLD"     => 18,
        "piscesFM"      => 2,   "piscesLM"        => 3,  "piscesFD"        => 19, "piscesLD"       => 20,
    );
  
    if($month == $horoscopes["ariesFM"] && $day >= $horoscopes["ariesFD"] || $month == $horoscopes["ariesLM"] && $day <= $horoscopes["ariesLD"]){          
        $horoscope = "<h1>Du föddes som Vädur!</h1><img src='./pics/Aries.jpg'>";
    }
    if($month == $horoscopes["taurusFM"] && $day >= $horoscopes["taurusFD"] || $month == $horoscopes["taurusLM"] && $day <= $horoscopes["taurusLD"]){          
        $horoscope = "<h1>Du föddes som Oxe!</h1><img src='./pics/Taurus.jpg'>";
    }
    if($month == $horoscopes["geminiFM"] && $day >= $horoscopes["geminiFD"] || $month == $horoscopes["geminiLM"] && $day <= $horoscopes["geminiLD"]){          
        $horoscope = "<h1>Du föddes som tvilling!</h1><img src='./pics/Gemini.png'>";
    }
    if($month == $horoscopes["cancerFM"] && $day >= $horoscopes["cancerFD"] || $month == $horoscopes["cancerLM"] && $day <= $horoscopes["cancerLD"]){          
        $horoscope = "<h1>Du har cancer!</h1><img src='./pics/cancer.jpg'>";
    }
    if($month == $horoscopes["leoFM"] && $day >= $horoscopes["leoFD"] || $month == $horoscopes["leoLM"] && $day <= $horoscopes["leoLD"]){          
        $horoscope = "<h1>Tyvärr, du blev Leo!</h1><img src='./pics/Leo.jpg'>";
    }
    if($month == $horoscopes["virgoFM"] && $day >= $horoscopes["virgoFD"] || $month == $horoscopes["virgoLM"] && $day <= $horoscopes["virgoLD"]){          
        $horoscope = "<h1>Du är en Jungfru! hehe </h1><img src='./pics/Virgo.jpg'>";
    }
    if($month == $horoscopes["libraFM"] && $day >= $horoscopes["libraFD"] || $month == $horoscopes["libraLM"] && $day <= $horoscopes["libraLD"]){          
        $horoscope = "<h1>Du är en Våg! Trampad på.</h1><img src='./pics/Libra.jpg'>";
    }
    if($month == $horoscopes["scorpioFM"] && $day >= $horoscopes["scorpioFD"] || $month == $horoscopes["scorpioLM"] && $day <= $horoscopes["scorpioLD"]){          
        $horoscope = "<h1>Du blev en skorpion...grattis?</h1><img src='./pics/scorpio.jpg'>";
    }
    if($month == $horoscopes["sagittariusFM"] && $day >= $horoscopes["sagittariusFD"] || $month == $horoscopes["sagittariusLM"] && $day <= $horoscopes["sagittariusLD"]){          
        $horoscope = "<h1>Du blev en Centaur!? Fett coolt.</h1><img src='./pics/skytt.jpg'>";
    }
    if($month == $horoscopes["capricornFM"] && $day >= $horoscopes["capricornFD"] || $month == $horoscopes["capricornLM"] && $day <= $horoscopes["capricornLD"]){          
        $horoscope = "<h1>Alla vill vara stenbock och du blev det!</h1><img src='./pics/stenbock.jpg'>";
    }
    if($month == $horoscopes["aquariusFM"] && $day >= $horoscopes["aquariusFD"] || $month == $horoscopes["aquariusLM"] && $day <= $horoscopes["aquariusLD"]){          
        $horoscope = "<h1>Du blev AquaMan! Grattis du har kraften att tala med fiskar!</h1><img src='./pics/aquaman.png'>";
    }
    if($month == $horoscopes["piscesFM"] && $day >= $horoscopes["piscesFD"] || $month == $horoscopes["piscesLM"] && $day <= $horoscopes["piscesLD"]){          
        $horoscope = "<h1>Grattis, AquaMan är din boss!</h1><img src='./pics/fiskar.jpg'>";
    }   
 
  
    if(isset($_SESSION['horoscope'])){  
    $_SESSION['horoscope'] =  $horoscope;
    echo "Update Horoscope = True";
}
else{
    echo "Update Horoscope = False";
}
}
?>