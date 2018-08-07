<?php

class MyWidget extends WP_Widget {

  function __construct() {
    parent::__construct(
      'my_widget',
      'My Widget',
      array(
          'description' => 'This widget shows a random number'
       )
    };
}

public function widget($args, $instance) {
    echo rand(0,1000);
    
}

}
?>
