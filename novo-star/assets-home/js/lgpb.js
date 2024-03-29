let lgpdhtml = `
<div class="hold-lgpd">
    <div class="lgpd">
        <div class="lgpd-left">
            <p>Nós utilizamos os cookies para garantir uma melhor experiência em nosso site.
                <a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd" target="_blank">Saiba mais aqui</a>
            </p>
        </div>
        <div class="lgpd-right">
            <button>Aceito os Cookies</button>
        </div>
    </div>
</div>
<link rel="stylesheet" href="assets-home/css/lgpd.css">
`;

let lscontent = localStorage.getItem('lgpd');
if (!lscontent) {
    document.body.innerHTML += lgpdhtml;

    let lgpdArea = document.querySelector('.lgpd');
    let lgpdbutton = lgpdArea.querySelector('button');

    lgpdbutton.addEventListener('click', () => {
        lgpdArea.remove();
        localStorage.setItem('lgpd', 'Preenchido')
    });
}