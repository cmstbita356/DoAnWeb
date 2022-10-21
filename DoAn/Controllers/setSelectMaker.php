<?php
    include_once "../Models/maker_module.php";

    $mm = new maker_module();
    $ListMaker = $mm->GetAll();
    foreach ($ListMaker as $maker)
    {
        echo
        "
            <option value='$maker->id'>$maker->name</option>
        ";
    }
?>