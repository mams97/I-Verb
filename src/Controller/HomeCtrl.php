<?php

namespace mydico\Controller;

use mydico\Model\Word;
/**
 * 
 */
class HomeCtrl
{
    /**
     * Afficher les verbes irregulier
     */
    public function showVerb()
    {
        $verb = new Word();
        $verbs = $verb->selectWord();
        while($a = $verbs->fetch())
        {    
            echo'
                <tr>
                    <td class="text-danger">to '.$a['verbs'].'</td>
                    <td>'.$a['preteri'].'</td>
                    <td>'.$a['past'].'</td>
                    <td class="text-primary">'.ucwords($a['traduction']).'</td>
                </tr>
            ';
        }
    }
}