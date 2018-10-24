<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    'd384630c9b815d250c1c',
    'c4d5b50cd6488b573826',
    '456801',
    $options
  );

  $data['message'] = 'hello world';
  $pusher->trigger('my-channel', 'my-event', $data);
?>

<form method="post">
<input type="text" name="msg">
<input type="submit">
</form>