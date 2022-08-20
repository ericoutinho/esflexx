<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage esflexx
 * @since esflexx 1.0
 */

    get_header();
?>

    <div class="js-loader">
        <div class="spin"></div>
    </div>

    <header>
        <div class="container">
            <nav class="menu">
                <a href="#hero">
                    <img src="<?=get_template_directory_uri()?>/assets/ESFlexx-logomarca.svg" data-animation="fromleft" loading="lazy" alt="Logomarca da ESFlexx" class="menu__brand to-reveal">
                </a>
                <button class="menu__toggle"><i class="fas fa-bars"></i></button>
                <ul class="menu__links">
                    <li><a href="#quem-somos">Quem somos</a></li>
                    <li><a href="#publico">Leilões públicos</a></li>
                    <li><a href="#corporativo">Leilões corporativos</a></li>
                    <li><a href="#parceiros">Parceiros</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li>
                        <a target="_blank" href="https://instagram.com/esflex_leiloes" rel=”noopener” title="Instagram da ESFlexx"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://wa.me/5527999117459" rel=”noopener” title="Whatsapp da ESFlexx"><i class="fab fa-whatsapp"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <h1 hidden>ESFlexx - Leilões Automotivos</h1>

    <section id="hero">
        <div class="piso"></div>
        <div class="container">
            <h2 class="to-reveal">Transparência e credibilidade<br/>
                em leilões automotivos</h2>
            <a href="#publico" class="botao botao__principal to-reveal" data-animation="fromleft" data-delay="1s" data-duration=".5s">Garanta já o seu lote! <i class="fas fa-caret-right"></i></a>
            <figure>
                <img loading="lazy" class="to-reveal" data-animation="fromtop" data-duration=".5s" data-delay=".5s" src="<?=get_template_directory_uri()?>/assets/veiculos-hero.webp" alt="Carros populares, esportivos, motos, ônibus e caminhões">
            </figure>
        </div>
    </section>

    <main>

        <!-- QUEM SOMOS -->
        <section id="quem-somos">
            <div class="container">
                <div class="wraper">
                    <div class="column imagem">
                        <img loading="lazy" class="to-reveal" data-animation="zoomout" src="<?=get_template_directory_uri()?>/assets/flexx-background-quem-somos.webp" alt="Leilão digital">
                    </div>
                    <div class="column texto">
                        <h2>Quem somos</h2>
                        <p>A <strong>ESFlexx Leilões Automotivos Espírito Santo</strong> atua no mercado de leilões há mais de 4 anos.</p>
                        <p>Realizamos leilões digitais em parceria com a maior plataforma de Leilões da América Latina.</p>
                        <p>Somos credenciados em diversos órgãos governamentais, além de realizarmos leilões corporativos em todo território nacional.</p>
                        <p>Levamos transparência e credibilidade para cada leilão realizado pelo nosso time.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PUBLICO -->
        <section id="publico">
            <div class="container">
                <div class="wraper">
                    <div class="column imagem">
                        <img loading="lazy" class="to-reveal" data-animation="fromtop" src="<?=get_template_directory_uri()?>/assets/detranes_logomarca.webp" alt="Detran-ES" title="Detran-ES">
                    </div>
                    <div class="column texto">
                        <h2>Leilões públicos</h2>
                        <p>Realizamos leilões em parceria com o <a rel="noopener" target="_blank" class="link" href="https://detran.gov.es" title="Ir para a página do Detran-ES"><strong>Detran-ES</strong></a></p>
                        <p><strong>Fique atento!</strong> Todos os meses são disponibilizados novos lotes repletos de novidades.</p>
                        <p>Para participar, basta cadastrar-se em nossa planatorma e dar o seu lance.</p>
                        <a rel="noopener" title="Cadastre-se agora!" href="https://www.superbid.net/" target="_blank" class="botao botao__principal to-reveal" data-animation="fromleft" data-delay="1s">Cadastre-se agora! <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CORPORATIVO -->
        <section id="corporativo">
            <div class="container">
                <div class="wraper">
                    <div class="column">
                        <div class="image-wraper">
                            <img loading="lazy" data-animation="fromleft" data-delay="0s" src="<?=get_template_directory_uri()?>/assets/corporativo-grid-001.webp" alt="Gravel sobre o teclado" class="image-b to-reveal">
                            <img loading="lazy" data-animation="fromleft" data-delay=".25s" src="<?=get_template_directory_uri()?>/assets/corporativo-grid-002.webp" alt="Pessoas assinando contrato" class="image-a to-reveal">
                            <img loading="lazy" data-animation="frombottom" data-delay=".50s" src="<?=get_template_directory_uri()?>/assets/corporativo-grid-004.webp" alt="Executivos em reunião" class="image-c to-reveal">
                        </div>
                    </div>
                    <div class="column">
                        <h2>Leilões corporativos</h2>
                        <p>Sua empresa está precisando de ajuda para vender algum tipo de material, maquinário, veículos de pequeno a grande porte?</p>
                        <h4 class="to-reveal"><i class="fas fa-chevron-right"></i> Nós temos a solução!</h4>
                        <p>Criamos seu leilão digital e direcionamos os bens e ativos para <strong>mais de 400.000 potenciais compradores</strong>.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PARCEIROS -->
        <section id="parceiros">
            <div class="container">
                <h2>Nossos parceiros</h2>
                <div class="wraper superbid">
                    <div class="column image">
                        <div class="superbid-image-grid">
                            <img loading="lazy" class="superbid-image-grid-a to-reveal" data-animation="fromleft" src="<?=get_template_directory_uri()?>/assets/superbid_logomarca.webp" alt="Logomarca da Superbid">
                            <img loading="lazy" class="superbid-image-grid-b to-reveal" data-delay=".25s" src="<?=get_template_directory_uri()?>/assets/superbid-grid-003.webp" alt="Cliente arrematando veículo">
                            <img loading="lazy" class="superbid-image-grid-c to-reveal" data-delay=".50s" src="<?=get_template_directory_uri()?>/assets/superbid-grid-001.webp" alt="Gravel sobre o notebook">
                            <img loading="lazy" class="superbid-image-grid-d to-reveal" data-delay=".75s" src="<?=get_template_directory_uri()?>/assets/superbid-grid-002.webp" alt="Usuário dando o lance pelo smartphone">
                        </div>
                    </div>
                    <div class="column text">
                        <p>Fundada em 1999, a <a rel="noopener" target="_blank" href="https://superbid.net" class="link" title="Ir para a página do Superbid"><strong>Superbid Marketplace</strong></a> é especializada na avaliação e venda de ativos físicos por meio de leilões oficiais presenciais e via Internet simultaneamente.</p>
                        <p>Além de ser a pioneira em leilões eletrônicos no Brasil, oferta uma grande variedade de ativos físicos, como  máquinas pesadas, equipamentos industriais, frota de veículos, tratores e implementos agrícolas e mais recentemente, jóias, relógios e antiguidades.</p>
                        <p class="destaque"><strong>Todos os leilões</strong> da ESFlexx são feitos através da Superbid.</p>
                        <a rel="noopener" title="Ir para Superbid.net" href="https://www.superbid.net/" target="_blank" class="botao botao__secundario to-reveal" data-animation="fromleft" data-delay="1s">Cadastre-se agora! <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="wraper unionsolutions">
                    <div class="column text">
                        <p>Utilizamos o sistema de laudo lautelar e consultas da <a rel="noopener" target="_blank" href="https://unionsolutions.com.br" class="link" title="Ir para a página da Union Solutions"><strong>Union Solutions</strong></a> para avaliar todos os veículos antes de serem disponibilizados na plataforma para leilão.</p>
                        <p class="destaque"><strong>Isso mesmo!</strong> Avaliamos criteriosamente todos os veículos, levando muito mais credibilidade e transparência ao mercado.</p>
                    </div>
                    <div class="column image">
                        <div class="union-image-grid">
                            <img loading="lazy" class="union-image-grid-a to-reveal" data-animation="fromleft" data-delay="0s" src="<?=get_template_directory_uri()?>/assets/union-solutions_logomarca.webp" alt="Logomarca da Union Solutions">
                            <img loading="lazy" class="union-image-grid-b to-reveal" data-delay=".25s" src="<?=get_template_directory_uri()?>/assets/union-grid-003.webp" alt="Proprietário do veículo">
                            <img loading="lazy" class="union-image-grid-c to-reveal" data-delay=".50s" src="<?=get_template_directory_uri()?>/assets/union-grid-001.webp" alt="Vistoriador analisando o veículo">
                            <img loading="lazy" class="union-image-grid-d to-reveal" data-delay=".75s" src="<?=get_template_directory_uri()?>/assets/union-grid-002.webp" alt="Análise de histórico do veículo">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTATO -->
        <section id="contato">
            <div class="container">
                <div class="wraper">

                    <div class="column imagem">
                        <img loading="lazy" src="<?=get_template_directory_uri()?>/assets/ESFlexx-simbolo.svg" class="to-reveal" data-animation="zoomout" alt="ESFlexx símbolo">
                    </div>

                    <div class="column texto">
                        <h2>Fale conosco</h2>
                        <ul>
                            <li>
                                <strong>Dúvidas?</strong> Fale com a gente agora:<br/>
                                <a rel="noopener" class="link-whatsapp" target="_blank" href="https://wa.me/5527999117459" title="Whatsapp da ESFlexx"><i class="fab fa-lg fa-whatsapp"></i> &nbsp;+55 <span>(27) 99911-7459</span></a>
                            </li>
                            <li>
                                Ou envie um e-mail para:<br/>
                                <a rel="noopener" class="link-email" target="_blank" href="mailto:atendimentoflex01@gmail.com" title="Email da ESFlexx"><i class="fas fa-lg fa-envelope"></i> &nbsp;atendimentoflex01@gmail.com</a>
                            </li>
                            <li>
                                <a rel="noopener" href="https://instagram.com/esflex_leiloes/" title="Instagram da ESFlexx"><i class="fab fa-2x fa-instagram"></i> &nbsp;Siga-nos no Instagram!</a>
                            </li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>