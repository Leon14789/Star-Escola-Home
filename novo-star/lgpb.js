let lgpdhtml = `
<div class="lgpd">
<div class="lgpd-left">
    <p>Nós Utilizamos Cookie para melhorar sua Experiência do Usuário<br/> 
    Para conferir detalhadamente todos os cookies utilizados, leia nossa <a href="#">Política de Privacidade</a>
    </p>
</div>
<div class="lgpd-right">
    <button>Aceito os Cookies</button>
</div>
</div>
<link rel="stylesheet" href="assets/css/lgpd.css">
`;

let lscontent = localStorage.getItem('lgpd');
if(!lscontent) {
    document.body.innerHTML += lgpdhtml;

    let lgpdArea = document.querySelector('.lgpd');
    let lgpdbutton = lgpdArea.querySelector('button');

    lgpdbutton.addEventListener('click', ()=>{
        lgpdArea.remove();
        localStorage.setItem('lgpd', 'Preenchido')
    });
}
