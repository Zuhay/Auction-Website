<?php


print_r('Downloading...<br/>');


$searchFor = 'flower';

$path = "auctionImages/";


for ($i=1; $i<1000; $i++) {

    print_r('image:'. $i);

    for ($j = 1; $j < 4; $j++) {

        print_r (' '. $j);

        $url = 'https://loremflickr.com/320/240/'.$searchFor;

        $img = $path . 'flower'.$i.'-'.$j.'.jpg';

        file_put_contents($img, file_get_contents($url));

    }

    print_r('<br>');

}


print_r('done');
