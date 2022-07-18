const buttons = document.querySelectorAll('button');

buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const Button = button.nextElementSibling;
        const icon = button.children[1];

        Button.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )