<?php

 $trinca1 = $_GET['trinca1'];
 $trinca2 = $_GET['trinca2'];
 $trinca3 = $_GET['trinca3'];
 $trinca4 = $_GET['trinca4'];
 $mascararede = $_GET['mascararede'];

echo "<h1>Você digitou o IP";
 echo $trinca1.".";
 echo $trinca2.".";
 echo $rtrinca3.".";
 echo $trinca4."/";
 echo $mascararede;
 echo "</h3>";

 $divisao = 32 - $mascararede;
 $enderecamento = pow (2 , $divisao);

 echo "<h3>Quantidades de sub-redes igual a:</h3>";
 $total = 256 / $enderecamento;
 echo $total;

 echo "<h3>Quantidades de endereços por sub-rede igual a:</h3>";
 echo $enderecamento;

 echo "<h3>Quantidaes de endereços de hosts em cada sub-rede igual a:</h3>";
 $host = $enderecamento - 2;
 echo $host;


echo "<h3>Em qual sub-rede está:</h3>";

$local = (int)($trinca4/$enderecamento);
echo $local;


echo "<h3>Valor da rede da sub-rede do endereço informado igual a: /h3>";
$endrede = $enderecamento * $local ;
echo $endrede;

echo "<h3>Primeiro endereço de host da sub-rede do endereço IP informado está em:</h3>";
$host1 = $endrede + 1;
echo $host1;


$broadcast0 = ($endrede + $enderecamento) - 1;


echo "<h3>O último endereço de host da sub-rede em que o endereço IP informado está em:</h3>";
$hostultimo = $broadcast0 - 1;
echo $hostultimo;


echo "<h3>O valor de broadcast da sub-rede em que o endereço informado está em:</h3>";

echo $broadcas0t;


echo "<h3>mascara integral</h3>";
$mascarainteira = 256 - $enderecamento;
echo "255.255.255.".$mascarainteira;


echo "<h3>O meu IP é público ou reservado? </h3>";
if(($trinca1 == '10')
 or ($trinca1=='127')
  or ($trinca1=='172' and $trinca2>='16' and $trinca2<='32')
  or ($trinca1 == '192' and $trinca2 == '168')
){
  echo "<h4>reservado";
}else{
  echo "<h4>público";
};

