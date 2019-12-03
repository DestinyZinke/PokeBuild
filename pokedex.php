<?php 
echo '<body class="pokedex_body"';
?>
<?php
    $name ='';
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
        $url = 'https://pokeapi.co/api/v2/pokemon/';
        $data = file_get_contents($url);
        $json = json_decode($data, true);
        echo "<div class='row'><div class='column'>";
        foreach($json['results'] as $result){
            echo '<a href="dex_entry.php?name='.$result['name'].'">
            <img class="pokemon-image" src="https://img.pokemondb.net/artwork/'.$result['name'].'.jpg">
            </a>';
        }
        echo "</div></div>";
    }

    ?>
    <?php
    echo '</body>';
    ?>