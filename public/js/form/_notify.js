const Notify = function(){
    //VARS 
    this.submit = document.querySelector("#form-botao-banner"); //Localização do botão submit
    this.mensagem = "Enviando"; //Mensagem exibida enquanto carrega o form
    this.class = "loading"; //Classe do elemento global.
    this.loop; //Variável que armazena o loop.
    this.effect_btn = { 
        load:  "visibility: hidden", //Quando o formulário estiver carregando
        failed: "visibility: visible" //Quando o formulário não for sucedido
    }
    this.bloc; //O elemento completo das mensagens como um objeto tipo html.
    
    /**
     *  MODAL VALIDATION
     */

     this.modal = ($html)=>{
        //CRIANDO OS ELEMENTOS QUE SERÃO INSERIDOS NO LAYOUT
        let container = document.createElement('div')
        container.className = "loading-modal"
        let content = document.createElement('div')
        content.className = "covid_modal";
        container.appendChild(content)
        let head = document.createElement('div')
        head.className = "covid_modal-head"
        content.appendChild(head)
        let body = document.createElement('div')
        body.className = "covid_modal-body"
        content.appendChild(body)
        document.body.appendChild(container)

        //ELEMENTOS RESTANTES
        let button = document.createElement("button")
        button.textContent = "x"
        let p = document.createElement('p')


        container.classList.add('modal-show')
        content.classList.add('covid_modal-show')
        head.appendChild(button)
        body.innerHTML = container;

        this.bloc = container;
    }

    this.modal_response = ($info)=>{
        if($info == 'sucess'){
            this.bloc.querySelector(".covid_modal-body").innerHTML =  `

            <p>Atualizado com sucesso</p>
            
            `;
            setTimeout(()=>{
                this.bloc.remove()
            }, 2000)
        }else{//CASO O FORMULÁRIO NÃO SEJA ENVIADO 
            this.bloc.querySelector(".covid_modal-body").innerHTML =  `

            <p>Ocorreu um erro ao atualizar</p>
            
            `;
            setTimeout(()=>{
                this.bloc.remove()
            }, 4000)
        }
    }

    this.getWarning = ()=>{
        const params = new URLSearchParams(window.location.search);
        let param = params.get('update');
        if(param){
            this.modal();
            this.modal_response(param);
        }

        let url = new URL(window.location.href);
        url.searchParams.delete("update");

        window.history.pushState('update', 'Title', url)
    }

    this.messageLogin = () =>{
        const params = new URLSearchParams(window.location.search);
        let param = params.get('login');
        if(param == "invalid"){
            document.querySelector(".alert-login span").innerHTML = "Credenciais Erradas! <br> Verifique as informações e tente novamente."

            setTimeout(()=>{
                document.querySelector(".alert-login span").innerHTML = ""
            }, 2000)
        }

        let url = new URL(window.location.href)
        url.searchParams.delete('login');

        window.history.pushState('Login', 'title', url)
    }

}

let cmd = new Notify();

if(document.querySelector('[name="atualizar"]')){
    cmd.getWarning()
}

if(document.querySelector(".alert-login")){
    cmd.messageLogin();
}


export{
    Notify
}
