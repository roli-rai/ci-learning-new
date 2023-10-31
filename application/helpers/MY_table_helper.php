<?php

if ( ! function_exists('create_thead'))
{
    // $col_names = array('id', 'name', 'email');
    function create_thead($col_names){
        $ret_str = '';
        for ($i=0; $i < count($col_names); $i++) { 
            // echo "<th  scope='col'>" . $col_names[$i] . "</th>"; die;
            $th = "<th  scope='col'>" . $col_names[$i] . "</th>";
            $ret_str = $ret_str . $th;
            // $ret_str = $ret_str . "";
        }
        $ret_str = '<thead><tr>'.$ret_str.'<tr></thead>';

        return $ret_str;

    }
}

if ( ! function_exists('truc_text'))
{
    // lkjsdlf sjdklfjsio  lfjsoie lsjdfoiee sjfoiwe sdfoiwe sjoweo o f
    function truc_text($full_str, $more=NULL){
        $count = strlen($full_str);
        if($count>25){
            $first25 = substr($full_str, 0, 25);
            if($more){
                return $first25."<a href='".$more."'>more</a>";
            } else {
                return $first25."...";
            }
        } else {
            return $full_str;
        }
    }
}


?>