const botoes = document.querySelectorAll('.botaoComprar');

function trocarTexto(botao, novoTexto) {
    setTimeout(() => {
        botao.textContent = novoTexto;
    }, 50);
}

botoes.forEach(btn => {
    const textoOriginal = btn.textContent;
    btn.addEventListener('mouseenter', () => trocarTexto(btn, 'Comprar!'));
    btn.addEventListener('mouseleave', () => trocarTexto(btn, textoOriginal));
});

const btnAbrirModal = document.getElementById('abrir-modal');
const btnFecharModal = document.querySelectorAll('.fechar-modal');
const modalBox = document.getElementById('modal-box');

if (btnAbrirModal && modalBox) {
    btnAbrirModal.addEventListener('click', function(){
        modalBox.classList.add('activo');
    });
}

if (btnFecharModal && modalBox) {
    btnFecharModal.forEach(btn => {
        btn.addEventListener('click', function(){
            modalBox.classList.remove('activo');
        });
    });
}

if (modalBox){
    modalBox.addEventListener('click', (evento) => {
        if(evento.target === modalBox){
            modalBox.classList.remove('activo')
        }
    })
}

const wrapper = document.getElementById('wrapper');
const loginLink = document.getElementById('login-link');
const cadastroLink = document.getElementById('cadastro-link');

if (cadastroLink && wrapper) {
    cadastroLink.addEventListener('click', () =>{
        wrapper.classList.add('activo');
    });
}
if (loginLink && wrapper) {
    loginLink.addEventListener('click', () =>{
        wrapper.classList.remove('activo');
    });
}

const btnAbrirCart = document.querySelectorAll('.btn-abrir-cart')
const btnFecharCart = document.getElementById('btn-fechar-cart')
const Cart = document.getElementById('cart')

if (btnAbrirCart && Cart){
    btnAbrirCart.forEach (btn =>{
        btn.addEventListener('click', () =>{
            Cart.classList.add('activo')
        })
    })
}

if (btnFecharCart && Cart){
    btnFecharCart.addEventListener('click', () =>{
        Cart.classList.remove('activo')
    })
}

if (Cart){
    Cart.addEventListener('', (evento) =>{
        if (evento.target === Cart){
            Cart.classList.remove('activo')
        }
    })
}

// Deixa selecionado o elemento que for clicado removendo o anterior 

const prdtImgCentral = document.querySelector('.img-central')
const produtoImg = document.querySelectorAll('.prdt-img')

produtoImg.forEach(produto =>{
    produto.addEventListener('click', () =>{
        produtoImg.forEach(pdt => pdt.classList.remove('activo'))
        produto.classList.add('activo')

        prdtImgCentral.style.opacity = 0
        setTimeout(() => {
            prdtImgCentral.src = produto.src
            prdtImgCentral.style.opacity = 1
        }, 150)
    })
})


const cores = document.querySelectorAll('.cor')

cores.forEach(cor => {
    cor.addEventListener('click', () =>{
        cores.forEach(c => c.classList.remove('activo'))
        cor.classList.add('activo')
    })
})

const tamanhos = document.querySelectorAll('.tamanho')

tamanhos.forEach(tamanho =>{
    tamanho.addEventListener('click', () => {
        tamanhos.forEach(t => t.classList.remove('activo'))
        tamanho.classList.add('activo')
    })
})