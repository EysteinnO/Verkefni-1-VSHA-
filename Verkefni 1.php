<?php
// 1. Hver er munurinn á echo() og print() 
// Munurinn er sá að print gefur frá sér gildi sem er annað hvort 0 eða 1 á meðan echo er betur notað til þess að birta strengi sem hefur nokkra parametera. 
//2. Hver er munurinn á einföldum gæsalöppum og tvöföldum, sýndu mér kóðadæmi sem sýnir mismunandi niðurstöðu
// Einfaldar gæsalappir geta einungis birt venjulegann texta með engum breytum en tvöfaldar gæsalappir bjóða upp á það að birta breytur í miðjum texta eða t.d. notkun á /n.
// Dæmi: 
echo 'Jón gamli er gamall\r\nkall'; 
echo "Jón gamli er gamall \r\n kall"; //Hér sjáum við að hann birtir ekki \n því tvöfaldar gæsalappir leyfa breyturnar.
// 3. 3. Hvað er $GLOBALS, hvernig virkar það, komdu með dæmi*/
//Globals gefur manni kost á að keyra breytu sem er fyrir utan scope'inn
//Dæmi:
$x = 75;
$y = 25; 
function addition() {
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
//4. Hvenær myndir þú nota === virkjann fremur en ==, komdu með dæmi.
// === virkinn er notaður þegar hlutur á að vera nákvæmlega jafnt og er af sömu týpu en == er bara jafnt.
//Dæmi ===, ekki nákvæmlega eins
$x = 100;  
$y = "100";
var_dump($x === $y); 
//Ekki nákvæmlega eins en leyfir það samt.
$x = 100;  
$y = "100";
var_dump($x == $y);
//5. printf() er sniðugt af tveimur ástæðum hverjar eru þær? komdu einnig með kóðadæmi.
// Það gerir manni kleift að birta streng í ákveðnu formatti með því að setja inn ákveðna breytu. 
//Dæmi: 
$number = 123;
printf("Með tveimur aukastöfum: %1\$.2f
Með engum aukastöfum: %1\$u",$number);

/*
6. Hvað skrifar eftirfarandi kóði? (útskýrðu línu fyrir línu) Pass!
$a = 1;
$b = $a++;
$c = ++$a;
echo $a . $b . $c;
*/

//Sleppt
/* 7. Gefið er eftirfarandi array:
$array = array("a","b",array("d","e"),"f");
Hvaða skipun má gefa til að fá fjölda stakanna í $array, að stökunum í innra fylkinu
meðtöldum? */

/* 8. Búðu til nefnt fylki (Associative array) með eftirfarandi borgum og löndum; Japan -Tokyo, Mexico -
Mexico City, USA - New York City, India - Mumbai, Korea - Seoul, China - Shanghai. Notið foreach til að
birta Lönd og borgir */
//Dæmi:

$arr = array("Japan"=>"Tokyo", "Mexico" => "Mexico City", "USA" => "New York City", "India"=>"Mumbai", "Korea"=>"Seoul", "China" =>"Shanghai");

foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}
// 9.
/* 9. Notaðu echo og list() til að birta á skjá eftrifarandi gildi úr $colors.
$colors = array("red","blue","green"); */ 

$colors = array ("red", "blue", "green");

list($a, $b, $c) = $colors;
echo "Nokkrir litir, $a, $b og $c";

/*
10. Gefið er fylkið $states = array("Texas", "Ohio"); Bættu við aftast New York og bættu við fremst
California. (notaðu innbyggt php fall til að ná þessu fram)
*/ 

$states= array("Texas", "Ohio");

array_push($states, "Texas");
array_unshift($states, "California");
//11 Notaðu shuffle() fallið á fylkið $states og birtu útkomuna
shuffle($states);
echo %states;

//12.
$products = array( array ( “08:10”, “10:30”, “13:15”), array ( “GSÖ2B2U”, “VSH2B2U”,
“FOR2B2U”), array ( “GUS”, “GJG”, “GRL”) );

//13.
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");

foreach($customers as $key => $value) {

	echo "Key: $key; Value: $value<br />\n";
}

//14.Hver er útkoman með að nota a) sort() fallið og hinsvegar natcasesort() á $pic?
//Fallið sorterar fylki í náttúrulegri röð, þeas í náttúrulegum algorithma er talan 2 minna en 10 en í venjulegu sorti myndi talan 10 koma á undir tölunni 2 því 10 byrjar á 1 og telur tölvan það vera lægri tala.
$pic = array("pic2.jpg", "PIC10.jpg", "pic20.jpg", "pic1.jpg");
sort($pic);

//15. Hvað er HTTP, hvað þýðir að það sé stateless (útskýrðu)
// HTTP er protocol sem sér um að senda hypertext á milli og virkar sem kjarni internetsins fyrir data flutning. Það að það sé stateless þýðir að sama hversu margar beiðnir eru sendar í gegnum sömu HTTP tenginguna þá setur serverinn ekki neina sérstaka stöðu á beiðnina. Þetta er gert til þess að minnka álag á tenginguna, annars þyrfti að endursetja tenginguna fyrir hverja beiðni sem gerð er á serverinn.

//16. Útskýrðu eftirfarandi URL (samsetningu) útfrá protocol og domains; http://www.tskoli.is/
//URLinn notast við HTTP sem er staðlað protocol sem notast er við á internetinu í dag. Tskoli er nafnið á síðunni og ip talan er tengd við það en .is er lénið sem hýsir tiltekna síðu.