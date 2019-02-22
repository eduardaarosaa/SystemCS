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

print( " Vol: " . $vol . "\n" );
print( " Last: " . $last . "\n" );
print("trades:" . $trade. "\n");

print("\n");

$inserir = "insert into dados (nome,volume,preco,trade) values ('$key','$vol','$last','$trade')";
mysqli_query($link,$inserir);
}




?>