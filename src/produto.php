<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="../styles/padrao.css">
    <link rel="stylesheet" href="../styles/produto.css">
</head>

<body>
    <header class="header-compra">
        <a href="index.php" class="logo-link">
            <img src="../Imagens/Logos/ESSENCE-removebg-preview.png" alt="Logotipo" id="logo">
        </a>
        <div class="input-pesquisa">
            <input type="search" placeholder="Pesquisa">
        </div>
        <div id="loja">
            <nav>
                <a href="#"><img src="../Imagens/Icons/favorite_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="Favorito"></a>

                <a href="#"><img src="../Imagens/Icons/carrinho.svg" alt="Carrinho"></a>

                <a href="#"><img src="../Imagens/Icons/pessoa.svg" alt="Login" id="abrir-modal"></a>
            </nav>

        </div>
    </header>
    <main>
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

                            <form action="../pages/login.php" method="POST">
                                <div class="input-box">
                                    <input type="email" name="email" required>
                                    <label for="">Email</label>
                                    <span class="icone"><img src="../Imagens/Icons/mail-outline.svg" alt=""></span>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="senha" required>
                                    <label for="">Senha</label>
                                    <span class="icone"><img src="../Imagens/Icons/lock-closed-outline.svg" alt=""></span>
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

                            <form method="POST" action="../pages/cadastro.php">
                                <div class="input-box">
                                    <input type="text" name="nome" required>
                                    <label for="">Nome</label>
                                    <span class="icone"><img src="../Imagens/Icons/person-outline.svg" alt="user"></span>
                                </div>
                                <div class="input-box">
                                    <input type="email" name="email" required>
                                    <label for="">Email</label>
                                    <span class="icone"><img src="../Imagens/Icons/mail-outline.svg" alt=""></span>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="senha" required>
                                    <label for="">Senha</label>
                                    <span class="icone"><img src="../Imagens/Icons/lock-closed-outline.svg" alt=""></span>
                                </div>
                                <div class="input-box">
                                    <input type="password" name="confirmar_senha" required>
                                    <label for="">Confirmar senha</label>
                                    <span class="icone"><img src="../Imagens/Icons/lock-closed-outline.svg" alt=""></span>
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
        <section class="layout-produto">
            <div class="produto">
                <div class="imagem-central">
                    <img src="../Imagens/Roupas/casaco-cinza.jfif" class="img-central">
                </div>
                <div class="imagens-produtos">
                    <img src="../Imagens/Roupas/casaco-cinza.jfif" class="prdt-img active">
                    <img src="../Imagens/Roupas/casaco-dourado.png" alt="Imagem do produto" class="prdt-img">
                    <img src="../Imagens/Roupas/Casaco-street.jfif" class="prdt-img">
                    <img src="../Imagens/Vendo/Gemini_Generated_Image_2w6yc62w6yc62w6y-Cópia.png" alt="Imagem do produto" class="prdt-img">
                </div>
            </div>
            <div class="painel-compra">
                <p class="nome-produto">Terno esportivo de corrida masculino.</p>
                <div class="avaliacao">
                    <div class="estrelas">
                        <div class="estrela">⭐</div>
                        <div class="estrela">⭐</div>
                        <div class="estrela">⭐</div>
                        <div class="estrela">⭐</div>
                        <div class="estrela">⭐</div>
                    </div>
                    <span id="classificacao">5.0</span>
                    <span>|</span>
                    <div class="qtd-vendido">+ 10.000 vendidos</div>
                </div>
                <div class="precario">
                    <p class="preco-produto">Kzs 30.999</p>
                    <p class="desconto-produto">Kzs 37.679</p>
                </div>
                <div class="cores-disponiveis">
                    <p>Cor - Preto</p>
                    <div class="cores-disponiveis-inner">
                        <div class="cor activo" style="background: red;"></div>
                        <div class="cor activo" style="background: green;"></div>
                        <div class="cor" style="background: blue;"></div>
                    </div>
                </div>
                <div class="tamanhos-disponiveis">
                    <p>Tamanho</p>
                    <div class="tamanhos-disponiveis-inner">
                        <div class="tamanho">XL</div>
                        <div class="tamanho activo">L</div>
                        <div class="tamanho">M</div>
                    </div>
                </div>
                <div class="btn-ctrl-qtd">
                    <p>Quantidade: </p>
                    <div class="btn-ctrl-qtd-inner">
                        <button class="btn-qtd" id="btn-menos">-</button>
                        <input type="number" value="1" min="1" max="99" readonly class="input-qtd">
                        <button class="btn-qtd" id="btn-mais">+</button>
                    </div>
                </div>
                <div class="botoes">
                    <button class="btn-comprar" id="botaoComprar" data-preço="Kzs 30.999">Comprar Agora</button>
                    <button class="btn-add-carrinho" id="btn-abrir-cart">Adicionar ao carrinho</button>
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
    </main>
    <footer>
        <div class="descricao-marca">
            <a href="index.php">
                <img src="../Imagens/Logos/ESSENCE-removebg-preview.png" alt="Logotipo" id="logo-footer"></a>

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
    <script src="../js/app.js"></script>
</body>

</html>