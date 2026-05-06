const modal1 = document.getElementById('modal1');

const showModal = (text, tipo='ok') => { 
    const msg = modal1.getElementsByTagName('p')[0];
    msg.textContent = text;
    if(tipo=='ok'){
        msg.style.color = '#04bb11';
    } else if(tipo=='error') {
        msg.style.color = '#ea0303';
    }

    modal1.classList.remove('close');
}

const hideModal = () => { 
    modal1.classList.add('close');
}

modal1.getElementsByTagName('button')[0].addEventListener('click', ()=>{
    hideModal();
});