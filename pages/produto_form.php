<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESSENCE</title>
    <link rel="stylesheet" href="../styles/padrao.css">
    <link rel="stylesheet" href="../styles/produto.css">
    <link rel="stylesheet" href="../styles/produto_form.css">
</head>
<body>
    <header class="header-compra">
        <a href="../index.php" class="logo-link">
            <img src="../Imagens/Logos/ESSENCE-removebg-preview.png" alt="Logotipo" id="logo">
        </a>
        <div class="input-pesquisa">
            <input type="search" placeholder="Pesquisa">
        </div>
        <div id="loja">
            <nav>
                <a href="#"><img src="../Imagens/Icons/pessoa.svg" alt="Login" id="abrir-modal"></a>
            </nav>
        </div>
    </header>
    <main>
        <form action="">
            <div class="title">
                <h1>Adicionar <span>Produto</span></h1>
            </div>
            <div class="file-input">
                <label for="imagem">Escolher imagem do produto</label>
                <input type="file" id="imagem" name="imagem">
            </div>
            <div class="box-text">
                <div class="input-box-textarea">
                    <textarea name="descricao" required></textarea>
                    <label>Descricão do produto</label>
                </div>
                <div class="box-text-inner">
                    <div class="input-box">
                        <input type="text" name="nome" required>
                        <label>Nome do produto</label>
                    </div>
                    <div class="precos">
                        <div class="input-box">
                            <input type="number" name="preco" required>
                            <label>Preço</label>
                        </div>
                        <div class="input-box">
                            <input type="number" name="preco_antigo" required>
                            <label>Preço antigo</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-qtd">
                <div class="box-qtd-inner" id="box-cor">
                    <span class="adicionar" id="add-cor">&plus;</span>
                    <span class="add-text">Adicionar cores</span>
                    <div class="conteiner-cor" id="conteiner-cor">
                        <input type="color" name="" id="">
                        <input type="color" name="" id="">
                    </div>
                </div>
                <div class="box-qtd-inner" id="box-size">
                    <span class="adicionar" id="add-size">&plus;</span>
                    <span class="add-text">Adicionar tamanhos</span>
                    <div class="conteiner-size" id="conteiner-size">
                        <input type="text" class="size" placeholder="XL">
                        <input type="text" class="size" placeholder="XL">
                    </div>
                </div>
            </div>
        </form>
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