<?php
$link = mysqli_connect("localhost", "root", "", "sistema");
$json = file_get_contents( 'https://api.bitvalor.com/v1/ticker.json' );
$object = json_decode( $json );


// exchanges object
$exchanges = $object->ticker_24h->exchanges;

// Array six positions
$array = get_object_vars( $exchanges );

// Array six string
$array_keys = array_keys( $array );

foreach ($array_keys as $key) {
print( $key . "\n" );
print( "=====================\n" );


$vol = $exchanges->{$key}->vol;
$last = $exchanges->{$key}->last;
$trade = $exchanges->{$key}->trades;
$max = $exchanges->{$key}->high;
$min = $exchanges->{$key}->low;

print( " Vol: " . $vol . "\n" );
print( " Last: " . $last . "\n" );
print("trades:" . $trade. "\n");
print("max:" . $max. "\n");
print("min:" . $min. "\n");

print("\n");

$inserir = "insert into dados (nome,volume,preco,trade,max,min) values ('$key','$vol','$last','$trade','$max','$min')";
mysqli_query($link,$inserir);
}




?>