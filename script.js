const botoes = document.querySelectorAll('.botaoComprar');

        function trocarTexto(botao, novoTexto) {
            setTimeout(() => {
                botao.textContent = novoTexto;
            }, 50);
        }

        botoes.forEach(btn => {
            const textoOriginal = btn.textContent;
            
            btn.addEventListener('mouseenter', () => trocarTexto(btn, 'Comprar!', -1));
            btn.addEventListener('mouseleave', () => trocarTexto(btn, textoOriginal, 1));
        });

const btnAbrirModal = document.getElementById('abrir-modal')
const btnFecharModal = document.getElementById('fechar-modal')
const modalBox = document.getElementById('modal-box')

btnAbrirModal.addEventListener('click', function(){
    modalBox.classList.add('aberto')
})
btnFecharModal.addEventListener('click', function(){
    modalBox.classList.remove('aberto');
})