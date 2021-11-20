<?php 
//S - PRINCIPIO DA RESPONSABILIDADE UNICA
    class Usuario{
        
        public function setNome() {}
        public function getNome() {}

        //email
        //senha
    }
    class UsuariodDb{ //SEPARAR AS FUNÇÕES

        public function add(){}
        public function update(){}
        public function delete(){}
    }

//O - PRINCIPIO ABERTO-FECHADO
interface Remuneravel {
    public function remuneração();
}

 class ContratoClt implements Remuneravel{

     public function remuneração() {} //public function calcularSalario();

 }
 class Estagio implements Remuneravel{ 

     public function remuneração(){}

 }

class FolhaDePagto {

    public function calcular($funcionario){
        return $funcionario->remuneração();   }
     }
/*
        if($funcionario instanceof ContratoClt){
            $salario = $funcionario->calcularSalario();
        } elseif( $funcionario instanceof Estagio){
            $salario = $funcionario->bolsaAuxilio(); //CASO SEJA ADICIONADO UMA NOVA FORMA, TERIA QUE MUDAR, O QUE VIOLA O PRINCIPIO, NESTE CASO É MELHOR FAZER UMA INTERFACE.

        }
        return $salario;
    }
} */ 

//L - Princípio da Substituição de Liskov diz basicamente que pode-se extender a classe, garantindo que possa usar a classe B na classe A, por exemplo.
class A{
    public function getNome(){
        return "Meu nome é A";
    }
}
class B extends A{

    public function getNome(){
        return "Meu nome é B";
    }
}

function imprimeNome(A $obj){
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B(); //B FUNCIONA MESMO COM O ESPERADO (A $ojb)
echo imprimeNome($objeto1);
echo imprimeNome($objeto2);

//I - Princípio da Segregação da Interface

interface Aves{
    public function setLocation($lat, $lng);
    //public function setAltitude($alt);
    public function render();
}
interface AvesQueVoam extends Aves{
    public function setAltitude($alt);
}
class Papagaio implements AvesQueVoam{
    public function setLocation($lat, $lng){}
    public function setAltitude($alt){}
    public function render(){}
}
class Pinguim implements Aves{
    public function setLocation($lat, $lng); 
    //public function setAltitude($alt);{return 0} //diz que tem apenas os metódos essenciais e que implementem eles, pinguim n voa, portanto n precisa de altitude, aí o valor ficaria fixo.
    public function render();
}

// D - Princípio da Inversão de dependência
interface DBConnection {
    public function connect(){

    }
}
class MySQLConnection implements DBConnection {
    public function connect(){}
}

class OracleConnection implements DBConnection{
    public function connect(){}
}

class UsuarioDAO{
    private $db;

    public function __construct(/*MySQLConnection*/ DBConnection $dbCon) { //NÃO PRECISA SABER MYSQL, ORACLE E SIM SOMENTE UMA UNICA DEPENDENCIA QUE ENGLOBE TUDO
        $this->db = $dbCon; //new MySQLConnection(); //Teria várias conexões distintas, por conta das várias estâncias
    }
}

$dbCon = new MySQLConnection;//(...);

$usuarioDao = new UsuarioDao($dbCon); //Não seriam gerados várias conexões, e sim somente uma passado via injeção de indepêndencia
$usuarioDao2 = new UsuarioDao($dbCon); 
