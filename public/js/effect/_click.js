import { Validate } from "../form/_validate.js";

let vld = new Validate();

const Click = function(){

    this.tradeForm = ()=>{
        let btns = document.querySelectorAll("[data-action]")

        for(let btn of btns){
            btn.onclick = function(){
               
                let form = btn.closest("form")
                
                form.classList.remove('active')

                document.querySelector("#"+btn.dataset.action).classList.add('active')

                for(let input of document.querySelectorAll("#cadastro input")){
                    input.value = "";
                }

                if(btn.dataset.action == "cadastro"){
                    vld.key(true);
                }else{
                    document.querySelector("[data-alert='cpf']").innerHTML = " "; 
                    document.querySelector("[data-alert='email']").innerHTML = " ";
                }
            }
        }
    }

}

let cmd = new Click();

cmd.tradeForm();