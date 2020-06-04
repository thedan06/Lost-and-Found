<?php
/**
 * Created by PhpStorm.
 * User: Dustan.Mbaga
 * Date: 2019-02-04
 * Time: 07:51 PM
 */


/**
 * @param $fields
 * */
function formGroup($fields){

    foreach ($fields as $label => $value){
        $_label = str_replace(' ', '_', strtolower($label));

        echo "
            <div class='form-group'>
                <label class='control-label col-sm-3' for='$_label'>$label</label>
                <div class='col-sm-9'>
                    <p>: &nbsp; $value</p>
                </div>
            </div>
        ";
    }
}

function humanReadableDate($date){
    return \Carbon\Carbon::createFromTimeStamp(strtotime($date))->diffForHumans();
}