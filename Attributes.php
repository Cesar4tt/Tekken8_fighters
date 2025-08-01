<?php
abstract class Fighter {
    public $nome, $sobrenome, $pais, $aniversario, $style;
    public $forca, $defesa, $esquiva, $velocidade;
    public $img, $descricao;
    public $ataque01, $ataque02, $ataque03;

    public function ataqueComum() {
        echo 'Ataque Comum (10)<br>';
    }

    public function defender() {
        echo 'Defender (50)<br>';
    }

    public function esquivar() {
        echo 'Esquivar (60)<br>';
    }

    abstract public function ataqueEspecial();

    public function __get($atributo) {
        return $this->$atributo;
    }
}

class Kazuya extends Fighter {
    public function __construct() {
        $this->nome = "KAZUYA MISHIMA";
        $this->pais = "Japão";
        $this->aniversario = "2 de Novembro";
        $this->style = "Mishima-Style Fighting Karate";
        $this->forca = 100;
        $this->defesa = 75;
        $this->esquiva = 75;
        $this->velocidade = 75;
        $this->img = "kazuya-full";
        $this->descricao = "<br><br> Usando todo o seu poder demoníaco e a G Corporation, Kazuya Mishima partiu em uma jornada de conquista para dominar o mundo. Após derrotar seu pai, Heihachi Mishima, Kazuya intensificou sua ofensiva para eliminar o líder Mishima Zaibatsu. Essa guerra brutal dividiu o mundo em dois, e no final a G Corporation venceu. No entanto, a G Corporation não demonstrou sinais de ceder e continuou a dominar o mundo pela força. A União das Nações ficou horrorizada com essas ações e reuniu vários líderes mundiais em Nova York para discutir como impor sanções contra a G Corporation. Mas então, o próprio Kazuya apareceu na reunião e anunciou que continuaria a guerra. Ele então liberou o exército da G Corporation em Nova York, incendiando toda a cidade.";
        $this->ataque01 = "Electric Wind Godfist (20)";
        $this->ataque02 = "Tsunami Kick (30)";
        $this->ataque03 = "Spinning Demon (40)";
    }

    public function ataqueEspecial() {
        echo 'Fist of the Devil (50)<br><br>';
        echo 'Devil Fist (70)';
    }
}

class Jin extends Fighter {
    public function __construct() {
        $this->nome = "JIN KAZAMA";
        $this->pais = "Japão";
        $this->aniversario = "5 de Agosto";
        $this->style = "Traditional Karate";
        $this->forca = 90;
        $this->defesa = 80;
        $this->esquiva = 80;
        $this->velocidade = 90;
        $this->img = "jin-full";
        $this->descricao = "Desprezando o sangue amaldiçoado que corria em suas veias, Jin Kazama buscou pôr fim à linhagem demoníaca. Ele uniu forças com Lars Alexandersson e, juntos, prepararam-se para iniciar a Operação Relâmpago, um plano para eliminar o outro portador do gene demoníaco, Kazuya Mishima. Jin havia mergulhado o mundo no caos para ressuscitar Azazel, o progenitor do gene demoníaco. Seu plano era extinguir permanentemente o gene demoníaco derrotando Azazel de uma vez por todas, mesmo que isso lhe custasse a própria vida. Embora Jin tenha conseguido derrotar Azazel, ele perdeu a consciência e caiu em um sono profundo. Durante sua ausência, a Corporação G, liderada por Kazuya, tomou o mundo à força. Vários meses depois, Jin finalmente recuperou a consciência. Sua luta mortal com Azazel o ensinou a controlar seu poder demoníaco interior. Jin jurou acabar com o reinado de terror de Kazuya para expiar a guerra e a destruição que ele havia causado.";
        $this->ataque01 = "Punho Penetrante (20)";
        $this->ataque02 = "Hellfire Blast (30)";
        $this->ataque03 = "Aniquilação Infernal (40)";

    }

    public function ataqueEspecial() {
        echo 'Kazama Fury (60)<br><br>';
        echo 'Devil Beam (70)';
    }
}

class King extends Fighter {
    public function __construct() {
        $this->nome = "King";
        $this->pais = "Mexico";
        $this->aniversario = "26 de Maio";
        $this->style = "Pro Wrestling";
        $this->forca = 70;
        $this->defesa = 80;
        $this->esquiva = 60;
        $this->velocidade = 90;
        $this->img = "king-full";
        $this->descricao = "King atua no circuito de luta livre profissional e também administra um orfanato. A guerra entre a G Corporation e a Mishima Zaibatsu devastou o mundo, causando um aumento sem precedentes no número de crianças que precisam de sua ajuda. King pode ser o campeão indiscutível do mundo da luta livre, mas precisará realizar um espetáculo muito além das luzes brilhantes da arena se quiser arrecadar os fundos necessários para ajudar todos esses órfãos. Prevendo a necessidade de aliados para realizar tais aspirações, ele decidiu aprimorar seu corpo e suas habilidades de luta livre em preparação para conhecer pessoas com ideias semelhantes.";
        $this->ataque01 = "Winding Nut (20)";
        $this->ataque02 = "Knee Crusher (30)";
        $this->ataque03 = "Half Boston Crab (40)";

    }

    public function ataqueEspecial() {
        echo 'Reverse Special Stretch Bomb (60)<br><br>';
        echo 'Scorpion Death Lock (70)';
    }
}

class Jun extends Fighter {
    public function __construct() {
        $this->nome = "JUN KAZAMA";
        $this->pais = "Japão";
        $this->aniversario = "18 de Setembro";
        $this->style = " Artes Marciais Tradicionais Estilo Kazama";
        $this->forca = 60;
        $this->defesa = 90;
        $this->esquiva = 80;
        $this->velocidade = 90;
        $this->img = "jun-full";
        $this->descricao = "Jun Kazama, mãe de Jin, é praticante das Artes Marciais Tradicionais do Estilo Kazama. Jun demonstrou propensão à comunicação com animais desde muito jovem. Tornou-se agente de vigilância da vida selvagem em um grupo de conservação, onde perseguiu Kazuya Mishima, suspeito de contrabandear animais protegidos. Os dois se conheceram e se tornaram próximos no segundo Torneio Rei do Punho de Ferro. Logo depois, Jun engravidou de Jin. Jun passou a criá-lo no mesmo lugar onde nasceu, nas remotas montanhas de Yakushima. No entanto, sete anos atrás, um dia, quando Jin completou 15 anos, Jun foi atacada por um ser misterioso conhecido como Ogre e desapareceu sem deixar vestígios.";
        $this->ataque01 = "Spinning Back Fist (20)";
        $this->ataque02 = "Heavenly Light (30)";
        $this->ataque03 = "Wind God Fist (40)";

    }

    public function ataqueEspecial() {
        echo 'Poder Kazama (60)<br><br>';
        echo 'Três Posturas (70)';
    }
}

class Paul extends Fighter {
    public function __construct() {
        $this->nome = "Paul Phoenix";
        $this->pais = "U.S.A";
        $this->aniversario = "3 de Abril";
        $this->style = "Artes Marciais Integradas Baseadas no Judô";
        $this->forca = 70;
        $this->defesa = 80;
        $this->esquiva = 60;
        $this->velocidade = 60;
        $this->img = "paul-full";
        $this->descricao = "Paul Phoenix é um artista marcial impetuoso que almeja ser o maior lutador do universo. Ele entrou no sétimo Torneio The King of Iron Fist com os olhos no prêmio exorbitante em dinheiro, mais seguro do que nunca de que desta vez conquistaria a vitória. O torneio, no entanto, seria suspenso com o desaparecimento de seu organizador. Paul recebeu apenas uma fração do dinheiro da luta com o qual contava, mergulhando-o em uma vida de miséria. Tudo o que ele podia fazer era arriscar que o próximo torneio seria capaz de lhe proporcionar uma compensação suficiente. Para tanto, ele prometeu dividir seus próximos ganhos com seu bom amigo e parceiro de treino, Marshall Law. A dupla se refugiou nas montanhas para uma sessão de treinamento intensa a fim de se preparar para o torneio.";
        $this->ataque01 = "Death Fist (20)";
        $this->ataque02 = "Burning Fist (30)";
        $this->ataque03 = "Demolition Man (40)";

    }

    public function ataqueEspecial() {
        echo 'Death Fist (Soco da Morte) (60)<br><br>';
        echo 'Phoenix Smasher (70)';
    }
}

class Law extends Fighter {
    public function __construct() {
        $this->nome = "MARSHALL LAW";
        $this->pais = "U.S.A";
        $this->aniversario = "10 de Setembro";
        $this->style = "Artes Marciais";
        $this->forca = 70;
        $this->defesa = 70;
        $this->esquiva = 80;
        $this->velocidade = 80;
        $this->img = "law-full";
        $this->descricao = "Marshall Law é um renomado mestre de artes marciais e administra seu próprio dojo. No entanto, ele se endividou devido ao acidente de moto de seu filho, e seus esforços para saldar essa dívida o levaram a negligenciar a administração do dojo, resultando em uma queda acentuada no número de alunos que vinham treinar. Law decidiu encontrar um mestre distinto que pudesse assumir o dojo e resolver todos os seus problemas. Infelizmente, todas as negociações fracassaram e, para piorar a situação, seu dojo foi tomado como garantia enquanto ele estava fora. Agora mergulhado na pobreza, Law ficou preso ao conceito de dinheiro fazendo o mundo girar. Sua única esperança era lucrar no próximo torneio e garantir o prêmio em dinheiro de que tanto precisava. Para aumentar suas chances de sucesso, ele prometeu dividir o prêmio com seu amigo Paul Phoenix. Juntos, os dois viajaram para as montanhas para treinar.";
        $this->ataque01 = "Blazing Fist Combo (20)";
        $this->ataque02 = "Rage Dragon Combo (30)";
        $this->ataque03 = "Feint to Middle Kick (40)";

    }

    public function ataqueEspecial() {
        echo 'Fate of the Dragon (60)<br><br>';
        echo 'Rave War (70)';
    }
}
?>