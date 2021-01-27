const form = document.getElementById('form');
form.addEventListener('submit', handleSubmit);

function handleSubmit(event) {
    event.preventDefault();


    const empresa = document.getElementById('empresa').value;
    const numero = document.getElementById('numero').value;



    console.log(empresa);
    console.log(numero);

}
