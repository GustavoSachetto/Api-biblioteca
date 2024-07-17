<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Informações a serem inseridas no banco de dados
     */
    private array $fields = [
        [
            'title'        => 'Toda ruga tem uma história', 
            'cover'        => '5d3fac3f7dc08d6dc70a0b8c8ea677ed.jpg', 
            'presentation' => 'Um avô e um neto conversam sobre as marcas deixadas pela vida na pele e no coração.',
            'about'  => 'As rugas do avô despertam a curiosidade e a admiração do menino, que observa atentamente cada detalhe das linhas marcadas pelo tempo: o formato delas, que sugere ondas do mar, e a sensação do toque de seus pequenos dedos na pele macia. Mas o que deixa o garoto realmente fascinado são as histórias que as rugas carregam. São tantas memórias... Felizes, tristes, boas, ruins, especiais, inesquecíveis. Tem até uma ruga que surgiu em homenagem a Iotan no rosto do avô!<br>
            Este é um lindo encontro entre os traços desenhados pelas vivências de um avô e um neto que não perde tempo em registrá-los, agora, do seu jeito. Escrita pelo premiado autor israelense David Grossman, ilustrada delicadamente por Maya Shleifer e traduzida por Paulo Geiger, essa linda história certamente vai emocionar leitores de todas as idades que gostam de compartilhar e celebrar a vida em todas as suas fases.', 
            'release'      => '2024-09-30', 
            'author'       => 'David Grossman', 
            'publisher_id' => '1', 
            'category_id'  => '12', 
        ],
        [
            'title'        => 'Mais sombrio', 
            'cover'        => '43d061fcb7fdc95733db76156de30e6d.jpg', 
            'presentation' => 'Nesta nova coletânea, Stephen King conduz o leitor por doze histórias inesquecíveis, cinco delas nunca antes publicadas -- incluindo "Cascavéis", a sequência inédita do aclamado romance Cujo. Com lançamento mundial, os contos de Mais sombrio evidenciam a célebre capacidade do autor de surpreender, assustar e encantar leitores.', 
            'about'        => 'Cinquenta anos depois da publicação de seu primeiro romance, Carrie, Stephen King continua a surpreender e encantar a todos com versatilidade e talento impressionantes para contar histórias.<br>
            Cada texto desta coletânea nos oferece uma reflexão diferente acerca de temas como o destino, o luto, o sobrenatural e os limites -- frequentemente nebulosos -- entre o conhecido e o desconhecido. Em Mais sombrio, o autor mergulha nas profundezas obscuras da vida, conduzindo o leitor por doze contos inesquecíveis, cinco deles inéditos -- incluindo "Cascavéis", sequência do romance Cujo.<br>
            Repletas de reviravoltas, as histórias de Mais sombrio continuarão marcadas na memória daqueles que se aventurarem por essas páginas, ecoando até muito tempo depois de fechar o livro.',
            'release'      => '2024-05-21', 
            'author'       => 'Stephen King', 
            'publisher_id' => '1', 
            'category_id'  => '11', 
        ],
        [
            'title'        => 'O pequeno livro do TDAH', 
            'cover'        => 'd226effdaa3e6b7d2ffab259959e60d2.jpeg', 
            'presentation' => 'O pequeno livro do TDAH é um guia inclusivo e bem-humorado que explora os tipos de TDAH e os sintomas e mitos ao redor do transtorno. Ao procurar entender o funcionamento do próprio cérebro, a ilustradora Alice Gendron compartilha com o leitor dicas de como conhecer melhor a si mesmo.', 
            'about'        => 'É possível ter TDAH e ser uma pessoa focada? Apenas pessoas hiperativas têm TDAH? Ao ser diagnosticada com TDAH, aos 29 anos, a ilustradora Alice Gendron tinha diversos questionamentos como esses. Ela, então, começou a postar no Instagram ilustrações bem-humoradas que retratavam a sua rotina com o transtorno. Gendron logo percebeu que não estava sozinha, e hoje o perfil the_mini_adhd_coach conta com mais de 600 mil seguidores em todo o mundo.<br><br>
            Com uma abordagem leve e bem-humorada, O pequeno livro do TDAH oferece uma perspectiva completa e solidária a respeito da vida com TDAH, abordando os desafios de quem vive com o transtorno e trazendo dicas para ajudar os leitores a procurarem um diagnóstico e organizar melhor a rotina.<br><br>
            Com ilustrações espirituosas e dicas práticas, Gendron rompe com estereótipos a respeito do tema e também compartilha com o leitor insights, entre eles:<br>
            Como identificar a influência do TDAH na sua rotina, desde dificuldades para administrar o tempo, preparar refeições e lidar com relacionamentos amorosos;<br>
            Aprender a liar com as emoções que surgem após o diagnóstico;<br>
            O que significam expressões e palavras como cegueira temporal, disfunção executiva e hiperfoco, graças ao seu glossário único sobre o assunto;<br>
            A importância de aprender a trabalhar com o cérebro, e não contra ele a fim de prosperar tendo TDAH;<br><br>
            Enfim entender a si mesmo e como o seu cérebro funciona!
            Inclusivo e empático, O pequeno livro do TDAH é uma obra que encoraja a todos com o diagnóstico de TDAH ou que conheçam pessoas com o transtorno, dos mais jovens aos mais velhos, a entender a si mesmos e celebrar as diferenças.<br>',
            'release'      => '2024-07-15', 
            'author'       => 'Alice Gendron', 
            'publisher_id' => '2', 
            'category_id'  => '1', 
        ],
        [
            'title'        => 'A pedagogia da paixão de Madalena Freire', 
            'cover'        => '2b357b18a4bed5ba363da315a846d629.jpeg', 
            'presentation' => 'A pedagogia da paixão de Madalena Freire: registros de encontros, diálogos e parcerias é a justa e amorosa celebração a essa grande pedagoga brasileira.', 
            'about'        => 'Há mais de seis décadas de pensamento e prática de uma “outra educação”, Madalena Freire honra e extrapola o parentesco com o Patrono da Educação Brasileira, Paulo Freire. Como lembra a organizadora Teresa Cristina Rego, “Madalena construiu para si um caminho próprio e muito relevante nos estudos de pedagogia no Brasil”, em especial, na educação infantil. Atuou ativamente na formação das primeiras “escolas alternativas” nas décadas de 1970 e 1980, em São Paulo. Dessa experiência surgiu o emblemático livro A paixão de conhecer o mundo, marco do pensamento pedagógico brasileiro, no qual estão reunidos relatórios e diários de classe com suas práticas educacionais – que sintetizam diversas teorias, de Paulo Freire a Jean Piaget, de Enrique Pichon-Rivière a Lev Vigotski.<br><br>
            Neste livro, estão presentes dezoito cartas, registros históricos e afetuosos de autoras de perfis e gerações muito diferentes, mas que cruzaram com Madalena Freire pela palavra ou pela presença. Algumas foram parceiras, outras alunas da educadora em seu Espaço Pedagógico (centro de formação de referência para professores), outras se inspiraram em seus livros, ensaios e artigos. Mas todas, sem exceção, são suas admiradoras e legatárias e relatam a importância da paixão no ensinar a si e ao outro, em uma eterna troca entre educador e educando.<br><br>
            A pedagogia da paixão de Madalena Freire: registros de encontros, diálogos e parcerias é uma oportunidade única para homenagear essa grande intelectual em vida. É, também, um retrato vivo de determinado período da educação brasileira. A história de “Madá”, como é carinhosamente apelidada, se mistura com a do pensamento pedagógico de nosso país, e, por tanto, a Editora Paz & Terra se volta à celebração de seu legado.<br><br>',
            'release'      => '2023-11-13', 
            'author'       => 'Teresa Cristina', 
            'publisher_id' => '2', 
            'category_id'  => '8', 
        ],
        [
            'title'        => 'Em rota de colisão', 
            'cover'        => '509076f001017476307e78b7bdf86819.jpeg', 
            'presentation' => 'Uma estudante exemplar, um atleta de hóquei e uma conexão quente o suficiente para derreter uma pista de gelo. Um romance esportivo hot ideal para os fãs de Quebrando o gelo', 
            'about'        => 'Summer Preston está dividida entre realizar o sonho de sua vida e se tornar uma psicóloga esportiva ou ficar o mais longe possível de um campo de hóquei, afinal, ela tem um bom motivo para odiar o esporte.<br><br>
            Aiden Crawford é o capitão da equipe de hóquei da faculdade e está enfrentando um desafio: os erros de sua equipe ameaçam colocar em risco toda a temporada de jogos. Como punição, seu treinador o nomeia como objeto de estudo de um projeto de pesquisa estudantil e Aiden não tem escolha a não ser aceitar.<br><br>
            Só que o projeto de pesquisa em questão é liderado por Summer, que foi praticamente obrigada pela sua orientadora a trabalhar com Aiden. Assim, um encontro explosivo acontece e os dois se vêem em uma inesperada rota de colisão ao encarar suas diferenças gritantes.<br><br>
            Summer não suporta a abordagem blasé de Aiden em relação à vida, e Aiden não entende o jeito arisco e metódico de Summer. Mas as brigas logo se transformam em algo a mais — e quando eles baixam a guarda, não há gelo que segure o calor dos seus sentimentos.<br><br>
            Com cenas hot de tirar o fôlego, Em rota de colisão é um romance new adult esportivo da autora canadense Bal Khabra. É o primeiro volume de uma trilogia de mesmo nome com histórias independentes.<br><br>',
            'release'      => '2024-07-08', 
            'author'       => 'Bal Khabra', 
            'publisher_id' => '3', 
            'category_id'  => '13', 
        ],
        [
            'title'        => 'Susana Vieira: Senhora do meu destino', 
            'cover'        => '5c4fde13d011046b1c684101c90afcec.jpeg', 
            'presentation' => 'Sem censura: a biografia de Susana Vieira, o maior ícone da TV brasileira', 
            'about'        => 'Susana Vieira é uma mulher de superlativos. Uma das maiores atrizes do Brasil — que deu vida a personagens marcantes como Nice, de Anjo Mau (1976), Branca Letícia, de Por Amor (1997) e Maria do Carmo, de Senhora do Destino (2005) — tem também sua marca no show business pela maneira intensa com a qual leva a vida.<br><br>
            Nesta biografia feita a quatro mãos com o especialista em teledramaturgia Mauro Alencar, a atriz conta, sem filtros e sem censura, toda a sua trajetória, desde a infância até o estrelato, incluindo os obstáculos na vida pessoal e profissional, o câncer que descobriu em 2015, as polêmicas, os momentos icônicos que viraram memes e a maneira única com a qual encara o mundo.<br><br>
            O livro conta ainda com registros históricos da TV e de momentos íntimos de Susana, além de depoimentos de outros grandes artistas e amigos, como Miguel Falabella, Tony Ramos, Arlete Salles, Silvio de Abreu, Boni e Renata Sorrah.<br><br>
            Mais do que um relato da trajetória de uma das atrizes mais populares do país, Susana Vieira: Senhora do meu destino celebra a vivência de uma grande mulher. Uma biografia imperdível para todos os fãs e admiradores desta personalidade que marcou a história da televisão brasileira.<br><br>',
            'release'      => '2024-04-27', 
            'author'       => 'Mauro Alencar e Susana Vieira', 
            'publisher_id' => '3', 
            'category_id'  => '2', 
        ],
        [
            'title'        => 'Moderna Plus Matemática Paiva - Volume 3', 
            'cover'        => 'e4793dd977892674f654915bc89786c6.png', 
            'presentation' => 'Atenção: este título é Exclusivo, sendo comercializado somente em canais específicos. Fale com o consultor da sua escola.', 
            'about'        => 'O Moderna Plus alia a tradição de conteúdos didáticos de alta performance com o pioneirismo em tecnologia educacional, pensado para trazer reais resultados para a sala de aula. Partindo de uma proposta completa e integrada, o projeto dialoga com as demandas atuais do Ensino Médio, preparando o adolescente para ser bem-sucedido em sua trajetória pessoal e profissional. Diferenciais da disciplina de Matemática: autor reconhecido pela excelência nos conteúdos e pela linguagem acessível, repleta de infográficos, tornando a obra nº 1 nas escolas, foco em desmistificar a Matemática e mostrar que ela está presente nos mais diversos aspectos de nosso cotidiano, preparar o aluno para os desafios do vestibular e tornar o raciocínio matemático parte de sua vida cotidiana, conteúdo do livro impresso enriquecido com recursos digitais eficientes, como simuladores e textos complementares, grande diversidade de atividades com objetivos claros e complexidade gradual, envolvendo desde a criação de problemas, a resolução e a análise de exercícios resolvidos.',
            'release'      => '2021-01-01', 
            'author'       => 'Manoel Paiva', 
            'publisher_id' => '4', 
            'category_id'  => '8', 
        ],
        [
            'title'        => 'Harry Potter e a Pedra Filosofal', 
            'cover'        => '4efab03133a6a387239edc92dbd81ecb.png', 
            'presentation' => 'Uma nova edição impressionante de Harry Potter e a Pedra Filosofal! Experimente a história de magia mais amada do mundo de uma nova forma. Totalmente ilustrada em cores brilhantes, com capa dura e elementos interativos artesanais em papel, criados pelo premiado estúdio MinaLima, essa nova versão do primeiro livro da série Harry Potter vai encantar os leitores de todas as idades!',
            'release'      => '2021-01-01', 
            'about'        => null, 
            'author'       => 'J.K. Rowling', 
            'publisher_id' => '5', 
            'category_id'  => '9', 
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->fields as $values) {
            Book::create($values);
        }
    }
}
