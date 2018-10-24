<?php
  require __DIR__ . '/vendor/autoload.php';

  define('APP_KEY', 'b7f6904b034d9b3bf50b');
  define('APP_SECRET', '304d4c96a046a8b1d49b');
  define('APP_ID', '559447');

  /*$options = array(
    'cluster' => 'ap1',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    APP_KEY, // key
    APP_SECRET, //secret
    APP_ID, //appid
    $options
  );*/

  //$data['message'] = 'hello world';
  // $data = array(
  //   "name"=> "Liko",
  //   "message"=> "ims notif"
  // );

  $pusher = new Pusher\Pusher(APP_KEY, APP_SECRET, APP_ID, array('cluster' => 'ap1'));
  // $pusher->trigger('iodev_channel', 'iodev_event', array('message' => 'hello world'));




  // $pusher->trigger('iodev_channel', 'iodev_event', $data);

// $pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID);
// $update_info = update_object($_POST['id'], $_POST['updated_value']);


if (isset($_POST['submit'])) {
  $data = array();
  $data['status'] = true;
  $data['data'] = array(
    "name"=> $_POST['name'],
    "message"=> $_POST['message']
  );
  
  $pusher->trigger('iodev_channel', 'iodev_event', $data);   
}

?>

<form action="" method="POST">
  <input type="text" name="name">
  <br>
  <input type="text" name="message">
  <br>
  <input type="submit" name="submit">
</form>