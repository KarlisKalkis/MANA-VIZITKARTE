<?php
    print_r('get');

    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname =  filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);
    $quest = filter_input(INPUT_GET, 'quest', FILTER_SANITIZE_STRING);


    echo $firstname;
    echo $lastname;
    echo $type;
    echo $quest;


/* Nav izmantots missing data, jo informācija kas ir norādīta ka jāatrodas ir jau 
iestrādāta HTML kodā */

/* PHP ir iestrādāts ka strādā uz SAZINA.HTML lapu */





?>