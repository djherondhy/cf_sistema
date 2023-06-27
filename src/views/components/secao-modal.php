<style>
    .secoes{
        z-index: 1000;
    }
</style>
<div class="secoes v-align">
    <button class="close-btn" id="close-secoes"><i class='bx bx-x'></i></button>
    <p class="title">Seções</p>
    <div class="action h-align">
        <button class="add" id="btn-novasecao">  <i class='bx bxs-layer-plus'></i> Nova Seção</button>
    </div>
    <div class="secao-table">
        <table id="secao-table">
            <tr>
                <td>Código</td>
                <td>Localização</td>
                <td>Ações</td>
            </tr>
            <tr>
                <td>AB-78</td>
                <td>Prateleira 7, coluna 8</td>
                <td>
                    <button><i class="bx bxs-edit"></i></button>
                    <button class="delete"><i class="bx bxs-trash-alt"></i></button>

                </td>
            </tr>
        </table>
    </div>
</div>