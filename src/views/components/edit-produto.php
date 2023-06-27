<style>
    .edit-produto-container{
        position: fixed;
        background: rgba(65, 63, 63, 0.25);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        width: 100vw;
        height: 100vh;
        z-index: 2000;
    }

    .form-produto {
        width: 60%;
        background-color: #fff;
        border-radius: 30px;
        padding: 1rem;
        min-height: 400px;
        gap: 1rem;
        position: relative;
    }

    .form-produto .close-btn {
        top: 1rem;
        right: 1rem;
    }

    .form-produto .formulario {
        width: 100%;
        gap: 1rem;
    }

    .inputs {
        width: 100%;
        flex-wrap: wrap;
        gap: 1.2rem;
        color: var(--dark-gray);
    }

    .input-row {
        gap: 1rem;
        width: 90%;
        font-size: 0.9rem;
        flex-wrap: wrap;
    }

    .input-row label {
        font-weight: 700;
    }

    .input-row input[type="text"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
    }

    .input-row input[type="number"] {
        border-radius: 6px;
        padding: 0.5rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);
    }

    .input-row input[type="date"] {
        border-radius: 6px;
        padding: 0.3rem;
        border: 1px solid var(--gray-color);
        outline-color: var(--main-color);

    }

    .img-input input {
        display: none;
    }

    .input-row select {
        border-radius: 6px;
        padding: 0.4rem;
        border: 1px solid var(--gray-color);
        outline: 1px;
        outline-color: var(--main-color);

    }


    .input-row select:focus {
        border: 1px solid var(--main-color);
    }

    .agroup-input {
        flex: auto;
        gap: 0.2rem;
    }

    .agroup-input textarea {
        height: 100px;
        border-radius: 6px;
        border: 1px solid var(--gray-color);
        resize: none;
        outline-color: var(--main-color);
        padding: 0.5rem;
    }

    .img-input {
        width: 250px;
        border: 3px dotted var(--gray-color);
        border-radius: 30px;
        height: 250px;
        color: var(--gray-color);
        gap: 0.5rem;
    }

    .img-input label {
        z-index: 10;
        cursor: pointer;
    }

    .action-row {
        width: 90%;
        justify-content: flex-end;
    }

    .action-row input {
        background-color: var(--main-color);
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        border: 0;
        color: var(--white-color);

    }
    #new-edit-image{
        width: 90%;
        max-height: 100px;
        object-fit: contain;
        aspect-ratio: 3/4;
    }

    #previewEditProduto {
        width: 90%;
        max-height: 100px;
        object-fit: contain;
        aspect-ratio: 3/4;
    }
    #edit-codigo{
        display: none;
    }
    #edit-qtd-atual{
        display: none;
    }

    @media screen and (max-width: 684px){
    .formulario{
        flex-wrap: wrap;
        overflow-y: auto;
    }

   
}


</style>
<div class="edit-produto-container v-align vh-center">
    <div class="form-produto v-align">
        <button class="close-btn" id="close-editProduto"><i class='bx bx-x'></i></button>
        <p class="title"><i class='bx bxs-edit' ></i> Alterar Produto</p>
        <form action="" class="h-align formulario" id="edit-produto" enctype="multipart/form-data">
            <div class="img-input v-align vh-center" id="imagem-edit">
                
                <label for="foto-edit">Alterar Imagem</label>
                <input type="file" name="foto-edit" id="foto-edit">
            </div>

            <div class="inputs v-align">
                <div class="input-row h-align">
                    <div class="agroup-input v-align">
                        <label for="edit-nome-comercial">Nome Comercial</label>
                        <input type="text" id="edit-nome-comercial" name="edit-nome-comercial">
                        <input type="text" id="edit-codigo" name="edit-codigo">
                        <input type="text" id="edit-qtd-atual" name="edit-qtd-atual">
                    </div>
                </div>
                <div class="input-row h-align">
                    <div class="agroup-input v-align">
                        <label for="edit-categoria">Categoria</label>
                        <select name="edit-categoria" id="edit-categoria">
                            <option value="Outros">Outros</option>
                            <option value="Analgésicos">Analgésicos</option>
                            <option value="Anti-inflamatórios">Anti-inflamatórios</option>
                            <option value="Antibióticos">Antibióticos</option>
                            <option value="Antialérgicos">Antialérgicos</option>
                            <option value="Antipiréticos">Antipiréticos</option>
                            <option value="Anticoncepcionais">Anticoncepcionais</option>
                            <option value="Anti-hipertensivos">Anti-hipertensivos</option>
                            <option value="Antidiabéticos">Diuréticos</option>
                            <option value="Anticonvulsivantes">Anticonvulsivantes</option>
                        </select>
                    </div>
                    <div class="agroup-input v-align">
                        <label for="edit-secao">Seção</label>
                        <select name="edit-secao" id="edit-secao">
                            <option value="Não Cadastrada">Não Cadastrada</option>
                        </select>
                    </div>

                    <div class="agroup-input v-align">
                        <label for="edit-fornecedor">Fornecedor</label>
                        <select name="edit-fornecedor" id="edit-fornecedor">
                            <option value="Não Cadastrada"">Não Cadastrado</option>
                        </select>
                    </div>
                </div>



                <div class="input-row h-align">
                    <div class="agroup-input v-align">
                        <label for="edit-descricao">Descrição</label>
                        <textarea name="edit-descricao" id="edit-descricao"></textarea>
                    </div>
                </div>

                <div class="input-row h-align">
                    <div class="agroup-input v-align">
                        <label for="edit-preco">Preço R$</label>
                        <input type="text" id="edit-preco" name="edit-preco">
                    </div>
                    <div class="agroup-input v-align">
                        <label for="edit-quantidade">Quantidade</label>
                        <input type="number" id="edit-quantidade" name="quantidade">
                    </div>
                    <div class="agroup-input v-align">
                        <label for="edit-validade">Validade</label>
                        <input type="date" id="edit-validade" name="validade">
                    </div>

                </div>
                <div class="action-row h-align">
                    <input type="submit" value="Salvar Alteração">
                </div>

            </div>
        </form>
    </div>
</div>

<script>
    $('.edit-produto-container').hide();
    $('#edit-preco').mask('#.##0.00', { reverse: true });
   $('#close-editProduto').click(function(){$('.edit-produto-container').fadeOut('slow');})
</script>