<? 
// ������ �˾Ƴ��� 
global $PHP_SELF; 

$thisfilename=basename(__FILE__); 
$temp_filename=realpath(__FILE__); 
if(!$temp_filename) $temp_filename=__FILE__; 
$osdir=eregi_replace($thisfilename,"",$temp_filename); 
unset($temp_filename); 

$virdir = eregi_replace($thisfilename,"",$PHP_SELF); 


echo "���� ���丮�� ������ : ".$osdir."<br>"; 
echo "���� ���丮�� ��� ��� �ּ� : ".$virdir."<br>"; 

?>

��ó: https://recoveryman.tistory.com/37 [ȸ���� ��α�]