<?php
return array(
    'driver' => 'sendmail',
    'host' => 'smtp.gmail.com',
    'port' => 587,
   'from' => array('address' => 'rbutauskas@gmail.com', 'name' => 'Raimis'),
    'encryption' => 'tls',
    'username' => 'rbutauskas@gmail.com',
    'password' => 'Converteri$.1',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => false,

);
