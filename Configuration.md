// Ydei paila nai port 3006 port use gare sake cha vane


## Configuration
gui bata port change garne ==> 3308

MySQL ==> config ==> my.ini

    ports = 3008 (2 tau ma cha)
    (skip search ani add)
    skip-grant-tables=TRUE

appache ==> config ==> php.ini
mysql.default_port=3308

C:\xampp\phpMyAdmin

config.inic.php file bitra add $cfg['Servers'][$i]['port'] = '3308';
