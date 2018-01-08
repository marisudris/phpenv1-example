<?php

require '../vendor/autoload.php';

use Medoo\Medoo;

$database = new Medoo([
  'database_type' => 'sqlite',
  'database_file' => '../storage/database.db'
]);

$comment = new Sitepoint\Comment($database);
$comment->setEmail('maris.udris.lv@gmail.com')
  ->setName('Maris Udris')
  ->setComment('It works! It really works!')
  ->setComment('Hooray! Saving comment works!')
  ->save();

dump($database->error());

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <form action="post">
          <label for="name">Name: <input type="text" name="name" placeholder="Your name"></label>
          <label for="email">Email: <input type="text" name="email" placeholder="Your@email"></label>
          <label for="comment">Comment: <textarea name="comment" cols="30" rows="10"></textarea></label>
          <input type="submit" value="Save">
        </form>
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
