<?php
/**	
  * id: Wichtig: Auch die ID in den eckigen Klammern ändern auf die gleiche
  	ID. Die ID muss sich immer unterscheiden für jeden einzelnen Event.
  * 
  *	titel: Der Titel des Events.
  * 
  *	time: Die ganze Einladungsfloskel mit Datum und Uhrzeit.
  * 
  *	description: Hier wird der Beschreibungstext des Events eingepflegt.
  * 
  * leftImage: Definition des Bildes auf der linken Seite des Events. Auf
  * Mobile wird dies dann oberhalb angezeigt. Hier ist ein Bild pflicht. Es
  * können eigene oder folgende vordefinierten Bilder verwendet werden:
  * italienische_flasche.png
  * pilgrim.png
  * 
  * registrationDate: Datum der Anmeldefrist eintragen. Bitte so auschreiben wie
  * es auf der Seite angezeigt werden soll.
  * 
  * rightImage: Definition des Bildes auf der rechten Seite des Events. Auf
  * Mobile wird dies dann unterhalb angezeigt. Das Bild ist optional. Es
  * können eigene oder folgende vordefinierten Bilder verwendet werden:
  * flagge_italien.png
  * flagge_spanien.png
  * flagge_frankreich.png
  * flagge_portugal.png
  * flagge_schweiz.png
  * 
  * publishedUntil: Hier bitte ein Datum eintragen wie lange der Event
  	aufgeschaltet sein soll. Das Datum bitte im ISO-Format YYYY-MM-DD schreiben.
  */

$events = array();
$events['1'] = array(
	"id" => "1",
	"titel" => "Amarone Night",
	"time" => "Herzliche Einladung zur Degustation am Donnerstag, 26.&nbsp;04.&nbsp;2018, 19 bis 21&nbsp;Uhr",
	"description" => "Der Amarone stammt aus der italienischen Region Venetien, genauer gesagt aus dem Valpolicella, in unmittelbarer Nähe zum Gardasee. Er ist einer der wertvollsten Weine Italiens, reich an vielfältigen und samtigen Aromen und wunderbaren Duftnoten, welche das Herz eines jeden Weinliebhabers höher schlagen lässt. Wir laden Sie herzlich ein zu einer Degustation erlesener Weine aus dem Amarone-Gebiet! Claudio Pavin, Weinproduzent aus Leidenschaft in zweiter Generation, entführt uns nach Venetien, das Anbaugebiet der grossen Amarone-Weine. Kulinarische Köstlichkeiten aus dem Veneto werden den Abend abrunden. Wir freuen uns sehr, gemeinsam mit Ihnen die samtigen Aromen und Noten dieser edlen Tropfen zu entdecken.",
	"leftImage" => "flagge_italien.png",
	"registrationDate" => "21. April 2018",
	"rightImage" => "flasche_amarone_night.png",
	"publishedUntil" => "2018-04-21"
);
$events['2'] = array(
	"id" => "2",
	"titel" => "Pilgrim - Biere für Freunde",
	"time" => "Herzliche Einladung zur Degustation am Donnerstag, 21.&nbsp;12.&nbsp;2017, 19 bis 21&nbsp;Uhr",
	"description" => "Guter Geschmack hat Tradition: Die 900 Jahre alten Klostermauern, die Benediktiner-Gemeinschaft, der Jakobsweg und die Kapelle – all das prägt die besonderen Biere der Klosterbrauerei Fischingen. Besonders ist nicht nur das Wasser aus der Klosterquelle, erlesene Malzsorten, Hefe, Hopfen und Gewürze. Da liegt mehr in diesen barocken Klosterbieren – vielleicht sogar ein besonderer Segen? Gereift in Champagnerflaschen haben es diese Biere auf jeden Fall in sich. Gerne laden wir Sie ein zu einer Degustation der Pilgrim Biere. Martin Wartmann, Mitgründer der Klosterbrauerei, wird uns in die mystische Welt edlen Klostertropfen führen. Gerne verwöhnen wir Sie dazu kulinarisch.",
	"leftImage" => "pilgrim.png",
	"registrationDate" => "14. Dezember 2017",
	"rightImage" => "",
	"publishedUntil" => "2017-12-14"
);
