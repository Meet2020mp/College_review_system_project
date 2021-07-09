<?php

if (isset($_POST["Collages"])) {
    $collage = ($_POST["Collages"]);

    switch ($collage) {
        case 'gov_Collages':
            header("location: gov_collage.php");
            break;
            case 'self_Collages':
                header("location: self_collage.php");
                break;
                case 'university':
                    header("location: university.php");
                    break;
    }

}else{
    header("location: index.php");
}


?>