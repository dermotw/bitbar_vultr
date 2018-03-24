#!/usr/bin/php
<?php
# Logo for light backgrounds
#$vultr_logo = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAPCAMAAADarb8dAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACIlBMVEUAAAAeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiOUeiOUeiOUrKikrKikrKikrKikrKikrKikrKikeiOUeiOUeiOUeiOUeiecdjvEfgtkrKikrKikrKikrKikrKikrKikrKikeiOUhb7MA//8wCQAsJiAqND4rKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKin////+yFOcAAAAtXRSTlMAzPr58msAAAAADrjNsNnc/sUQAAAAAEL12QsWH735SAAAAACU/34AAABm/5oBAAAAH93hKgAAH93hIwAAAABj/5kCAACT/2oAAAAJtvlGAAAAQfa8DAAAADjyww4AAAAKUVMMAAAAh/9wAAAAAAALCwAAGNTkJgAAABSstBoAV/6cAgAAAZf/XAGr+UcAAAAAQfatNevEDwAAAAALveys/nEAAAAAaP7/4SYAAAAAHcv/igIAtN2UKwAAAAFiS0dEtTMOWksAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfiAxgNIzdLmVS0AAAA6ElEQVQI12NgZGJmYWVjZwACDk4ubh4GXj5+AUEhYRGggKiYuIQkg5S0jKycvIIiUEBJWUVVjUFdQ1NLW0dXj4FB38DQyNiEgcHUzNzC0srahsHWzt7B0Qmo0tnF1c3dw5PBy9vH188fKBAQGBQcEhoWHhEZFR0TCxSIi09ITEpOSU1Lz8jMygbZn5Obl19QWFRcUlpWXgESYKisqq6pratvaGxqBvMZWlrb2js6u7p7evsgAv0TJk6aPGXqtOkzZkIEZs2eM3fe/AULFy1mgIIlS5ctX7Fy1eo1MIG169Zv2Lhp8xYgEwCiEj+jiRjnGgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMy0yNFQxMzozNTo1NSswMDowMCW3IhgAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDMtMjRUMTM6MzU6NTUrMDA6MDBU6pqkAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==";

# Logo for dark backgrounds
$vultr_logo = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAPCAMAAADarb8dAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACIlBMVEUAAAAeiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////8eiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////8eiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////8eiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////////8eiOUeiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////////8eiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////////8eiOUeiOUeiOUeiOUeiOUeiOUeiOX///////////////////////////8eiOUeiOUeiOUeiOUch+UPgOMsj+f///////////////////////////8eiOVaqOwAAHz////////m8vz///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+qNGOOAAAAtXRSTlMAzPr58msAAAAADrjNsNnc/sUQAAAAAEL12QsWH735SAAAAACU/34AAABm/5oBAAAAH93hKgAAH93hIwAAAABj/5kCAACT/2oAAAAJtvlGAAAAQfa8DAAAADjyww4AAAAKUVMMAAAAh/9wAAAAAAALCwAAGNTkJgAAABSstBoAV/6cAgAAAZf/XAGr+UcAAAAAQfatNevEDwAAAAALveys/nEAAAAAaP7/4SYAAAAAHcv/igIAtN2UKwAAAAFiS0dECIbelXoAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfiAxgNJApcsI5iAAAA6ElEQVQI12NgZGJmYWVjZwACDk4ubh4GXj5+AUEhYRGggKiYuIQkg5S0jKycvIIiUEBJWUVVjUFdQ1NLW0dXj4FB38DQyNiEgcHUzNzC0srahsHWzt7B0Qmo0tnF1c3dw5PBy9vH188fKBAQGBQcEhoWHhEZFR0TCxSIi09ITEpOSU1Lz8jMygbZn5Obl19QWFRcUlpWXgESYKisqq6pratvaGxqBvMZWlrb2js6u7p7evsgAv0TJk6aPGXqtOkzZkIEZs2eM3fe/AULFy1mgIIlS5ctX7Fy1eo1MIG169Zv2Lhp8xYgEwCiEj+jiRjnGgAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMy0yNFQxMzozNjoxMCswMDowMBjyuEYAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDMtMjRUMTM6MzY6MTArMDA6MDBprwD6AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==";
?>
| templateImage=<?php echo $vultr_logo; ?>

---
Vultr | href=https://my.vultr.com
---
<?php
$TOKEN="YOURAPITOKEN";

$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, "https://api.vultr.com/v1/server/list");
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array( "API-Key: $TOKEN") );
$js = curl_exec( $ch );

$servers = json_decode( $js );

foreach ( $servers as $server ) {
  print "- " . $server->label . "\n";
  print "-- " . $server->main_ip . "| href=" . $server->kvm_url . "\n";
  print "-- " . $server->os . "\n";
  print "-- " . $server->location . "\n";
  print "-- " . $server->power_status . "\n";
  print "-- " . $server->status . "\n";
  print "-- " . $server->current_bandwidth_gb . "/" . $server->allowed_bandwidth_gb . "\n";
  print "-- €" . $server->pending_charges . "\n";
}

?>
