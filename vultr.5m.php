#!/usr/bin/php
<?php
# Logo for light backgrounds
#$vultr_logo = "iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAMAAAACh/xsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAdVBMVEUeiOUAAAArKikeiOUeiOUeiOUrKikrKikeiOUeiOUeiOUeiOUrKikrKikeiOUeiOUeiOYrKikrKikrKikehuEfgdgrKikrKikrKikuFQArKSYrKikrKikrKikrKikrKikrKikrKikrKikrKikrKikrKin///8Js/iFAAAAJnRSTlMAAAC33GEqxRJZqwpzpA+zQhKzQz83UqQJDH8nnlYCh6WuEzbldHu3R2MAAAABYktHRCZaCJi1AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4gMYDRAQGviE7wAAAD9JREFUCNcVxkUCgDAAA7C2uLsNGfr/LwI5BY7rgfIDhFGcUGkG5EWpqm5AtJ36YfwymXlZBXKz+3H+0XU/4gtGUALWeTDTRQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMy0yNFQxMzoxNjoxNiswMDowMCNONL0AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTgtMDMtMjRUMTM6MTY6MTYrMDA6MDBSE4wBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==";

# Logo for dark backgrounds
$vultr_logo = "iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAMAAAACh/xsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAdVBMVEUeiOUAAAD///8eiOUeiOUeiOX///////8eiOUeiOUeiOUeiOX///////8eiOUeiOUdiOX///////////8iiuUukef///////////////////////////////////////////////////////////////////9coYRMAAAAJnRSTlMAAAC33GEqxRJZqwpzpA+zQhKzQz83UqQJDH8nnlYCh6WuEzbldHu3R2MAAAABYktHRAJmC3xkAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH4AMXDyYuRKptAgAAAD9JREFUCNcVxkUCgDAAA7C2uLsNGfr/LwI5BY7rgfIDhFGcUGkG5EWpqm5AtJ36YfwymXlZBXKz+3H+0XU/4gtGUALWeTDTRQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxOC0wMy0yNFQxMzoxOTozMiswMDowMGQvTF4AAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTYtMDMtMjNUMTU6Mzg6NDYrMDA6MDDK+FA/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==";
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
