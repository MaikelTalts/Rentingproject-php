<?php
    /*  deleteAccessory.php [KÄYNNISTETÄÄN] sivulta:
        /js/main.js
    */

    //Noudetaan server.php tiedosto
    include '../server.php';

    //Tallennetaan vastaanotettu lisävarusteID muuttujaan
    $accessoryID = $_POST['accessoryID'];

    //Valmistellaan SQL komento muuttujaan
    $query = "DELETE FROM accessory
              WHERE accessoryID = $accessoryID;";

    //Suoritetaan SQL kysely, samalla tarkistaen sen onnistumisen
    if (mysqli_query($mysqli, $query)) {
      $return_data['msg'] = 'Poisto onnistui 1';
      $return_data['msg2'] = 'Poisto onnistui 2';
      echo json_encode($return_data);
    } else {
        $return_data['msg'] = 'Poisto epäonnistui';
        $return_data['msg2'] = 'Poisto epäonnistui2.';
    }

?>
