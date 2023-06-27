<style>
    .endereco-container {
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 2000;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .endereco-form {
        background-color: var(--white-color);
        padding: 1.5rem;
        border-radius: 30px;
        max-width: 40%;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        position: relative;
    }

    .endereco-form form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .endereco-container .input-agroup {
        display: flex;
        flex-direction: column;
        gap: 0.2rem;
        width: 100%;
    }

    .input-row {
        display: flex;
        gap: 0.5rem;

    }

    .input-row input[type="text"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
    }

    .input-row label {
        font-weight: 700;
        font-size: 0.8rem;
    }

    .endereco-container.action-row {
        width: 100%;
        justify-content: flex-end;
    }

    .endereco-container .action-row input {
        background-color: var(--main-color);
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        border: 0;
        color: var(--white-color);

    }

    .endereco-container .close-btn {
        top: 1rem;
        right: 1rem;
        color: var(--dark-gray) !important;
    }
</style>

<div class="endereco-container">
    <div class="endereco-form">
        <button class="close-btn" id="close-endereco"><i class='bx bx-x'></i></button>
        <p class="title"> Novo Endereço</p>
        <form action="" id="form-endereco">
            <div class="input-row">
                <div class="input-agroup">
                    <label for="nome_completo">Nome Completo</label>
                    <input type="text" id="nome_completo" placeholder="Digite o nome completo do endereço" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-agroup">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" placeholder="Ex. 59104567" required>
                </div>
                <div class="input-agroup">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" placeholder="Ex. Itacoatiara" required>
                </div>
                <div class="input-agroup">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" placeholder="Ex. Amazonas" required>
                </div>
            </div>

            <div class="input-row">
                <div class="input-agroup">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" id="logradouro" placeholder="Ex. Rua X" required>
                </div>
            </div>
            <div class="input-row">
                <div class="input-agroup">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" placeholder="Ex. 1000" required>
                </div>
                <div class="input-agroup">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" placeholder="Ex. Bairro Novo" required>
                </div>
                <div class="input-agroup">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" placeholder="Ex. Apto 1">
                </div>
            </div>

            <div class="action-row h-align">
                <input type="submit" value="Salvar Endereço">
            </div>

        </form>
    </div>
</div>

<script>
    $('#cep').keyup(function () {
        var cep;

        var cep = $('#cep').val();

        cep = cep.replace(/\D/g, '');

        if (cep.length != 8) {
            $('#resultado').html('CEP inválido');
            return;
        }

        // URL da API dos Correios para consulta do CEP
        var url = 'https://viacep.com.br/ws/' + cep + '/json/';

        // Realiza a requisição AJAX
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.erro) {
                   
                } else {
                   $('#bairro').val(response.bairro);
                   $('#logradouro').val(response.logradouro);
                   $('#cidade').val(response.localidade);
                   $('#estado').val(response.uf);
                }
            },
            error: function () {
               console.log('Error na busca do cep');
            }
        });


    })
</script>