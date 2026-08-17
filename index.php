<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSENCE</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="Imagens/Logos/4-removebg-preview.png" type="image/x-icon">
</head>

<body>
    <header>
        <a href="index.php" class="logo-link">
            <img src="Imagens/Logos/4-removebg-preview.png" alt="Logotipo" id="logo">
        </a>

        <div class="input-pesquisa">
            <input type="text" placeholder="Pesquisa">
        </div>

        <div id="loja">
            <nav>
                <a href="#"><img src="Imagens/Icons/favorite_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="Favorito"></a>

                <a href="#"><img src="Imagens/Icons/carrinho.svg" alt="Carrinho"></a>

                <a href="#"><img src="Imagens/Icons/pessoa.svg" alt="Login" id="abrir-modal"></a>
            </nav>

        </div>
    </header>

    <main>
        <div class="nav-links-externo">
            <nav id="nav-links">
                <a href="categorias/categoria-homem.html">Homem</a>
                <a href="categorias/categotia-mulher.html">Mulher</a>
                <a href="categorias/categoria-crianca.html">Criança</a>
                <a href="categorias/categoria-sapatos.html">Sapatos</a>
                <a href="categorias/categoria-calcas.html">Calças</a>
                <a href="categorias/categoria-calcoes.html">Calções</a>
            </nav>
        </div>
        <section id="formulario">
            <div id="modal-box">
                <div id="modal">
                    <div id="wrapper" class="wrapper">
                        <div class="form-box login">
                            <?php if (isset($erro)): ?>
                                <p style="color: red;"><?= $erro ?></p>
                            <?php endif; ?>

                            <?php if (isset($sucesso)): ?>
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
        <div class="main-cards">
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
            <section class="card">
                <a href="compra.html" class="produto">
                    <div class="div-foto-produto">
                        <img src="Imagens/Roupas/Gemini_Generated_Image_30lzvs30lzvs30lz.png" alt="Foto"
                            class="foto-produto">
                    </div>
                    <div class="conteudo">
                        <p class="descrição-produto">Terno esportivo equipamento de corrida masculino</p>
                        <div class="linha">
                            <p class="desconto-produto"><em><del>Kzs 37.679</del></em></p>
                            <p class="cores">3 cores</p>
                        </div>
                        <button class="botaoComprar" onclick="location.href='compra.html'">Kzs 30.999</button>

                    </div>
                </a>
            </section>
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
        </section>
    </main>
    <footer>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum cupiditate placeat est laudantium nobis, itaque
            asperiores, assumenda ipsa sunt numquam eum nesciunt! Numquam repellendus eaque consectetur illo, quos eos
            tempora.</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>