<?php

#Tipe data string
echo 'Name : ';
echo 'Mochamad Abdul Rouf';

#Tipe data Double Quote
echo "\n";

echo "Name : " ;
echo "Mochamad\t Abdul\t Rouf\n";

#Multiline String
#Heredoc
echo <<<ROUF
ini adalah contoh multiline string heredoc
bisa untuk membuat teks yang panjang dan berbentuk seperti paragraf
ROUF;
#Nowdoc
echo <<<'ROUF'
ini adalah contoh multiline string heredoc
bisa untuk membuat teks yang panjang dan berbentuk seperti paragraf
ROUF;