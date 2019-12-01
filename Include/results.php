<?php
    $name ='bulbasaur';
    if(isset($_POST['search'])){
        $name = $_POST['search'];
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$name;
        $data = file_get_contents($url);
        $json = json_decode($data, true);;
        echo $name;
        echo '<br/>';
        foreach($json['abilities'] as $abilities){
            echo $abilities['ability']['name'];
            echo '<br/>';
        }
    }else{
        echo "Sorry we couldn't find that pokemon";
    }


?>