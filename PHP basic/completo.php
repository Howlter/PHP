<?php 

//  BÁSICO PHP
require('header.php'); //utilizado para importar, cabeçalho, configurações(até mesmo variáveis);
require_once('estudoconfig.php'); //include roda com erro, require para todo o código caso não tenha existente;
                            //require_once é para puxar apenas uma vez, mesmo ela sendo escrita várias vezes;

echo "$user $pass"."<br/>"; // variável do arquivo config.php

$Nome = "Kauan";
$Sobrenome = "Torres";
$Nomecompleto = "$Nome $Sobrenome"; // Poderia ser: $Nomecompleto = $Nome;
                                    //              $Nomecompleto .= $Sobrenome;
$x = 10;
$y = 6;
$Idade = $x+$y;

echo "$Nomecompleto tem $Idade"."<br/>"; 

$Ingredientes = [
    'açucar', 
    'mel', 
    'farinha', 
    'ovo',
    'leite'];

echo $Ingredientes[0]."<br/>";

if($Idade < 18){
    echo 'Você é menor de idade';
}
else{
    echo 'Você é maior de idade';
}

echo ($Idade < 18) ? "<br/>".'Você é menor de idade': "<br/>".'Você é maior de idade'; // ? (CONDIÇÃO POSITIVA):(CONDIÇÃO NEGATIVA);

$Menordeidade = ($Idade < 18) ?  true:false; //Outro jeito de utilizar as condições;

if($Menordeidade){
    echo "<br/>".'Menor.<br/>';
}
else{
    echo "<br/>".'Maior.<br/>';
}

$rua = "João Miguel Estelano,";
$número = '3';
$apto = 'e apto 2';
$Endereço = $rua;
$Endereço .= $número;
$Endereço .= isset($apto) ? $apto:' - É casa'; // MODO MAIS SIMPLES : $apto ?? '';

echo $Endereço;

$tipo = 'video';

switch($tipo){
    case 'foto';
        echo '<br/>Exibindo foto';
    break;
    case 'video';
        echo '<br/>Exibindo video';
    break;
}

$quantidade = 0;
while($quantidade<10){
    echo "<br/>$quantidade";
    $quantidade +=1;
    

}

for($quantidade = 0; $quantidade<10; $quantidade +=1){ //1 DEFINIÇÃO DA VARIAVEL/ 2 CONDIÇÃO/3 CODIGO DE FIM DE LOOP ;
    echo "<br/>$quantidade";                           // for é mais seguro, // $i = $i+1 é igual a$i+=1 que é igual a $i++1;
}
 

foreach($Ingredientes as $chave => $ingrediente){
    $chave = $chave+1;                                                        
    echo"<br/>Item n.$chave $ingrediente";
}

//FUNÇÕES NO PHP
function subs(){
    echo"<br/>";
    for($q=0;$q<10;$q++){    
    echo $q."<br/>";
    }
    echo "<hr/>";
}

subs();

//function somar (int $n1, int $n2, int $n3 = 0){  
    //$N3=0 INDICA QUE O VALOR $N3 É OPCIONAL;
    //$total = $n1+$n2;     //O QUE ESTÁ NA FUNÇÃO FICA NELA(VARIAVEIS TAMBÉM), SOMENTE O VALOR DO RETURN PODE SER UTILIZADO;
  //  return $total;        // FUNÇÃO PODE SER UTILIZADO QUANTAS VEZES QUISER;

//}

$soma = somar(10, 5);

echo "Total:".$soma;

$a = somar(1, 3);
$b = somar(2, 3);
$c = somar($a, $b);
echo "<br/> Esta soma é igual a ".$c;
                                // QUANTO UTILIZA-SE O & NA FUNÇÃO (FUNCTION SOMAR ($N1, &$N2)), SIGNFICA QUE ELE ESTÁ FAZENDO A REFERENCIA, QUE VAI PUXAR A VARIAVEL, E NAO O VALOR DELA, POR EXEMPLO;
                                // $N2 = 0, ENTRETANTO, NÃO IRIA PUXAR O VALOR 0, E SIM SOMENTE A VARIAVEL. A VARIAVEL MUDARIA O VALOR DA VARIAVEL REFERENCIA;

$dizimo = function(int $valor){ //FUNÇÃO ANONIMA / PODE SER $dizimo = fn($valor) => $valor*0.1;
 return $valor* 0.1;
 };

 echo "<br/>".$dizimo(100)."<br/>";

 function dividir($numero){
     $metade = $numero / 2;
     echo $metade."<br/>";

     if(round($metade) > 0) { // ROUND É O ARREDONDAMENTO;
     dividir($metade)."<br/>";
     } 
 }
 dividir (30);

 //FUNÇÕES NATIVAS DO PHP MATEMÁTICAS

 $absolute = -8.4;
 echo abs ($absolute)."<br/>"; //número positivo;
 echo pi()."<br/>"; 
 echo floor (2.7)."<br/>"; //ARREDONDAMENTO PARA BAIXO;
 echo ceil (2.7)."<br/>"; //ARREDONDAMENTO PARA CIMA;
 echo round(2.6453, 2/* casas decimais*/)."<br/>"; //DEPENDENDO DO NUMERO, PARA CIMA PARA BAIXO. ARRENDONDA SOMENTE PARA INTEIRO, 12.59312 -> 13, SE EU QUISER COLOCAR CASAS DECIMAIS É SÓ COLOCAR;
 echo rand(1, 100)."<br/>"; //gera um numero aleátorio de *, até *;
 $lista = [1, 4, 8, 12, 20];
 echo max($lista)."<br/>"; //maior valor da lista;
 echo min ($lista)."<br/>";

 //FUNÇÕES NATIVAS DE STRING
 $texto = '                  Kauan   ';
 echo trim($texto)."<br/>"; // TIRA OS ESPAÇOS;
 echo strlen ($texto)."<br/>"; //MOSTRA A QUANTIDADE DE CARACTERES;
 $textolimpo = trim($texto); 
 echo strtolower ($textolimpo)."<br/>";//strtolower = tudo minusculo upper = maiscula;
 echo strlen ($textolimpo)."<br/>";

 $nomekauan = 'Miguel Santos';
 $nomealterado = str_replace('Santos', 'Miguel', $nomekauan); // str_replace mudar alguma palavra ('O que é pra mudar','Para que mudar',$array);
 echo $nomealterado."<br/>";                                          // substr pega somente as caracteres, exemplo : substr ($variavel, 0, 5), ira pegar do primeiro carectere, pegara 5 caracteres;
                                                              // ($variavel, -3, 3), ira pegar a 3 ultimas, ou seja, da esquerda pra direita;
$posição = strpos($nomekauan, 'San'); //ONDE SE ENCONTRA A SENTENÇA, LETRA ETC;
echo $posição."<br/>";
echo ucfirst('kauan')."<br/>"; //PRIMEIRA LETRA MAIUSCULA, ucwords é a primeira letra de cada palavra;
echo $nomekauan;
$nomes = explode(' ', $nomekauan); // SEPARA AS ARRAYS, ('O ''MÉTODO DE DIVIDIR'',$VARIAVEL');
print_r ($nomes);

$fnumero = 123854.1234;
echo "<br/>"."R$ ".number_format($fnumero,2,',','.' )."<br/>"; // formatação de numeros ($variavel,decimal,'dividir decimal', 'dividir milhao');


//FUNÇÕES NATIVAS DE ARRAY

echo "Total:".count($Ingredientes); // COUNT USADO PARA CONTAR AS ARRAYS;

$diferenças = ['kauan torres', 'gabriel araujo', 'henrique santos', 'davi moreira'];
$aprovados = ['kauan torres', 'davi moreira'];

$reprovados = array_diff($diferenças, $aprovados); //DIFERENÇA DE UMA ARRAY PARA OUTRA;
print_r($reprovados);
  //CHAVES [1]  [2] [3] [4] [5] [6] [7];
$numeros = [10, 20, 30, 40, 42, 52, 56];

$filter = array_filter($numeros, function($item){ //RODA O FILTRO EM CADA UM DOS ARRAYS;
    if($item < 44){
        return true;
    }
    else{
        return false;
    }

});
print_r($filter);

$dobrados = array_map(function($item){ //RODA UMA EXECUÇÃO EM CADA UM DOS ARRAYS;
    return $item * 2;

}, $numeros);
print_r ($dobrados);

array_pop($numeros); // REMOVE O ÚLTIMO ITEM DO ARRAY;
array_shift($numeros); //REMOVE O PRIMEIRO ITEM DO ARRAY, SE COLOCADO DUAS VEZES REMOVE OS DOIS PRIMEIROS;

if(in_array(20, $numeros)) { //PROCURA UM ITEM NO SEU ARRAY array_search procura e indica a posição(entretanto é colocado em variavel);
    echo "<br/>"."Existe"."<br/>";
} 
else{
    echo "<br/>"."Não existe"."<br/>";
}

sort($numeros); //ORDEM CRESCENTE, NÃO ALTERA CHAVE; // rsort = ORDEM DECRESCENTE;
asort($numeros); //ALTERA A ORDEM CRESCENTE DA CHAVE E DOS NUMEROS

$nomeincluir = ['Kauan', 'Torres', '2021'];
$incluir = implode ('@', $nomeincluir); // CONTRÁRIO DE EXPLODE, ELE JUNTA AS ARRAYS. ('METODO DE JUNÇÃO' $variavel)
echo $incluir."<br/>";

//FUNÇÕES NATIVAS DATA E HORA

echo time()."<br/>"; // tempo desde a criação do php
echo date('d/m/Y H:i:s'); // https://www.php.net/manual/pt_BR/function.date.php
                         //strtotime($data)) // transforma em tempo

$a=0;
$b = 'a';
while($a < 20) {

    echo $b;
    $b .="-";
    echo "</br>";
    $a++;

 };

$vinte = range(1, 10);

foreach($vinte as $item){
    echo $item."<br/>";
};

$Ovos = [  
'ovo' => 'mexido',
'manteiga' => 'frita',
'farofa' => 'peneirada'];

if(key_exists('ovo', $Ovos)){
    $ovo = $Ovos['ovo'];
    echo $ovo;
} else{
    echo "Não tem ovo.";
}

$chaves = array_keys($Ovos);
print_r($chaves);

$valores = array_values($Ovos);
print_r($valores);

$retorno = array_slice($diferenças, 0, 2); //corta os array pegando só o que quer. retorna outra array
print_r($retorno);

$retorno2 = array_splice($diferenças, 2, 2, ['K','O']); // remove os itens ou substitui, mas na mesma array.
print_r($retorno2);

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
    ['nome' => 'Jéssica', 'sexo' => 'F', 'nota' => 9],
];
//Total de homens
function contar_m($subtotal, $item){
    if($item['sexo']==='M'){
        $subtotal++;
    }
    return $subtotal;
}
$total_m = array_reduce($pessoas, 'contar_m');

 //Soma das notas dos homens
 function soma_m($subtotal, $item){
     if($item['sexo']=== 'M'){
         $subtotal += $item['nota'];
     }
     return $subtotal;
 }
 $soma_m = array_reduce($pessoas, 'soma_m');
//Media dos homens
$media_m = $soma_m / $total_m;

echo"Total de homens: ".$total_m."<br/>";
echo"Soma das notas dos homens:".$soma_m."<br/>";
echo"Total da média homens: ".$media_m."<br/>";

$desc = ['Kauan', 16, 'chá', 'preto'];
list($nome, $idade, $bebida, $cor) = $desc;
echo $nome;
?>

<table border="1">
    <?php foreach($Ovos as $chave => $valor):?>
        <tr>
        <td><?php echo $chave; ?></td>
        <td><?php echo $valor; ?></td>
        </tr>
        <?php endforeach; ?>
</table>

<table border="1">
        <tr>
            <?php foreach($chaves as $chave):?>
            <th><?php echo $chave;?></th>
            <?php endforeach; ?>
        </tr>

        <tr>
           <?php foreach($valores as $valor):?>
            <th><?php echo $valor;?></th>
            <?php endforeach; ?>
        </tr>
           </table>

<?php

interface Postagem {
    public function setId($i);
    public function getId();
    
}
class Post implements Postagem{
    public int $likes = 0;
    public array $coments = [];
    private string $author;
    public int $id;

    public function setId($i){
        $this->id = $i;
    }

    public function getId(){
        return $this->id;
    }

   public function __construct($qtLikes = 0){
        $this->likes = $qtLikes;
    }
    public function setAuthor($n){
        if(strlen($n) >= 3){
            
        
        $this->author = ucfirst($n); }
    }

    public function getAuthor(){
        return $this->author ?? 'Visitante';
    }

    public function aumentarLikes(){
        echo 'abc';
        $this->likes++;
}
};


$post1 = new Post(25);
$post1->setAuthor('kauan Torres');

$post2 = new Post(22);
$post2->setAuthor('Fulano');

echo "POST 1:".$post1->likes." likes - ".$post1->getAuthor()."<br/>";
echo "POST 2:".$post2->likes." likes -".$post2->getAuthor()."<br/>";

class Foto extends Post implements Postagem{
    private $url; //protected pode ser usado em classe extendida, private não
    public function __construct($id) {
        $this->setId($id);
    }
    public function setUrl($u) {
        $this->url = $u;
    }
    public function getUrl() {
        return $this->url;
    }
};

$foto = new Foto(20);
$foto->likes = 40;
$foto->setUrl('www.aiosdjioasdj.com.br');
echo "Foto: #".$foto->getId()." - ".$foto->likes." likes"." URl:".$foto->getUrl()."<br/>";

class Matematica{
    
    public static function somar ($x, $y){
        return $x + $y;
    }
}

echo Matematica::somar(10, 20)."<br/>";

require 'classe1.php';
require 'classe2.php';

$teste = new classe1\classe();
echo $teste->testar();

require 'autoload.php';

$m = new matematica\Somarmatematica();
echo "<br/>".$m->somar(10, 20);

