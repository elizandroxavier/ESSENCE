<?php
    session_start();
    require_once 'pages/conexao.php';

    $produtos = $pdo->query("SELECT * FROM produtos")->fetchAll(PDO::FETCH_ASSOC);
    $erro = $_SESSION['erro'] ?? "";
    $sucesso = $_SESSION['sucesso'] ?? "";

    unset($_SESSION['erro'], $_SESSION['sucesso']);

    $admin = ($_SESSION['usuario_id'] ?? 'admin') === 'admin';

    if($admin && isset($_GET['apagar'])){
        $sql = $pdo->prepare("DELETE FROM produtos WHERE id=?");
        $sql->execute([$_GET['apagar']]);
        header("Location: ../index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSENCE</title>
    <link rel="stylesheet" href="styles/padrao.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="shortcut icon" href="Imagens/Logos/4-removebg-preview.png" type="image/x-icon">
    
</head>
<body>
    <header>
        <a href="index.php" class="logo-link">
            <img src="Imagens/Logos/ESSENCE-removebg-preview.png" alt="Logotipo" id="logo">
        </a>
        <div class="nav-links-externo">
            <nav id="nav-links">
                <a href="categorias/categoria-homem.html">Homem</a>
                <a href="categorias/categotia-mulher.html">Mulher</a>
                <a href="categorias/categoria-crianca.html">Criança</a>
                <a href="categorias/categoria-sapatos.html">Casacos</a>
                <a href="categorias/categoria-calcas.html">Calças</a>
                <a href="categorias/categoria-calcoes.html">Calções</a>
                <a href="categorias/categoria-calcoes.html">Conjuntos</a>
                <button class="btn-add-categoria">&plus;</button>
            </nav>
        </div>
        <div id="loja">
            <div class="loja-inner">
                <span class="icons-menu"><img src="Imagens/Icons/favorite_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="Favorito"></span>
    
                <span class="icons-menu"><img src="Imagens/Icons/carrinho.svg" alt="Carrinho" class="btn-abrir-cart"></span>
    
                <span class="icons-menu"><img src="Imagens/Icons/user.svg" alt="Login" id="abrir-modal"></span>
                
                <div class="menu">
                    <div class="linha-menu"></div>
                    <div class="linha-menu"></div>
                    <div class="linha-menu"></div>
                </div>
            </div>

            <div class="input-pesquisa">
                <input type="search" placeholder="Pesquisa">
                <span><img src="Imagens/Icons/pesquisa.svg"></span>
            </div>
        </div>
    </header>
    <main>
        <section id="formulario">
            <div id="modal-box">
                <div id="modal">
                    <div id="wrapper" class="wrapper">
                        <div class="form-box login">
                            <?php if (!empty($erro)): ?>
                                <p style="color: red;"><?= $erro ?></p>
                            <?php endif; ?>

                            <?php if (!empty($sucesso)): ?>
                                <p style="color: green;"><?= $sucesso ?></p>
                            <?php endif; ?>

                            <h2>Login!</h2>
                            <span class="fechar-modal">&times;</span>

                            <form action="pages/login.php" method="POST">
                                <div class="input-box">
                                    <input type="email" name="email" required>
                                    <label for="">Email</label>
                                    <span class="icone"><img src="Imagens/Icons/mail-outline.svg" alt=""></span>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="senha" required>
                                    <label for="">Senha</label>
                                    <span class="icone"><img src="Imagens/Icons/lock-closed-outline.svg" alt=""></span>
                                </div>
                                <div>
                                    <input type="checkbox" class="check"> Concordo com os termos
                                </div>
                                <button type="submit" class="botao">Entrar</button>
                                <div class="login-cadastro">
                                    <p>Ainda não tem conta?</p>
                                    <p id="cadastro-link">Cadastre-se</p>
                                </div>
                            </form>
                        </div>

                        <div class="form-box cadastro">
                            <?php if (isset($erro)): ?>
                                <p style="color: red;"><?= $erro ?></p>
                            <?php endif; ?>

                            <?php if (isset($sucesso)): ?>
                                <p style="color: green;"><?= $sucesso ?></p>
                            <?php endif; ?>
                            <h2>Cadastro!</h2>
                            <span class="fechar-modal">&times;</span>

                            <form method="POST" action="pages/cadastro.php">
                                <div class="input-box">
                                    <input type="text" name="nome" required>
                                    <label for="">Nome</label>
                                    <span class="icone"><img src="Imagens/Icons/person-outline.svg" alt="user"></span>
                                </div>
                                <div class="input-box">
                                    <input type="email" name="email" required>
                                    <label for="">Email</label>
                                    <span class="icone"><img src="Imagens/Icons/mail-outline.svg" alt=""></span>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="senha" required>
                                    <label for="">Senha</label>
                                    <span class="icone"><img src="Imagens/Icons/lock-closed-outline.svg" alt=""></span>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="confirmar_senha" required>
                                    <label for="">Confirmar senha</label>
                                    <span class="icone"><img src="Imagens/Icons/lock-closed-outline.svg" alt=""></span>
                                </div>
                                <div>
                                    <input type="checkbox" class="check"> Concordo com os termos
                                </div>
                                <button type="submit" class="botao">Cadastrar</button>
                                <div class="login-cadastro">
                                    <p>Já tem conta?</p>
                                    <p id="login-link">Faça login</p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="cart-fundo" id="cart">
            <div class="cart-sidebar">
                <div class="cart-header">
                    <h3>Carrinho</h3>
                    <button class="fechar-cart" id="btn-fechar-cart">&times;</button>
                </div>
                <div class="cart-items">
            
                    <img src="../Imagens/Roupas/casaco-cinza.jfif" alt="Foto produto">

                    <div class="cart-info">
                        <h4 class="item-nome">Terno esportivo de corrida masculino.</h4>
                        <h4 class="item-preco">Kzs 30.999</h4>
                        <div class="cart-item-qtd">
                            <div class="cart-ctrl-qtd">
                                <button class="cart-btn-qtd" id="btn-menos">-</button>
                                <span class="qtd-num">2</span>
                                <button class="cart-btn-qtd" id="btn-mais">+</button>
                            </div>
                            <button class="eliminar-produto">&times;</button>
                        </div>
                    </div>
                </div>
                <div class="cart-footer">
                    <div class="cart-total">
                        <span>Total</span>
                        <span class="cart-total-valor">10.000 kzs</span>
                    </div>
                    <button class="cart-btn-compra">Finalizar compra</button>
                </div>
            </div>
        </section>

        <section class="barra-lateral-externo">
            <div class="barra-lateral">
                <div class="perfil">
                    <div class="perfil-img"><img src="Imagens/Icons/user.svg" alt=""></div>
                    <div class="text-perfil">
                        <p>Seja bem vindo de volta a</p>
                        <p><span style="color: #e8410a; font-weight: bold;">ESSENCE</span>, Elizandro!</p>
                    </div>
                </div>
                <div class="conteudo-menu">
                    <a href="#">Meus pedidos</a>
                    <a href="#">Favoritos</a>
                    <a href="#">Pagamentos</a>
                    <a href="#">Favoritos</a>
                    <a href="#">Configuracões</a>
                </div>
                <div class="footer-menu">
                    <div class="footer-conteudo">
                        <img src="Imagens/Icons/logout1.svg" alt="">
                        <span>Sair</span>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-cards-externo">
            <div class="main-header">
                <div>
                    <div class="main-header-title">
                        <h2>Em <span>Destaque</span></h2>
                    </div>
                    <div class="main-header-subtitulo">
                        <p>Os produtos mais populares do mês</p>
                    </div>
                    <?php  if ($admin): ?>
                        <button class="novo-prdt" onclick="location.href='pages/produto_form.php'">+ Novo Produto</button>
                    <?php endif; ?>
                </div>

                <div class="ver-todos"><a href="#">Ver Todos</a></div>
            </div>
            <div class="main-cards">
                <?php foreach ($produtos as $produto): ?>
                    <section class="card">
                        <button class="favorito"><img src="Imagens/Icons/favorite_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"></button>
                        <a href="src/produto.php?id=<?= $produto['id'] ?>" class="produto">
                            <div class="box-foto-prdt">
                                <img src="Imagens/Roupas/<?= htmlspecialchars($produto['imagem']) ?>" alt="Foto"
                                    class="foto-prdt">
                            </div>
                            <div class="conteudo">
                                <p class="nome-prdt"><?= htmlspecialchars($produto['descricao']) ?></p>
                                <div class="linha">
                                    <p class="preco-antigo">Kzs <?= number_format($produto['preco_antigo'], 0, ',', '.') ?></p>
                                    <p class="cores"><?= htmlspecialchars($produto['cores']) ?> Cores</p>
                                </div>
                                <span class="botaoComprar">Kzs <?= number_format($produto['preco'], 0, ',', '.') ?></span>
                            </div>
                        </a>
                        <?php if($admin): ?>
                            <div class="admin-acoes">
                                <a href="pages/produto_form.php?id=<?= $produto['id'] ?>" class="icon-footer editar"><img src="Imagens/Icons/editar.svg" alt="Editar"></a>
                                <a href="index.php?apagar=<?= $produto['id'] ?>" onclick="return confirm('Tem certeza que deseja apagar este produto?')" class="icon-footer apagar"><img src="Imagens/Icons/delete.svg" alt="Apagar"></a>
                            </div>
                        <?php endif; ?>
                    </section>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="flash-strip">
            <div class="flash-inner">
                <div class="flash-item"><strong>FLASH SALE</strong> — Até 60% de desconto</div>
                <div class="flash-item">🎁 Frete grátis acima de Kzs 15.000</div>
                <div class="flash-item">Mais de 10.000 produtos disponíveis</div>
                <div class="flash-item">🛒Entrega em 24-48h em Luanda</div>
                <div class="flash-item"><strong>FLASH SALE</strong> — Até 60% de desconto</div>
                <div class="flash-item">🎁 Frete grátis acima de Kzs 15.000</div>
                <div class="flash-item">Mais de 10.000 produtos disponíveis</div>
                <div class="flash-item">🛒 Entrega em 24-48h em Luanda</div>
            </div>
        </div>
        <section class="conteiner">
            <div class="hero">
                <div class="hero-deco"></div>
                <div class="hero-deco2"></div>
                <div class="hero-deco3"></div>
                <div class="p1">
                </div>
                <div class="hero-content">
                    <div class="hero-badge">✦ Nova Colecção 2025</div>
                    <h1>Vista o Seu <span>Melhor</span> Lado</h1>
                    <p>Moda premium com os melhores preços de Angola. Descubra peças únicas para cada ocasião.</p>
                    <div class="hero-cta">
                        Explorar Agora
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="16"
                            height="16">
                            <path d="M5 12h14m-7-7 7 7-7 7" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="descricao-marca">
            <a href="index.php">
                <img src="Imagens/Logos/ESSENCE-removebg-preview.png" alt="Logotipo" id="logo-footer"></a>

            <div class="descricao-empresa">
                <p>A sua loja de moda e estilo em Angola. <br>Qualidade premium aos melhores preços,</br> com entrega rápida em todo o país.</p>
            </div>

            <div class="redes-sociais">
                <a href="#" class="card-redes" id="facebook">f</a>

                <a href="#" class="card-redes" id="instagram">I</a>

                <a href="#" class="card-redes" id="twitter">X</a>

                <a href="#" class="card-redes" id="whatsapp">W</a>
            </div>
        </div>
        <div class="coluna">
            <h4>Empresa</h4>
            <ul>
                <li>Sobre nós</li>
                <li>Carreira</li>
                <li>Parceiros</li>
                <li>Afiliados</li>
            </ul>
        </div>
        <div class="coluna">
            <h4>Ajuda</h4>
            <ul>
                <li>Centro de ajuda</li>
                <li>Devolucões</li>
                <li>Trocas</li>
                <li>Contactos</li>
            </ul>
        </div>
        <div class="coluna">
            <h4>Lei</h4>
            <ul>
                <li>Política de privacidade</li>
                <li>Termos de uso</li>
                <li>Cookies</li>
            </ul>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>