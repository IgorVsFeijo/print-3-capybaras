class pagina {
  static categorias = [
    //Definindo as categorias atuais do Projeto
    "cidadao",
    "cidade",
    "cultura",
    "empresa",
    "governo",
    "turismo",
  ];

  static enderecopagina = window.location.pathname;

  static get categoria() {
    let retorno = "principal";

    this.categorias.forEach((categoria) => {
      if (this.enderecopagina.includes(categoria)) {
        retorno = categoria;
      } //verdadeiro se o endereco da pagina não possui uma categoria
    });

    return retorno;
  }

  static get isPaginasPrincipais() {
    return this.categoria == "principal";
  }

  static get pastaRaiz() {
    let pastaRaiz;

    if (this.isPaginasPrincipais) {
      pastaRaiz = this.enderecopagina.replace(/\/(\w)+.php/, "");
    } else {
      pastaRaiz = this.enderecopagina.split(`\/${this.categoria}`)[0];
    }

    return pastaRaiz;
  }
}

class include extends pagina {
  constructor(seletor, nomeInclude) {
    super();
    this.elemento = document.querySelector(seletor);
    this.enderecoInclude = `${pagina.pastaRaiz}\\includes\\${nomeInclude}`;
  }

  get comecoElemento() {
    return this.montarElemento("afterbegin");
  }

  get finalElemento() {
    return this.montarElemento("beforeend");
  }

  get antesDoElemento() {
    return this.montarElemento("beforebegin");
  }

  get depoisDoElemento() {
    return this.montarElemento("afterend");
  }

  async montarElemento(posicao) {
    try {
      // Faz uma requisição para o endereço do arquivo incluído
      const response = await fetch(this.enderecoInclude);

      // Extrai o conteúdo da resposta como texto
      const data = await response.text();

      // Insere o conteúdo HTML no elemento na posição especificada
      this.elemento.insertAdjacentHTML(posicao, data);

      // Retorna um valor opcional (neste caso, não é necessário)
      return response;
    } catch (error) {
      // Captura e trata erros, caso ocorram durante o carregamento do arquivo
      console.error("Ocorreu um erro ao carregar o arquivo:", error);
    }
  }
}

if (!pagina.isPaginasPrincipais) {
  let tabPagina = document.querySelector(`#tab-${pagina.categoria}`);
  console.log(tabPagina);
  tabPagina.ariaSelected = "true";
  tabPagina.classList.add("active");

  let navPagina = document.querySelector(`#nav-${pagina.categoria}`);
  navPagina.classList.add("active");
  navPagina.classList.add("show");
}

let ancoraPagina = document.querySelector(
  `[href="${pagina.enderecopagina}"]`
);

ancoraPagina.classList.add("active");

