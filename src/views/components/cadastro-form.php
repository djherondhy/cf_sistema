<style>
    .cadastro-container{
    position: fixed;
    background: rgba( 65, 63, 63, 0.25 );
    box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
    backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 4px );
    width: 100vw;
    height: 100vh;
   
}

.form-produto{
    width: 60%;
    background-color: #fff;
    border-radius: 30px;
    padding: 1rem;
    min-height: 400px;
    gap: 1rem;
    position: relative;
}

.form-produto .close-btn{
    top: 1rem;
    right: 1rem;
}
.form-produto .formulario{
    width: 100%;
    gap: 1rem;
}
.inputs{
    width: 100%;
    flex-wrap: wrap;
    gap: 1.2rem;
    color: var(--dark-gray);
}

.input-row{
    gap: 1rem;
    width: 90%;
    font-size: 0.9rem;
    flex-wrap: wrap;
}

.input-row label{
    font-weight: 700;
}

.input-row input[type="text"]{
    border-radius: 6px;
    padding: 0.5rem;
    border: 1px solid var(--gray-color);
    outline-color: var(--main-color);
}
.input-row input[type="number"]{
    border-radius: 6px;
    padding: 0.5rem;
    border: 1px solid var(--gray-color);
    outline-color: var(--main-color);
}

.input-row input[type="date"]{
    border-radius: 6px;
    padding: 0.3rem;
    border: 1px solid var(--gray-color);
    outline-color: var(--main-color);
   
}
.img-input input{
    display: none;
}

.input-row select{
    border-radius: 6px;
    padding: 0.4rem;
    border: 1px solid var(--gray-color);
    outline: 1px;
    outline-color: var(--main-color);
   
}


.input-row select:focus{
    border: 1px solid var(--main-color);
}

.agroup-input{
    flex: auto;
    gap: 0.2rem;
}

.agroup-input textarea{
    height: 100px;
    border-radius: 6px;
    border: 1px solid var(--gray-color);
    resize: none;
    outline-color: var(--main-color);
    padding: 0.5rem;
}

.img-input{
    width: 250px;
    border: 3px dotted var(--gray-color);
    border-radius: 30px;
    height: 250px;
    color: var(--gray-color);
    gap: 0.5rem;
}

.img-input label{
    z-index: 10;
    cursor: pointer;
}
.action-row{
    width: 90%;
    justify-content: flex-end;
}

.action-row input{
    background-color: var(--main-color);
    border-radius: 30px;
    padding: 0.5rem 1.5rem;
    border: 0;
    color: var(--white-color);
   
}

#previewProduto{
    width: 90%;
    max-height: 100px;
    object-fit: contain;
    aspect-ratio: 3/4;
}


</style>
<div class="cadastro-container v-align vh-center">
        <div class="form-produto v-align">
            <button class="close-btn" id="close-prodcad"><i class='bx bx-x'></i></button>
            <p class="title">Novo Produto</p>
            <form action="" class="h-align formulario" id="form-produto">
                <div class="img-input v-align vh-center">
                    <img src="" alt="" srcset="" id="previewProduto">
                    <label for="imagem">Upload Imagem</label>
                    <input type="file" name="imagem" id="imagem">
                </div>
                
                <div class="inputs v-align">
                    <div class="input-row h-align">
                        <div class="agroup-input v-align">
                            <label for="p-nome-comercial">Nome Comercial</label>
                            <input type="text" id="p-nome-comercial" name="nome_comercial"
                                placeholder="Ex.. Omeprazol 100Mg">
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-categoria">Categoria</label>
                            <select name="categoria" id="p-categoria">
                                <option value="Genérico">Genérico</option>
                                <option value="Alopáticos">Alopáticos</option>
                                <option value="Similar">Similar</option>
                                <option value="Fitoterápicos">Fitoterápicos</option>
                                <option value="Homeopáticos">Homeopáticos</option>
                                <option value="Controlados">Controlados</option>
                                <option value="Biológicos">Biológicos</option>
                                <option value="Fracionados">Fracionados</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-secao">Seção</label>
                            <select name="secao" id="p-secao">
                                <option value="Genérico">AB 123</option>
                                <option value="Genérico">AB 123</option>
                                <option value="Genérico">AB 123</option>
                            </select>
                        </div>
                    </div>



                    <div class="input-row h-align">
                        <div class="agroup-input v-align">
                            <label for="p-descricao">Descrição</label>
                            <textarea name="descricao" id="p-descricao" placeholder="Descreva o produto"></textarea>
                        </div>
                    </div>

                    <div class="input-row h-align">
                        <div class="agroup-input v-align">
                            <label for="p-preco">Preço R$</label>
                            <input type="text" id="p-preco" name="preco" placeholder="0.00">
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-quantidade">Quantidade</label>
                            <input type="number" id="p-quantidade" name="quantidade" placeholder="0">
                        </div>
                        <div class="agroup-input v-align">
                            <label for="p-validade">Validade</label>
                            <input type="date" id="p-validade" name="validade">
                        </div>
                        
                    </div>
                    <div class="action-row h-align">
                        <input type="submit" value="Salvar Produto">
                    </div>

                </div>
            </form>
        </div>
    </div>