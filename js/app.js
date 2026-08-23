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
        modalBox.classList.add('aberto');
    });
}

if (btnFecharModal && modalBox) {
    btnFecharModal.forEach(btn => {
        btn.addEventListener('click', function(){
            modalBox.classList.remove('aberto');
        });
    });
}

if (modalBox){
    modalBox.addEventListener('click', (evento) => {
        if(evento.target === modalBox){
            modalBox.classList.remove('aberto')
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

const btnAbrirCart = document.getElementById('btn-abrir-cart')
const btnFecharCart = document.getElementById('btn-fechar-cart')
const Cart = document.getElementById('cart')

if (btnAbrirCart && Cart){
    btnAbrirCart.addEventListener('click', () =>{
        Cart.classList.add('activo')
    })
}

if (btnFecharCart && Cart){
    btnFecharCart.addEventListener('click', () =>{
        Cart.classList.remove('activo')
    })
}

if (Cart){
    Cart.addEventListener('click', (evento) =>{
        if (evento.target === Cart){
            Cart.classList.remove('activo')
        }
    })
}