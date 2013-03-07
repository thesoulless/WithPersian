<?php
/**
 * WithPersian, A simple library for Persian language localization
 *
 * Copyright (c) 2013 Reza Farhadian <R3ZA.FARHADIAN@YAHOO.COM> - First Idea By Usablica
 * http://iReza.Blog.Ir - Http://Usabli.Ca
 *
 * The MIT License (MIT)
 *
 * e.g : open ex.php
 *
 * @package    WithPesian!
 * @author     Reza Farhadian <R3ZA.FARHADIAN@YAHOO.COM> - Afshin Mehrabani <afshin.meh@gmail.com>
 * @copyright  2013
 * @license    http://opensource.org/licenses/mit-license.php The MIT License
 * @link       https://github.com/reza-farhadian/WithPersian
 * @version    1.0.0
*/

class WithPersian {

 public function __construct() {
  @header('Content-Type: text/html; charset=utf-8');
 }

 function Num_Ar2Fa($String) {
  $Ar_Numbers = array("١","٢","٣","٤","٥","٦","٧","٨","٩","٠");
  $Fa_Numbers = array("۱","۲","۳","۴","۵","۶","۷","۸","۹","۰");
  return str_replace($Ar_Numbers,$Fa_Numbers,$String);
 }
 
 function Num_En2Fa($String) {
  $En_Numbers = array("0","1","2","3","4","5","6","7","8","9");
  $Fa_Numbers = array("۰","۱","۲","۳","۴","۵","۶","۷","۸","۹");
  return str_replace($En_Numbers,$Fa_Numbers,$String);
 }
 
 function Char_Ar2Fa($String) {
  $Ar_Characters = array("ي","ك","‍","دِ","بِ","زِ","ذِ","ِشِ","ِسِ","‌","ى");
  $Fa_Characters = array("ی","ک","","د","ب","ز","ذ","ش","س","","ی");
  return str_replace($Ar_Characters,$Fa_Characters,$String);
 }
 
 function Char_Fa2En($String) {
  $En_Characters = array("ض","ص","ث","ق","ف","غ","ع","ه","خ","ح","ج","چ","ش","س","ی","ب","ل","ا","ت","ن","م","ک","گ","ظ","ط","ز","ر","ذ","د","پ","و","؟");
  $Fa_Characters = array("q","w","e","r","t","y","u","i","o","p","[","]","a","s","d","f","g","h","j","k","l",";","'","z","x","c","v","b","n","m",",","?");
  return str_replace($En_Characters,$Fa_Characters,$String);
 }
 
 function Url_Fix($String) {
  $DecodedURL = urldecode($String);
  return $DecodedURL;
 }
  
}
?>