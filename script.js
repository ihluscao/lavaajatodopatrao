// script.js

document.addEventListener('DOMContentLoaded', () => {
    const servicosForm = document.getElementById('form-servicos');
    const carrinhoLista = document.getElementById('carrinho-lista');
    const totalPreco = document.getElementById('total-preco');
    const veiculoSelect = document.getElementById('veiculo');
    const agendamentoDetalhes = document.getElementById('agendamento-detalhes');

    const servicos = {
        'Limpeza do Estofado (Pano)': 0,
        'Hidratação do Couro': 0,
        'Lavagem Simples': 0,
        'Lavagem Detalhada': 0,
        'Cristalização': 0,
        'Polimento': 0,
        'Vitrificação': 0,
        'Polimento dos Faróis': 0,
        'Limpeza Técnica': 0,
        'Revitalização dos Plásticos': 0
    };

    const servicosPrecos = {
        'moto': 1,
        'carro_pequeno': 2,
        'carro_medio': 3,
        'carro_grande': 4
    };

    function atualizarPrecos() {
        const tipoVeiculo = veiculoSelect.value;
        const precoBase = servicosPrecos[tipoVeiculo];

        Object.keys(servicos).forEach(servico => {
            servicos[servico] = precoBase;
        });

        servicosForm.querySelectorAll('input[name="servico"]').forEach(input => {
            const servico = input.value;
            input.dataset.preco = servicos[servico];
        });

        atualizarCarrinho();
    }

    function atualizarCarrinho() {
        const servicosSelecionados = servicosForm.querySelectorAll('input[name="servico"]:checked');
        let total = 0;
        carrinhoLista.innerHTML = '';

        servicosSelecionados.forEach(input => {
            const servico = input.value;
            const preco = input.dataset.preco;

            const li = document.createElement('li');
            li.textContent = `${servico} - R$${preco}`;
            carrinhoLista.appendChild(li);

            total += parseFloat(preco);
        });

        totalPreco.textContent = `R$${total.toFixed(2)}`;
    }

    function finalizarCarrinho() {
        agendamentoDetalhes.style.display = 'block';
    }

    veiculoSelect.addEventListener('change', atualizarPrecos);
    servicosForm.addEventListener('change', atualizarCarrinho);
});
