<?= $this->extend('modelos_templates/modelo_header_footer.php') ?>

<?= $this->section('titulo') ?>
Produtos
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>

<main id="central" class="body-pagina">
    <div class="container px-3 my-5 clearfix main">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Carrinho</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered m-0">
                    <thead>
                      <tr class="header-tabela">
                        <th class="text-center py-3 px-4" style="min-width: 350px;">Produto</th>
                        <th class="text-right py-3 px-4" style="width: 100px;">Preço</th>
                        <th class="text-center py-3 px-4" style="width: 110px;">Quantidade</th>
                        <th class="text-right py-3 px-4" style="width: 150px;">Marca</th>
                        <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                      </tr>
                    </thead>
                    <tbody id="listaproduto">
            
                      <tr>
                        <td class="p-4">
                          <div class="media align-items-center d-flex p-2 bd-highlight gap-5">
                            <img src="https://images.tcdn.com.br/img/img_prod/676091/90_lustre_pendente_dourado_com_cristais_wc02_50_cm_2293_1_478a8b305e08de28c5d9af11aac66bc8.jpg" class="d-block ui-bordered mr-4 imagem-card" alt="">
                            <div class="media-body">
                                <h2 class="d-block text-dark fs-5 fw-bolder mt-4" >Lustre Pendente Dourado com cristais WC02 50 cm</h2>
                            </div>
                          </div>
                        </td>
                        <td class="text-right font-weight-semibold align-middle p-4">949,00</td>
                        <td class="align-middle p-4"><input type="text" class="form-control text-center" value="2"></td>
                        <td class="text-right font-weight-semibold align-middle p-4 marca">Wood Iluminação</td>
                        <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                  <div class="d-flex">
                    <div class="text-right mt-4">
                      <label class="text-muted font-weight-normal mb-1">Total:</label>
                      <div class="text-large total"><strong>$949,00</strong></div>
                    </div>
                  </div>
                </div>
            
                <div class="float-right">
                  <a class="btn btn-lg btn-primary mt-2 botao-color" href="/" role="button">Voltar para Home</a>
                  <button type="button" class="btn btn-lg btn-primary mt-2 botao-color">Ir pro whatsapp</button>
                </div>
            
              </div>
          </div>
      </div>
</main>

<?= $this->endSection() ?>