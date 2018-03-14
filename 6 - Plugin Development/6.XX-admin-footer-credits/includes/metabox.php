<?php

function smo_members_only_checkbox_field() {

  echo "CHECKBOX";


}

add_action( 'post_submitbox_misc_actions', 'smo_members_only_checkbox_field' );
