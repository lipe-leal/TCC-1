const texto = document.getElementById("texto");
const btnAnterior = document.getElementById("anterior");
const btnProximo = document.getElementById("proximo");
const perfil = document.getElementById("perfil");
const nome = document.getElementById("nome");
const cargo = document.getElementById("cargo");
var controle = 0;


const pessoas = [
    {
        texto: 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta veritatis et quasi architecto beatae vitae dicta',
        perfil: 'cara.png',
        nome: 'John Doe',
        cargo: 'Co-Founder'
    },
    {
        texto: 'apaixonado por design e iluminação, dedicando-se à criação de lustres desde 2015. Combinando técnicas artesanais e inspirações da natureza, Rafael desenvolve peças únicas que unem estética e funcionalidade. Seu trabalho é reconhecido pela elegância e qualidade, refletindo sua visão inovadora em cada detalhe.',
        perfil: 'decoracao.png',
        nome: 'Rafael Luz',
        cargo: 'Fundador'
    },
    {
        texto: 'especialista em design e decoração, com anos de experiência na criação de peças sofisticadas e exclusivas. Sua paixão é transformar ambientes através de lustres que combinam elegância e funcionalidade, sempre atento às tendências e inovações do setor.',
        perfil: 'slide1.png',
        nome: 'João Alves',
        cargo: 'Socio'
    },
    {
        texto: 'responsável pela parte técnica e produção, com vasta experiência em engenharia de materiais e iluminação. Ele garante que cada peça seja produzida com alta qualidade, eficiência e durabilidade, mantendo sempre o compromisso com a excelência em cada detalhe.',
        perfil: 'cara.png',
        nome: 'Carlos Pereira',
        cargo: 'Socio'
    }
]

btnProximo.addEventListener("click", function(e){
    e.preventDefault();
    if((controle+1) == pessoas.length){
        controle = 0;
    }else{
        controle++;
    }
    console.log(controle);
    atualizarDados();
});

btnAnterior.addEventListener("click", function(e){
    e.preventDefault();
    if((controle) == 0){
        controle = pessoas.length - 1;
    }else{
        controle--;
    }
    console.log(controle);
    atualizarDados();
});

function atualizarDados(){

    const p = pessoas[controle];
    texto.innerHTML = p.texto;
    nome.innerHTML = p.nome;
    cargo.innerHTML = p.cargo;
    perfil.setAttribute("src", "../../img/img-pagina-home/"+p.perfil);

}

document.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    if (window.scrollY > 0) {
        header.classList.add('fixed');
    } else {
        header.classList.remove('fixed');
    }
});

// script carrinho
const CARRINHO = localStorage.getItem("CARRINHO") ? JSON.parse(localStorage.getItem("CARRINHO")) : [];
const main = document.querySelector(".main")

function valorComdesconto(preco, desconto){
    
    return preco - (preco * desconto);
}

function remover(index) {

    CARRINHO.splice(index, 1);

    localStorage.setItem("CARRINHO", JSON.stringify(CARRINHO));

    Lista();
}

function Lista() {
    const containerProdutos = document.getElementById("listaproduto");
    containerProdutos.innerHTML = "";
    
    if (CARRINHO.length === 0) {
        central.innerHTML = `
        <div class=background-image>
            <div class="mensagem">
                <div>
                <dotlottie-player src="https://lottie.host/9cae7100-264c-4451-b417-f65c098dcede/SPe7yj5mAM.json" background="transparent" speed="0.5" style="width: 500px; height: 500px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                </div>
                <a class=link-menssagem href="/index.html">
                <div class=div-button>
                    voltar para a home
                </div>
                </a>
            </div>
        </div>
        `;
        return;
    }
    
    CARRINHO.forEach((produto, index) => {
        const divProduto = document.createElement('tr');
        divProduto.classList.add('produto');
        divProduto.innerHTML = `
            <td class="p-4">
              <div class="media align-items-center d-flex p-2 bd-highlight gap-5">
                <img src="${produto.imagem}" class="d-block ui-bordered mr-4 imagem-card" alt="">
                <div class="media-body">
                    <h2 class="d-block text-dark fs-3 fw-bolder mt-4">${produto.nome}</h2>
                </div>
              </div>
            </td>
            <td class="text-right font-weight-semibold align-middle p-4">${valorComdesconto(produto.preco, produto.desconto).toFixed(2)}</td>
            <td class="align-middle p-4"><input type="text" class="form-control text-center" value="2"></td>
            <td class="text-right font-weight-semibold align-middle p-4">${produto.marca}</td>
            <td class="text-center align-middle px-0 link">
                <a href="javascript:remover()" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a>
            </td>
        `;

        containerProdutos.appendChild(divProduto);
    });
}

Lista();


atualizarDados();
