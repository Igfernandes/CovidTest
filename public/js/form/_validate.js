const Validate = function() {
    this.fields = document.querySelectorAll('input')

    this.key = () => {
        for (let input of this.fields) {
            if (input.name == 'cpf' ||  input.name == 'email') {
                input.onkeyup = function(){
                    
                    const ajax = new XMLHttpRequest()

                    ajax.onreadystatechange = (ev) =>{
                        if (ev.currentTarget.readyState == 4 && ev.currentTarget.status == 200) {
                            if(ev.target.responseText == 'Valor inválido'){
                                document.querySelector(`[data-alert=${input.name}]`).innerHTML = `<span>${input.name} Inválido</span>`
                            }else{
                                document.querySelector(`[data-alert=${input.name}]`).innerHTML = " "
                            }
                            
                            let btn = document.querySelector("button[name='adicionar']")

                            if(document.querySelector("[data-alert='cpf']").innerHTML == " " && document.querySelector("[data-alert='email']").innerHTML == " "){
                               
                                btn.disabled = false;
                                btn.classList.remove('disabled')
                            }else{
                                btn.disabled = true;
                                btn.classList.add('disabled')
                            }
                        }
                        
                    }

                    ajax.open("POST", "./system/load.php", true);

                    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    ajax.send(`validate&cpf=${input.name == 'cpf' ? input.value : ""}&email=${input.name == 'email' ? input.value : ""}`);
 
                }
            }
        }

    }
}

let cmd = new Validate()

export{
    Validate
}